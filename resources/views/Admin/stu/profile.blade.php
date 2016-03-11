@extends('master')

@section('title')
    欢迎 -- {{ Auth::user()->name }}
@stop

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="/admin"><button class="btn btn-default">返回功能栏</button></a>
                    |
                    <button class="btn btn-default" data-toggle="modal" data-target="#updateInfo">Infomation</button>
                    <button class="btn btn-default" data-toggle="modal" data-target="#updatePreferences">Preferences</button>
                    <button class="btn btn-default" data-toggle="modal" data-target="#updateDestination">Destination</button>              
                </div>

                <div class="panel-body">
                    
                    @if ($count)
                    
                    <button class="btn btn-default" data-toggle="modal" data-target="#updateInfo">Infomation</button>
                    <div class="row">                        
                        <div class="col-md-6">
                            <table class="table table-bordered table-striped">
                                <tr><td>First Name: {{ $stu_info->fName }}</td></tr>
                                <tr><td>Gender：{{ $stu_info->gender == 1 ?'Male' : 'Female' }}</td></tr>
                                <tr><td>Ethnicity: 
                                        @if ($stu_info->ethnicity == 1)
                                            Asian
                                        @elseif ($stu_info->ethnicity == 2)
                                            Hispanic
                                        @elseif ($stu_info->ethnicity == 3)
                                            White
                                        @elseif ($stu_info->ethnicity == 4)
                                            Black
                                        @elseif ($stu_info->ethnicity == 5)
                                            Pacific Islander
                                        @elseif ($stu_info->ethnicity == 5)
                                            Two or more races
                                        @else
                                            Other
                                        @endif
                                </td></tr>                
                                <tr><td>Phone: (){{ $stu_info->phone }}</td></tr>
                                <tr><td>Language Skill: {{ $stu_info->language }}</td></tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-bordered table-striped">
                                <tr><td>Last Name: {{ $stu_info->lName }}</td></tr>
                                <tr><td>Age：{{ $stu_info->age }}</td></tr>
                                <tr><td>Occupation: 
                                        @if ($stu_info->occupation == 1)
                                            Office worker
                                        @elseif ($stu_info->occupation == 2)
                                            Manual worker
                                        @elseif ($stu_info->occupation == 3)
                                            Self-employed
                                        @elseif ($stu_info->occupation == 4)
                                            Executive/Professional
                                        @elseif ($stu_info->occupation == 5)
                                            Housewife
                                        @elseif ($stu_info->occupation == 6)
                                            Retired
                                        @else
                                            Other
                                        @endif

                                </td></tr>
                                <tr><td>Phone: (){{ $stu_info->phone }}</td></tr>                       
                            </table>
                        </div>                                          
                    </div>

                    <hr>

                    <button class="btn btn-default" data-toggle="modal" data-target="#updatePreferences">Preferences</button>
                    <div class="row">                        
                        <div class="col-md-6">
                            <table class="table table-bordered table-striped">
                                <tr><td>Arrival Date: {{ $stu_info->arrival }}</td></tr>
                                <tr><td>Monthly Price：{{ $stu_info->gender == 'm_price' }}</td></tr>              
                                <tr><td>Services Required: {{ $stu_info->service }}</td></tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-bordered table-striped">
                                <tr><td>Departure Date: {{ $stu_info->departure }}</td></tr>
                                <tr><td>Daily Price：{{ $stu_info->d_price }}</td></tr>
                                <tr><td>Introduction: {{ $stu_info->intro }}</td></tr>                       
                            </table>
                        </div>                                          
                    </div>

                    <hr>

                    <button class="btn btn-default" data-toggle="modal" data-target="#updateDestination">Destination</button>
                    <div class="row">                     
                        <div class="col-md-6">
                            <table class="table table-bordered table-striped">
                                <tr><td>Address Line 1: {{ $stu_info->d_address1 }}</td></tr>
                                <tr><td>City：{{ $stu_info->d_city }}</td></tr>              
                                <tr><td>State: {{ $stu_info->d_state }}</td></tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-bordered table-striped">
                                <tr><td>Address Line 2: {{ $stu_info->d_address2 }}</td></tr>
                                <tr><td>Zip：{{ $stu_info->d_zip }}</td></tr>
                                <tr><td>Country: {{ $stu_info->d_country }}</td></tr>                       
                            </table>
                        </div>                                          
                    </div>

                
                    @else
                        <h3>没有资料,请添加</h3>
                        <button class="btn btn-success" data-toggle="modal" data-target="#updateInfo">添加个人资料</button>
                    @endif

                </div>
            
            </div>
        </div>

        @include('Admin.stu.update_info')

        @include('Admin.stu.update_preferences')

        @include('Admin.stu.update_destination')
        
        @include('Admin.right_bar')

    </div>

</div>
@stop



