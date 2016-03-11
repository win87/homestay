@extends('master')

@section('title')
    房源列表
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">

                @include('errors.list')

                <h3 align="center"> Total of Listing of：{{ $count }}</h3>
                <table class="table table-striped" id="sortTable">
                    <!-- <tr>    
                        <th>Title</th>
                        <th>House Type</th>
                        <th>Room Type</th>
                        <th>Monthly<a href="javascript:void(0)"><span class="glyphicon glyphicon-sort" aria-hidden="true"></span></a></th>      
                        <th>Status</th>
                        <th>Operation</th>
                    </tr> -->
                    <thead>

                        <tr>
                            <th class="col-md-2">Title of Listing <a href="javascript:void(0)"><span class="glyphicon glyphicon-sort" aria-hidden="true"></span></a></th>
                            <th>House Type <a href="javascript:void(0)"><span class="glyphicon glyphicon-sort" aria-hidden="true"></span></a></th>
                            <th>Room Type <a href="javascript:void(0)"><span class="glyphicon glyphicon-sort" aria-hidden="true"></span></a></th>
                            <th>Monthly Price <a href="javascript:void(0)"><span class="glyphicon glyphicon-sort" aria-hidden="true"></span></a></th>
                            <th>Status <a href="javascript:void(0)"><span class="glyphicon glyphicon-sort" aria-hidden="true"></span></a></th>
                            <th>Updated at <a href="javascript:void(0)"><span class="glyphicon glyphicon-sort" aria-hidden="true"></span></a></th>
                        </tr>
                    </thead>
                    @if (count($rooms))
                        @foreach ($rooms as $room)

                            <tr>               
                                <td>{{ $room->title }}</td>
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
                                <td>
                                    @if ($room->room_type == 1)
                                            Private room
                                        @elseif ($room->room_type == 2)
                                            Shared room
                                        @else
                                            Entire house
                                    @endif
                                </td>                            
                                <td class="myGrade">{{ $room->m_price }}</td>
                                <td>{{ $room->status ==1 ? 'Listed' : 'Unlist' }}</td>
                                <td>{{ date('m-d-Y', strtotime($room->updated_at)) }}</td>
                                <td>
                                    <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#viewMyModal{{$room->id}}">View this room</button>
                                    <a href="{{ url('host/room/'.$room->id) }}" ><button class="btn btn-sm btn-primary">Detail</button></a>
                                    <form action="{{ url('host/room/'.$room->id) }}" style='display: inline' method="post">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <button class="btn btn-sm btn-danger" onclick="return confirm('确定删除?')">删除</button>
                                    </form>
                                </td>
                            </tr>              

                        @include('host.room.view_room')

                        @endforeach
                    @else
                        <h3>没有房源
                            <a href="/host/room/create"><button class="btn btn-sm">添加房源</button></a>
                        </h3>
                    @endif
                </table>

            </div>
            @include('host.room.right_bar')
        </div>
        <?php echo $rooms->render(); ?>
    </div>
@stop