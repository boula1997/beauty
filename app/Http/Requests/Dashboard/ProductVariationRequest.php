<?php

namespace App\Http\Requests\Dashboard;

use App\Models\ProductVariation;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductVariationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $product = $this->route('product');
        $variation = $this->route('variation');
        $colorId = $this->input('color_id');
        $sizeId = $this->input('size_id');

        // One variation per product + color + size combination.
        $uniqueCombination = Rule::unique(ProductVariation::class, 'product_id')
            ->where(fn ($q) => $colorId ? $q->where('color_id', $colorId) : $q->whereNull('color_id'))
            ->where(fn ($q) => $sizeId ? $q->where('size_id', $sizeId) : $q->whereNull('size_id'));

        if ($variation) {
            $uniqueCombination->ignore($variation->id);
        }

        return [
            'product_id' => ['required', $uniqueCombination],
            'title'      => ['nullable', 'string', 'max:255'],
            'color_id'   => ['nullable', 'exists:colors,id'],
            'size_id'    => ['nullable', 'exists:sizes,id'],
            'price'      => ['required', 'numeric', 'min:0'],
            'quantity'   => ['required', 'integer', 'min:0'],
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'product_id' => optional($this->route('product'))->id,
        ]);
    }

    public function messages(): array
    {
        return [
            'product_id.unique' => __('general.variation_exists'),
        ];
    }
}
