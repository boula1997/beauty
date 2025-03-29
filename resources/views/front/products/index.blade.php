@extends('front.layouts.master')
@section('content')
@include('front.components.breadcrumb',['name'=>__('general.products')])
@include('front.components.products')
@endsection
