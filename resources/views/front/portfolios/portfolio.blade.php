@extends('front.layouts.master')
@section('content')
@include('front.components.breadcrumb',['name'=>(__('general.our_portfolios'))])
@include('front.components.portfolios')
@endsection
