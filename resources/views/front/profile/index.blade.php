@extends('front.layouts.master')
@section('content')
    @include('front.components.breadcrumb', ['name' => __('general.dashboard')])

    <section class="dashboard-section section-b-space user-dashboard-section">
        <div class="container">
            <div class="row">
               
                @include('front.profile.sidebar')
                {{-- main content --}}
                <div class="col-lg-9">
                    <button class="show-btn btn d-lg-none d-block">{{ __('general.ShowMenu') }}</button>
                    <div class="faq-content tab-content" id="myTabContent">

                        @include('front.profile.'.$type)

                    </div>
                </div>
            
            </div>
        </div>
    </section>
@endsection
