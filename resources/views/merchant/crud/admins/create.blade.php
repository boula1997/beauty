@extends('admin.components.form')
@section('form_action', route('admins.store'))
@section('form_type', 'POST')
@section('fields_content')
    @method('post')
    <!-- Content Wrapper. Contains blog content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <!-- left column -->
                    <div class="col-md-12">

                        <!-- general form elements -->
                        <div class="card card-custom">
                            <div class="card-header card-header-tabs-line">
                                @include('admin.components.breadcrumb', [
                                    'module' => 'admins',
                                    'action' => 'create',
                                ])
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">{{__('general.name')}}</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                                </div>
                                                <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                                                id="exampleInputName" placeholder="{{__('general.name')}}">
                                                   
                                            </div>
                                                @error('name')
                                                    <span class="text-danger" >
                                                       {{ $message }}
                                                    </span>
                                                @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">{{__('general.email')}}</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                                </div>
                                                <input type="email" name="email" value="{{ old('email') }}" class="form-control"
                                                id="exampleInputEmail" placeholder="{{__('general.email')}}">
                                            </div>
                                            @error('email')
                                                <span class="text-danger" >
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">{{__('general.phone')}}</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                                </div>
                                                <input type="text" name="phone" value="{{ old('phone') }}" class="form-control"
                                                id="exampleInputphone" placeholder="{{__('general.phone')}}">
                                            </div>
                                            @error('phone')
                                                <span class="text-danger" >
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">@lang('general.role')</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                                </div>
                                                <select name="roles" id="roles" class="form-control">
                                                    @php
                                                        $role = old('roles') ?: (str_contains(url()->previous(), '/trainer') ? 'trainer' : (str_contains(url()->previous(), '/company') ? 'company' : 'admin'));
                                                    @endphp
                                                    <option value="{{ $role }}">{{ $role }}</option>
                                                </select>
                                                
                                            </div>
                                            @error('role')
                                                <span class="text-danger" >
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">{{__('general.password')}}</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                                </div>
                                                <input type="password" name="password" value="{{ old('password') }}"
                                                class="form-control @error('') invalid @enderror" id="exampleInputPassword" placeholder="{{__('general.password')}}">
                                            </div>
                                            @error('password')
                                                <span class="text-danger" >
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">{{__('general.confirm_password')}}</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                                </div>
                                                <input type="password" name="confirm-password" value="{{ old('confirm-password') }}"
                                                class="form-control" id="exampleInputConfirmpassword"
                                                placeholder="{{__('general.confirm_password')}}">
                                            </div>
                                            @error('confirm-password')
                                                <span class="text-danger" >
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            @include('admin.components.image', [
                                                'label' => __('general.image'),
                                                'value' => old('image'),
                                                'name' => 'image',
                                                'id' => 'kt_image_3',
                                                'accept' => 'image/*',
                                                'required' => true,
                                            ])

                                        </div>
                                            @error('image')
                                                <span class="text-danger" >
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                    </div>
                                    
                                </div>
                                

                                <div class="card-footer mb-5">
                                    <button type="submit" class="btn btn-outline-primary px-5">{{__('general.save')}}</button>
                                    <a href="{{ route('admins.index') }}"
                                        class="btn btn-outline-danger px-5
                                            ">{{__('general.cancel')}}</a>
                                </div>
                            </div>
                            <!-- /.card -->


                        </div>
                        <!--/.col (left) -->

                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@push('scripts')

    {{-- <script>
        $(document).ready(function() {
            let old = $('#cities').attr('old');
            if (old != null) {
                $('#cities').find('option').remove().end();
                var country_id = $('#country').val();
                console.log('country_id', country_id);

                let url = "{{ route('country.cities', [':id']) }}"
                url = url.replace(':id', country_id);
                $.ajax({
                    type: "Get",
                    url: url,
                    datatype: 'JSON',
                    success: function(data) {
                        console.log(data);

                        if (data.status == 200) {
                            alert(1);
                            let equal;
                            data.data.companies.forEach(element => {
                                let equal = '';
                                if (element.id == old)
                                    equal = 'selected';
                                var option =
                                    `<option value ="${element.id}" ${equal}>${element.title}</option>`;
                                $('#cities').append(option);
                            });

                        }	
                    },
                    error: function(reject) {
                        console.log(reject);
                    }
                });
            }
            $('#country').on('change', function() {	

                $('#cities').find('option').remove().end();
                var country_id = $('#country').val();

                let url = "{{ route('country.cities', [':id']) }}"
                url = url.replace(':id', country_id);
                $.ajax({
                    type: "Get",
                    url: url,
                    datatype: 'JSON',
                    success: function(data) {
                        
                    console.log(data.data);
                            let equal;
                            data.data.forEach(element => {
                                let equal = '';
                                if (element.id == old)
                                    equal = 'selected';
                                var option =
                                    `<option value ="${element.id}" ${equal}>${element.title}</option>`;
                                $('#cities').append(option);
                            });


                    
                    },
                    error: function(reject) {
                        console.log(reject);
                    }
                });

            });
        });
    </script> --}}

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
