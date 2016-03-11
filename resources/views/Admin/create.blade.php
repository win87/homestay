@extends('master')

@section('title')
    添加学生
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h2>添加用户</h2>
                <hr />

                @include('errors.list')

                <div class="form-group">
                    {!! Form::model($user = new \App\User, ['url' => 'admin/', 'class' => 'form-horizontal']) !!}
                        <div class="form-group">
                            {!! Form::label('user_type', 'User Type: ', ['class' => 'col-md-2 control-label']) !!}
                            <div class="col-md-4">
                                {!! Form::select('user_type', [null => '-- Select --', '1' => 'Host', '2' => 'Student'], Auth::user()->user_type, ['class' => 'form-control', 'required']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('email', 'Email: ', ['class' => 'control-label col-md-2']) !!}
                            <div class="col-md-4">
                                {!! Form::text('email', old('email'), ['class' => 'form-control', 'required']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('name', 'Name: ', ['class' => 'control-label col-md-2']) !!}
                            <div class="col-md-4">
                                {!! Form::text('name', old('name'), ['class' => 'form-control', 'required']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-2">
                                {!! Form::submit('Add', ['class' => 'col-md-offset-10 btn btn-success form-control']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
            @include('Admin.right_bar')
        </div>
    </div>
@stop