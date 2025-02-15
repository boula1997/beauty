@extends('front.layouts.master')
@section('content')
@include('front.components.breadcrumb',['name'=>(__('general.contact_us'))])
    @include('front.components.serviceRequest')
@endsection
