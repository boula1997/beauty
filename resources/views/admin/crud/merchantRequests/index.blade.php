@extends('admin.layouts.master')

@section('content')
<div class="page-body" >

    @include('admin.components.breadcrumb', [
    'module' => 'merchantRequests', 
    'action' => 'index',     
    ])

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    @can('merchantRequest-create')    
                        <div class="card-header d-flex justify-content-end">
                            <a href="{{route('merchantRequests.create')}}" class="btn btn-primary mt-md-0 mt-2">{{ __('general.add') }}</a>
                        </div>
                    @endcan

                    <div class="card-body">
                        <div class="table-responsive table-desi">
                            <table class="table list-digital all-package table-category" id="columnSearchDatatable">
                                
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{__('general.storeName')}}</th>
                                        <th>{{__('general.merchantName')}}</th>
                                        <th>{{__('general.email')}}</th>
                                        <th>{{__('general.phone')}}</th>
                                        <th>{{__('general.approve')}}</th>
                                        <th>{{__('general.reject')}}</th>
                                        <th>{{__('general.controls')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $merchantRequest)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ isset($merchantRequest->storeName)?$merchantRequest->storeName:'NA' }}</td>              
                                            <td>{{ isset($merchantRequest->merchantName)?$merchantRequest->merchantName:'NA' }}</td>              
                                            <td>{{ $merchantRequest->email }}</td>              
                                            <td>{{ $merchantRequest->phone }}</td>                     
                                            
                                            <td>
                                                @if ($merchantRequest->status === 'pending')
                                                    <a href="{{ route('merchantRequests.accept', $merchantRequest->id) }}" class="text-success mx-1">
                                                        Approve
                                                    </a>
                                                @elseif ($merchantRequest->status === 'approved')
                                                    <span class="text-success">Approved</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($merchantRequest->status === 'pending')
                                                    <a href="{{ route('merchantRequests.reject', $merchantRequest->id) }}" class="text-danger mx-1">
                                                        Reject
                                                    </a>
                                                @elseif ($merchantRequest->status === 'rejected')
                                                    <span class="text-danger">Rejected</span>
                                                @endif
                                            </td>
                                            
                                            
                                            
                                            <td>
                                                @include('admin.components.controls', [
                                                    'route' => 'merchantRequests',
                                                    'role' => 'merchantRequest',
                                                    'module' => $merchantRequest,
                                                ])
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        {!! $data->links('admin.components.paginate') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
@endsection

@push('scripts')

@endpush


