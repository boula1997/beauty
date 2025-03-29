@extends('front.layouts.master')
@section('content')
	<!-- full Title -->
	<div class="full-title">
		<div class="container text-center">
			<!-- Page Heading/Breadcrumbs -->
			<h1 class="mt-4 mb-3">المقالات
			</h1>
		</div>
	</div>
    <div class="container">
        <div class="container">
            <div class="hm-gradient mb-5">
                <div class="container p-4" style="font-size: 20px">
                    <a style="color: #4E3A14" href="{{route('dashboard')}}">الرئيسية</a> / <span style="color: white">المقالات</span>
                </div>
            </div>
        </div>
        @include('front.components.faqs')
        @include('front.components.partners')
    </div>
@endsection
