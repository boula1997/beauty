<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
{
    $image = $this->isMethod('put') ? '' : 'required';

    $rules = [
        'image'        => $image,
        // 'SKU'          => ['sometimes','required','string',Rule::unique('products', 'SKU')->ignore($this->product)], // ✅ لازم يكون موجود
        // 'rate'         => 'required|numeric|min:0|max:5', // ✅ لازم يكون موجود
        'price'        => 'required|numeric|min:0',
        'subcategory_id' => 'nullable|exists:subcategories,id',

        // colors, sizes & stock rows
        'variations'              => 'nullable|array',
        'variations.*.color_id'   => 'required|exists:colors,id',
        'variations.*.size_id'    => 'nullable|exists:sizes,id',
        'variations.*.quantity'   => 'required|integer|min:0',

        'category_id'    => 'required|exists:categories,id',
        // 'subcategory_id' => 'required|exists:subcategories,id',
    ];

    foreach (config('translatable.locales') as $locale) {
        $rules += [$locale . '.title' => ['required', 'string']];
        $rules += [$locale . '.description' => ['required', 'string']];
    }

    return $rules;
}



    /** A color + size may appear once, and a color is either sold in sizes or not (no mixing). */
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            $rows = collect($this->input('variations', []))->filter(fn ($r) => !empty($r['color_id']));
            $keys = $rows->map(fn ($r) => $r['color_id'] . '|' . ($r['size_id'] ?? ''));
            if ($keys->count() !== $keys->unique()->count()) {
                $validator->errors()->add('variations', __('general.variation_duplicate'));
            }
            $mixed = $rows->groupBy('color_id')->filter(function ($group) {
                $withSize = $group->filter(fn ($r) => !empty($r['size_id']))->count();
                return $withSize > 0 && $withSize < $group->count();
            });
            if ($mixed->isNotEmpty()) {
                $names = \App\Models\Color::whereIn('id', $mixed->keys())->get()->map(fn ($c) => $c->title ?: $c->hexCode)->implode(', ');
                $validator->errors()->add('variations', __('general.variation_mixed', ['colors' => $names]));
            }
        });
    }

    public function attributes()
    {
        return [
            'variations.*.color_id' => __('general.color'),
            'variations.*.size_id' => __('general.size'),
            'variations.*.quantity' => __('general.stock'),
        ];
    }
}