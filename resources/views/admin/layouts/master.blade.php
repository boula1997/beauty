@include('admin.layouts.header')

@include('admin.components.top')
<!-- page-wrapper Start-->
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        @include('admin.components.success')
        @include('admin.components.errors')
        @include('admin.components.menu')
        @include('admin.components.sidebar')
        @yield('content')
    </div>
</div>

@include('admin.layouts.footer')
