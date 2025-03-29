@extends('front.layouts.master')
@section('content')


@include('front.components.breadcrumb', ['name' => __('general.cart')])
    @include('front.components.cart')
@endsection
