@if ($label && $value)
    <div class="col-12 col-md-4">
        <div class="form-group">
            <label>
                {{ __('general.icon') }}
                @if ($required)
                    <span class="text-danger"> * </span>
                @endif
            </label>
            <div class="get-and-preview d-flex align-items-center">
                <!-- Preview -->
                <div class="icon-preview"
                    style="
                        float: left;
                        width: 55px;
                        height: 55px;
                        border-radius: 5px;
                        background: #fff;
                        text-align: center;
                        font-size: 30px;
                        line-height: 65px;
                        color: #1e1e1e;"
                    data-toggle="tooltip" title="Preview of selected Icon">
                    <i id="IconPreview" style="font-size: 40px;" class="{{ $value }}"></i>
                </div>

                <!-- Button -->
                <button type="button" class="btn btn-warning ml-5 text-nowrap" id="GetIconPicker"
                    data-iconpicker-input="#IconInput"
                    data-iconpicker-preview="#IconPreview">
                    {{ __('general.select_icon') }}
                </button>

                <!-- Hidden Input -->
                <input type="text" class="form-control iconpicker"
                    id="IconInput" name="icon"
                    value="{{ $value }}" hidden>
            </div>
        </div>
    </div>
@endif

@push('scripts')
    <script>
        $(document).ready(function () {
            // Initialize IconPicker
            IconPicker.Init({
                jsonUrl: "{{ asset('js/iconpicker-1.5.0.json') }}",
                searchPlaceholder: "{{ __('general.search') }}",
                showAllButton: "{{ __('general.show_all')}}",
                cancelButton: "{{ __('general.cancel')}}",
                noResultsFound: "{{ __('general.no_result')}}"
            });

            // Run IconPicker on button
            IconPicker.Run('#GetIconPicker');
        });
    </script>
@endpush
