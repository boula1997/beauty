@extends('admin.components.form')
@section('form_action', route('orderproducts.update', $orderproduct->id))
@section('form_type', 'POST')
@section('fields_content')
    <div class="content-wrapper">
        @method('PUT')
                <div class="container p-3">
            @include('admin.components.alert-error')
            <div class="card card-custom mb-2">
                <div class="card-header card-header-tabs-line">
                    @include('admin.components.breadcrumb', ['module' => 'orderproducts', 'action' => 'edit'])
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-5 bg-light p-3 rounded h-100">
                                    <div class="card-title fw-bold">
                                        <h5 class="font-weight-bolder text-dark">{{__('general.name')}}:</h5>
                                        <p style="margin: 0; color: inherit; font-weight: normal;">{{ $orderproduct->order->name }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-5 bg-light p-3 rounded h-100">
                                    <div class="card-title fw-bold">
                                        <h5 class="font-weight-bolder text-dark">{{__('general.email')}}:</h5>
                                        <p style="margin: 0; color: inherit; font-weight: normal;">{{ $orderproduct->order->email }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-5 bg-light p-3 rounded h-100">
                                    <div class="card-title fw-bold">
                                        <h5 class="font-weight-bolder text-dark">{{__('general.address')}}:</h5>
                                        <p style="margin: 0; color: inherit; font-weight: normal;">{{ $orderproduct->order->address }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-5 bg-light p-3 rounded h-100">
                                    <div class="card-title fw-bold">
                                        <h5 class="font-weight-bolder text-dark">{{__('general.total-delivery')}}:</h5>
                                        <p style="margin: 0; color: inherit; font-weight: normal;">{{ $orderproduct->order->total }} {{ __('general.pound')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-custom">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">{{ __('general.products')}}</label>
                                <select class="form-select form-select-lg" name="product_id" id="product">
                                    @foreach ($products as $product)
                                        <option value="{{ $product->id }}" {{ old('orderproduct->product_id',$orderproduct->product->id)==$product->id? 'selected' : '' }}>{{ $product->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('general.count')}}</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                        </div>
                                     <input type="text" name="count"
                                        value="{{ old('count', $orderproduct->count) }}" class="form-control @error('') invalid @enderror"
                                        id="exampleInputName" placeholder="{{ __('general.count')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-md-3">
                            <div class="mb-5 bg-light p-3 rounded h-100">
                                <div class="card-title fw-bold">
                                    <h5 class="font-weight-bolder text-dark">{{__('general.total')}}:</h5>
                                    <label  class="m-0">{{ $orderproduct->total }}</label>
                                </div>
                            </div>
                        </div> --}}
                       
                        <div class="col-md-3">
                            <div class="mb-5 bg-light p-3 rounded h-100">
                                <div class="card-title fw-bold">
                                    <input type="hidden" id="order" name="order_id" value="{{$orderproduct->order->id}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="card-footer mb-5 text-center">
                    <button type="submit" class="btn btn-outline-success">{{__('general.save')}}</button>
                    <a href="{{ route('orders.index') }}" class="btn btn-outline-danger font-weight-bold">{{__('general.cancel')}}</a>
                </div>
            </div>
        </div>
    </div>
@endsection

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
