<div class="modal fade" id="updateInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel"></h4>
            </div>
            {!! Form::model($stu_info, ['url' => '/admin/stu/update_info', 'class' => 'form-horizontal']) !!}

              <div class="modal-body">

                {!! Form::hidden('id', $stu_info->id) !!}

                <h4>
                  {!! Form::label('fName', 'First name: ', ['class' => 'control-label']) !!}
                  {!! Form::text('fName', null, ['class' => 'form-control', 'required']) !!}
                </h4>
                <h4>
                  {!! Form::label('lName', 'Last name: ', ['class' => 'control-label']) !!}
                  {!! Form::text('lName', null, ['class' => 'form-control', 'required']) !!}
                </h4>
                <h4>
                  {!! Form::label('age', 'Age: ', ['class' => 'control-label']) !!}
                  {!! Form::text('age', null, ['class' => 'form-control', 'required']) !!}
                </h4>
                <h4>
                  {!! Form::label('gender', 'Gender: ', ['class' => 'control-label']) !!}
                  {!! Form::select('gender', ['0' => '-- Select --',
                                              '1' => 'Male', 
                                              '2' => 'Female'], 
                                      Auth::user()->gender, ['class' => 'form-control']) !!}
                </h4>
                <h4>
                  {!! Form::label('ethnicity', 'Ethnicity: ', ['class' => 'control-label']) !!}
                  {!! Form::select('ethnicity', ['0' => '-- Select --',
                                                '1' => 'Asian', 
                                                '2' => 'Hispanic',
                                                '3' => 'White',
                                                '4' => 'Black',
                                                '5' => 'Pacific Islander',
                                                '6' => 'Two or more races',
                                                '7' => 'Other'], 
                                     Auth::user()->ethnicity, ['class' => 'form-control']) !!}
                </h4>
                <h4>
                  {!! Form::label('from', 'From country: ', ['class' => 'control-label']) !!}
                  {!! Form::text('from', null, ['class' => 'form-control', 'required']) !!}
                </h4>
                <h4>
                  {!! Form::label('occupation', 'Occupation: ', ['class' => 'control-label']) !!}
                  {!! Form::select('occupation', ['0' => '-- Select --',
                                                '1' => 'Officer worker', 
                                                '2' => 'Manual worker',
                                                '3' => 'Self-employed',
                                                '4' => 'Executive/Professional',
                                                '5' => 'Housewife',
                                                '6' => 'Retired',
                                                '7' => 'Other'], 
                                     Auth::user()->ethnicity, ['class' => 'form-control']) !!}
                </h4>             
                <h4>
                  {!! Form::label('purpose', 'Purpose of travelling: ', ['class' => 'control-label']) !!}
                  {!! Form::select('purpose',  ['0' => '-- Select --',
                                                '1' => 'Study abroad', 
                                                '2' => 'Travel',
                                                '3' => 'Business',
                                                '4' => 'Other'], 
                                     Auth::user()->purpose, ['class' => 'form-control']) !!}
                </h4>
                <h4>
                  {!! Form::label('phone', 'Phone: ', ['class' => 'control-label']) !!}
                  {!! Form::text('phone', null, ['class' => 'form-control', 'required']) !!}
                </h4>
              </div>

              <div class="modal-footer">
                {!! Form::button('关闭', ['class' => 'btn btn-default', 'data-dismiss' => 'modal']) !!}
                {!! Form::submit('提交', ['class' => 'btn btn-success']) !!}
              </div>

            {!! Form::close() !!}
        </div>
    </div>
</div>