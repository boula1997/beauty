@extends('admin.components.form')
@section('fields_content')
<!-- Container-fluid starts-->
    @include('admin.components.breadcrumb', [
        'module' => 'colors', 
        'action' => 'show',     
        ])
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row product-adding">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>General</h5>
                    </div>

                    <div class="card-toolbar px-3">
                        <ul class="nav nav-tabs nav-bold nav-tabs-line">
                            @foreach (config('translatable.locales') as $key => $locale)
                                <li class="nav-item">
                                    <a class="nav-link  @if ($key == 0) active @endif" data-toggle="tab"
                                        href="{{ '#' . $locale }}">@lang('general.' . $locale)</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="card-body">
                        <div class="digital-add needs-validation">
                            <div class="tab-content">
                                @foreach (config('translatable.locales') as $key => $locale)
                                    <div class="tab-pane fade show @if ($key == 0) active @endif"
                                        id="{{ $locale }}" role="tabpanel">

                                        <div class="col-md-6">
                                            <div class="mb-5 p-3 rounded h-100">
                                                <div class="card-title fw-bold">
                                                    <h5 class="col-form-label pt-0">{{ __('general.title') }}:</h5>
                                                    <p style="margin: 0; store: inherit; font-weight: normal;">
                                                        {{ $color->translate($locale)->title }}</p>
                                                </div>
                                            </div>
                                        </div>
                                      
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="digital-add needs-validation">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="color" class="form-label fw-bold text-gray-700"> {{ __('general.hexCode') }}</label>
                                        <div class="d-flex align-items-center">
                                            <input type="color" id="color" name="hexCode" class="form-control form-control-color me-2" value="{{ old('backgroundColor',$color->hexCode) }}" style="width: 60px; height: 40px; border: none; cursor: pointer;">
                                            <span id="colorValue" class="border rounded px-3 py-2 text-gray-700 bg-gray-100">{{ old('hexCode',$color->hexCode ) }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5 class="font-weight-bolder text-dark">{{__('general.store')}}:</h5>
                                        <p style="margin: 0; color: inherit; font-weight: normal;">{{ $color->store->title }}</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@push('scripts')
<script>
    document.getElementById('color').addEventListener('input', function() {
        document.getElementById('colorValue').textContent = this.value;
    });
</script>
@endpush

