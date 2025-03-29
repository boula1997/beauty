@extends('front.layouts.master')
@section('content')
@include('admin.components.breadcrumb', [
    'module' => 'products', 
    'action' => 'index',     
    ])
    @include('front.components.cart')   
@endsection
