@extends('layouts.dashboard.master.master')
@section('script')
    <script src="{{asset('Scripts/axios.min.js')}}"></script>
    <script src="{{asset('js/vue.js')}}"></script>
    <script src="{{asset('Scripts/app.js')}}"></script>
@endsection
@section('content')
    <div class="row">
        <!-- column -->
        <div class="col-lg-12" id="app-face">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>تصویر</th>
                                <th>آی پی</th>
                                <th>جنسیت</th>
                                <th>نقش کاربر</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{--@foreach($faces as $face)--}}
                                <tr v-for="result in results ">
                                    <td><img class="img-circle" width="50" height="50" src="" alt=""></td>
                                    <td>@{{ result.ip }}</td>
                                    <td>@{{ result.data.gender }}</td>
                                    <td><span class="label label-danger">مدیر</span></td>
                                </tr>
                            {{--@endforeach--}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection