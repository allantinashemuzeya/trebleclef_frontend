<!-- Navbar -->
<nav
    class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme"
    id="layout-navbar">
    <div class="container-xxl">
        <div
            class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-4">
            <a class="app-brand-link gap-2" href="">
                <span class="app-brand-logo demo">
                    <svg
                        fill="none" height="22" viewBox="0 0 32 22"
                        width="32"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            clip-rule="evenodd"
                            d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                            fill="#ea5455"
                            fill-rule="evenodd"/>
                        <path
                            clip-rule="evenodd"
                            d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
                            fill="#161616"
                            fill-rule="evenodd"
                            opacity="0.06"/>
                        <path
                            clip-rule="evenodd"
                            d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z"
                            fill="#161616"
                            fill-rule="evenodd"
                            opacity="0.06"/>
                        <path
                            clip-rule="evenodd"
                            d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                            fill="#ea5455"
                            fill-rule="evenodd"/>
                    </svg>
                </span>
                <span class="app-brand-text demo menu-text fw-bold">{{$title}}</span>
            </a>
            <a class="layout-menu-toggle menu-link text-large ms-auto d-xl-none"
               href="javascript:void(0);">
                <i class="ti ti-x ti-sm align-middle"></i>
            </a>
        </div>
        <div
            class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0  d-xl-none  ">
            <a class="nav-item nav-link px-0 me-xl-4"
               href="javascript:void(0)">
                <i class="ti ti-menu-2 ti-sm"></i>
            </a>
        </div>
        <div class="navbar-nav-right d-flex align-items-center"
             id="navbar-collapse">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Language -->
                <li class="nav-item dropdown-language dropdown me-2 me-xl-0">
                    <a class="nav-link dropdown-toggle hide-arrow"
                       data-bs-toggle="dropdown"
                       href="javascript:void(0);">
                        <i class='fi fi-us fis rounded-circle me-1 fs-3'></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item"
                               data-language="en"
                               href="javascript:void(0);">
                                <i class="fi fi-us fis rounded-circle me-1 fs-3"></i>
                                <span
                                    class="align-middle">English</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--/ Language -->
                <!-- Search -->
                <li class="nav-item navbar-search-wrapper me-2 me-xl-0">
                    <a class="nav-link search-toggler"
                       href="javascript:void(0);">
                        <i class="ti ti-search ti-md"></i>
                    </a>
                </li>
                <!-- /Search -->
                <!-- Style Switcher -->
                <li class="nav-item me-2 me-xl-0 d-none">
                    <a class="nav-link style-switcher-toggle hide-arrow"
                       href="javascript:void(0);">
                        <i class='ti ti-md'></i>
                    </a>
                </li>
                <!--/ Style Switcher -->
                <!-- Quick links  -->
                <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0">
                    <a aria-expanded="false"
                       class="nav-link dropdown-toggle hide-arrow"
                       data-bs-auto-close="outside"
                       data-bs-toggle="dropdown"
                       href="javascript:void(0);">
                        <i class='ti ti-layout-grid-add ti-md'></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end py-0">
                        <div class="dropdown-menu-header border-bottom">
                            <div
                                class="dropdown-header d-flex align-items-center py-3">
                                <h5 class="text-body mb-0 me-auto">
                                    Shortcuts</h5>
                                <a class="dropdown-shortcuts-add text-body"
                                   data-bs-placement="top"
                                   data-bs-toggle="tooltip"
                                   href="javascript:void(0)"
                                   title="Add shortcuts">
                                    <i
                                        class="ti ti-sm ti-apps"></i>
                                </a>
                            </div>
                        </div>
                        <div class="dropdown-shortcuts-list scrollable-container">
                            @php
                                $shortcuts = $navbar['shortcuts'];
                                $chunkedShortcuts = array_chunk($shortcuts, 2);
                            @endphp

                            @foreach ($chunkedShortcuts as $chunk)
                                <div class="row row-bordered overflow-visible g-0">
                                    @foreach ($chunk as $shortcut)
                                        <div class="dropdown-shortcuts-item col">
                                            <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                                                <i class="{{ $shortcut['icon'] }}"></i>
                                            </span>
                                            <a class="stretched-link" href="{{ $shortcut['link'] }}">{{ $shortcut['name'] }}</a>
                                            <small class="text-muted mb-0">{{ $shortcut['description'] }}</small>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>
                </li>
                <!-- Quick links -->
                <!-- Notification -->
                <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
                    <a aria-expanded="false"
                       class="nav-link dropdown-toggle hide-arrow"
                       data-bs-auto-close="outside"
                       data-bs-toggle="dropdown"
                       href="javascript:void(0);">
                        <i class="ti ti-bell ti-md"></i>
                        <span
                            class="badge bg-danger rounded-pill badge-notifications">5</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end py-0">
                        <li class="dropdown-menu-header border-bottom">
                            <div
                                class="dropdown-header d-flex align-items-center py-3">
                                <h5 class="text-body mb-0 me-auto">
                                    Notification</h5>
                                <a class="dropdown-notifications-all text-body"
                                   data-bs-placement="top"
                                   data-bs-toggle="tooltip"
                                   href="javascript:void(0)"
                                   title="Mark all as read">
                                    <i
                                        class="ti ti-mail-opened fs-4"></i>
                                </a>
                            </div>
                        </li>
                        <li class="dropdown-notifications-list scrollable-container">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar">
                                                <img
                                                    alt
                                                    class="h-auto rounded-circle"
                                                    src="/WebApplication/assets/img/avatars/1.png">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">
                                                Congratulation Lettie
                                                🎉</h6>
                                            <p class="mb-0">Won the
                                                monthly best seller gold
                                                badge</p>
                                            <small class="text-muted">1h
                                                ago</small>
                                        </div>
                                        <div
                                            class="flex-shrink-0 dropdown-notifications-actions">
                                            <a class="dropdown-notifications-read"
                                               href="javascript:void(0)">
																									<span
                                                                                                        class="badge badge-dot"></span>
                                            </a>
                                            <a class="dropdown-notifications-archive"
                                               href="javascript:void(0)">
																									<span
                                                                                                        class="ti ti-x"></span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar">
																									<span
                                                                                                        class="avatar-initial rounded-circle bg-label-danger">CF</span>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Charles
                                                Franklin</h6>
                                            <p class="mb-0">Accepted
                                                your connection</p>
                                            <small class="text-muted">12hr
                                                ago</small>
                                        </div>
                                        <div
                                            class="flex-shrink-0 dropdown-notifications-actions">
                                            <a class="dropdown-notifications-read"
                                               href="javascript:void(0)">
																									<span
                                                                                                        class="badge badge-dot"></span>
                                            </a>
                                            <a class="dropdown-notifications-archive"
                                               href="javascript:void(0)">
																									<span
                                                                                                        class="ti ti-x"></span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar">
                                                <img
                                                    alt
                                                    class="h-auto rounded-circle"
                                                    src="/WebApplication/assets/img/avatars/2.png">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">New Message
                                                ✉️</h6>
                                            <p class="mb-0">You have new
                                                message from Natalie</p>
                                            <small class="text-muted">1h
                                                ago</small>
                                        </div>
                                        <div
                                            class="flex-shrink-0 dropdown-notifications-actions">
                                            <a class="dropdown-notifications-read"
                                               href="javascript:void(0)">
																										<span
                                                                                                            class="badge badge-dot"></span>
                                            </a>
                                            <a class="dropdown-notifications-archive"
                                               href="javascript:void(0)">
																										<span
                                                                                                            class="ti ti-x"></span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar">
																										<span
                                                                                                            class="avatar-initial rounded-circle bg-label-success">
																											<i
                                                                                                                class="ti ti-shopping-cart"></i>
																										</span>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Whoo! You
                                                have new order 🛒 </h6>
                                            <p class="mb-0">ACME Inc.
                                                made new order
                                                $1,154</p>
                                            <small class="text-muted">1
                                                day ago</small>
                                        </div>
                                        <div
                                            class="flex-shrink-0 dropdown-notifications-actions">
                                            <a class="dropdown-notifications-read"
                                               href="javascript:void(0)">
																										<span
                                                                                                            class="badge badge-dot"></span>
                                            </a>
                                            <a class="dropdown-notifications-archive"
                                               href="javascript:void(0)">
																										<span
                                                                                                            class="ti ti-x"></span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar">
                                                <img
                                                    alt
                                                    class="h-auto rounded-circle"
                                                    src="/WebApplication/assets/img/avatars/9.png">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Application
                                                has been approved
                                                🚀 </h6>
                                            <p class="mb-0">Your ABC
                                                project application has
                                                been approved.</p>
                                            <small class="text-muted">2
                                                days ago</small>
                                        </div>
                                        <div
                                            class="flex-shrink-0 dropdown-notifications-actions">
                                            <a class="dropdown-notifications-read"
                                               href="javascript:void(0)">
																											<span
                                                                                                                class="badge badge-dot"></span>
                                            </a>
                                            <a class="dropdown-notifications-archive"
                                               href="javascript:void(0)">
																											<span
                                                                                                                class="ti ti-x"></span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar">
																											<span
                                                                                                                class="avatar-initial rounded-circle bg-label-success">
																												<i
                                                                                                                    class="ti ti-chart-pie"></i>
																											</span>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Monthly
                                                report is generated</h6>
                                            <p class="mb-0">July monthly
                                                financial report is
                                                generated </p>
                                            <small class="text-muted">3
                                                days ago</small>
                                        </div>
                                        <div
                                            class="flex-shrink-0 dropdown-notifications-actions">
                                            <a class="dropdown-notifications-read"
                                               href="javascript:void(0)">
																											<span
                                                                                                                class="badge badge-dot"></span>
                                            </a>
                                            <a class="dropdown-notifications-archive"
                                               href="javascript:void(0)">
																											<span
                                                                                                                class="ti ti-x"></span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar">
                                                <img
                                                    alt
                                                    class="h-auto rounded-circle"
                                                    src="/WebApplication/assets/img/avatars/5.png">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Send
                                                connection request</h6>
                                            <p class="mb-0">Peter sent
                                                you connection
                                                request</p>
                                            <small class="text-muted">4
                                                days ago</small>
                                        </div>
                                        <div
                                            class="flex-shrink-0 dropdown-notifications-actions">
                                            <a class="dropdown-notifications-read"
                                               href="javascript:void(0)">
																												<span
                                                                                                                    class="badge badge-dot"></span>
                                            </a>
                                            <a class="dropdown-notifications-archive"
                                               href="javascript:void(0)">
																												<span
                                                                                                                    class="ti ti-x"></span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar">
                                                <img
                                                    alt
                                                    class="h-auto rounded-circle"
                                                    src="/WebApplication/assets/img/avatars/6.png">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">New message
                                                from Jane</h6>
                                            <p class="mb-0">Your have
                                                new message from
                                                Jane</p>
                                            <small class="text-muted">5
                                                days ago</small>
                                        </div>
                                        <div
                                            class="flex-shrink-0 dropdown-notifications-actions">
                                            <a class="dropdown-notifications-read"
                                               href="javascript:void(0)">
																													<span
                                                                                                                        class="badge badge-dot"></span>
                                            </a>
                                            <a class="dropdown-notifications-archive"
                                               href="javascript:void(0)">
																													<span
                                                                                                                        class="ti ti-x"></span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar">
																													<span
                                                                                                                        class="avatar-initial rounded-circle bg-label-warning">
																														<i
                                                                                                                            class="ti ti-alert-triangle"></i>
																													</span>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">CPU is
                                                running high</h6>
                                            <p class="mb-0">CPU
                                                Utilization Percent is
                                                currently at 88.63%,</p>
                                            <small class="text-muted">5
                                                days ago</small>
                                        </div>
                                        <div
                                            class="flex-shrink-0 dropdown-notifications-actions">
                                            <a class="dropdown-notifications-read"
                                               href="javascript:void(0)">
																													<span
                                                                                                                        class="badge badge-dot"></span>
                                            </a>
                                            <a class="dropdown-notifications-archive"
                                               href="javascript:void(0)">
																													<span
                                                                                                                        class="ti ti-x"></span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown-menu-footer border-top">
                            <a class="dropdown-item d-flex justify-content-center text-primary p-2 h-px-40 mb-1 align-items-center"
                               href="javascript:void(0);">
                                View all notifications
                            </a>
                        </li>
                    </ul>
                </li>
                <!--/ Notification -->
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                    <a class="nav-link dropdown-toggle hide-arrow"
                       data-bs-toggle="dropdown"
                       href="javascript:void(0);">
                        <div class="avatar avatar-online">
                         <img alt class="h-auto rounded-circle"
                            src="https://ui-avatars.com/api/?name={{
                             Auth::user()->data['first_name']}}+{{Auth::user()->data['last_name']}}
                             &size=128&background=0D8ABC&color=fff">
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item"
                               href="{{route('profile')}}">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <div
                                            class="avatar avatar-online">
                                            <img alt class="h-auto rounded-circle"
                                                 src="https://ui-avatars.com/api/?name={{
                                                 Auth::user()->data['first_name']}}+{{Auth::user()->data['last_name']}}
                                                 &size=128&background=0D8ABC&color=fff">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
										<span class="fw-semibold d-block">{{Auth::user()->name}}</span>
                                        <small
                                            class="text-muted">{{Auth::user()->getRoleNames()[0]}}</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item"
                               href="{{route('profile')}}">
                                <i class="ti ti-user-check me-2 ti-sm"></i>
                                <span
                                    class="align-middle">My Profile</span>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item"
                               href="{{route('help')}}">
                                <i class="ti ti-lifebuoy me-2 ti-sm"></i>
                                <span class="align-middle">Help</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item"
                               href="{{route('support')}}">
                                <i class="ti ti-help me-2 ti-sm"></i>
                                <span class="align-middle">Support</span>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item"
                               href="{{route('logout')}}"
                               target="_blank">
                                <i class="ti ti-logout me-2 ti-sm"></i>
                                <span class="align-middle">Log Out</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--/ User -->
            </ul>
        </div>
        <!-- Search Small Screens -->
        <div
            class="navbar-search-wrapper search-input-wrapper container-xxl d-none">
            <input aria-label="Search..."
                   class="form-control search-input  border-0"
                   placeholder="Search..." type="text">
            <i class="ti ti-x ti-sm search-toggler cursor-pointer"></i>
        </div>
    </div>
</nav>
<!-- / Navbar -->
