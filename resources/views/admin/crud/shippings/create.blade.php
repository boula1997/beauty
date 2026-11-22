@extends('admin.components.form')
@section('form_action', route('shippings.store'))
@section('form_type', 'POST')
@section('fields_content')
    @include('admin.crud.shippings._form')
@endsection
