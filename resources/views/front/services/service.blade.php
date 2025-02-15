@extends('front.layouts.master')
@section('content')
@include('front.components.breadcrumb',['name'=>(__('general.our_services'))])
@include('front.components.services')
@endsection
