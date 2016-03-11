<div class="modal fade" id="updateLocation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">{{ $room->title }}</h4>
            </div>
            {!! Form::model($room, ['url' => '/host/room/update_location', 'class' => 'form-horizontal']) !!}

              <div class="modal-body">

                {!! Form::hidden('user_id', $room->id) !!}
                <h4>
                  {!! Form::label('address1', 'Address line 1: ', ['class' => 'control-label']) !!}
                  {!! Form::text('address1', null, ['class' => 'form-control', 'required']) !!}
                </h4>
                <h4>
                  {!! Form::label('address2', 'Address line 2: ', ['class' => 'control-label']) !!}
                  {!! Form::text('address2', null, ['class' => 'form-control']) !!}
                </h4>
                <h4>
                  {!! Form::label('city', 'City: ', ['class' => 'control-label']) !!}
                  {!! Form::text('city', null, ['class' => 'form-control', 'required']) !!}
                </h4>
                <h4>
                  {!! Form::label('state', 'State: ', ['class' => 'control-label']) !!}
                  {!! Form::text('state', null, ['class' => 'form-control', 'required']) !!}
                </h4>
                <h4>
                  {!! Form::label('zip', 'Zip: ', ['class' => 'control-label']) !!}
                  {!! Form::text('zip', null, ['class' => 'form-control', 'required']) !!}
                </h4>
                <h4>
                  {!! Form::label('country', 'Country: ', ['class' => 'control-label']) !!}
                  {!! Form::text('country', null, ['class' => 'form-control', 'required']) !!}
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