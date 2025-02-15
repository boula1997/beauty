@extends('front.layouts.master')
@section('content')
@include('front.components.breadcrumb',['name'=>$service->title,'mid'=>(__('general.services')),'route_mid'=>'front.service'])
@include('front.components.single-service')

@endsection
