@extends('merchant.layouts.master')
@section('content')
<div class="page-body">
    <form action="@yield('form_action')" method="@yield('form_type')" enctype="multipart/form-data" id="form">
        @csrf
        @yield('fields_content')
    </form>
</div>
@endsection
