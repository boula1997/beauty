@extends('admin.components.form')
@section('form_action', route('coupons.store'))
@section('form_type', 'POST')
@section('fields_content')
    @method('post')
    <div class="content-wrapper">
        <div class="container p-3">
            @include('admin.components.breadcrumb', ['module' => 'coupons', 'action' => 'create'])
            @include('admin.crud.coupons._fields')
        </div>
    </div>
@endsection
