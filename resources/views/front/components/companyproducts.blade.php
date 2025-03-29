{{-- <div class="d-flex justify-content-center">
    <button class="btn btn-info bg-info" id="toggleApperance" status="show">عرض خريطة المساجد</button>
</div> --}}
    @if (count($company->subcategories) > 0)
        {{-- @foreach ($company->subcategories as $subcategory) --}}
                <section class="mb-3">
                    <div class="container-fluid-lg">
                        <div class="title">
                            <h2>{{ __('general.browse_by_size')}}</h2>
                            <span class="title-leaf">
                                <svg class="icon-width">
                                    <use xlink:href="{{ asset('template/assets/svg/leaf.svg#leaf') }}"></use>
                                </svg>
                            </span>
                            <p>{{ __('general.top_categories_of')}}</p>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="slider-9">
                                    @foreach ($company->subcategories as $subcategory)
                                        <div>
                                            <a href="{{ route('front.subcategory', $subcategory->id) }}"
                                                class="category-box wow fadeInUp">
                                                <div>
                                                    <img src="{{ asset($subcategory->image) }}"
                                                        class=" img-fluid blur-up lazyload" alt="">
                                                    <h5>{{ $subcategory->title }}</h5>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            
        {{-- @endforeach --}}
    @endif


@push('js')
<script>
    $(document).ready(function() {
        $('#toggleMosques').hide();

        $('#toggleApperance').on('click', function(){
            if($(this).attr('status')=="show"){

                $('#toggleMosques').show();
                $(this).html('اخفاء خريطة المساجد');
                $(this).attr('status','hide');
            }
            else{
                $('#toggleMosques').hide();
                $(this).html('اظهار خريطة المساجد');
                $(this).attr('status','show');
            }

        });
    });
</script>
    <script>


        $('.removeCart').on('click', function(e) {
            $(this).addClass('disabled');
            e.preventDefault();
            var hash = $(this).attr('hash');
            let url = "{{ route('removeFrom.cart', ':hash') }}";
            url = url.replace(':hash', hash);
            $.ajax({
                type: 'get',
                url: url,
                success: (response) => {
                    $(this).removeClass('disabled');
                    $(this).addClass('d-none').prev().addClass(
                        'btn btn-primary').attr('hash');
                    $('.cart-count').html(response.count);
                    toastr.options = {
                        "closeButton": true,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": true,
                        "positionClass": "{{ app()->getLocale() == 'ar' ? 'toast-top-left' : 'toast-top-right' }}",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    };

                    toastr.success("{{ __('general.removed_successfully')}}");
                },
                error: function(response) {
                    alert(response.error);
                    $(".err").addClass("d-block");
                    $(".err").removeClass("d-none");
                }
            });
        });
    </script>
@endpush
