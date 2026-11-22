@extends('admin.components.form')
@section('form_action', route('coupons.store'))
@section('form_type', 'POST')
@section('fields_content')
    @include('admin.crud.coupons._form')
@endsection
