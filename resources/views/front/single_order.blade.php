@extends('front.layouts.master')
@section('content')
@include('front.components.breadcrumb',['name'=>(__('general.orderDetails'))])
@include('front.components.order_list')
<script>
    if ({{ session('payment_redirect') ? 'true' : 'false' }}) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>
@endsection
