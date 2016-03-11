@extends('master')

@section('title')
    管理员
@stop

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10">

                @include('errors.list')

                <h3 align="center">User table - Total: {{ $count }}</h3>
                <table class="table table-hover table-striped">
                    <tr>
                        <td>User type</td>
                        <td>Email</td>                     
                        <td></td>
                    </tr>
                    @if (count($users))
                        @foreach ($users as $user)
                            <tr>
                                <!-- <td>{{ $user->user_type == 1 ? 'Host' : 'Student' }}</td> -->
                                <td>
                                    @if ($user->user_type == 1)
                                        Host
                                    @elseif ($user->user_type == 2)
                                        Student
                                    @else
                                        Admin
                                    @endif
                                </td>
                                <td>{{ $user->email }}</td>  

                                <td>
                                    <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#myModal{{$user->id}}">更新分数</button>
                                    @if ($user->user_type == 1)
                                        <a href="{{ '/admin/hosts/rooms/'.$user->id }}"><button class="btn btn-sm btn-info">View Rooms</button></a>
                                    @else
                                        <a href="{{ '/admin/stu/profile/'.$user->id }}"><button class="btn btn-sm btn-warning">View Request</button></a>
                                    @endif
                                    <form action="{{ url('admin/'.$user->id) }}" style='display: inline' method="post">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <button class="btn btn-sm btn-danger" onclick="return confirm('确定删除?')">删除</button>
                                    </form>
                                </td>
                            </tr>

                            @include('Admin.upload_grade')

                        @endforeach
                    @else
                        <h1>没有学生名单,请管理员添加</h1>
                    @endif
                </table>
                <?php echo $users->render(); ?>
            </div>
            @include('Admin.right_bar')
        </div>

    </div>
@stop