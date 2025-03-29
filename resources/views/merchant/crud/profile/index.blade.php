@extends('merchant.layouts.master')

@section('content')

<div class="page-body" >
    <div class="content-wrapper">
        
        @method('PUT')
       
        <section class="content">

            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card tab2-card">
                            <div class="card-header card-header-tabs-line">
                                @include('merchant.components.breadcrumb', ['module' => 'merchant.profile',])
                            </div>
                                                 
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card-body">
                                        <ul class="nav nav-tabs nav-material w-100 d-flex justify-content-around" id="top-tab" role="tablist">
                                            <li class="nav-item flex-grow-1 text-center">
                                                <a class="nav-link w-100 {{ request('type') == 'profileInfo' ? 'active' : '' }}" 
                                                    href="{{ route('merchant.profile.show', ['type' => 'profileInfo']) }}" role="type">
                                                    <i data-feather="user" class="me-2"></i>{{ __('general.profileInfo') }}
                                                </a>
                                            </li>
                                        
                                            <li class="nav-item flex-grow-1 text-center">
                                                <a class="nav-link w-100 {{ request('type') == 'changeEmail' ? 'active' : '' }}" 
                                                    href="{{ route('merchant.profile.show', ['type' => 'changeEmail']) }}" role="type">
                                                    <i data-feather="settings" class="me-2"></i>{{ __('general.updateEmail') }}
                                                </a>
                                            </li>
                                        
                                            <li class="nav-item flex-grow-1 text-center">
                                                <a class="nav-link w-100 {{ request('type') == 'changePassword' ? 'active' : '' }}" 
                                                    href="{{ route('merchant.profile.show', ['type' => 'changePassword']) }}" role="type">
                                                    <i data-feather="settings" class="me-2"></i>{{ __('general.change_password') }}
                                                </a>
                                            </li>
                                        </ul>
                                        
                                        <div class="tab-content" id="top-tabContent">

                                            @include('merchant.crud.profile.'.$type)

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card -->
                        </div>

                       
                        <!--/.col (left) -->

                    </div>
                    <!-- /.row -->
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
</div>
    <!-- /.content-wrapper -->


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
