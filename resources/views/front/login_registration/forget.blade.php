@extends('front.layouts.master')
@section('content')
@include('front.components.breadcrumb',['name' => __('general.forget')])
@include('front.components.forget')
@endsection