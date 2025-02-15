@if (Session::has('success'))
    @push('scripts')
        <!-- Plugins js -->
        <script src="{{ asset('admin/assets/js/notify/bootstrap-notify.min.js') }}"></script>
        <script src="{{ asset('admin/assets/js/notify/success.js') }}"></script>
    @endpush
@endif
