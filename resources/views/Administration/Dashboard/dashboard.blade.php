@extends('Administration.layouts.application')
@section('content')
    <!-- row -->
    <div class="container-fluid">
        <!-- Add Project -->
        <div class="modal fade" id="addProjectSidebar">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Create Project</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label class="text-black font-w500">Project Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="text-black font-w500">Deadline</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="text-black font-w500">Client Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-primary">CREATE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi {{Auth::user()->name}}, welcome back!</h4>
                    <span>Dashboard</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item "><a href="javascript:void(0)">TCA | Dashboard</a></li>
                </ol>
            </div>
        </div>

        <!-- row -->
        <div class="row">

            <div class="col-xl-3 col-xxl-4 col-lg-6 col-sm-6">
                <div class="widget-stat card bg-primary">
                    <div class="card-body  p-4">
                        <div class="media">
                                <span class="me-3">
                                    <i class="la la-users"></i>
                                </span>
                            <div class="media-body text-white">
                                <p class="mb-1">Total Students</p>
                                <h3 class="text-white">{{$students}}</h3>
                                <div class="progress mb-2 bg-secondary">
                                    <div class="progress-bar progress-animated bg-light" style="width: 80%"></div>
                                </div>
                                <small>{{$studentsIncreaseInPercent}}% Increase in 7 Days</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-xxl-4 col-lg-6 col-sm-6">
                <div class="widget-stat card bg-warning">
                    <div class="card-body p-4">
                        <div class="media">
                                <span class="me-3">
                                    <i class="la la-user"></i>
                                </span>
                            <div class="media-body text-white">
                                <p class="mb-1">New Students</p>
                                <h3 class="text-white">{{$newStudents}}</h3>
                                <div class="progress mb-2 bg-primary">
                                    <div class="progress-bar progress-animated bg-light" style="width: 50%"></div>
                                </div>
                                <small>{{$newStudentsIncreaseInPercent}}% Increase in 7 Days</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-xxl-4 col-lg-6 col-sm-6">
                <div class="widget-stat card bg-secondary">
                    <div class="card-body p-4">
                        <div class="media">
                                <span class="me-3">
                                    <i class="la la-graduation-cap"></i>
                                </span>
                            <div class="media-body text-white">
                                <p class="mb-1">Total Course</p>
                                <h3 class="text-white">28</h3>
                                <div class="progress mb-2 bg-primary">
                                    <div class="progress-bar progress-animated bg-light" style="width: 76%"></div>
                                </div>
                                <small>76% Increase in 20 Days</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-xxl-4 col-lg-6 col-sm-6">
                <div class="widget-stat card bg-danger ">
                    <div class="card-body p-4">
                        <div class="media">
                                <span class="me-3">
                                    <i class="la la-dollar"></i>
                                </span>
                            <div class="media-body text-white">
                                <p class="mb-1">Fees Collect</p>
                                <h3 class="text-white">250$</h3>
                                <div class="progress mb-2 bg-secondary">
                                    <div class="progress-bar progress-animated bg-light" style="width: 30%"></div>
                                </div>
                                <small>30% Increase in 30 Days</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-xxl-4 col-lg-6 col-sm-6">
                <div class="widget-stat card">
                    <div class="card-body p-4">
                        <div class="media ai-icon">
                                <span class="me-3 bgl-warning text-warning">
                                    <svg id="icon-orders" xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                         stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                        <polyline points="14 2 14 8 20 8"></polyline>
                                        <line x1="16" y1="13" x2="8" y2="13"></line>
                                        <line x1="16" y1="17" x2="8" y2="17"></line>
                                        <polyline points="10 9 9 9 8 9"></polyline>
                                    </svg>
                                </span>
                            <div class="media-body">
                                <p class="mb-1">Bills</p>
                                <h4 class="mb-0">2570</h4>
                                <span class="badge badge-warning">+3.5%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-xxl-4 col-lg-6 col-sm-6">
                <div class="widget-stat card">
                    <div class="card-body  p-4">
                        <div class="media ai-icon">
                                <span class="me-3 bgl-danger text-danger">
                                    <svg id="icon-revenue" xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                         stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign">
                                        <line x1="12" y1="1" x2="12" y2="23"></line>
                                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                    </svg>
                                </span>
                            <div class="media-body">
                                <p class="mb-1">Revenue</p>
                                <h4 class="mb-0">364.50K</h4>
                                <span class="badge badge-danger">-3.5%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-xxl-8 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Recent Payments</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive recentOrderTable">
                            <table class="table verticle-middle table-responsive-md">
                                <thead>
                                <tr>
                                    <th scope="col">Pay Plan</th>
                                    <th scope="col">Student Name</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>12</td>
                                    <td>Mr. Bobby</td>
                                    <td>Dr. Jackson</td>
                                    <td>01 August 2020</td>
                                    <td><span class="badge badge-rounded badge-primary">Checkin</span></td>
                                    <td>$120</td>
                                    <td>
                                        <div class="dropdown custom-dropdown mb-0">
                                            <div class="btn sharp btn-primary tp-btn" data-bs-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink" width="18px"
                                                     height="18px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                       fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <circle fill="#000000" cx="12" cy="5" r="2"/>
                                                        <circle fill="#000000" cx="12" cy="12" r="2"/>
                                                        <circle fill="#000000" cx="12" cy="19" r="2"/>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Mr. Dexter</td>
                                    <td>Dr. Charles</td>
                                    <td>31 July 2020</td>
                                    <td><span class="badge badge-rounded badge-warning">Panding</span></td>
                                    <td>$540</td>
                                    <td>
                                        <div class="dropdown custom-dropdown mb-0">
                                            <div class="btn sharp btn-primary tp-btn" data-bs-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink" width="18px"
                                                     height="18px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                       fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <circle fill="#000000" cx="12" cy="5" r="2"/>
                                                        <circle fill="#000000" cx="12" cy="12" r="2"/>
                                                        <circle fill="#000000" cx="12" cy="19" r="2"/>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>03</td>
                                    <td>Mr. Nathan</td>
                                    <td>Dr. Frederick</td>
                                    <td>30 July 2020</td>
                                    <td><span class="badge badge-rounded badge-danger">Canceled</span></td>
                                    <td>$301</td>
                                    <td>
                                        <div class="dropdown custom-dropdown mb-0">
                                            <div class="btn sharp btn-primary tp-btn" data-bs-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink" width="18px"
                                                     height="18px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                       fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <circle fill="#000000" cx="12" cy="5" r="2"/>
                                                        <circle fill="#000000" cx="12" cy="12" r="2"/>
                                                        <circle fill="#000000" cx="12" cy="19" r="2"/>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>05</td>
                                    <td>Mr. Aurora</td>
                                    <td>Dr. Roman</td>
                                    <td>29 July 2020</td>
                                    <td><span class="badge badge-rounded badge-success">Checkin</span></td>
                                    <td>$099</td>
                                    <td>
                                        <div class="dropdown custom-dropdown mb-0">
                                            <div class="btn sharp btn-primary tp-btn" data-bs-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink" width="18px"
                                                     height="18px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                       fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <circle fill="#000000" cx="12" cy="5" r="2"/>
                                                        <circle fill="#000000" cx="12" cy="12" r="2"/>
                                                        <circle fill="#000000" cx="12" cy="19" r="2"/>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>06</td>
                                    <td>Mr. Matthew</td>
                                    <td>Dr. Samantha</td>
                                    <td>28 July 2020</td>
                                    <td><span class="badge badge-rounded badge-success">Checkin</span></td>
                                    <td>$520</td>
                                    <td>
                                        <div class="dropdown custom-dropdown mb-0">
                                            <div class="btn sharp btn-primary tp-btn" data-bs-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink" width="18px"
                                                     height="18px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                       fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <circle fill="#000000" cx="12" cy="5" r="2"/>
                                                        <circle fill="#000000" cx="12" cy="12" r="2"/>
                                                        <circle fill="#000000" cx="12" cy="19" r="2"/>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <x-notifications-widget/>

        </div>
    </div>
@endsection
