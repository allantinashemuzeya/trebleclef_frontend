<div class="topbar-nav header navbar" role="banner">
    <nav id="topbar">
        <ul class="navbar-nav theme-brand flex-row  text-center">
            <li class="nav-item theme-logo">
                <a href="index.html">
                    <img
                        src="/tca_online/main_application/assets/img/90x90.jpg"
                        class="navbar-logo" alt="logo">
                </a>
            </li>
            <li class="nav-item theme-text">
                <a href="index.html" class="nav-link"> CORK </a>
            </li>
        </ul>

        <ul class="list-unstyled menu-categories" id="topAccordion">

            <li class="menu single-menu active">
                <a href="#dashboard" data-toggle="collapse"
                   aria-expanded="true"
                   class="dropdown-toggle autodroprown">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                             height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-home">
                            <path
                                d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline
                                points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <span>Dashboard</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                         height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2"
                         stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-chevron-down">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </a>
                <ul class="collapse submenu list-unstyled" id="dashboard"
                    data-parent="#topAccordion">
                    <li class="active">
                        <a href="index.html"> Analytics </a>
                    </li>
                    <li>
                        <a href="index2.html"> Sales </a>
                    </li>
                </ul>
            </li>

            @foreach($menu['shortcuts'] as $item)
                <li class="menu single-menu">
                    <a href="{{$item->link}}" wire:navigate  class="">
                        <div class="">
                            {!! $item->icon !!}
                            <span>{{$item->name}}</span>
                        </div>
                    </a>
                </li>
            @endforeach


        </ul>
    </nav>
</div>
