<div class="topbar-nav header navbar" role="banner">
    <nav id="topbar">
        <ul class="navbar-nav theme-brand flex-row  text-center">
            <li class="nav-item theme-logo" style="background: white;border-radius: 5px;max-width: 116px;">
                <a href="#">
                    <img src="/tca_online/main_application/assets/img/treble Clef_logo original.png"
                         class="navbar-logo" alt="logo" style="width: 90px!important">
                </a>
            </li>
            <li class="nav-item theme-text">
                <a href="/" class="nav-link">TCA Online </a>
            </li>
        </ul>

        <ul class="list-unstyled menu-categories" id="topAccordion">
            <li class="menu single-menu {{str_contains(Route::current()->getAction('as'),'dashboard')  ? 'active' : ''}}">
                <a wire:navigate href="{{route('dashboard')}}" data-toggle="collapse" aria-expanded="true">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                             height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2"
                             stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-home">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <span>Dashboard</span>
                    </div>
                </a>
            </li>

            @foreach($menu['shortcuts'] as $item)
                <li class="menu single-menu {{Route::current()->getAction('as')
                    === $item->route_name ? 'active' : ''}}" >
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
