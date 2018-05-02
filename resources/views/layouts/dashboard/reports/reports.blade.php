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
                            <th>#</th>
                            <th>نام</th>
                            <th>نام خانوادگی</th>
                            <th>نام کاربری</th>
                            <th>نقش کاربر</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>وحید</td>
                            <td>الماسی</td>
                            <td>@vahid</td>
                            <td><span class="label label-danger">مدیر</span> </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>وحید</td>
                            <td>جعفری</td>
                            <td>@vahid</td>
                            <td><span class="label label-info">عضو</span> </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>المیرا</td>
                            <td>جمالیان</td>
                            <td>@elmira</td>
                            <td><span class="label label-warning">توسعه دهنده</span> </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>میلاد</td>
                            <td>صفایی</td>
                            <td>@milad</td>
                            <td><span class="label label-success">پشتیبان</span> </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>محسن</td>
                            <td>علوی</td>
                            <td>@mohsen</td>
                            <td><span class="label label-info">عضو</span> </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>یوسف</td>
                            <td>محمودی</td>
                            <td>@yousef</td>
                            <td><span class="label label-success">پشتیبان</span> </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection