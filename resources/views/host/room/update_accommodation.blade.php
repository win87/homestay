<div class="modal fade" id="updateAccommodation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">{{ $room->title }}</h4>
            </div>
            {!! Form::model($room, ['url' => '/host/room/update_accommodation', 'class' => 'form-horizontal']) !!}

              <div class="modal-body">

                {!! Form::hidden('user_id', $room->id) !!}
                <h4>
                  {!! Form::label('title', 'Title: ', ['class' => 'control-label']) !!}
                  {!! Form::text('title', null, ['class' => 'form-control', 'required']) !!}
                </h4>
                <h4>
                  {!! Form::label('adult_num', 'No. of adult in your house: ', ['class' => 'control-label']) !!}
                  {!! Form::text('adult_num', null, ['class' => 'form-control', 'required']) !!}
                </h4>
                <h4>
                  {!! Form::label('child_num', 'No. of child in your house: ', ['class' => 'control-label']) !!}
                  {!! Form::text('child_num', null, ['class' => 'form-control', 'required']) !!}
                </h4>
                <h4>
                  {!! Form::label('house_type', 'House type: ', ['class' => 'control-label']) !!}
                  {!! Form::select('house_type', ['0' => '-- Select --',
                                                  '1' => 'House', 
                                                  '2' => 'Apartment', 
                                                  '3' => 'Condo', 
                                                  '4' => 'Town House', 
                                                  '5' => 'Other'], 
                                                  Auth::user()->house_type, 
                                                  ['class' => 'form-control']) !!}
                </h4>
                <h4>
                  {!! Form::label('room_type', 'Room type: ', ['class' => 'control-label']) !!}
                  {!! Form::select('room_type', ['0' => '-- Select --',
                                                 '1' => 'Private room', 
                                                 '2' => 'Shared room', 
                                                 '3' => 'Entire house'], 
                                                 Auth::user()->room_type, 
                                                 ['class' => 'form-control']) !!}
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

