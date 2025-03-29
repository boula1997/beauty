<div class="tab-pane fade show active" id="refund-tab-pane" role="tabpanel">
    <div class="row">
        <div class="col-12">
            <div class="card mb-0 dashboard-table mt-0">
                <div class="card-body">
                    <div class="top-sec">
                        <h3>{{ __('general.Refund') }}</h3>
                    </div>
                    <div class="total-box mt-0">
                        <div class="wallet-table mt-0">
                            <div class="table-responsive">
                                <table class="table cart-table order-table">
                                    <thead>
                                        <tr class="table-head">
                                            <th>{{ __('general.Order') }}</th>
                                            <th>{{ __('general.Status') }}</th>
                                            <th class="reason-table">
                                                {{ __('general.Reason') }}</th>
                                            <th>{{ __('general.created_at') }}</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><span class="fw-bolder">#1000</span></td>
                                            <td>
                                                <div class="status-rejected">
                                                    <span>{{ __('general.Rejected') }}</span>
                                                </div>
                                            </td>
                                            <td class="reason-table">Item was damaged . also
                                                fabric was not
                                                good as expected</td>
                                            <td>21 Jun 2024</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="product-pagination">
                            <div class="theme-paggination-block">
                                <nav>
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#!"
                                                aria-label="Previous">
                                                <span>
                                                    <i class="ri-arrow-left-s-line"></i>
                                                </span>
                                                <span
                                                    class="sr-only">{{ __('general.Previous') }}</span>
                                            </a>
                                        </li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#!">1</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#!">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#!">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#!"
                                                aria-label="Next">
                                                <span>
                                                    <i class="ri-arrow-right-s-line"></i>
                                                </span>
                                                <span
                                                    class="sr-only">{{ __('general.Next') }}</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>