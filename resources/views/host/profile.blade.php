@extends('host.host-master')

@section('title')
    Profile - TP
@stop

@section('content')

    <div class="row">

        @include('host.profile_bar')

        <div class="col-md-7">  

            <div class="panel panel-default">
                <div class="panel-heading">
                   <h4>Required</h4>
                </div>

                @include('flash')
                @include('errors.list')

                <div class="panel-body">
                    <div class="personal-mes">

                        {!! Form::model($host_info, ['url' => '/host/update_info', 'class' => 'form-horizontal']) !!}
                        {!! Form::hidden('user_id', $host_info->id) !!}
                            
                            <div class="form-group">
                                    {!! Form::label('fName', 'First Name: ', ['class' => 'col-sm-3 control-label']) !!} 
                                <div class="col-sm-8">
                                    {!! Form::text('fName', null, ['class' => 'form-control', 'required']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('lName', 'Last Name: ', ['class' => 'col-sm-3 control-label']) !!}
                                
                                <div class="col-sm-8">
                                    {!! Form::text('lName', null, ['class' => 'form-control', 'required']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('age', 'Age: ', ['class' => 'col-sm-3 control-label']) !!}               
                                <div class="col-sm-6 col-md-4">
                                    {!! Form::text('age', null, ['class' => 'form-control', 'required']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('gender', 'I Am: ', ['class' => 'col-sm-3 control-label']) !!}
                                
                                <div class="col-sm-6 col-md-4">
                                    {!! Form::select('gender', [  '0' => 'Gender',
                                                                      '1' => 'Male', 
                                                                      '2' => 'Female'], 
                                                                      Auth::user()->gender, 
                                                                      ['class' => 'form-control']) !!}
                                </div>
                            </div>                           
                            <div class="form-group">
                                {!! Form::label('ethnicity', 'I Am: ', ['class' => 'col-sm-3 control-label']) !!}                
                                <div class="col-sm-6 col-md-4">
                                    {!! Form::select('ethnicity', [ '0'=>'Ethnicity',
                                                                    '1' => 'Asian', 
                                                                    '2' => 'Hispanic',
                                                                    '3' => 'White',
                                                                    '4' => 'Black',
                                                                    '5' => 'Pacific Islander',
                                                                    '6' => 'Two or more races',
                                                                    '7' => 'Other'], 
                                                                    Auth::user()->ethnicity, 
                                                                    ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('occupation', 'I Am a: ', ['class' => 'col-sm-3 control-label']) !!}
                                <div class="col-sm-6 col-md-4">
                                    {!! Form::select('occupation', ['0' => 'Occupation',
                                                                    '1' => 'Officer worker', 
                                                                    '2' => 'Manual worker',
                                                                    '3' => 'Self-employed',
                                                                    '4' => 'Executive/Professional',
                                                                    '5' => 'Housewife',
                                                                    '6' => 'Retired',
                                                                    '7' => 'Other'], 
                                                                     Auth::user()->occupation, 
                                                                     ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('email', 'Email Address: ', ['class' => 'col-sm-3 control-label']) !!}      
                                <div class="col-sm-8">
                                    {!! Form::text('email', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group form-inline">
                                
                                {!! Form::label('phone', 'Phone Number: ', ['class' => 'col-sm-3 control-label']) !!}          
                                <div class="col-sm-8">                       
                                    {!! Form::text('phone', old('phone'), ['class' => 'form-control', 'placeholder' => 'Area Code', 'required']) !!}
                                    {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Number', 'required']) !!}
                                </div>
                            </div>            
                            
                            <div class="form-group">
                                {!! Form::label('language', 'Language SKills: ', ['class' => 'col-sm-3 control-label']) !!}   
                                <div class="col-sm-8">

                                    <div class="col-sm-3 checkbox checkbox-success">
                                        <input id="en" name="language[]" value="English" type="checkbox" <?php if(in_array('English', $host_info->language)) echo 'checked="checked"'; ?> >
                                        <label for="en" class="control-label">English</label>
                                    </div>
                                    <div class="col-sm-3 checkbox checkbox-success">
                                        <input id="sp" name="language[]" value="Spanish" type="checkbox" <?php if(in_array('Spanish', $host_info->language)) echo 'checked="checked"'; ?> >
                                        <label for="sp" class="control-label">Spanish</label>
                                    </div>
                                    <div class="col-sm-3 checkbox checkbox-success">
                                        <input id="cn" name="language[]" value="Chinese" type="checkbox" <?php if(in_array('Chinese', $host_info->language)) echo 'checked="checked"'; ?> >
                                        <label for="cn" class="control-label">Chinese</label>
                                    </div>
                                    <div class="col-sm-3 checkbox checkbox-success">
                                        <input id="vi" name="language[]" value="Vietnamese" type="checkbox" <?php if(in_array('Vietnamese', $host_info->language)) echo 'checked="checked"'; ?> >
                                        <label for="vi" class="control-label">Vietnamese</label>
                                    </div>
                                    <div class="col-sm-3 checkbox checkbox-success">
                                        <input id="fi" name="language[]" value="Filipino" type="checkbox" <?php if(in_array('Filipino', $host_info->language)) echo 'checked="checked"'; ?> >
                                        <label for="fi" class="control-label">Filipino</label>
                                    </div>
                                    <div class="col-sm-3 checkbox checkbox-success">
                                        <input id="fr" name="language[]" value="French" type="checkbox" <?php if(in_array('French', $host_info->language)) echo 'checked="checked"'; ?> >
                                        <label for="fr" class="control-label">French</label>
                                    </div>
                                    <div class="col-sm-3 checkbox checkbox-success">
                                        <input id="ge" name="language[]" value="German" type="checkbox" <?php if(in_array('German', $host_info->language)) echo 'checked="checked"'; ?> >
                                        <label for="ge" class="control-label">German</label>
                                    </div>
                                    <div class="col-sm-3 checkbox checkbox-success">
                                        <input id="in" name="language[]" value="Indian" type="checkbox" <?php if(in_array('Indian', $host_info->language)) echo 'checked="checked"'; ?> >
                                        <label for="in" class="control-label">Indian</label>
                                    </div>
                                    <div class="col-sm-3 checkbox checkbox-success">
                                        <input id="ko" name="language[]" value="Korean" type="checkbox" <?php if(in_array('Korean', $host_info->language)) echo 'checked="checked"'; ?> >
                                        <label for="ko" class="control-label">Korean</label>
                                    </div>
                                    <div class="col-sm-3 checkbox checkbox-success">
                                        <input id="po" name="language[]" value="Portuguese" type="checkbox" <?php if(in_array('Portuguese', $host_info->language)) echo 'checked="checked"'; ?> >
                                        <label for="po" class="control-label">Portuguese</label>
                                    </div>
                                    <div class="col-sm-3 checkbox checkbox-success">
                                        <input id="ot" name="language[]" value="Other" type="checkbox" <?php if(in_array('Other', $host_info->language)) echo 'checked="checked"'; ?> >
                                        <label for="ot" class="control-label">Other</label>
                                    </div>

                                </div>
                            </div>
                            
                            {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
                        
                        {!! Form::close() !!}
                        
                    </div>
                </div>
            
            </div>
        </div>

    </div>

@stop


