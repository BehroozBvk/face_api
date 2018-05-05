@extends('layouts.dashboard.master.master')
@section('style')
    <link href="{{asset('assets/plugins/chartist-js/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/chartist-js/dist/chartist-init.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')}}"
          rel="stylesheet">
    <link href="{{asset('assets/plugins/css-chart/css-chart.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/morrisjs/morris.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/toast-master/css/jquery.toast.css')}}" rel="stylesheet">

@endsection
@section('script')
    <!--Morris JavaScript -->
    <script src="{{asset('assets/plugins/raphael/raphael-min.js')}}"></script>
    <script src="{{asset('assets/plugins/morrisjs/morris.js')}}"></script>
    <script src="{{asset('js/morris-data.js')}}"></script>
    <!-- ============================================================== -->
    <script src="{{asset('assets/plugins/toast-master/js/jquery.toast.js')}}"></script>
    <script type="text/javascript">
        $.toast({
            heading: 'پنل مدیریت',
            text: 'سلام {{auth()->user()->name}} گرامی به پنل مدیریت خوش آمدید',
            position: 'top-right',
            loaderBg: '#00a619',
            icon: 'success',
            hideAfter: 4500,
            textAlign: 'right',
            showHideTransition: 'slide'
        });
    </script>
@endsection

@section('content')
    <div class="col-lg-12">
        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <div class="col-sm-3">
                <div class="card card-body">
                    <!-- Row -->
                    <div class="row p-t-10 p-b-10">
                        <!-- Column -->
                        <div class="col p-r-0">
                            <h1 class="font-light">86</h1>
                            <h6 class="text-muted">کل درخواست ها</h6></div>
                        <!-- Column -->
                        <div class="col text-right align-self-center">
                            <div data-label="20%" class="css-bar m-b-0 css-bar-primary css-bar-20"><i
                                        class="mdi mdi-repeat"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-sm-3">
                <div class="card card-body">
                    <!-- Row -->
                    <div class="row p-t-10 p-b-10">
                        <!-- Column -->
                        <div class="col p-r-0">
                            <h1 class="font-light">248</h1>
                            <h6 class="text-muted">جنسیت مرد</h6></div>
                        <!-- Column -->
                        <div class="col text-right align-self-center">
                            <div data-label="30%" class="css-bar m-b-0 css-bar-danger css-bar-20"><i
                                        class="icon-user"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-sm-3">
                <div class="card card-body">
                    <!-- Row -->
                    <div class="row p-t-10 p-b-10">
                        <!-- Column -->
                        <div class="col p-r-0">
                            <h1 class="font-light">352</h1>
                            <h6 class="text-muted">جنسیت زن</h6></div>
                        <!-- Column -->
                        <div class="col text-right align-self-center">
                            <div data-label="40%" class="css-bar m-b-0 css-bar-warning css-bar-40"><i
                                        class="icon-user-female"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-sm-3">
                <div class="card card-body">
                    <!-- Row -->
                    <div class="row p-t-10 p-b-10">
                        <!-- Column -->
                        <div class="col p-r-0">
                            <h1 class="font-light">159</h1>
                            <h6 class="text-muted">میانگین سن</h6></div>
                        <!-- Column -->
                        <div class="col text-right align-self-center">
                            <div data-label="60%" class="css-bar m-b-0 css-bar-info css-bar-60"><i
                                        class="mdi mdi-gauge"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- column -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">گزارشات</h4>
                        <ul class="list-inline text-right">
                            <li>
                                <h5><i class="fa fa-circle m-r-5 text-inverse"></i>مرد</h5>
                            </li>
                            <li>
                                <h5><i class="fa fa-circle m-r-5 text-info"></i>زن</h5>
                            </li>
                            <li>
                                <h5><i class="fa fa-circle m-r-5 text-success"></i>بچه</h5>
                            </li>
                        </ul>
                        <div id="morris-area-chart"></div>
                    </div>
                </div>
            </div>
            <!-- column -->
        </div>
    </div>
@endsection