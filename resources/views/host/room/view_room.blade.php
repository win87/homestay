<div class="modal fade" id="viewMyModal{{$room->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">{{ $room->title }}</h4>
            </div>
            <!-- {!! Form::model($room, ['url' => '/host/room', 'class' => 'form-horizontal']) !!} -->
            <!-- {!! Form::model($room) !!} -->

              <div class="modal-body">

                {!! Form::hidden('user_id', $room->id) !!}
                <h4>
                  {!! Form::label('title', 'Title: ', ['class' => 'control-label']) !!}
                  {!! Form::text('title', null, ['class' => 'form-control', 'required', 'readonly']) !!}
                </h4>
                <h4>
                  {!! Form::label('room_type', 'Room type: ', ['class' => 'control-label']) !!}
                  {!! Form::text('room_type', null, ['class' => 'form-control', 'required', 'readonly']) !!}
                </h4>
                <h4>
                  {!! Form::label('house_type', 'House type: ', ['class' => 'control-label']) !!}
                  {!! Form::text('house_type', null, ['class' => 'form-control', 'required', 'readonly']) !!}
                </h4>
                <h4>
                  {!! Form::label('intro', 'Introduction: ', ['class' => 'control-label']) !!}
                  {!! Form::text('intro', null, ['class' => 'form-control', 'required', 'readonly']) !!}
                </h4>
              </div>

              <div class="modal-body">

                {!! Form::hidden('user_id', $room->id) !!}
                <h4>
                  {!! Form::label('title', 'Title: ', ['class' => 'control-label']) !!}
                  {!! Form::text('title', null, ['class' => 'form-control', 'required', 'readonly']) !!}
                </h4>
                <h4>
                  {!! Form::label('room_type', 'Room type: ', ['class' => 'control-label']) !!}
                  {!! Form::text('room_type', null, ['class' => 'form-control', 'required', 'readonly']) !!}
                </h4>
                <h4>
                  {!! Form::label('bed_type', 'Bed type: ', ['class' => 'control-label']) !!}
                  {!! Form::text('bed_type', null, ['class' => 'form-control', 'required', 'readonly']) !!}
                </h4>
                <h4>
                  {!! Form::label('intro', 'Introduction: ', ['class' => 'control-label']) !!}
                  {!! Form::text('intro', null, ['class' => 'form-control', 'required', 'readonly']) !!}
                </h4>
              </div>

              <div class="modal-footer">
                {!! Form::button('关闭', ['class' => 'btn btn-default', 'data-dismiss' => 'modal']) !!}
                <!-- {!! Form::submit('更新房源', ['class' => 'btn btn-success', 'data-toggle' => 'modal', 'data-target' => '#updateRoom{{$room->id}}']) !!} -->
                <a href="{{ url('host/room/'.$room->id) }}" ><button class="btn btn-sm btn-primary">更新房源</button></a>
              </div>

            <!-- {!! Form::close() !!} -->
        </div>
    </div>
</div>