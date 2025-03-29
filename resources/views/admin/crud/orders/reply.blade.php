@extends('admin.components.form')
@section('form_action', route('orders.emailReply',$order->id))
@section('form_type', 'POST')
@section('fields_content')
    @method('post')
    <div class="content-wrapper">
                <div class="container p-3">
            @include('admin.components.alert-error')
            <div class="card card-custom">
                <div class="card-header card-header-tabs-line">
                    @include('admin.components.breadcrumb', ['module' => 'orders', 'action' => 'reply'])
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('general.subject')}}</label>
                                    <input type="text" name="subject" value="{{ old('subject') }}" class="form-control @error('') invalid @enderror"
                                        id="exampleInputName" placeholder="{{__('general.subject')}}">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('general.order')}}</label>
                                    <div class="mb-3">
                                        <label for="" class="form-label"></label>
                                        <textarea class="form-control @error('') invalid @enderror" name="message" id="exampleInputName" rows="3" placeholder="{{__('general.reply')}}"></textarea>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card-footer mb-5">
                        <button type="submit"
                            class="btn btn-outline-primary px-5
                          ">{{__('general.save')}}</button>
                        <a href="{{ route('orders.index') }}"
                            class="btn btn-outline-danger px-5
                            ">{{__('general.cancel')}}</a>
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
