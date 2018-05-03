@extends('layouts.dashboard.master.master')
@section('content')
    <div class="row">
        <!-- column -->
        <div class="col-lg-12">
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
                            @foreach($faces as $face)
                                <tr>
                                    <td><img class="img-circle" width="50" height="50" src="{{$face->image}}" alt=""></td>
                                    <td>{{$face->ip}}</td>
                                    <td>{{$face}}</td>
                                    <td><span class="label label-danger">مدیر</span></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection