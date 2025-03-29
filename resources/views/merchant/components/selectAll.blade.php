@if ($on && $off)
    <div class="row">
        <div class="col-md-3">
            <div
                class="custom-control custom-switch custom-switch-off-{{ $off }} custom-switch-on-{{ $on }}">
                <input type="checkbox" class="custom-control-input" value="{{ true }}" id="selectAll">
                <label class="custom-control-label" id="label" for="selectAll">{{ __('general.selectAll')}}</label>
            </div>
        </div>
    </div>
@endif


@push('scripts')
    <script>
        $(document).ready(function() {
            $("#selectAll").on('click', function() {
                if (this.checked) {
                    $('#label').html("{{ __('general.dselectAll')}}");
                } else {
                    $('#label').html("{{ __('general.selectAll')}}");
                }

                $('input:checkbox').not(this).prop('checked', this.checked);
            });
        })
    </script>
@endpush
