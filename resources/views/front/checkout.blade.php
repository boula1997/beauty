@extends('front.layouts.master')
@section('content')

@include('front.components.breadcrumb', ['name' => __('general.checkout')])
    @include('front.components.checkout')
@endsection
