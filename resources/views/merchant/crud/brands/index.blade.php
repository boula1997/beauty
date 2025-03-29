@extends('admin.layouts.master')

@section('content')
<div class="page-body" >

    @include('admin.components.breadcrumb', [
    'module' => 'brands', 
    'action' => 'index',     
    ])

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-end">
                        <a href="{{route('brands.create')}}" class="btn btn-primary mt-md-0 mt-2">{{ __('general.add') }}</a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive table-desi">
                            <table class="table list-digital all-package table-category" id="columnSearchDatatable">
                                
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{__('general.image')}}</th>
                                        <th>{{__('general.title')}}</th>
                                        <th>{{__('general.description')}}</th>
                                        <th class="d-flex justify-content-center">{{__('general.top')}}</th>
                                        <th>{{__('general.controls')}}</th>
                                    </tr>
                                </thead>
                                <tbody id="set-rows">
                                    @foreach ($brands as $brand)
                                        <tr data-cid="{{ $brand->id }}"  class="drag-item cursor-move">
                                            <td>{{ $loop->iteration }}</td>
                                            <td><img src="{{ $brand->image }}"
                                                    alt="{{ $brand->title }}"></td>
                                            <td>{{ $brand->title }}</td>              
                                            <td>{!! Str::limit($brand->description, 20, '...') !!}</td>
                                            <td>
                                                <div class="form-check form-switch d-flex justify-content-center">
                                                    <input class="form-check-input toggle-is-top" type="checkbox" role="switch" 
                                                        id="flexSwitchCheckChecked{{ $brand->id }}" data-id="{{ $brand->id }}" 
                                                        {{ $brand->isTop ? 'checked' : '' }}>
                                                </div>
                                                
                                            </td>
                                           
                                            <td>
                                                @include('admin.components.controls', [
                                                    'route' => 'brands',
                                                    'role' => 'brand',
                                                    'module' => $brand,
                                                ])
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        {!! $brands->links('admin.components.paginate') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
@endsection

@push('scripts')

    <script src="{{ asset('admin/assets/libs/sortablejs/sortable.js') }}"></script>
    <script>
        $(function() {
            const sortable = new Sortable(document.getElementById("columnSearchDatatable").getElementsByTagName(
                "tbody")[0], {
                animation: 150, // Animation duration (ms)
                draggable: ".drag-item",
                onUpdate: function( /**Event*/ evt) {

                    var data = [];

                    $('#set-rows').children('tr').each(function() {
                        data.push($(this).data('cid'));
                    });

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        url: "{{ route('brands.sortable') }}",
                        method: 'POST',
                        data: {
                            ids: data
                        },
                        success: function(result) {
                            if (result.message === true) {
                                toastr.success(result.message, {
                                    CloseButton: true,
                                    ProgressBar: true
                                });
                            }
                        }


                    });
                }
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            $(document).off('change', '.toggle-is-top').on('change', '.toggle-is-top', function () {
                let brandId = $(this).data('id');
                let url = `{{ route('brands.toggleIsTop', ':id') }}`.replace(':id', brandId);

                $.get(url, function (response) {
                    if (response.success) {
                        toastr.success(response.message);
                    }
                });
            });
        });

    </script>
@endpush


