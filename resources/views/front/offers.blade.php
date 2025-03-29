@extends('front.layouts.master')
@section('content')
    @include('front.components.breadcrumb', ['name' => __('general.offers')])
    @include('front.components.offers')
@endsection
