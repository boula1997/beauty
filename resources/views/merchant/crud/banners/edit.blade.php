@extends('admin.components.form')
@section('form_action', route('banners.update', $banner->id))
@section('form_type', 'POST')
@section('fields_content')
    <div class="content-wrapper">
        @method('PUT')

        <div class="container p-3">
            @include('admin.components.alert-error')
            <div class="card card-custom mb-2">
                <div class="card-header card-header-tabs-line">
                    @include('admin.components.breadcrumb', ['module' => 'banners', 'action' => 'edit'])
                </div>

                <div class="card-body bg-white">
                    <div class="digital-add needs-validation ">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="col-form-label categories-basic">{{ __('general.stores')}}</label>
                                    <select class="custom-select form-control" name="store_id" id="store">
                                        <option value="">{{ __('general.select_store') }}</option>
                                        @foreach ($stores as $store)
                                            <option value="{{ $store->id }}" {{ old('store_id',$banner->store->id)==$store->id? 'selected' : '' }}>{{ $store->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    @include('admin.components.image', [
                                        'label' => __('general.image'),
                                        'value' => old('image', $banner->image),
                                        'name' => 'image',
                                        'id' => 'kt_image_3',
                                        'accept' => 'image/*',
                                        'required' => true,
                                    ])

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-custom">
                <div class="card-footer mb-5 mt-5">
                    <button type="submit" class="btn btn-outline-success">{{ __('general.save') }}</button>
                    <a href="{{ route('banners.index') }}"
                        class="btn btn-outline-danger font-weight-bold">{{ __('general.cancel') }}</a>
                </div>
            </div>
        </div>
    </div>


    @push('scripts')
        <script>
            $(function() {
                // Summernote
                $('.summernote').summernote()

                // CodeMirror
                CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                    mode: "htmlmixed",
                    theme: "monokai"
                });
            })
        </script>
    @endpush
@endsection
