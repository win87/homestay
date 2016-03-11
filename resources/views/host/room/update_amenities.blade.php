<div class="modal fade" id="updateAmenities" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">{{ $room->title }}</h4>
            </div>
            {!! Form::model($room, ['url' => '/host/room/update_amenities', 'class' => 'form-horizontal']) !!}

              <div class="modal-body">

                {!! Form::hidden('user_id', $room->id) !!}
                <h4>
                  {!! Form::label('amenities', 'Amenities: ', ['class' => 'control-label']) !!}
                  {!! Form::checkbox('amenities[]', 'Meals', ['class' => 'form-control']) !!}
                  {!! Form::checkbox('amenities[]', 'Transportation', ['class' => 'form-control']) !!}
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