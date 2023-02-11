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
                <div class="widget-stat card bg-danger ">
                    <div class="card-body p-4">
                        <div class="media">
                                <span class="me-3">
                                    <i class="la la-dollar"></i>
                                </span>
                            <div class="media-body text-white">
                                <p class="mb-1">Transactions total</p>
                                <h3 class="text-white">{{$totalAmount}}R</h3>
                                <div class="progress mb-2 bg-secondary">
                                    <div class="progress-bar progress-animated bg-light" style="width: 30%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-12 col-lg-12 col-xxl-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Recent Payments</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive recentOrderTable">
                            <table class="table vertical-middle table-striped table-responsive-md">
                                <thead>
                                <tr>
                                    <th scope="col">Pay Plan</th>
                                    <th scope="col">Student Name</th>
                                    <th scope="col">School</th>
                                    <th scope="col">Grade</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Email</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($transactions as $transaction)
                                    <tr>
                                        <td>{{$transaction->name}}</td>
                                        <td>{{$transaction->user->name}}</td>
                                        @foreach($transaction->user->student as $student)
                                            @if($student->user_id === $transaction->user->id)
                                                <td>{{$student->school_ !== null ? $student->school_->name : 'null'}}</td>
                                                <td>{{$student->school_ !== null ? 'Grade '.$student->grade : 'null'}}</td>
                                            @endif
                                        @endforeach
                                        <td>{{Carbon\Carbon::parse($transaction->created_at)->isoFormat('DD MMM YYYY - HH:mm')}}</td>
                                        <td><span class="badge badge-success">Complete</span></td>
                                        <td>R {{round($transaction->amount_in_cents /100,2)}}</td>
                                        <td>{{$transaction->user->email}}</td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
