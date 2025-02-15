<style>
    .hm-gradient {
        background: #57FA57;
        border-radius: 4px;
    }

</style>


@extends('front.layouts.master')
@section('content')
<!-- full Title -->

<div class="full-title">
    <div class="container" style="text-align:center;">
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3 text-center">فيديوهاتنا
        </h1>
    </div>
</div>
<div class="container">
    <div class="hm-gradient mb-5">
        <div class="container p-4" style="font-size: 20px">
            <a style="color: #4E3A14" href="{{route('dashboard')}}">الرئيسية</a> / <span style="color: white">فيديوهاتنا</span>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        @foreach ($videos as $video)
        {{-- {{dd($video->youtube_link)}} --}}
        <div class="col-md-4 col-sm-12 mb-3" style="height: 400px">
            <div style="height: 100%" class="rounded-5 card mb-3" >
                <iframe class="rounded-5" width="100%" height="100%" src="{{$video->youtube_link}}"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection
