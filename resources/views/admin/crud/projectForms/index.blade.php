@extends('admin.layouts.master')

@section('content')
    <!-- Container-fluid starts-->
    <div class="page-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">
                            <div class="title-header option-title d-sm-flex d-block">
                                <h5>{{ 'general.projectForms' }}</h5>

                            </div>
                            <div>
                                <div class="table-responsive">
                                    <table class="table all-package theme-table table-projectForm" id="table_id">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>{{ __('general.name') }}</th>

                                                <th>{{ __('general.phone') }}</th>
                                                <th>{{ __('general.project') }}</th>

                                                <th>@lang('general.controls')</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($data as $projectForm)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>


                                                    <td>{{ $projectForm->name }}</td>

                                                    <td>{{ $projectForm->phone }}</td>
                                                    <td>{{ $projectForm->project->title }}</td>

                                                    <td>
                                                        @include('admin.components.controls', [
                                                            'route' => 'projectForms',
                                                            'role' => 'projectForm',
                                                            'module' => $projectForm,
                                                        ])
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

        <div class="container-fluid">
            <!-- footer start-->
            <footer class="footer">
                <div class="row">
                    <div class="col-md-12 footer-copyright text-center">
                        <p class="mb-0">{{ settings()->copyright }}</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
