@extends('front.layouts.master')
@section('content')
    @include('front.components.breadcrumb', ['name' => __('general.vendor')])
    @include('front.components.vendor')
@endsection
