@extends('admin.components.form')
@section('form_action', route('products.variations.store', $product))
@section('form_type', 'POST')
@section('fields_content')
    @include('admin.crud.productVariations._form')
@endsection
