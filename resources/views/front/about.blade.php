@extends('front.layouts.master')
@section('content')
    @include('front.components.breadcrumb', ['name' => __('general.about')])
    @include('front.components.about')
@endsection
