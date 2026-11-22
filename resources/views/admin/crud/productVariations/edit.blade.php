@extends('admin.components.form')
@section('form_action', route('products.variations.update', [$product, $variation]))
@section('form_type', 'POST')
@section('fields_content')
    @method('PUT')
    @include('admin.crud.productVariations._form')
@endsection
