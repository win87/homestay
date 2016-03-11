@extends('master')

@section('title')
    房源列表
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">

                @include('errors.list')

                <h3 align="center"> Total of Listing：{{ $count }}</h3>
                <table class="table table-striped" id="sortTable">
                    <thead>
                        <tr>
                            <th>ID <a href="javascript:void(0)"><span class="glyphicon glyphicon-sort" aria-hidden="true"></span></a></th>
                            <th>House</th>
                            <th>Location</th>
                            <th>Price <a href="javascript:void(0)"><span class="glyphicon glyphicon-sort" aria-hidden="true"></span></a></th>
                            <th>Updated at <a href="javascript:void(0)"><span class="glyphicon glyphicon-sort" aria-hidden="true"></span></a></th>
                            <th>Posted by</th>
                            <th>Status</th>
                            
                        </tr>
                    </thead>
                    @if (count($rooms))
                        @foreach ($rooms as $room)

                            <tr>               
                                <td>{{ $room->id }}</td>
                                <td>
                                    @if ($room->house_type == 1)
                                            House
                                        @elseif ($room->house_type == 2)
                                            Apartment
                                        @elseif ($room->house_type == 3)
                                            Condo
                                        @elseif ($room->house_type == 4)
                                            Town House
                                        @else
                                            Other
                                    @endif
                                </td>
                                <!-- <td>
                                    @if ($room->room_type == 1)
                                            Private room
                                        @elseif ($room->room_type == 2)
                                            Shared room
                                        @else
                                            Entire house
                                    @endif
                                </td> -->   
                                <td>{{ $room->city }}</td>                         
                                <td class="myGrade">{{ $room->m_price }}/month</td>                   
                                <td>{{ date('m-d-Y', strtotime($room->updated_at)) }}</td>
                                <td><a href="{{ '/admin/hosts/profile/'.$room->user_id }}">{{ $room->user->email }}</a></td>
                                <td>
                                    {!! Form::model($room, ['url' => '/host/room/change_status', 'class' => 'form-horizontal']) !!}
                                    @if ($room->status == 1)                            
                                            {!! Form::hidden('id', $room->id) !!}
                                            {!! Form::hidden('status', 0) !!}
                                            {!! Form::submit('Listed', ['class' => 'btn btn-sm btn-success', 'required']) !!} 
                                    @else
                                            {!! Form::hidden('id', $room->id) !!}
                                            {!! Form::hidden('status', 1) !!}
                                            {!! Form::submit('Unlisted', ['class' => 'btn btn-sm btn-danger', 'required']) !!}         
                                    @endif
                                    {!! Form::close() !!}
                                </td>
                                
                                <td>
                                    <!-- <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#viewMyModal{{$room->id}}">View this room</button> -->
                                    <a href="{{ url('Admin/host/room/'.$room->id) }}" ><button class="btn btn-sm btn-primary">Detail</button></a>
                                    <form action="{{ url('host/room/'.$room->id) }}" style='display: inline' method="post">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <button class="btn btn-sm btn-danger" onclick="return confirm('确定删除?')">Delete</button>
                                    </form>
                                </td>
                            </tr>              

                        @endforeach
                    @else
                        <h1>没有房源,请添加</h1>
                    @endif
                </table>

            </div>
            @include('Admin.right_bar')
        </div>
        <?php echo $rooms->render(); ?>
    </div>
@stop