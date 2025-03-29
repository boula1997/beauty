@extends('front.layouts.master')

@section('content')
    @include('front.components.breadcrumb', ['name' => __('general.orders')])
    <!-- Content Wrapper. Contains order content -->
    <div class="content-wrapper">
        <div class="conainer p-5">
            <!-- Main content -->
            <section class="content pt-2">
                <div class="container-fluid">
                    <div class="row d-flex justify-content-center align-items-center">
                        <!-- left column -->
                        <div class="col-md-12">
                            <div class="card">

                                <!-- /.card-header -->
                                <div class="card-body">

                                    <table id="example1" class="table  table-hover">
                                        <thead class="h-2">
                                            <tr class="p-0 m-0">
                                                <th>#</th>
                                                <th>{{__('general.name')}}</th>
                                                <th>{{__('general.total')}}</th>
                                                <th>{{__('general.controls')}}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach (auth()->user()->orders()->latest()->get() as $order)
                                                <tr class="p-0 m-0">
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $order->name }}</td>
                                                    <td>{{ $order->total}} {{ __('general.pound')}}</td>
                                                    <td><a  class="mx-3" href="{{ route('show.one.order',$order->id) }}" title="show">
                                                        <i class="fas fa-eye text-secondary fa-lg controlles"></i>
                                                    </a>
                                                    </td>
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

                                    {{-- <table id="example1" class="table table-hover table-responsive">
                                        <caption>{{__('general.orders')}}</caption>
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>{{__('general.name')}}</th>
                                                <th>{{__('general.email')}}</th>
                                                <th>{{__('general.total-delivery')}}</th>
                                                <th>{{__('general.controls')}}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach (auth()->user()->orders as $order)
                                                <tr class="p-0 m-0">
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $order->name }}</td>
                                                    <td>{{ $order->email }}</td>
                                                    <td>{{ $order->total }} {{ __('general.pound')}}</td>
                                                    <td><a class="mx-3" href="{{ route('show.one.order', $order->id) }}"
                                                            title="show">
                                                            <i class="fas fa-eye fa-lg controlles text-primary"></i>
                                                        </a>
                                                    </td>
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
                                    </table> --}}
                                </div>
                            </div>

                        </div>

                    </div>

                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
    </div>
    <!-- /.content-wrapper -->
@endsection


@push('js')
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
