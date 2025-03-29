@extends('front.layouts.master')
@section('content')
    @include('front.components.breadcrumb', ['name' => __('general.orderTracking')])
    @include('front.components.orderTracking')
@endsection
