@extends('front.layouts.master')
@section('content')
    @include('front.components.breadcrumb', ['name' => __('general.orders')])
    @include('front.components.order_list')
@endsection
