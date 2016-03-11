@extends('host.host-master')

@extends('host.manage_list_bar')

@section('title')
    {{ $room->title }}
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            
            <h3>  Help travelers find the right fit </h3>

            <hr class="divider">

            @include('flash')
            
            <h4>  Listing </h4>
            
            <div class="row">
                {!! Form::model($room, ['url' => '/host/room/update_accommodation', 'class' => 'form-horizontal']) !!}
                {!! Form::hidden('user_id', $room->id) !!}

                <div class="col-md-4">
                    {!! Form::label('title', 'Title: ', ['class' => 'control-label']) !!}
                    {!! Form::text('title', null, ['class' => 'form-control', 'required']) !!}
                </div>
                <div class="col-md-4">
                    {!! Form::label('adult_num', 'No. of adult in your house: ', ['class' => 'control-label']) !!}
                    {!! Form::text('adult_num', null, ['class' => 'form-control', 'required']) !!}
                </div>
                <div class="col-md-4">
                    {!! Form::label('child_num', 'No. of child in your house: ', ['class' => 'control-label']) !!}
                    {!! Form::text('child_num', null, ['class' => 'form-control', 'required']) !!}
                </div>
                <div class="col-md-4">
                    {!! Form::label('house_type', 'House type: ', ['class' => 'control-label']) !!}
                    {!! Form::select('house_type', ['0' => '-- Select --',
                                                  '1' => 'House', 
                                                  '2' => 'Apartment', 
                                                  '3' => 'Condo', 
                                                  '4' => 'Town House', 
                                                  '5' => 'Other'], 
                                                  Auth::user()->house_type, 
                                                  ['class' => 'form-control']) !!}
                </div>
                <div class="col-md-4">
                    {!! Form::label('room_type', 'Room type: ', ['class' => 'control-label']) !!}
                    {!! Form::select('room_type', ['0' => '-- Select --',
                                                 '1' => 'Private room', 
                                                 '2' => 'Shared room', 
                                                 '3' => 'Entire house'], 
                                                 Auth::user()->room_type, 
                                                 ['class' => 'form-control']) !!}
                </div>
                <div class="col-md-4">
                    {!! Form::label('intro', 'Introduction: ', ['class' => 'control-label']) !!}
                    {!! Form::textarea('intro', null, ['class' => 'form-control', 'required']) !!}
                </div>
                <div class="col-md-4">
                    {!! Form::submit('提交', ['class' => 'btn btn-success']) !!}
                </div>
                {!! Form::close() !!}
            </div>
            <!-- /.row -->

        </div>
@stop