<div class="tab-pane fade show active" id="order-tab-pane" role="tabpanel">
    <div class="row">
        <div class="card mb-0 dashboard-table mt-0">
            <div class="card-body">
                <div class="top-sec">

                </div>
                <div class="total-box mt-0">
                    <div class="wallet-table mt-0" id="ordersTable" data-type="orders">
                        <div class="table-responsive">
                            <table class="table cart-table order-table">
                                <thead>
                                    <tr class="table-head">
                                        <th>{{ __('general.OrderNumber') }}</th>
                                        <th>{{ __('general.Date') }}</th>
                                        <th>{{ __('general.Amount') }}</th>
                                        <th>{{ __('general.status') }}</th>
                                        <th>{{ __('general.PaymentStatus') }}</th>
                                        <th>{{ __('general.PaymentMethod') }}</th>
                                        <th>{{ __('general.Option') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td><span
                                                    class="fw-bolder">#{{ $order->id }}</span>
                                            </td>
                                            <td>{{ $order->created_at }}</td>
                                            <td>{{ $order->total }} <img class="currencySize" src="{{ asset("sar.svg") }}" alt="SAR" width="20" height="20"></td>
                                            <td>
                                                <div
                                                    class="badge bg-pending custom-badge rounded-0">
                                                    <span>{{ $order->status }}</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div
                                                    class="badge bg-pending custom-badge rounded-0">
                                                    <span>{{ $order->payment_status }}</span>
                                                </div>
                                            </td>
                                            <td>{{ $order->payment_method }}</td>
                                            <td>
                                                <a
                                                    href="{{ route('showOneOrder', $order->id) }}"><i
                                                        class="ri-eye-line"></i></a>
                                                        @if ($order->status == 'pending')
                                                        <button class="btn btn-sm  border-0 p-0" 
                                                            data-bs-toggle="modal" 
                                                            data-bs-target="#cancelModal{{ $order->id }}">
                                                            <i class="ri-close-line fs-5 text-danger"></i>
                                                        </button>
                                                    @endif
                                            </td>
                                        </tr>
                        
                                        <!-- Cancel Modal -->
                                        <div class="modal fade"
                                            id="cancelModal{{ $order->id }}"
                                            tabindex="-1"
                                            aria-labelledby="cancelModalLabel{{ $order->id }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                        
                                                    <!-- Modal Header -->
                                                    <div
                                                        class="modal-header bg-danger text-white">
                                                        <h5 class="modal-title fw-bold"
                                                            id="cancelModalLabel{{ $order->id }}">
                                                            <i
                                                                class="ri-error-warning-line"></i>
                                                            {{ __('general.CancelOrder') }}
                                                        </h5>
                                                        <button type="button"
                                                            class="btn-close btn-close-white"
                                                            data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                        
                                                    <!-- Modal Body -->
                                                    <div class="modal-body">
                                                        <p class="text-center fw-semibold">
                                                            {{ __('general.AreYouSureCancel') }}
                                                        </p>
                        
                                                        <!-- Order Cancellation Options -->
                                                        <form
                                                            action="{{ route('cancelOrder') }}"
                                                            method="POST">
                                                            @csrf
                        
                                                            <div
                                                                class="order-options p-3 bg-light rounded">
                                                                <h5 class="fw-bold">
                                                                    {{ __('general.Choose an Option') }}
                                                                </h5>
                        
                                                                <div class="form-check mb-2">
                                                                    <input type="hidden" name="order_id" value="{{$order->id}}">
                                                                    <input
                                                                        class="form-check-input"
                                                                        type="radio"
                                                                        name="order_option"
                                                                        id="change_order{{ $order->id }}"
                                                                        value="change_order">
                                                                    <label
                                                                        class="form-check-label"
                                                                        for="change_order{{ $order->id }}">
                                                                        <i
                                                                            class="ri-refresh-line"></i>
                                                                        {{ __('general.Want to Change Order') }}
                                                                    </label>
                                                                </div>
                        
                                                                <div class="form-check mb-2">
                                                                    <input
                                                                        class="form-check-input"
                                                                        type="radio"
                                                                        name="order_option"
                                                                        id="change_voucher{{ $order->id }}"
                                                                        value="change_voucher">
                                                                    <label
                                                                        class="form-check-label"
                                                                        for="change_voucher{{ $order->id }}">
                                                                        <i
                                                                            class="ri-price-tag-3-line"></i>
                                                                        {{ __('general.Want to Enter/Change Voucher Code') }}
                                                                    </label>
                                                                </div>
                        
                                                                <div class="form-check mb-2">
                                                                    <input
                                                                        class="form-check-input"
                                                                        type="radio"
                                                                        name="order_option"
                                                                        id="dont_want{{ $order->id }}"
                                                                        value="dont_want">
                                                                    <label
                                                                        class="form-check-label"
                                                                        for="dont_want{{ $order->id }}">
                                                                        <i
                                                                            class="ri-close-circle-line"></i>
                                                                        {{ __('general.Don\'t Want to Buy') }}
                                                                    </label>
                                                                </div>
                        
                                                                <div class="form-check">
                                                                    <input
                                                                        class="form-check-input"
                                                                        type="radio"
                                                                        name="order_option"
                                                                        id="other_option{{ $order->id }}"
                                                                        value="other">
                                                                    <label
                                                                        class="form-check-label"
                                                                        for="other_option{{ $order->id }}">
                                                                        <i
                                                                            class="ri-question-line"></i>
                                                                        {{ __('general.Other') }}
                                                                    </label>
                                                                </div>
                        
                                                                <!-- Textarea for 'Other' Option -->
                                                                <div id="other_reason{{ $order->id }}"
                                                                    class="mt-3 d-none">
                                                                    <label
                                                                        for="other_textarea{{ $order->id }}"
                                                                        class="fw-semibold">{{ __('general.Please specify') }}:</label>
                                                                    <textarea class="form-control" id="other_textarea{{ $order->id }}" name="other_reason" rows="3"
                                                                        placeholder="{{ __('general.Enter your reason') }}"></textarea>
                                                                </div>
                                                            </div>
                        
                                                            <!-- Modal Footer -->
                                                            <div
                                                                class="modal-footer justify-content-center">
                                                                <button type="button"
                                                                    class="btn btn-secondary px-4"
                                                                    data-bs-dismiss="modal">
                                                                    <i
                                                                        class="ri-close-line"></i>
                                                                    {{ __('general.Close') }}
                                                                </button>
                                                                
                                                                <button type="submit"
                                                                    class="btn btn-danger px-4">
                                                                    <i class="ri-delete-bin-6-line"></i>
                                                                    {{ __('general.ConfirmCancel') }}
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Cancel Modal -->
                                    @endforeach
                                </tbody>
                            </table>
                        
                            <div class="pagination-container">
                                {!! $orders->appends(request()->input())->links('front.components.paginate') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('js')

    <script>
        $(document).ready(function () {
            $(document).on('change','input[type="radio"]',function () {
                let orderId = $(this).attr('id').match(/\d+/); // Get order ID dynamically
                if ($('#other_option' + orderId).is(':checked')) {
                    $('#other_reason' + orderId).removeClass('d-none').hide().fadeIn();
                } else {
                    $('#other_reason' + orderId).fadeOut(function () {
                        $(this).addClass('d-none');
                    });
                }
            });
        });
    </script>
    
@endpush