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
                                <h5>{{ 'general.teams' }}</h5>
                                <div class="right-options">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)">import</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Export</a>
                                        </li>
                                        <li>
                                            <a class="btn btn-solid"
                                                href="{{ route('teams.create') }}">{{ __('general.create') }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <div class="table-responsive">
                                    <table class="table all-package theme-table table-team" id="table_id">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>@lang('general.image')</th>
                                                <th>{{ __('general.facebook') }}</th>

                                                <th>{{ __('general.twitter') }}</th>

                                                <th>{{ __('general.instagram') }}</th>

                                                <th>{{ __('general.linkedin') }}</th>
                                                
                                                <th>{{ __('general.title') }}</th>
                                                
                                                <th>{{ __('general.subtitle') }}</th>
                                                
                                                <th>{{ __('general.description') }}</th>
                                                
                                                                                                <th>{{ __('general.created_at') }}</th>
                                                
                                                                                                <th>{{ __('general.updated_at') }}</th>
                                                <th>@lang('general.controls')</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($teams as $team)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>
                                                        <div class="table-image">
                                                            <img src="{{ $team->image }}" class="img-fluid"
                                                                alt="">
                                                        </div>
                                                    </td>


                                                    <td>{{ $team->facebook }}</td>

                                                    <td>{{ $team->twitter }}</td>

                                                    <td>{{ $team->instagram }}</td>

                                                    <td>{{ $team->linkedin }}</td>

                                                    
                                                    <td>{{ $team->title }}</td>
                                                    
                                                    <td>{{ $team->subtitle }}</td>
                                                    
                                                    <td>{{ $team->description }}</td>
                                                    <td>{{ $team->created_at }}</td>

                                                    <td>{{ $team->updated_at }}</td>
                                                    <td>
                                                        @include('admin.components.controls', [
                                                            'route' => 'teams',
                                                            'role' => 'team',
                                                            'module' => $team,
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
