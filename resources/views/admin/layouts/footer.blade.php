    <!-- footer Start -->
    <div class="container-fluid">
        <footer class="footer">
            <div class="row">
                <div class="col-md-12 footer-copyright text-center">
                    <p class="mb-0">{{settings()->copyright}}</p>
                </div>
            </div>
        </footer>
    </div>
    <!-- footer En -->

    <!-- latest js -->
    <script src="{{ asset('bootstrap-5.3.1-dist\js\bootstrap.js') }}"></script>
    <script src="{{ asset('admin/assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/jquery-3.6.0.min.js') }}"></script>

    <!-- Bootstrap js -->

    <!-- feather icon js -->
    <script src="{{ asset('admin/assets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/icons/feather-icon/feather-icon.js') }}"></script>

    <!-- scrollbar simplebar js -->
    <script src="{{ asset('admin/assets/js/scrollbar/simplebar.js') }}"></script>
    <script src="{{ asset('admin/assets/js/scrollbar/custom.js') }}"></script>

    <!-- Sidebar js -->
    <script src="{{ asset('admin/assets/js/config.js') }}"></script>

    <!-- bootstrap tag-input js -->
    <script src="{{ asset('admin/assets/js/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/sidebar-menu.js') }}"></script>

    <!-- customizer js -->
    <script src="{{ asset('admin/assets/js/customizer.js') }}"></script>

    <!--Dropzon js -->
    <script src="{{ asset('admin/assets/js/dropzone/dropzone.js') }}"></script>
    <script src="{{ asset('admin/assets/js/dropzone/dropzone-script.js') }}"></script>



    <!-- ck editor js -->
    <script src="{{ asset('admin/assets/js/ckeditor.js') }}"></script>
    <script src="{{ asset('admin/assets/js/ckeditor-custom.js') }}"></script>

    <!-- select2 js -->
    <script src="{{ asset('admin/assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/select2-custom.js') }}"></script>

    <!-- sidebar effect -->
    <script src="{{ asset('admin/assets/js/sidebareffect.js') }}"></script>

    <!-- Theme js -->
    <script src="{{ asset('admin/assets/js/script.js') }}"></script>

    <!-- Sidebar jquery -->
    <script src="{{ asset('admin/assets/js/config.js') }}"></script>

    <!-- tooltip init js -->
    <script src="{{ asset('admin/assets/js/tooltip-init.js') }}"></script>



    <!-- Apexchar js -->
    <script src="{{ asset('admin/assets/js/chart/apex-chart/apex-chart1.js') }}"></script>
    <script src="{{ asset('admin/assets/js/chart/apex-chart/moment.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('admin/assets/js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('admin/assets/js/chart/apex-chart/chart-custom1.js') }}"></script>


    <!-- slick slider js -->
    <script src="{{ asset('admin/assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/custom-slick.js') }}"></script>

    <!-- ratio js -->
    <script src="{{ asset('admin/assets/js/ratio.js') }}"></script>

    <script src="{{ asset('js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('admin/file-upload/image-input.js') }}"></script>
    <script src="{{ asset('js/iconpicker-1.5.0.js') }}"></script>
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <!-- Summernote -->
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>

    @stack('scripts')
    <script>
        document.getElementById('darkModeToggle').addEventListener('click', function() {
            window.location.href = '{{ route('dark.toggle') }}';
        });
    </script>




    </body>

    </html>
