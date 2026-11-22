@extends('admin.components.form')
@section('form_action', route('coupons.update', ['coupon' => $coupon->id]))
@section('form_type', 'POST')
@section('fields_content')
    @method('put')
    <div class="content-wrapper">
        <div class="container p-3">
            @include('admin.components.breadcrumb', ['module' => 'coupons', 'action' => 'edit'])
            @include('admin.crud.coupons._fields', ['coupon' => $coupon])
        </div>
    </div>
@endsection
