@extends('master')

@section('title')
    查看/修改房源
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="/host/home"><button class="btn btn-default">返回功能栏</button></a>
                    |
                    <a href="/host/home"><button class="btn btn-default">Accommodation</button></a>
                    <a href="/host/home"><button class="btn btn-default">Location</button></a>
                    <a href="/host/home"><button class="btn btn-default">Calendar</button></a>
                    <a href="/host/home"><button class="btn btn-default">Pricing</button></a>
                    <a href="/host/home"><button class="btn btn-default">Amenities</button></a>
                    <a href="/host/home"><button class="btn btn-default">Pictures</button></a>
                </div>

                @include('errors.list')

                <div class="panel-body">
                    <div class="personal-mes">
                        <div class="col-md-6">
                            <table class="table table-hover">
                                <tr><td>Title of listing: {{ $room->title }}</td></tr>
                                <tr><td>Gender：{{ $room->intro }}</td></tr>
                                <tr><td>123: {{ $room->ethnicity }}</td></tr>                
                                <tr><td>Phone: {{ $room->phone }}</td></tr>
                                <tr><td>Language Skill: {{ $room->language }}</td></tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-hover">
                                <tr><td>Last Name: {{ $room->lName }}</td></tr>
                                <tr><td>Age：{{ $room->age }}</td></tr>
                                <tr><td>Occupation: {{ $room->occupation }}</td></tr>
                                <tr><td>Mobile: {{ $room->mobile }}</td></tr>
                            </table>
                        </div>

                        

                        <button class="btn btn-success" data-toggle="modal" data-target="#updateHostInfo{{$room->info_id}}">修改个人信息</button>

                        <!-- <a href="/host/edit"><button class="btn btn-primary">修改个人信息</button></a> -->
                        
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@stop