@extends('admin.layouts.master')
@section('content')
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>{{ __('general.dashboard') }}
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item">
                                <a href="{{route('dashboard')}}">
                                    <i data-feather="home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active">{{ __('general.dashboard') }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

        @php
            $statusLabel = fn ($status) => \Illuminate\Support\Facades\Lang::has('general.' . $status)
                ? __('general.' . $status)
                : ucfirst(str_replace('_', ' ', (string) $status));

            $cards = [
                ['label' => __('general.orders'), 'value' => number_format($stats['orders']), 'icon' => 'shopping-bag', 'box' => 'warning', 'route' => 'orders.index', 'can' => 'order-list'],
                ['label' => __('general.delivered_sales'), 'value' => number_format($stats['delivered_sales'], 2) . ' ' . __('general.pound'), 'icon' => 'dollar-sign', 'box' => 'primary', 'route' => 'orders.index', 'can' => 'order-list'],
                ['label' => __('general.products'), 'value' => number_format($stats['products']), 'icon' => 'box', 'box' => 'secondary', 'route' => 'products.index', 'can' => 'product-list'],
                ['label' => __('general.users'), 'value' => number_format($stats['users']), 'icon' => 'users', 'box' => 'danger', 'route' => 'users.index', 'can' => 'user-list'],
                ['label' => __('general.messages'), 'value' => number_format($stats['messages']), 'icon' => 'message-square', 'box' => 'warning', 'route' => 'messages.index', 'can' => 'message-list'],
            ];
        @endphp

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                @foreach ($cards as $card)
                    @can($card['can'])
                        <div class="col-xxl-3 col-md-6 xl-50">
                            <a href="{{ route($card['route']) }}" class="text-reset text-decoration-none">
                                <div class="card o-hidden">
                                    <div class="{{ $card['box'] }}-box card-body">
                                        <div class="media static-top-widget align-items-center">
                                            <div class="icons-widgets">
                                                <div class="align-self-center text-center">
                                                    <i data-feather="{{ $card['icon'] }}" class="font-{{ $card['box'] }}"></i>
                                                </div>
                                            </div>
                                            <div class="media-body media-doller">
                                                <span class="m-0">{{ $card['label'] }}</span>
                                                <h3 class="mb-0">{{ $card['value'] }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endcan
                @endforeach

                @can('order-list')
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>{{ __('general.latest_orders') }}</h5>
                            </div>
                            <div class="card-body">
                                @if ($latestOrders->isEmpty())
                                    <p class="mb-0 text-muted">{{ __('general.no_data') }}</p>
                                @else
                                    <div class="user-status table-responsive latest-order-table">
                                        <table class="table table-bordernone">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">{{ __('general.name') }}</th>
                                                    <th scope="col">{{ __('general.phone') }}</th>
                                                    <th scope="col">{{ __('general.total') }}</th>
                                                    <th scope="col">{{ __('general.status') }}</th>
                                                    <th scope="col">{{ __('general.date') }}</th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($latestOrders as $order)
                                                    <tr>
                                                        <td>{{ $order->id }}</td>
                                                        <td>{{ $order->name }}</td>
                                                        <td dir="ltr">{{ $order->phone }}</td>
                                                        <td class="digits">{{ number_format((float) $order->total, 2) }}</td>
                                                        <td class="order-{{ strtolower((string) $order->status) }}">
                                                            <span>{{ $statusLabel($order->status) }}</span>
                                                        </td>
                                                        <td>{{ $order->created_at?->format('Y-m-d H:i') }}</td>
                                                        <td>
                                                            <a href="{{ route('orders.show', $order->id) }}">{{ __('general.show') }}</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @endif
                                <a href="{{ route('orders.index') }}" class="btn btn-primary mt-4">{{ __('general.order_list') }}</a>
                            </div>
                        </div>
                    </div>
                @endcan
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>

    <!-- footer start-->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 footer-copyright text-start">
                    <p class="mb-0">Copyright {{ date('Y') }} © {{ settings()?->title ?: config('app.name') }}</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end-->
@endsection
