@extends('merchant.layouts.master')

@section('content')
<div class="page-body" >

    @include('merchant.components.breadcrumb', [
    'module' => 'itemRequests', 
    'action' => 'index',     
    ])

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">


                    <div class="card-body">
                        <div class="table-responsive table-desi">
                            <table class="table list-digital all-package table-category " id="editableTable">
                                
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{__('general.store')}}</th>

                                        <th>{{__('general.reviewer')}}</th>
                                        
                                        <th>{{__('general.type')}}</th>
                                        
                                        
                                        <th>{{__('general.product')}}</th>
                                        
                                        <th>{{__('general.status')}}</th>
                                        <th>{{__('general.controls')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($itemRequests as $itemRequest)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ optional($itemRequest->store)->title }}</td>

                                            <td>{{ isset($itemRequest->reviewer)?$itemRequest->reviewer->name: __('general.pending')}}</td>
                                            
                                            <td>{{ $itemRequest->type }}</td>
                                            
                                            
                                            <td>{{ optional($itemRequest->product)->title }}</td>
                                            
                                            <td><span class="badge badge-{{$itemRequest->status=="accepted"?'success':'danger'}}">{{ isset($itemRequest->status)?$itemRequest->status:__('general.pending') }}</span></td>
                                            <td>
                                                @if (!isset($itemRequest->status))
                                                    
                                                @include('merchant.components.controls', [
                                                    'route' => 'merchant.itemRequests',
                                                    'role' => 'itemRequest',
                                                    'module' => $itemRequest,
                                                ])
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        {!! $itemRequests->links('merchant.components.paginate') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
@endsection
