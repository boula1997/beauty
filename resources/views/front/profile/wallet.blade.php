<div class="tab-pane fade show active" id="wallet-tab-pane" role="tabpanel">
    <div class="row g-3">
        <div class="col-12">
            <div class="total-contain wallet-bg">
                <div class="wallet-point-box">
                    <div class="total-image">
                        <img src="../assets/images/dashboard/balance.png" alt=""
                            class="img-fluid">
                    </div>
                    <div class="total-detail">
                        <div class="total-box">
                            <h5>{{ __('general.WalletBalance') }}</h5>
                            <h3>${{auth('web')->user()->balance}}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card mb-0 dashboard-table mt-0">
                <div class="card-body">
                    <div class="total-box mt-0">
                        <div class="wallet-table">
                            <div class="table-responsive">
                                <table class="table cart-table order-table">
                                    <thead>
                                        <tr class="table-head">
                                            <th>{{ __('general.Date') }}</th>
                                            <th>{{ __('general.Amount') }}</th>
                                            <th>{{ __('general.Remark') }}</th>
                                            <th>{{ __('general.Status') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>06 Jul 2024
                                                03:15:PM</td>
                                            <td>$39.40</td>
                                            <td>Wallet amount
                                                successfully debited for Order #1017</td>
                                            <td>
                                                <div
                                                    class="badge bg-debit custom-badge rounded-0">
                                                    <span>{{ __('general.Debit') }}</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>25 Jun 2024
                                                06:34:PM</td>
                                            <td>$375.00</td>
                                            <td>Wallet amount
                                                successfully debited for Order #1015</td>
                                            <td>
                                                <div
                                                    class="badge bg-debit custom-badge rounded-0">
                                                    <span>{{ __('general.Debit') }}</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>24 Jun 2024
                                                02:29:PM</td>
                                            <td>$34.44</td>
                                            <td>Wallet amount
                                                successfully debited for Order #1013</td>
                                            <td>
                                                <div
                                                    class="badge bg-debit custom-badge rounded-0">
                                                    <span>{{ __('general.Debit') }}</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>21 Jun 2024
                                                04:29:PM</td>
                                            <td>$75.21</td>
                                            <td>Wallet amount
                                                successfully debited for Order #1010</td>
                                            <td>
                                                <div
                                                    class="badge bg-debit custom-badge rounded-0">
                                                    <span>{{ __('general.Debit') }}</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>21 Jun 2024
                                                03:57:PM</td>
                                            <td>$30.52</td>
                                            <td>Wallet amount
                                                successfully debited for Order #1009</td>
                                            <td>
                                                <div
                                                    class="badge bg-debit custom-badge rounded-0">
                                                    <span>{{ __('general.Debit') }}</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>21 Jun 2024
                                                03:48:PM</td>
                                            <td>$109.97</td>
                                            <td>Wallet amount
                                                successfully debited for Order #1006</td>
                                            <td>
                                                <div
                                                    class="badge bg-debit custom-badge rounded-0">
                                                    <span>{{ __('general.Debit') }}</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>21 Jun 2024
                                                03:42:PM</td>
                                            <td>$323.00</td>
                                            <td>Admin has credited
                                                the balance.</td>
                                            <td>
                                                <div
                                                    class="badge bg-credit custom-badge rounded-0">
                                                    <span>{{ __('general.Credit') }}</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>21 Jun 2024
                                                03:41:PM</td>
                                            <td>$250.00</td>
                                            <td>Admin has debited
                                                the balance.</td>
                                            <td>
                                                <div
                                                    class="badge bg-debit custom-badge rounded-0">
                                                    <span>{{ __('general.Debit') }}</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>21 Jun 2024
                                                03:41:PM</td>
                                            <td>$500.00</td>
                                            <td>Admin has credited
                                                the balance.</td>
                                            <td>
                                                <div
                                                    class="badge bg-credit custom-badge rounded-0">
                                                    <span>{{ __('general.Credit') }}</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>21 Jun 2024
                                                03:41:PM</td>
                                            <td>$100.00</td>
                                            <td>Admin has credited
                                                the balance.</td>
                                            <td>
                                                <div
                                                    class="badge bg-credit custom-badge rounded-0">
                                                    <span>{{ __('general.Credit') }}</span>
                                                </div>
                                            </td>
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