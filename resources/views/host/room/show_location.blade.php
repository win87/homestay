@extends('host.host-master')

@extends('left_bar')

@section('title')
    {{ $room->title }}
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            
            <h3>  Help guests find your place </h3>
            <h5>  Highlight what makes your listing welcoming so that it stands out to guests who want to stay in your area.</h5>

            <hr class="divider">

            @include('flash')
            
            <h4>  Listing </h4>
            
            <div class="row">
                {!! Form::model($room, ['url' => '/host/room/update_location', 'class' => 'form-horizontal']) !!}
                {!! Form::hidden('user_id', $room->id) !!}

                <div class="col-md-12">
                    {!! Form::label('country', 'Country: ', ['class' => 'control-label form-group']) !!}
                    {!! Form::text('country', null, ['class' => 'form-control form-group', 'required']) !!}
                </div>
                <div class="col-md-12">
                    {!! Form::label('address1', 'Street Address: ', ['class' => 'control-label form-group']) !!}
                    {!! Form::text('address1', null, ['class' => 'form-control form-group', 'required']) !!}
                </div>
                <div class="col-md-12">
                    {!! Form::label('address2', 'Apt, Suite, Bldg. (optional): ', ['class' => 'control-label form-group']) !!}
                    {!! Form::text('address2', null, ['class' => 'form-control form-group']) !!}
                </div>
                <div class="col-md-4">
                    {!! Form::label('city', 'City: ', ['class' => 'control-label form-group']) !!}
                    {!! Form::text('city', null, ['class' => 'form-control form-group', 'required']) !!}
                </div>
                <div class="col-md-4">
                    {!! Form::label('state', 'State: ', ['class' => 'control-label form-group']) !!}
                    {!! Form::text('state', null, ['class' => 'form-control form-group', 'required']) !!}
                </div>
                <div class="col-md-4">
                    {!! Form::label('zip', 'Zip: ', ['class' => 'control-label form-group']) !!}
                    {!! Form::text('zip', null, ['class' => 'form-control form-group', 'required']) !!}
                </div>

              </div>

              <hr class="divider">
              
              {!! Form::submit('提交', ['class' => 'btn btn-success']) !!}
              {!! Form::close() !!}
            
            <!-- /.row -->

        </div>
@stop