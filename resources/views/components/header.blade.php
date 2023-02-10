<!--**********************************
    Header start
    ***********************************-->
<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="input-group search-area right d-lg-inline-flex d-none">
                        <input type="text" class="form-control" placeholder="Search coming soon..">
                        <div class="input-group-append">
							<span class="input-group-text">
								<a href="javascript:void(0)">
									<i class="flaticon-381-search-2"></i>
								</a>
							</span>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav header-right main-notification">
                    <li class="nav-item dropdown notification_dropdown">
                        <a class="nav-link bell dz-theme-mode" href="#">
                            <i id="icon-light" class="fas fa-sun"></i>
                            <i id="icon-dark" class="fas fa-moon"></i>
                        </a>
                    </li>

                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown">
                            <img src="{{asset('app-assets/images/logo/treble.png')}}" width="20" alt=""/>
                            <div class="header-info">
                                <span>{{Auth::user()->name}}</span>
                                <small>{{Auth::user()->role->name}}</small>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="sub-header">
            <div class="d-flex align-items-center flex-wrap me-auto">
                <h5 class="dashboard_bar ml-12 text-primary">
                    TCA | ADMINISTRATION INTERFACE </h5>
            </div>
        </div>
    </div>
</div>
<!--**********************************
        Header end ti-comment-alt
    ***********************************-->
