@extends('admin.layouts.master')

@section('content')

    <div class="page-body" >

        @include('admin.components.breadcrumb', [
        'module' => 'orders', 
        'action' => 'index',     
        ])

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                         
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table-desi">
                                <table class="table all-package order-list-table" id="editableTable">
                                    <thead>
                                        <tr>
                                            <th>{{ __('general.name') }}</th>
                                            <th>{{ __('general.email') }}</th>
                                            <th>{{ __('general.date') }}</th>
                                            <th>{{ __('general.status') }}</th>
                                            <th>{{ __('general.Amount') }}</th>
                                            <th>{{ __('general.controls') }}</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($data as $order)
                                            <tr>
                                                <td data-field="name">{{ $order->name }}</td>

                                                <td data-field="email">{{ $order->email }}</td>

                                                <td data-field="date">{{ $order->created_at->format('M d, Y') }}</td>

                                                <td class="order-{{ strtolower($order->status) }}">
                                                    <span>{{ $order->status }}</span>
                                                </td>

                                                <td data-field="number">{{ $order->total }}</td>

                                                <td>
                                                    @include('admin.components.controls', [
                                                        'route' => 'orders',
                                                        'role' => 'order',
                                                        'module' => $order,
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
    <!-- /.content-wrapper -->
@endsection


@push('scripts')
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endpush
