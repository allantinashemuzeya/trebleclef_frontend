@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="container">
            <div class="row layout-top-spacing" id="cancel-row">
                <div class="col-lg-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area">
                            <div id="circle-basic" class="">
                                <h3>Keyboard</h3>
                                <section>
                                    <div id="flLoginForm" class="col-lg-12 layout-spacing">
                                        <div class="statbox widget box box-shadow">
                                            <div class="widget-header">
                                                <div class="row">
                                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                        <h4>Login Form</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content widget-content-area">
                                                <form>
                                                    <div class="form-row mb-4">
                                                        <div class="form-group col-md-6">
                                                            <label for="inputEmail4">Email</label>
                                                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="inputPassword4">Password</label>
                                                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <h3>Effects</h3>
                                <section>
                                    <p>Wonderful transition effects.</p>
                                </section>
                                <h3>Pager</h3>
                                <section>
                                    <p>The next and previous buttons help you to navigate through your content.</p>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>


    <x-tca_online.main_application.footer/>

    <style>
        body {
            overflow-y: hidden;
        }

        #content > div.container {
            max-width: 100% !important;
        }

        #cancel-row > div > div > div.widget-content.widget-content-area {
            height: 55vh;
        }

        #circle-basic > div.actions.clearfix {
            margin-top: -90px;
            position: relative;
        }
    </style>
@endsection
