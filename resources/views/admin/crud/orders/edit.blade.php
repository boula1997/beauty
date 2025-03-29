@extends('admin.components.form')
@section('form_action', route('orders.update', $order->id))
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
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">{{ __('general.name')}}</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                            </div>
                                        <input type="text" name="name"
                                            value="{{ old('name', $order->name) }}" class="form-control @error('') invalid @enderror"
                                            id="exampleInputName" placeholder="{{ __('general.name')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">{{ __('general.email')}}</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                            </div>
                                        <input type="email" name="email"
                                            value="{{ old('email', $order->email) }}" class="form-control @error('') invalid @enderror"
                                            id="exampleInputName" placeholder="{{ __('general.email')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">{{ __('general.address')}}</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                            </div>
                                        <input type="text" name="address"
                                            value="{{ old('address', $order->address) }}" class="form-control @error('') invalid @enderror"
                                            id="exampleInputName" placeholder="{{ __('general.address')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">{{ __('general.phone')}}</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                            </div>
                                        <input type="text" name="phone"
                                            value="{{ old('phone', $order->phone) }}" class="form-control @error('') invalid @enderror"
                                            id="exampleInputName" placeholder="{{ __('general.phone')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
