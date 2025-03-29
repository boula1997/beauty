    <div class="tab-pane fade show active" id="info-tab-pane" role="tabpanel">
        <div class="counter-section">
            <div class="welcome-msg">
                <h4>{{ __('general.welcome_message') }} {{ auth()->user()->fullname }}</h4>
                <p>{{ __('general.welcome_message_desc') }}</p>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="counter-box">
                        <div>
                            <h3>{{ auth()->user()->balance }} <img class="currencySize" src="{{ asset("sar.svg") }}" alt="SAR" width="20" height="20"></h3>
                            <h5>{{ __('general.balance') }}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="counter-box">
                        <div>
                            <h3>{{ auth()->user()->orders->sum('total') }} <img class="currencySize" src="{{ asset("sar.svg") }}" alt="SAR" width="20" height="20"></h3>
                            <h5>{{ __('general.TotalOrder') }}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="counter-box">
                        <div>
                            <h3>{{ count(auth()->user()->orders) }}</h3>
                            <h5>{{ __('general.TotalOrders') }}</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-account box-info">
                <div class="box-head">
                    <h4>{{ __('general.AccountInformation') }}</h4>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="box">
                            <ul class="box-content">
                                <li class="w-100">
                                    <h6>{{ __('general.FullName') }}:
                                        {{ auth()->user()->fullname }}</h6>
                                </li>
                                <li class="w-100">
                                    <h6>{{ __('general.Phone') }}: {{ auth()->user()->phone }}
                                    </h6>
                                </li>
                                <li class="w-100">
                                    <h6>{{ __('general.Address') }}: 26, Starts Hollow Colony
                                        Denver, Colorado, United States 80014</h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="box mt-3">
                    <div class="box-head">
                        <h4>{{ __('general.LoginDetails') }}</h4>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <h6>{{ __('general.email') }}: {{ auth()->user()->email }}</h6>
                            <a href="#edit-profile"
                                data-bs-toggle="modal">{{ __('general.edit') }}</a>
                        </div>
                        <div class="col-sm-6">
                            <h6>{{ __('general.password') }}: ●●●●●●</h6>
                            <a href="#edit-password"
                                data-bs-toggle="modal">{{ __('general.edit') }}</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- edit profile starts -->
    <div class="modal fade theme-modal-2" id="edit-profile" tabindex="-1">
        <div class=" modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="fw-semibold">Edit Profile</h3>
                    <button class="btn btn-close" type="submit" data-bs-dismiss="modal">
                        <i class="ri-close-line"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('update_profile') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            <div class="col-xxl-12 text-center">
                                <label for="profile_image" class="form-label">Profile Image</label>
                                <input type="file" name="image" id="profile_image" class="form-control" accept="image/*">
                            </div>
                    
                            <div class="col-xxl-12">
                                <div class="form-box">
                                    <label for="fullname" class="form-label">{{ __('general.fullname') }}</label>
                                    <input name="fullname" id="fullname" type="text"
                                        value="{{ auth('web')->user()->fullname }}" class="form-control"
                                        placeholder="Enter Name" required>
                                </div>
                            </div>
                    
                            <div class="col-xxl-12">
                                <div class="form-box">
                                    <label for="email" class="form-label">{{ __('general.Email') }}</label>
                                    <input name="email" id="email" type="email"
                                        value="{{ auth('web')->user()->email }}" class="form-control"
                                        placeholder="Enter Email" required>
                                </div>
                            </div>
                    
                            <div class="col-xxl-12">
                                <div class="form-box">
                                    <label for="phone" class="form-label">{{ __('general.PhoneNumber') }}</label>
                                    <input name="phone" id="phone" type="tel"
                                        value="{{ auth('web')->user()->phone }}" class="form-control"
                                        placeholder="Enter Phone Number" required>
                                </div>
                            </div>
                        </div>
                    
                        <div class="mt-3 d-flex align-items-center justify-content-end gap-2">
                            <button class="btn btn-md btn-outline fw-bold" type="button" data-bs-dismiss="modal">
                                Cancel
                            </button>
                            <button class="btn btn-solid" type="submit">
                                Submit
                            </button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- edit profile end -->

    <!-- edit password starts -->
    <form action="{{ route('update-password') }}" method="POST">
        @csrf
        <div class="modal fade theme-modal-2" id="edit-password" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="fw-semibold">{{ __('general.EditPassword') }}</h3>
                        <button class="btn btn-close" type="button" data-bs-dismiss="modal">
                            <i class="ri-close-line"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-xxl-12">
                                <div class="form-box">
                                    <label for="current"
                                        class="form-label">{{ __('general.CurrentPassword') }}</label>
                                    <input id="current" name="current_password" type="password"
                                        class="form-control" placeholder="Enter Current Password" required>
                                </div>
                            </div>
                            <div class="col-xxl-12">
                                <div class="form-box">
                                    <label for="New" class="form-label">{{ __('general.NewPassword') }}</label>
                                    <input id="New" name="new_password" type="password" class="form-control"
                                        placeholder="Enter New Password" required>
                                </div>
                            </div>
                            <div class="col-xxl-12">
                                <div class="form-box">
                                    <label for="Confirm"
                                        class="form-label">{{ __('general.ConfirmPassword') }}</label>
                                    <input id="Confirm" name="new_password_confirmation" type="password"
                                        class="form-control" placeholder="Enter Confirm Password" required>
                                </div>
                            </div>
                        </div>

                        <div class="mt-3 d-flex align-items-center justify-content-end gap-2">
                            <button class="btn btn-md btn-outline fw-bold" type="button" data-bs-dismiss="modal">
                                Cancel
                            </button>
                            <button class="btn btn-solid" type="submit">
                                Submit
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- edit password end -->
