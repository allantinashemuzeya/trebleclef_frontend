@extends('layouts.home')
@section('content')

    <!-- account setting page -->
    <section id="page-account-settings">
        <div class="row">
            <!-- left menu section -->
            <div class="col-md-3 mb-2 mb-md-0">
                <ul class="nav nav-pills flex-column nav-left">
                    <!-- general -->
                    <li class="nav-item">
                        <a
                            class="nav-link active"
                            id="account-pill-general"
                            data-bs-toggle="pill"
                            href="#account-vertical-general"
                            aria-expanded="true"
                        >
                            <i data-feather="user" class="font-medium-3 me-1"></i>
                            <span class="fw-bold">General</span>
                        </a>
                    </li>

                    <!-- change password -->
                    <li class="nav-item">
                        <a
                            class="nav-link"
                            id="account-pill-password"
                            data-bs-toggle="pill"
                            href="#account-vertical-password"
                            aria-expanded="false"
                        >
                            <i data-feather="lock" class="font-medium-3 me-1"></i>
                            <span class="fw-bold">Change Password</span>
                        </a>
                    </li>

                    <!-- information -->
                    <li class="nav-item">
                        <a class="nav-link"
                            id="account-pill-info"
                            data-bs-toggle="pill"
                            href="#account-vertical-info"
                            aria-expanded="false">
                            <i data-feather="info" class="font-medium-3 me-1"></i>
                            <span class="fw-bold">Information</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!--/ left menu section -->

           @livewire('user-details')
        </div>
    </section>
    <!-- / account setting page -->
@endsection
