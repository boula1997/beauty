@extends('front.layouts.master')
@section('content')
@include('front.components.breadcrumb',['name'=>$portfolio->title])
{{-- @include('front.components.breadcrumb',['name'=>$portfolio->title,'mid'=>(__('general.portfolio')),'route_mid'=>'front.portfolio']) --}}
@include('front.components.single_portfolio')
@endsection
