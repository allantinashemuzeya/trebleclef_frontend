<header class="header navbar navbar-expand-sm">
    <a href="javascript:void(0);" class="sidebarCollapse"
       data-placement="bottom">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
             viewBox="0 0 24 24" fill="none" stroke="currentColor"
             stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
             class="feather feather-menu">
            <line x1="3" y1="12" x2="21" y2="12"></line>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <line x1="3" y1="18" x2="21" y2="18"></line>
        </svg>
    </a>

    <div class="nav-logo align-self-center">
        <a class="navbar-brand" href="index.html" style="background: white;border-radius: 5px;max-width: 116px;">
            <img alt="logo" src="/tca_online/main_application/assets/img/treble Clef_logo original.png" style="width: 106px;height: 44px;border-radius: 5px;padding: 1px;">
            <span class="navbar-brand-name"></span></a>
    </div>

    <ul class="navbar-item flex-row mr-auto">
{{--        <li class="nav-item align-self-center search-animated">--}}
{{--            <form class="form-inline search-full form-inline search"--}}
{{--                  role="search">--}}
{{--                <div class="search-bar">--}}
{{--                    <input type="text"--}}
{{--                           class="form-control search-form-control  ml-lg-auto"--}}
{{--                           placeholder="Search...">--}}
{{--                </div>--}}
{{--            </form>--}}
{{--            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"--}}
{{--                 viewBox="0 0 24 24" fill="none" stroke="currentColor"--}}
{{--                 stroke-width="2" stroke-linecap="round"--}}
{{--                 stroke-linejoin="round"--}}
{{--                 class="feather feather-search toggle-search">--}}
{{--                <circle cx="11" cy="11" r="8"></circle>--}}
{{--                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>--}}
{{--            </svg>--}}
{{--        </li>--}}
    </ul>

    <ul class="navbar-item flex-row nav-dropdowns">
        <li class="nav-item dropdown language-dropdown more-dropdown">
            <div class="dropdown custom-dropdown-icon">
                <a class="dropdown-toggle btn" href="#" role="button"
                   id="customDropdown" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false"><img
                        src="/tca_online//main_application/assets/img/ca.png"
                        class="flag-width" alt="flag">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                         height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2"
                         stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-chevron-down">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </a>

                <div class="dropdown-menu dropdown-menu-right animated fadeInUp"
                    aria-labelledby="customDropdown">

                    <a disabled class=""><img
                       src="/tca_online//main_application/assets/img/ca.png"
                       class="flag-width" alt="flag"> English</a>
                </div>
            </div>
        </li>

        <li class="nav-item dropdown message-dropdown">
            <a  href="{{route('chat')}}" wire:navigate class="nav-link dropdown-toggle"
               id="messageDropdown" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                     height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2"
                     stroke-linecap="round" stroke-linejoin="round"
                     class="feather feather-message-circle">
                    <path
                        d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                </svg>
                <span class="badge badge-success"></span>
            </a>
        </li>

        <li class="nav-item dropdown notification-dropdown">
            <a href="javascript:void(0);" class="nav-link dropdown-toggle"
               id="notificationDropdown" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                     height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2"
                     stroke-linecap="round" stroke-linejoin="round"
                     class="feather feather-bell">
                    <path
                        d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                    <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                </svg>
                <span class="badge badge-success"></span>
            </a>

        </li>

        <li class="nav-item dropdown user-profile-dropdown order-lg-0 order-1">
            <a href="javascript:void(0);"
               class="nav-link dropdown-toggle user"
               id="user-profile-dropdown" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <div class="media">
                    <img src="{{auth()->user()->profile_picture}}" class="img-fluid" alt="admin-profile">
                    <div class="media-body align-self-center">
                        <h6><span>Hi,</span> {{auth()->user()->name}}</h6>
                    </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                     height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2"
                     stroke-linecap="round" stroke-linejoin="round"
                     class="feather feather-chevron-down">
                    <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
            </a>
            <div class="dropdown-menu position-absolute animated fadeInUp"
                 aria-labelledby="user-profile-dropdown">
                <div class="">
                    <div class="dropdown-item">
                        <a class="" wire:navigate href="{{route('profile')}}">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor"
                                 stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="feather feather-user">
                                <path
                                    d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            My Profile</a>
                    </div>
{{--                    <div class="dropdown-item">--}}
{{--                        <a class="" href="apps_mailbox.html">--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg"--}}
{{--                                 width="24" height="24" viewBox="0 0 24 24"--}}
{{--                                 fill="none" stroke="currentColor"--}}
{{--                                 stroke-width="2" stroke-linecap="round"--}}
{{--                                 stroke-linejoin="round"--}}
{{--                                 class="feather feather-inbox">--}}
{{--                                <polyline--}}
{{--                                    points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>--}}
{{--                                <path--}}
{{--                                    d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path>--}}
{{--                            </svg>--}}
{{--                            Inbox</a>--}}
{{--                    </div>--}}
{{--                    <div class="dropdown-item">--}}
{{--                        <a class="" href="auth_lockscreen.html">--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg"--}}
{{--                                 width="24" height="24" viewBox="0 0 24 24"--}}
{{--                                 fill="none" stroke="currentColor"--}}
{{--                                 stroke-width="2" stroke-linecap="round"--}}
{{--                                 stroke-linejoin="round"--}}
{{--                                 class="feather feather-lock">--}}
{{--                                <rect x="3" y="11" width="18" height="11"--}}
{{--                                      rx="2" ry="2"></rect>--}}
{{--                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>--}}
{{--                            </svg>--}}
{{--                            Lock Screen</a>--}}
{{--                    </div>--}}
                    <div class="dropdown-item">
                        <a class="" wire:click.prevent="signOut" href="">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor"
                                 stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round"
                                 class="feather feather-log-out">
                                <path
                                    d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                <polyline
                                    points="16 17 21 12 16 7"></polyline>
                                <line x1="21" y1="12" x2="9" y2="12"></line>
                            </svg>
                            Sign Out</a>
                    </div>
                </div>
            </div>

        </li>
    </ul>
</header>
