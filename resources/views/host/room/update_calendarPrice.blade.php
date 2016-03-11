<div class="modal fade" id="updateCalendarPrice" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">{{ $room->title }}</h4>
            </div>
            {!! Form::model($room, ['url' => '/host/room/update_calendarPrice', 'class' => 'form-horizontal']) !!}

              <div class="modal-body">

                {!! Form::hidden('user_id', $room->id) !!}
                <h4>
                  {!! Form::label('avail_from', 'Room available from: ', ['class' => 'control-label']) !!}
                  {!! Form::text('avail_from', null, ['class' => 'form-control', 'id' => 'Arrival_datepicker', 'required']) !!}
                </h4>
                <h4>
                  {!! Form::label('min_days', 'Minmiun days to stay: ', ['class' => 'control-label']) !!}
                  <div class="input-group">
                    <div class="input-group-addon">Min.</div>
                      {!! Form::text('min_days', null, ['class' => 'form-control', 'required']) !!}
                      <div class="input-group-addon"><b>days</b></div>
                    </div>
                </h4>
                <h4>
                  {!! Form::label('m_price', 'Monthly price: ', ['class' => 'control-label']) !!}
                  <div class="input-group">
                    <div class="input-group-addon">$</div>
                      {!! Form::text('m_price', null, ['class' => 'form-control', 'required']) !!}
                      <div class="input-group-addon"><b>dollors</b></div>
                  </div>
                </h4>
                <h4>
                  {!! Form::label('d_price', 'Daily price: ', ['class' => 'control-label']) !!}
                  <div class="input-group">
                    <div class="input-group-addon">$</div>
                      {!! Form::text('d_price', null, ['class' => 'form-control', 'required']) !!}
                      <div class="input-group-addon"><b>dollors</b></div>
                  </div>
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