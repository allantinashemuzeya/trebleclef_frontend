<!-- right content section -->
<div class="col-md-9">
    <div class="card">
        <div class="card-body">
            <div class="tab-content">
                <!-- general tab -->
                <div
                    role="tabpanel"
                    class="tab-pane active"
                    id="account-vertical-general"
                    aria-labelledby="account-pill-general"
                    aria-expanded="true"
                >
                    <!-- header section -->
                    <div class="d-flex">
                        <a href="#" class="me-25">
                            <img
                                src="../../../app-assets/images/portrait/small/avatar-s-11.jpg"
                                id="account-upload-img"
                                class="rounded me-50"
                                alt="profile image"
                                height="80"
                                width="80" />
                        </a>

                        <!-- upload and reset button -->
                        <form wire:submit.prevent="save">
                            <div class="mt-75 ms-1">
                                <label for="account-upload" class="btn btn-sm btn-primary mb-75 me-75">Upload</label>
                                <input type="file" id="account-upload" hidden accept="image/*" />
                                <button class="btn btn-sm btn-outline-secondary mb-75">Reset</button>
                                <p>Allowed JPG, GIF or PNG. Max size of 800kB</p>
                            </div>
                        </form>

                        <!--/ upload and reset button -->
                    </div>
                    <!--/ header section -->

                    <!-- form -->
                    <form class="validate-form mt-2" wire:submit.prevent="saveProfilePicture">
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="mb-1">
                                    <label class="form-label" for="account-username">Username</label>
                                    <input type="text"
                                           class="form-control"
                                           id="account-username"
                                           name="username"
                                           placeholder="Username"
                                           value="johndoe"
                                    />
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="mb-1">
                                    <label class="form-label" for="account-name">Name</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="account-name"
                                        name="name"
                                        placeholder="Name"
                                        value="John Doe"
                                    />
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="mb-1">
                                    <label class="form-label" for="account-e-mail">E-mail</label>
                                    <input
                                        type="email"
                                        class="form-control"
                                        id="account-e-mail"
                                        name="email"
                                        placeholder="Email"
                                        value="granger007@hogward.com"
                                    />
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="mb-1">
                                    <label class="form-label" for="account-company">Company</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="account-company"
                                        name="company"
                                        placeholder="Company name"
                                        value="Crystal Technologies"
                                    />
                                </div>
                            </div>
                            <div class="col-12 mt-75">
                                <div class="alert alert-warning mb-50" role="alert">
                                    <h4 class="alert-heading">Your email is not confirmed. Please check your inbox.</h4>
                                    <div class="alert-body">
                                        <a href="javascript: void(0);" class="alert-link">Resend confirmation</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary mt-2 me-1">Save changes</button>
                                <button type="reset" class="btn btn-outline-secondary mt-2">Cancel</button>
                            </div>
                        </div>
                    </form>
                    <!--/ form -->
                </div>
                <!--/ general tab -->

                <!-- change password -->
                <div
                    class="tab-pane fade"
                    id="account-vertical-password"
                    role="tabpanel"
                    aria-labelledby="account-pill-password"
                    aria-expanded="false"
                >
                    <!-- form -->
                    <form class="validate-form">
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="mb-1">
                                    <label class="form-label" for="account-old-password">Old Password</label>
                                    <div class="input-group form-password-toggle input-group-merge">
                                        <input
                                            type="password"
                                            class="form-control"
                                            id="account-old-password"
                                            name="password"
                                            placeholder="Old Password"
                                        />
                                        <div class="input-group-text cursor-pointer">
                                            <i data-feather="eye"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="mb-1">
                                    <label class="form-label" for="account-new-password">New Password</label>
                                    <div class="input-group form-password-toggle input-group-merge">
                                        <input
                                            type="password"
                                            id="account-new-password"
                                            name="new-password"
                                            class="form-control"
                                            placeholder="New Password"
                                        />
                                        <div class="input-group-text cursor-pointer">
                                            <i data-feather="eye"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="mb-1">
                                    <label class="form-label" for="account-retype-new-password">Retype New Password</label>
                                    <div class="input-group form-password-toggle input-group-merge">
                                        <input
                                            type="password"
                                            class="form-control"
                                            id="account-retype-new-password"
                                            name="confirm-new-password"
                                            placeholder="New Password"
                                        />
                                        <div class="input-group-text cursor-pointer"><i data-feather="eye"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary me-1 mt-1">Save changes</button>
                                <button type="reset" class="btn btn-outline-secondary mt-1">Cancel</button>
                            </div>
                        </div>
                    </form>
                    <!--/ form -->
                </div>
                <!--/ change password -->

                <!-- information -->
                <div
                    class="tab-pane fade"
                    id="account-vertical-info"
                    role="tabpanel"
                    aria-labelledby="account-pill-info"
                    aria-expanded="false">
                    <!-- form -->
                    <form class="validate-form">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="accountTextarea">Bio</label>
                                    <textarea
                                        class="form-control"
                                        id="accountTextarea"
                                        rows="4"
                                        placeholder="Your Bio data here..."
                                    ></textarea>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="mb-1">
                                    <label class="form-label" for="account-birth-date">Birth date</label>
                                    <input
                                        type="text"
                                        class="form-control flatpickr"
                                        placeholder="Birth date"
                                        id="account-birth-date"
                                        name="dob"
                                    />
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="mb-1">
                                    <label class="form-label" for="accountSelect">Country</label>
                                    <select class="form-select" id="accountSelect">
                                        <option>USA</option>
                                        <option>India</option>
                                        <option>Canada</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="mb-1">
                                    <label class="form-label" for="account-website">Website</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="website"
                                        id="account-website"
                                        placeholder="Website address"
                                    />
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="mb-1">
                                    <label class="form-label" for="account-phone">Phone</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="account-phone"
                                        placeholder="Phone number"
                                        value="(+656) 254 2568"
                                        name="phone"
                                    />
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary mt-1 me-1">Save changes</button>
                                <button type="reset" class="btn btn-outline-secondary mt-1">Cancel</button>
                            </div>
                        </div>
                    </form>
                    <!--/ form -->
                </div>
                <!--/ information -->

            </div>
        </div>
    </div>
</div>
<!--/ right content section -->
