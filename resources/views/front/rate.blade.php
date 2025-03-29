@extends('front.layouts.master')
@section('content')
@include('front.components.breadcrumb',['name'=>(__('general.rate'))])
    @include('front.components.rate')
@endsection
