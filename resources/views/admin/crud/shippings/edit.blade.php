@extends('admin.components.form')
@section('form_action', route('shippings.update', ['shipping' => $shipping->id]))
@section('form_type', 'POST')
@section('fields_content')
    @method('put')
    <div class="content-wrapper">
        <div class="container p-3">
            @include('admin.components.breadcrumb', ['module' => 'shippings', 'action' => 'edit'])
            @include('admin.crud.shippings._fields', ['shipping' => $shipping])
        </div>
    </div>
@endsection
