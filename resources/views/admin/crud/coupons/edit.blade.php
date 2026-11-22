@extends('admin.components.form')
@section('form_action', route('coupons.update', $coupon))
@section('form_type', 'POST')
@section('fields_content')
    @method('PUT')
    @include('admin.crud.coupons._form')
@endsection
