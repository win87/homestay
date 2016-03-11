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
                    <a href="/host/home"><button class="btn btn-default disabled">个人基本资料</button></a>    
                </div>

                <div class="panel-body">
                    <div class="personal-mes">
                        <div class="col-md-6">
                            <table class="table table-bordered table-striped">

                                <tr><td>First Name: {{ $host_info->fName }}</td></tr>
                                <tr><td>Gender:
                                        @if ($host_info->gender == 1)
                                            Male
                                        @elseif ($host_info->gender == 2)
                                            Female
                                        @else
                                            Privacy
                                        @endif
                                </td></tr>
                                <tr><td>Ethnicity: 
                                        @if ($host_info->ethnicity == 1)
                                            Asian
                                        @elseif ($host_info->ethnicity == 2)
                                            Hispanic
                                        @elseif ($host_info->ethnicity == 3)
                                            White
                                        @elseif ($host_info->ethnicity == 4)
                                            Black
                                        @elseif ($host_info->ethnicity == 5)
                                            Pacific Islander
                                        @elseif ($host_info->ethnicity == 5)
                                            Two or more races
                                        @else
                                            Other
                                        @endif
                                </td></tr>                
                                <tr><td>Phone: (){{ $host_info->phone }}</td></tr>
                                <tr><td>Language Skill: {{ $host_info->language }}</td></tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-bordered table-striped">
                                <tr><td>Last Name: {{ $host_info->lName }}</td></tr>
                                <tr><td>Age：{{ $host_info->age }}</td></tr>
                                <tr><td>Occupation: 
                                        @if ($host_info->occupation == 1)
                                            Office worker
                                        @elseif ($host_info->occupation == 2)
                                            Manual worker
                                        @elseif ($host_info->occupation == 3)
                                            Self-employed
                                        @elseif ($host_info->occupation == 4)
                                            Executive/Professional
                                        @elseif ($host_info->occupation == 5)
                                            Housewife
                                        @elseif ($host_info->occupation == 6)
                                            Retired
                                        @else
                                            Other
                                        @endif

                                </td></tr>
                                <tr><td>Mobile: (){{ $host_info->mobile }}</td></tr>
                            </table>
                        </div>                                    
                    </div>
                </div>
            
            </div>
            <button class="btn btn-success" data-toggle="modal" data-target="#updateHostInfo{{$host_info->user_id}}">修改个人信息</button>
        </div>

        @include('host.update_info')

        @include('Admin.right_bar')

    </div>

</div>
@stop



