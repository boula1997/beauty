<style>
    .hm-gradient {
        background: #57FA57;
        border-radius: 4px;
    }

    .about-main img {
        transition: all 0.7s ease-in-out;
        height: 300px;
        overflow: hidden;
        object-fit: cover;
    }

    .about-main img:hover {
        transform: scale(1.1);
        transition: all 0.7s ease-in-out;
    }

</style>

@extends('front.layouts.master')
@section('content')
<!-- full Title -->
<div class="full-title">
    <div class="container text-center">
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">{{ $faq->title }}
        </h1>
    </div>
</div>
<div class="container">
    <div class="container">
        <div class="hm-gradient mb-5">
            <div class="container p-4" style="font-size: 20px">
                <a style="color: #4E3A14" href="{{route('dashboard')}}">الرئيسية</a> / <span
                    style="color: white">{{ $faq->title }}</span>
            </div>
        </div>
    </div>

</div>
<div class="about-main container">
    <div class="row">
        <div class="col-md-8 col-sm-12">
            <p>تم اﻹنشاء فى {{ $faq->created_at }}</p>
            {!! $faq->description !!}
        </div>
        <div class="col-md-4 col-sm-12" style="height: 400px;">
        </div>
    </div>
</div>
@endsection
