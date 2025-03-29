<div class="tab-pane fade show active" id="transaction-tab-pane" role="tabpanel">
    <div class="row">
        <div class="col-12">
            <div class="card mb-0 dashboard-table mt-0">
                <div class="card-body">
                    <div class="top-sec">
                        <h3>{{ __('general.transaction') }}</h3>
                    </div>
                    <div class="total-box mt-0">
                        <div class="wallet-table mt-0" id="transactionsTable" data-type="transactions">
                            <div class="table-responsive">

                                <table class="table cart-table order-table">
                                    <thead>
                                        <tr class="table-head">
                                            <th>{{ __('general.order_id') }}</th>
                                            <th>{{ __('general.store') }}</th>
                                            <th>{{ __('general.transactiond_id') }}</th>
                                            <th>{{ __('general.transactiond_date') }}</th>
                                            <th>{{ __('general.transactiond_type') }}</th>
                                            <th>{{ __('general.payment_name') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($transactions as $transaction)
                                            <tr>
                                                <td><span class="fw-bolder">#{{ $transaction->order_id }}</span></td>
                                                <td> <img src="{{ asset($transaction->order->orderproducts->first()->product->store->image) }}" 
                                                    alt="Store Image" 
                                                    style="width: 30px; height: 30px; border-radius: 50%; margin-right: 5px;">
                            
                                                    <span class="fw-bolder">{{ $transaction->order->orderproducts->first()->product->store->title ?? 'No Store' }}</span></td>
                                                <td><span class="fw-bolder">{{ $transaction->transaction_id }}</span></td>
                                                <td><span class="fw-bolder">{{ \Carbon\Carbon::parse($transaction->transaction_date)->format('M d, Y') }}</span></td>
                                                <td>
                                                    <span class="fw-bolder" style="color: {{ $transaction->payment_type == 'credit' ? 'green' : 'red' }};">
                                                        {{ $transaction->amount }}
                                                    </span>
                                                </td>
                                                
                                                <td><span class="fw-bolder">{{ $transaction->payment_name }}</span></td>
                                                                   
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            
                                <div class="pagination-container">
                                    {!! $transactions->appends(request()->input())->links('front.components.paginate') !!}
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>