<STYLE>
body, input{
    font-family: Calibri, Arial;
    margin: 0px;
    padding: 0px;
}
a {
    color: #0254EB
}
a:visited {
    color: #0254EB
}
#header h2 {
    color: white;
    background-color: #00A1E6;
    margin:0px;
    padding: 5px;
}
.comment {
    width: 400px;
    background-color: #f0f0f0;
    margin: 10px;
}
a.morelink {
    text-decoration:none;
    outline: none;
}
.morecontent span {
    display: none;

}
</STYLE>

@extends('master')

@section('title')
    {{ $room->title }}
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="/admin"><button class="btn btn-default">返回功能栏</button></a>
                    |
                    <button class="btn btn-default" data-toggle="modal" data-target="#updateAccommodation">Accommodation</button>
                    <button class="btn btn-default" data-toggle="modal" data-target="#updateLocation">Location</button>
                    <button class="btn btn-default" data-toggle="modal" data-target="#updateCalendarPrice">Calendar & Price</button>
                    <button class="btn btn-default" data-toggle="modal" data-target="#updateAmenities">Amenities</button>
                    <button class="btn btn-default" data-toggle="modal" data-target="#updatePictures">Pictures</button>
                </div>

                @include('errors.list')

                <div class="panel-body"> 
                    

                    <!-- Accommodation -->
                    <button class="btn btn-default" data-toggle="modal" data-target="#updateAccommodation">Accommodation</button>
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-bordered table-striped">
                                <tr><td>Title of listing: {{ $room->title }}</td></tr>
                                <tr><td>No. of adult in your house：{{ $room->adult_num }}</td></tr>
                                <tr><td>No. of child in you house: {{ $room->child_num }}</td></tr>   
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <td>House type: 
                                        @if ($room->house_type == 1)
                                            Private room
                                        @elseif ($room->house_type == 2)
                                            Shared room
                                        @elseif ($room->house_type == 3)
                                            Entire house
                                        @else
                                            Not select
                                    @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Room type：
                                        @if ($room->room_type == 1)
                                            House
                                        @elseif ($room->room_type == 2)
                                            Apartment
                                        @elseif ($room->room_type == 3)
                                            Condo
                                        @elseif ($room->room_type == 4)
                                            Town House
                                        @else
                                            Not select
                                    @endif
                                    </td>
                                </tr>
                                <tr><td class="comment more">Introduction: {{ $room->intro }} </td></tr>
                            </table>
                        </div>
                    </div>
                    <!-- Accommodation end -->        

                    <!-- Location -->
                    <button class="btn btn-default" data-toggle="modal" data-target="#updateLocation">Location</button>
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-bordered table-striped">
                                <tr><td>Address line 1: {{ $room->address1 }}</td></tr>
                                <tr><td>City：{{ $room->city }}</td></tr>
                                <tr><td>Zip: {{ $room->zip }}</td></tr>    
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-bordered table-striped">
                                <tr><td>Address line 2: {{ $room->address2 }}</td></tr>
                                <tr><td>State：{{ $room->state }}</td></tr>
                                <tr><td>Country: {{ $room->country }}</td></tr> 
                            </table>
                        </div>
                    </div>
                    <!-- Location end -->

                    <!-- Calendar and Price -->
                    <button class="btn btn-default" data-toggle="modal" data-target="#updateCalendarPrice">Calendar & Price</button>
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-bordered table-striped">
                                <tr><td>Room available from: {{ $room->avail_from }}</td></tr>
                                <tr><td>Minimun days to stay：{{ $room->min_days }}</td></tr> 
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-bordered table-striped">
                                <tr><td>Monthly Price: ${{ $room->m_price }}</td></tr>
                                <tr><td>Daily Price：${{ $room->d_price }}</td></tr> 
                            </table>
                        </div>
                    </div>
                    <!-- Calendar and Price end -->

                    <!-- Amenities -->
                    <button class="btn btn-default" data-toggle="modal" data-target="#updateAmenities">Amenities</button>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered table-striped">
                                <tr><td>Services: {{ $room->amenities }}</td></tr>
                                <tr><td>Meals</td></tr>
                                <tr><td>Transportation</td></tr>
                            </table>
                        </div>
                    </div>
                    <!-- Amenities end -->

                 @include('host.room.update_accommodation')
                 @include('host.room.update_location')
                 @include('host.room.update_calendarPrice')
                 @include('host.room.update_amenities')
                 @include('host.room.update_pictures')

           
            <a href="{{ url('/admin/hosts/rooms/'.$room->user_id) }}"><button class="btn btn-primary">Return to Listing</button></a>
        </div>

    </div>

</div>
@stop

