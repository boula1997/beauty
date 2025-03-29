@extends('front.layouts.master')
@section('content')
    @include('front.components.breadcrumb', ['name' => __('general.mywish')])
    @include('front.components.wishlist')
@endsection
