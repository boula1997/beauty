
@if ($blade=='create')
    @if ($translatable && $ck_editor)
        <div class="form-group">
            <label>{{__('general.{{ $name }}')}}(@lang('general.' . $locale))<span class="text-danger">{{ $required?'*':'' }}</span></label>
            <div class="input-group">
                <textarea rows="100" class="summernote @error($locale . '.' . $name . ') is-invalid @enderror"
                    name="{{ $locale . '[' . $name . ']' }}">
                    {!! old($locale . '.' . $name . ') !!} 
                </textarea>
            </div>
        </div>
    @elseif($translatable && !$ck_editor)
        <div class="form-group">
            <label>{{__('general.{{ $name }}')}}- @lang('general.' . $locale)<span class="text-danger">{{ $required?'*':'' }}</span></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-pen"></i></span>
                </div>
                <input type="text" name="{{ $locale . '[' . $name . ']' }}" placeholder="{{__('general.{{ $name }}')}}"
                    class="form-control @error('') invalid @enderror  pl-1 min-h-40px @error($locale . '.' . $name . ') is-invalid @enderror"
                    value="{{ old($locale . '.' . $name . ') }}">
            </div>
        </div>
    @elseif(!$translatable && !$ck_editor && $type == 'select')
        <div class="form-group">
            <label for="exampleInputEmail1">{{__('general.{{ $name }}')}}<span class="text-danger">{{ $required?'*':'' }}</span></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-pen"></i></span>
                </div>
                <select name="{{ $name }}" id="{{ $name }}" class="form-control @error('') invalid @enderror">
                    @foreach ($array as $item)
                        <option @selected($item->id == old($name)) value="{{ $item->id }}">{{ isset($lang)?__(''.$lang.$item->title'): $item->title }}</option>
                    @endforeach
                </select>
            </div>
        </div>

    @elseif(!$translatable && !$ck_editor && $type == 'datalist')
        <div class="form-group">
            <label for="exampleInputEmail1">{{__('general.{{ $name }}')}}<span class="text-danger">{{ $required?'*':'' }}</span></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-pen"></i></span>
                </div>
                <datalist name="{{ $name }}" id="{{ $name }}" class="form-control @error('') invalid @enderror">
                    @foreach ($array as $item)
                        <option @selected($item->id == old($name)) value="{{ $item->id }}">{{ isset($lang)?__(''.$lang.$item->title'): $item->title }}</option>
                    @endforeach
                </datalist>
            </div>
        </div>

    @elseif(!$translatable && !$ck_editor )
        <div class="form-group">
            <label for="exampleInputEmail1">{{__('general.{{ $name }}')}}<span class="text-danger">{{ $required?'*':'' }}</span></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-pen"></i></span>
                </div>
                <input type="{{ $type }}" name="{{ $name }}" value="{{ old('{{ $name }}') }}"
                class="form-control @error('') invalid @enderror" id="exampleInputphone" placeholder="{{__('general.{{ $name }}')}}">
            </div>
        </div>
    @endif

@else

    @if ($translatable && $ck_editor)
        <div class="form-group">
            <label>{{__('general.{{ $name }}')}}(@lang('general.' . $locale))<span class="text-danger">{{ $required?'*':'' }}</span></label>
            <div class="input-group">
                <textarea rows="100" class="summernote @error($locale . '.' . $name . ') is-invalid @enderror"
                    name="{{ $locale . '[' . $name . ']' }}">
                    {!! old($locale . '.' . $name . '',$module->$name) !!} 
                </textarea>
            </div>
        </div>
    @elseif($translatable && !$ck_editor)
        <div class="form-group">
            <label>{{__('general.{{ $name }}')}}- @lang('general.' . $locale)<span class="text-danger">{{ $required?'*':'' }}</span></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-pen"></i></span>
                </div>
                <input type="text" name="{{ $locale . '[' . $name . ']' }}" placeholder="{{__('general.{{ $name }}')}}"
                    class="form-control @error('') invalid @enderror  pl-1 min-h-40px @error($locale . '.' . $name . ') is-invalid @enderror"
                    value="{{ old($locale . '.' . $name . '',$module->$name) }}">
            </div>
        </div>
    @elseif(!$translatable && !$ck_editor && $type == 'select')
        <div class="form-group">
            <label for="exampleInputEmail1">{{__('general.{{ $name }}')}}<span class="text-danger">{{ $required?'*':'' }}</span></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-pen"></i></span>
                </div>
                <select name="{{ $name }}" id="{{ $name }}" class="form-control @error('') invalid @enderror">
                    @foreach ($array as $item)
                        <option @selected($item->id == old($name,$module->$name)) value="{{ $item->id }}">{{ isset($lang)?__(''.$lang.$item->title'): $item->title }}</option>
                    @endforeach
                </select>
            </div>
        </div>

    @elseif(!$translatable && !$ck_editor && $type == 'datalist')
        <div class="form-group">
            <label for="exampleInputEmail1">{{__('general.{{ $name }}')}}<span class="text-danger">{{ $required?'*':'' }}</span></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-pen"></i></span>
                </div>
                <datalist name="{{ $name }}" id="{{ $name }}" class="form-control @error('') invalid @enderror">
                    @foreach ($array as $item)
                        <option @selected($item->id == old($name,$module->$name)) value="{{ $item->id }}">{{ isset($lang)?__(''.$lang.$item->title'): $item->title }}</option>
                    @endforeach
                </datalist>
            </div>
        </div>

    @elseif(!$translatable && !$ck_editor )
        <div class="form-group">
            <label for="exampleInputEmail1">{{__('general.{{ $name }}')}}<span class="text-danger">{{ $required?'*':'' }}</span></label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-pen"></i></span>
                </div>
                <input type="{{ $type }}" name="{{ $name }}" value="{{ old('{{ $name }}',$module->$name) }}"
                class="form-control @error('') invalid @enderror" id="exampleInputphone" placeholder="{{__('general.{{ $name }}')}}">
            </div>
        </div>
    @endif
    
@endif
@include('admin.components.input',
['translatable' => true,
'ck_editor' => true, 
'requied' => true,
'name'=>'bank',
'type'=>'text',
'array'=>[],
'module'=>$product,
])