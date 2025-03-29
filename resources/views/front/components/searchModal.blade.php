<!-- Search Modal Start -->
<div class="modal fade search-modal theme-modal-2" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title fs-5">Search in store</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                    <i class="ri-close-line"></i>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-header" action="{{ route('front.search') }}" method="GET">

                    <div class="search-input-box">
                        <input type="text" class="form-control" id="search"  name="search" placeholder="Search with brands and categories...">
                        <i class="ri-search-2-line"></i>

                    </div>

                </form>

                <div class="search-product-box mt-sm-4 mt-3">
                    <h3 class="search-title">{{ __('general.MostSearched') }}</h3>
                    <div id="searchResults">
                            {{-- @include('front.components.search_results', ['products' => $products ])  --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Search Modal End -->
 

@push('js')
<script>
$(document).ready(function () {
    function fetchSearchResults(query, page = 1) {
        console.log("Searching for:", query); // للتحقق من أن البحث يتم استدعاؤه
        $.ajax({
            url: "{{ route('front.search') }}",
            type: "GET",
            data: { search: query, page: page },
            beforeSend: function () {
                $('#searchResults').html('<p>Loading...</p>'); // إظهار رسالة تحميل
            },
            success: function (data) {
                console.log("Search results received:", data); // فحص الاستجابة
                $('#searchResults').html(data);
            },
            error: function (xhr, status, error) {
                console.error("AJAX Error:", error);
                $('#searchResults').html('<p class="text-danger">Error fetching results.</p>');
            }
        });
    }

    $('#search').on('keyup', function () {
        let query = $(this).val();
        if (query.length > 2) {
            fetchSearchResults(query);
        } else {
            $('#searchResults').html('');
        }
    });

    $('.form-header').on('submit', function (event) {
        if ($('#searchModal').is(':visible')) { // التحقق من أن المودال مفتوح
            event.preventDefault();
            let query = $('#search').val();
            if (query.length > 2) {
                fetchSearchResults(query);
            }
        }
    });


    $(document).on('click', '.search-pagination a', function (event) {
        event.preventDefault();
        let query = $('#search').val();
        let page = $(this).attr('href').split('page=')[1];
        fetchSearchResults(query, page);
    });
});
</script>
@endpush