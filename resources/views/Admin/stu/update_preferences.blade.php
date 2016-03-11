<div class="modal fade" id="updatePreferences" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h3 class="modal-title" id="myModalLabel">Preferences</h3>
            </div>
            {!! Form::model($stu_info, ['url' => '/admin/stu/update_preferences', 'class' => 'form-horizontal']) !!}

              <div class="modal-body">

                {!! Form::hidden('id', $stu_info->id) !!}

                <h4>
                  {!! Form::label('arrival', 'Arrival date: ', ['class' => 'control-label']) !!}
                  {!! Form::text('arrival', null, ['class' => 'form-control', 'id' => 'Arrival_datepicker', 'required']) !!}
                </h4>
                <h4>
                  {!! Form::label('departure', 'Departure date: ', ['class' => 'control-label']) !!}
                  {!! Form::text('departure', null, ['class' => 'form-control', 'required', 'id' => 'Departure_datepicker']) !!}
                </h4>
                <h4>
                  {!! Form::label('m_price', 'Monthly price Max.: ', ['class' => 'control-label ']) !!}
                  <div class="input-group">
                    <div class="input-group-addon">$</div>
                    {!! Form::text('m_price', null, ['class' => 'form-control', 'required']) !!}
                    <div class="input-group-addon">dollors</div>
                  </div>
                </h4>
                <h4>
                  {!! Form::label('d_price', 'Daily price Max.: ', ['class' => 'control-label']) !!}
                  <div class="input-group">
                    <div class="input-group-addon">$</div>
                    {!! Form::text('d_price', null, ['class' => 'form-control', 'required']) !!}
                    <div class="input-group-addon">dollors</div>
                  </div>
                </h4>
                <h4>
                  {!! Form::label('service', 'Services required: ', ['class' => 'control-label']) !!}
                  {!! Form::text('service', null, ['class' => 'form-control', 'required']) !!}
                </h4>
                <h4>
                  {!! Form::label('intro', 'Introduction: ', ['class' => 'control-label']) !!}
                  {!! Form::textarea('intro', null, ['class' => 'form-control', 'required']) !!}
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