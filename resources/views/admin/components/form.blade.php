@extends('admin.layouts.master')
@section('content')
    <form action="@yield('form_action')" method="@yield('form_type')" enctype="multipart/form-data" id="form">
        @csrf
        @yield('fields_content')
    </form>
@endsection
