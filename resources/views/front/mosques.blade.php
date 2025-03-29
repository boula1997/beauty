@extends('front.layouts.master')
@section('content')
    @include('front.components.breadcrumb', ['name' => __('general.mosques')])
    @include('front.components.mosques')
@endsection
