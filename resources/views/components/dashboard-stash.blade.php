<div {{ $attributes->class(['col-xl-12 col-lg-12 col-sm-12']) }}>
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-sm-6">
            <div class="widget-stat card bg-primary">
                <div class="card-header border-0 pb-0">
                    <h3 class="card-title text-white">Total Students</h3>
                    <h5 class="text-white mb-0"><i class="fa fa-caret-up"></i> 422</h5>
                </div>
                <div class="card-body text-center">
                    <div class="ico-sparkline">
                        <div id="sparkline12"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-sm-6">
            <div class="widget-stat card bg-warning overflow-hidden">
                <div class="card-header border-0 ">
                    <h3 class="card-title text-white">New Students</h3>
                    <h5 class="text-white mb-0"><i class="fa fa-caret-up"></i> 357</h5>
                </div>
                <div class="card-body text-center p-0">
                    <div class="ico-sparkline">
                        <div id="spark-bar-2"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-sm-6">
            <div class="widget-stat card bg-secondary">
                <div class="card-header pb-3 border-0 pb-0">
                    <h3 class="card-title text-white">Total Course</h3>
                    <h5 class="text-white mb-0"><i class="fa fa-caret-up"></i> 547</h5>
                </div>
                <div class="card-body p-0">
                    <div class="px-4"><span class="bar1"
                                            data-peity='{ "fill": ["rgb(255, 255, 255)", "rgb(255, 255, 255)"]}'>6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-sm-6">
            <div class="widget-stat card bg-danger overflow-hidden">
                <div class="card-header pb-3 border-0 pb-0">
                    <h3 class="card-title text-white">Fees Collection</h3>
                    <h5 class="text-white mb-0"><i class="fa fa-caret-up"></i> 3280$</h5>
                </div>
                <div class="card-body p-0">
                    <span class="peity-line-2" data-width="100%">7,6,8,7,3,8,3,3,6,5,9,2,8</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-4 col-lg-12 col-sm-12">
    <div class="card">
        <div class="card-header border-0 pb-0">
            <h2 class="card-title">about me</h2>
        </div>
        <div class="card-body pb-0">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex px-0 justify-content-between">
                    <strong>Gender</strong>
                    <span class="mb-0">Male</span>
                </li>
                <li class="list-group-item d-flex px-0 justify-content-between">
                    <strong>Education</strong>
                    <span class="mb-0">PHD</span>
                </li>
                <li class="list-group-item d-flex px-0 justify-content-between">
                    <strong>Designation</strong>
                    <span class="mb-0">Se. Professor</span>
                </li>
                <li class="list-group-item d-flex px-0 justify-content-between">
                    <strong>Operation Done</strong>
                    <span class="mb-0">120</span>
                </li>
            </ul>
        </div>
        <div class="card-footer pt-0 pb-0 text-center">
            <div class="row">
                <div class="col-4 pt-3 pb-3 border-right">
                    <h3 class="mb-1 text-primary">150</h3>
                    <span>Projects</span>
                </div>
                <div class="col-4 pt-3 pb-3 border-right">
                    <h3 class="mb-1 text-primary">140</h3>
                    <span>Uploads</span>
                </div>
                <div class="col-4 pt-3 pb-3">
                    <h3 class="mb-1 text-primary">45</h3>
                    <span>Tasks</span>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="col-xl-8 col-xxl-8 col-lg-12 col-sm-12">
    <div id="user-activity" class="card">
        <div class="card-header border-0 pb-0 d-sm-flex d-block">
            <h4 class="card-title">Visitor Activity</h4>
            <div class="card-action mb-sm-0 my-2">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#user" role="tab">
                            Day
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#bounce" role="tab">
                            Month
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#session-duration" role="tab">
                            Year
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="card-body">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="user" role="tabpanel">
                    <canvas id="activity" class="chartjs"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-4 col-lg-6 col-sm-6">
    <div class="card overflow-hidden">
        <div class="card-body">
            <div class="text-center">
                <div class="profile-photo">
                    <img src="{{asset('Administration/images/profile/profile.png')}}" width="100"
                         class="img-fluid rounded-circle" alt="">
                </div>
                <h3 class="mt-4 mb-1">Deangelo Sena</h3>
                <p class="text-muted">Senior Manager</p>
                <a class="btn btn-outline-primary btn-rounded mt-3 px-5" href="javascript:void(0)">Folllow</a>
            </div>
        </div>

        <div class="card-footer pt-0 pb-0 text-center">
            <div class="row">
                <div class="col-4 pt-3 pb-3 border-right">
                    <h3 class="mb-1">150</h3><span>Follower</span>
                </div>
                <div class="col-4 pt-3 pb-3 border-right">
                    <h3 class="mb-1">140</h3><span>Place Stay</span>
                </div>
                <div class="col-4 pt-3 pb-3">
                    <h3 class="mb-1">45</h3><span>Reviews</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-4 col-lg-6 col-sm-6">
    <div class="card active_users">
        <div class="card-header bg-dark border-0 pb-0">
            <h4 class="card-title text-white">Active Users</h4>
            <span id="counter"></span>
        </div>
        <div class="bg-dark">
            <canvas id="activeUser"></canvas>
        </div>
        <div class="card-body pt-0">
            <div class="list-group-flush mt-4">
                <div
                        class="list-group-item bg-transparent d-flex justify-content-between px-0 py-1 font-weight-semi-bold border-top-0">
                    <p class="mb-0">Top Active Pages</p>
                    <p class="mb-0">Active Users</p>
                </div>
                <div class="list-group-item bg-transparent d-flex justify-content-between px-0 py-1">
                    <p class="mb-0">/bootstrap-themes/</p>
                    <p class="mb-0">3</p>
                </div>
                <div class="list-group-item bg-transparent d-flex justify-content-between px-0 py-1">
                    <p class="mb-0">/tags/html5/</p>
                    <p class="mb-0">3</p>
                </div>
                <div
                        class="list-group-item bg-transparent d-xxl-flex justify-content-between px-0 py-1 d-none">
                    <p class="mb-0">/</p>
                    <p class="mb-0">2</p>
                </div>
                <div
                        class="list-group-item bg-transparent d-xxl-flex justify-content-between px-0 py-1 d-none">
                    <p class="mb-0">/preview/falcon/dashboard/</p>
                    <p class="mb-0">2</p>
                </div>
                <div class="list-group-item bg-transparent d-flex justify-content-between px-0 py-1">
                    <p class="mb-0">/100-best-themes...all-time/</p>
                    <p class="mb-0">1</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-4 col-lg-12 col-sm-12">
    <div class="card overflow-hidden">
        <div class="text-center p-3 overlay-box "
             style="background-image: url({{asset('Administration/images/big/img1.jpg')}}">
            <div class="profile-photo">
                <img src="{{asset('Administration/images/profile/profile.png')}}" width="100"
                     class="img-fluid rounded-circle" alt="">
            </div>
            <h3 class="mt-3 mb-1 text-white">Deangelo Sena</h3>
            <p class="text-white mb-0">Senior Manager</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between"><span
                        class="mb-0">Patient Gender</span> <strong class="text-muted">Female </strong></li>
            <li class="list-group-item d-flex justify-content-between"><span
                        class="mb-0">Years Old</span> <strong class="text-muted">Age: 24 </strong></li>
        </ul>
        <div class="card-footer border-0 mt-0">
            <button class="btn btn-primary btn-lg btn-block">
                <i class="fa fa-bell-o"></i> Reminder Alarm
            </button>
        </div>
    </div>
</div>

<div class="col-xl-4 col-lg-6 col-xxl-4 col-sm-6">
    <div class="card text-white bg-primary">
        <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between"><span
                        class="mb-0">Blood type :</span><strong>O+</strong></li>
            <li class="list-group-item d-flex justify-content-between"><span
                        class="mb-0">Allergies :</span><strong>Penicilin, peanuts </strong></li>
            <li class="list-group-item d-flex justify-content-between"><span
                        class="mb-0">Pressure :</span><strong>120/100 mmHG</strong></li>
            <li class="list-group-item d-flex justify-content-between"><span
                        class="mb-0">Diseases :</span><strong>Diabetes</strong></li>
            <li class="list-group-item d-flex justify-content-between"><span
                        class="mb-0">Temperture :</span><strong>34 Degree</strong></li>
        </ul>
    </div>
</div>

<div class="col-xl-4 col-lg-6 col-xxl-4 col-sm-6">
    <div class="card text-white bg-warning text-black">
        <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Regular Checkups</span>
            </li>
            <li class="list-group-item d-flex justify-content-between"><span
                        class="mb-0">Dr Theodore Handle :</span><strong>Dentist</strong>
            </li>
            <li class="list-group-item d-flex justify-content-between"><span
                        class="mb-0">Dr Valentino Morose :</span><strong>Surgeon</strong>
            </li>
            <li class="list-group-item d-flex justify-content-between"><span
                        class="mb-0">Dr Fleece Marigold :</span><strong>Clinical</strong>
            </li>
            <li class="list-group-item d-flex justify-content-between"><span
                        class="mb-0">Dr Eric Widget :</span><strong>Cardiology</strong>
            </li>
        </ul>
    </div>
</div>

<div class="col-xl-4 col-lg-12 col-xxl-4 col-sm-12">
    <div class="card">
        <div class="card-body text-center ai-icon  text-primary">
            <svg id="rocket-icon" class="my-2" viewBox="0 0 24 24" width="80" height="80"
                 stroke="currentColor" stroke-width="1" fill="none" stroke-linecap="round"
                 stroke-linejoin="round">
                <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <path d="M16 10a4 4 0 0 1-8 0"></path>
            </svg>
            <h4 class="my-2">You don’t have badges yet</h4>
            <a href="javascript:void(0);" class="btn my-2 btn-primary btn-lg px-4"><i
                        class="fa fa-usd"></i> Earn Budges</a>
        </div>
    </div>
</div>

<div class="col-xl-8 col-lg-12 col-xxl-8 col-sm-12">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-xxl-6 col-md-6">
            <div class="card">
                <div class="card-header border-0 pb-0">
                    <div class="clearfix">
                        <h3 class="card-title">Blood pressure</h3>
                        <span>In the normal</span>
                    </div>
                    <div class="clearfix text-center">
                        <h3 class="text-primary mb-0">120/89</h3>
                        <span>mmHG</span>
                    </div>
                </div>
                <div class="card-body text-center">
                    <div class="ico-sparkline">
                        <div id="spark-bar"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-xxl-6 col-md-6">
            <div class="card">
                <div class="card-header border-0 pb-0">
                    <div class="clearfix">
                        <h3 class="card-title">Heart Rate</h3>
                        <span class="text-danger">Above the normal</span>
                    </div>
                    <div class="clearfix text-center">
                        <h3 class="text-danger mb-0">107</h3>
                        <span>Per Min</span>
                    </div>
                </div>
                <div class="card-body text-center">
                    <div class="ico-sparkline">
                        <div id="composite-bar"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-xxl-6 col-md-6">
            <div class="card">
                <div class="card-header border-0 pb-0">
                    <div class="clearfix">
                        <h3 class="card-title">Glucose Rate</h3>
                        <span>In the normal</span>
                    </div>
                    <div class="clearfix text-center">
                        <h3 class="text-success mb-0">97</h3>
                        <span>mg/dl</span>
                    </div>
                </div>
                <div class="card-body text-center">
                    <div class="ico-sparkline">
                        <div id="sparkline8"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-xxl-6 col-md-6">
            <div class="card">
                <div class="card-header border-0 pb-0">
                    <div class="clearfix">
                        <h3 class="card-title">Clolesterol</h3>
                        <span>In the normal</span>
                    </div>
                    <div class="clearfix text-center">
                        <h3 class="text-info mb-0">124</h3>
                        <span>mg/dl</span>
                    </div>
                </div>
                <div class="card-body text-center">
                    <div class="ico-sparkline">
                        <div id="sparkline9" class="height80;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-4 col-lg-12 col-sm-12">
    <div class="card overflow-hidden">
        <div class="text-center p-5 overlay-box"
             style="background-image: url({{asset('Administration/images/big/img5.jpg')}}">
            <img src="{{asset('Administration/images/profile/profile.png')}}" width="100"
                 class="img-fluid rounded-circle"
                 alt="">
            <h3 class="mt-3 mb-0 text-white">Deangelo Sena</h3>
        </div>
        <div class="card-body">
            <div class="row text-center">
                <div class="col-6">
                    <div class="bgl-primary rounded p-3">
                        <h4 class="mb-0">Female</h4>
                        <small>Patient Gender</small>
                    </div>
                </div>
                <div class="col-6">
                    <div class="bgl-primary rounded p-3">
                        <h4 class="mb-0">Age: 24</h4>
                        <small>Years Old</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer mt-0">
            <button class="btn btn-primary btn-lg btn-block">View Profile</button>
        </div>
    </div>
</div>

<div class="col-xl-6 col-lg-6 col-xxl-6 col-sm-6">
    <div class="card bg-primary">
        <div class="card-body pb-0">
            <div class="row">
                <div class="col">
                    <h5 class="text-white">Power</h5>
                    <span class="text-white">2017.1.20</span>
                </div>
                <div class="col text-right">
                    <h5 class="text-white"><i class="fa fa-caret-up"></i> 260</h5>
                    <span class="text-white">+12.5(2.8%)</span>
                </div>
            </div>
        </div>
        <div class="chart-wrapper">
            <canvas id="chart_widget_1"></canvas>
        </div>
    </div>
</div>

<div class="col-xl-6 col-lg-6 col-xxl-6 col-sm-6">
    <div class="card bg-success">
        <div class="card-body pb-0">
            <div class="row">
                <div class="col">
                    <h5 class="text-white">Power</h5>
                    <span class="text-white">2017.1.20</span>
                </div>
                <div class="col text-right">
                    <h5 class="text-white"><i class="fa fa-caret-up"></i> 260</h5>
                    <span class="text-white">+12.5(2.8%)</span>
                </div>
            </div>
        </div>
        <div class="chart-wrapper">
            <div id="chart_widget_5"></div>
        </div>
    </div>
</div>

<div class="col-xl-4 col-lg-6 col-xxl-4 col-sm-6">
    <div class="card">
        <div class="card-body pb-0">
            <div class="row">
                <div class="col">
                    <h5>3650</h5>
                    <span>VIEWS OF YOUR PROJECT</span>
                </div>
            </div>
        </div>
        <div class="chart-wrapper">
            <canvas id="chart_widget_2"></canvas>
        </div>
    </div>
</div>

<div class="col-xl-4 col-lg-6 col-xxl-4 col-sm-6">
    <div class="card">
        <div class="card-body">
            <h5>Latency</h5>
        </div>
        <div class="chart-wrapper">
            <canvas id="chart_widget_17"></canvas>
        </div>
    </div>
</div>

<div class="col-xl-4 col-lg-12 col-xxl-4 col-sm-12">
    <div class="card">
        <div class="card-body">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <h4 class="text-uppercase">74,206 K</h4>
                    <span>Lifetime earnings</span>
                </div>
                <div class="col-auto">
                    <div class="chart-wrapper height100">
                        <canvas id="chart_widget_7"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-12 col-xxl-12">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body pb-0">
                    <div class="row justify-content-between">
                        <div class="col-auto">
                            <h5>Lorem Ipsum</h5>
                        </div>
                        <div class="col-auto">
                            <h5>
                                <span><i class="fa fa-caret-up"></i></span>
                                <span>2,250</span>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="chart-wrapper">
                    <div id="chart_widget_6"></div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col text-center">
                            <h5 class="font-weight-normal">1230</h5>
                            <span>Type A</span>
                        </div>
                        <div class="col text-center">
                            <h5 class="font-weight-normal">1230</h5>
                            <span>Type A</span>
                        </div>
                        <div class="col text-center">
                            <h5 class="font-weight-normal">1230</h5>
                            <span>Type A</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body pb-0">
                    <div class="row justify-content-between">
                        <div class="col-auto">
                            <h5>Lorem Ipsum</h5>
                        </div>
                        <div class="col-auto">
                            <h5>
                                <span><i class="fa fa-caret-up"></i></span>
                                <span>2,250</span>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="chart-wrapper">
                    <canvas id="chart_widget_3"></canvas>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col text-center">
                            <h5 class="font-weight-normal">1230</h5>
                            <span>Type A</span>
                        </div>
                        <div class="col text-center">
                            <h5 class="font-weight-normal">1230</h5>
                            <span>Type A</span>
                        </div>
                        <div class="col text-center">
                            <h5 class="font-weight-normal">1230</h5>
                            <span>Type A</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-6 col-lg-6">
    <div class="card">
        <div class="card-body pb-0">
            <h4 class="card-title text-uppercase font-weight-normal">Market Now</h4>
            <h2 class="font-weight-normal text-danger">
                <span><i class="fa fa-caret-up"></i></span>
                <span>3454664</span>
            </h2>
            <div class="row mt-5">
                <div class="col text-center">
                    <h5 class="font-weight-normal">APPL</h5>
                    <span class="text-success">+ 82.24 %</span>
                </div>
                <div class="col text-center">
                    <h5 class="font-weight-normal">FB</h5>
                    <span class="text-danger">- 12.24 %</span>
                </div>
                <div class="col text-center">
                    <h5 class="font-weight-normal">GOOG</h5>
                    <span class="text-success">+ 42.24 %</span>
                </div>
            </div>
        </div>
        <div class="chart-wrapper">
            <canvas id="chart_widget_4"></canvas>
        </div>
    </div>
</div>

<div class="col-xl-6 col-lg-6">
    <div class="card">
        <div class="card-body pb-0">
            <h4 class="card-title text-uppercase font-weight-normal">Sales Analysis</h4>
            <h2 class="font-weight-normal text-danger">
                <span><i class="fa fa-caret-up"></i></span>
                <span>3454664</span>
            </h2>
            <div class="row mt-5">
                <div class="col text-center">
                    <h5 class="font-weight-normal">Today</h5>
                    <span class="text-success">+ 8224</span>
                </div>
                <div class="col text-center">
                    <h5 class="font-weight-normal">Today</h5>
                    <span class="text-danger">- 1224</span>
                </div>
                <div class="col text-center">
                    <h5 class="font-weight-normal">Week</h5>
                    <span class="text-success">+ 4224</span>
                </div>
            </div>
        </div>
        <div class="chart-wrapper">
            <div id="chart_widget_8"></div>
        </div>
    </div>
</div>

<div class="col-xl-6 col-lg-12">
    <div class="card">
        <div class="card-header border-0 pb-0">
            <h4 class="card-title">Top Products</h4>
        </div>
        <div class="card-body pb-0">
            <div class="widget-media">
                <ul class="timeline">
                    <li>
                        <div class="timeline-panel">
                            <div class="media me-2">
                                <img alt="image" width="50" src="{{asset('Administration/images/avatar/1.jpg')}}">
                            </div>
                            <div class="media-body">
                                <h5 class="mb-1">Dr sultads Send you Photo</h5>
                                <small class="d-block">29 July 2020 - 02:26 PM</small>
                            </div>
                            <div class="dropdown">
                                <button type="button" class="btn btn-primary light sharp"
                                        data-bs-toggle="dropdown">
                                    <svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none"
                                           fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <circle fill="#000000" cx="5" cy="12" r="2"/>
                                            <circle fill="#000000" cx="12" cy="12" r="2"/>
                                            <circle fill="#000000" cx="19" cy="12" r="2"/>
                                        </g>
                                    </svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-panel">
                            <div class="media me-2 media-info">
                                KG
                            </div>
                            <div class="media-body">
                                <h5 class="mb-1">Resport created successfully</h5>
                                <small class="d-block">29 July 2020 - 02:26 PM</small>
                            </div>
                            <div class="dropdown">
                                <button type="button" class="btn btn-info light sharp"
                                        data-bs-toggle="dropdown">
                                    <svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none"
                                           fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <circle fill="#000000" cx="5" cy="12" r="2"/>
                                            <circle fill="#000000" cx="12" cy="12" r="2"/>
                                            <circle fill="#000000" cx="19" cy="12" r="2"/>
                                        </g>
                                    </svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-panel">
                            <div class="media me-2 media-success">
                                <i class="fa fa-home"></i>
                            </div>
                            <div class="media-body">
                                <h5 class="mb-1">Reminder : Treatment Time!</h5>
                                <small class="d-block">29 July 2020 - 02:26 PM</small>
                            </div>
                            <div class="dropdown">
                                <button type="button" class="btn btn-success light sharp"
                                        data-bs-toggle="dropdown">
                                    <svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none"
                                           fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <circle fill="#000000" cx="5" cy="12" r="2"/>
                                            <circle fill="#000000" cx="12" cy="12" r="2"/>
                                            <circle fill="#000000" cx="19" cy="12" r="2"/>
                                        </g>
                                    </svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="chart-wrapper">
            <canvas id="chart_widget_9"></canvas>
        </div>
    </div>
</div>

<div class="col-xl-6 col-lg-12">
    <div class="card">
        <div class="card-header border-0 pb-0">
            <h4 class="card-title">Top Products</h4>
        </div>
        <div class="card-body pb-0">
            <div class="widget-media">
                <ul class="timeline">
                    <li>
                        <div class="timeline-panel">
                            <div class="media me-2">
                                <img alt="image" width="50" src="{{asset('Administration/images/avatar/4.jpg')}}">
                            </div>
                            <div class="media-body">
                                <h5 class="mb-1">Dr sultads Send you Photo</h5>
                                <small class="d-block">29 July 2020 - 02:26 PM</small>
                            </div>
                            <div class="dropdown">
                                <button type="button" class="btn btn-primary light sharp"
                                        data-bs-toggle="dropdown">
                                    <svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none"
                                           fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <circle fill="#000000" cx="5" cy="12" r="2"/>
                                            <circle fill="#000000" cx="12" cy="12" r="2"/>
                                            <circle fill="#000000" cx="19" cy="12" r="2"/>
                                        </g>
                                    </svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-panel">
                            <div class="media me-2 media-info">
                                <img alt="image" width="50" src="{{asset('Administration/images/avatar/2.jpg')}}">
                            </div>
                            <div class="media-body">
                                <h5 class="mb-1">Resport created successfully</h5>
                                <small class="d-block">29 July 2020 - 02:26 PM</small>
                            </div>
                            <div class="dropdown">
                                <button type="button" class="btn btn-info light sharp"
                                        data-bs-toggle="dropdown">
                                    <svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none"
                                           fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <circle fill="#000000" cx="5" cy="12" r="2"/>
                                            <circle fill="#000000" cx="12" cy="12" r="2"/>
                                            <circle fill="#000000" cx="19" cy="12" r="2"/>
                                        </g>
                                    </svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-panel">
                            <div class="media me-2 media-success">
                                <img alt="image" width="50" src="{{asset('Administration/images/avatar/3.jpg')}}">
                            </div>
                            <div class="media-body">
                                <h5 class="mb-1">Reminder : Treatment Time!</h5>
                                <small class="d-block">29 July 2020 - 02:26 PM</small>
                            </div>
                            <div class="dropdown">
                                <button type="button" class="btn btn-success light sharp"
                                        data-bs-toggle="dropdown">
                                    <svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none"
                                           fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <circle fill="#000000" cx="5" cy="12" r="2"/>
                                            <circle fill="#000000" cx="12" cy="12" r="2"/>
                                            <circle fill="#000000" cx="19" cy="12" r="2"/>
                                        </g>
                                    </svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="chart-wrapper">
            <canvas id="chart_widget_10"></canvas>
        </div>
    </div>
</div>

<div class="col-xl-6 col-xxl-8 col-lg-12">
    <div class="row">
        <div class="col-sm-12">
            <div class="card overflow-hidden">
                <div class="row no-gutters">
                    <div class="col-5 p-0">
                        <div class="card-body">
                            <h6 class="font-weight-normal text-uppercase">Weekly sales</h6>
                            <h4>$ 14000</h4>
                            <div>
                                <span class="badge badge-light">60%</span>
                                <span>Higher</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-7 p-0">
                        <div class="chart-wrapper">
                            <canvas id="chart_widget_11"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5>570</h5>
                    <p>All Sales</p>
                </div>
                <div class="chart-wrapper">
                    <canvas id="chart_widget_14"></canvas>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5>570</h5>
                    <p>All Sales</p>
                </div>
                <div class="chart-wrapper">
                    <canvas id="chart_widget_15"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-6 col-xxl-4 col-lg-12">
    <div class="card">
        <div class="chart-wrapper">
            <canvas id="chart_widget_16"></canvas>
        </div>
        <div class="card-body">
            <h4 class="card-title">Sales Status</h4>
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <h6>67%</h6>
                        <span>Grow</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-primary" style="width: 80%"></div>
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <div class="d-flex justify-content-between">
                        <h6>67%</h6>
                        <span>Grow</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-success" style="width: 70%"></div>
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <div class="d-flex justify-content-between">
                        <h6>67%</h6>
                        <span>Grow</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-info" style="width: 40%"></div>
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <div class="d-flex justify-content-between">
                        <h6>67%</h6>
                        <span>Grow</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-warning" style="width: 80%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-3 col-xxl-3 col-sm-6">
    <div class="card">
        <div class="social-graph-wrapper widget-facebook">
            <span class="s-icon"><i class="fab fa-facebook-f"></i></span>
        </div>
        <div class="row">
            <div class="col-6 border-right">
                <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                    <h4 class="m-1"><span class="counter">89</span> k</h4>
                    <p class="m-0">Friends</p>
                </div>
            </div>
            <div class="col-6">
                <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                    <h4 class="m-1"><span class="counter">119</span> k</h4>
                    <p class="m-0">Followers</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-3 col-xxl-3 col-sm-6">
    <div class="card">
        <div class="social-graph-wrapper widget-linkedin">
            <span class="s-icon"><i class="fab fa-linkedin-in"></i></span>
        </div>
        <div class="row">
            <div class="col-6 border-right">
                <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                    <h4 class="m-1"><span class="counter">89</span> k</h4>
                    <p class="m-0">Friends</p>
                </div>
            </div>
            <div class="col-6">
                <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                    <h4 class="m-1"><span class="counter">119</span> k</h4>
                    <p class="m-0">Followers</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-3 col-xxl-3 col-sm-6">
    <div class="card">
        <div class="social-graph-wrapper widget-googleplus">
            <span class="s-icon"><i class="fab fa-google-plus-g"></i></span>
        </div>
        <div class="row">
            <div class="col-6 border-right">
                <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                    <h4 class="m-1"><span class="counter">89</span> k</h4>
                    <p class="m-0">Friends</p>
                </div>
            </div>
            <div class="col-6">
                <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                    <h4 class="m-1"><span class="counter">119</span> k</h4>
                    <p class="m-0">Followers</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-3 col-xxl-3 col-sm-6">
    <div class="card">
        <div class="social-graph-wrapper widget-twitter">
            <span class="s-icon"><i class="fab fa-twitter"></i></span>
        </div>
        <div class="row">
            <div class="col-6 border-right">
                <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                    <h4 class="m-1"><span class="counter">89</span> k</h4>
                    <p class="m-0">Friends</p>
                </div>
            </div>
            <div class="col-6">
                <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                    <h4 class="m-1"><span class="counter">119</span> k</h4>
                    <p class="m-0">Followers</p>
                </div>
            </div>
        </div>
    </div>
</div>
