@extends('admin.components.form')
@section('form_action', route('shippings.update', $shipping))
@section('form_type', 'POST')
@section('fields_content')
    @method('PUT')
    @include('admin.crud.shippings._form')
@endsection
