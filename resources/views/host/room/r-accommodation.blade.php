<!-- Accommodation tab begin-->
<div class="tab-pane fade active" id="accommodation">
	<h3>  Help travelers find the right fit </h3>

    <hr class="divider">

    @include('flash')

	<h4>  Listing </h4>
	
	<div class="row">
        {!! Form::model($room, ['url' => '/host/room/update_accommodation', 'class' => 'form-horizontal']) !!}
        {!! Form::hidden('user_id', $room->id) !!}

        <div class="col-md-6">
            {!! Form::label('adult_num', 'No. of adult in your house: ', ['class' => 'control-label']) !!}
            {!! Form::text('adult_num', null, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="col-md-6">
            {!! Form::label('child_num', 'No. of child in your house: ', ['class' => 'control-label']) !!}
            {!! Form::text('child_num', null, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="col-md-6">
            {!! Form::label('house_type', 'House type: ', ['class' => 'control-label']) !!}
            {!! Form::select('house_type', ['0' => '-- Select --',
                                          'House' => 'House', 
                                          'Apartment' => 'Apartment', 
                                          'Condo' => 'Condo', 
                                          'Town House' => 'Town House', 
                                          'Other' => 'Other'], 
                                          Auth::user()->house_type, 
                                          ['class' => 'form-control']) !!}
        </div>
        <div class="col-md-6">
            {!! Form::label('room_type', 'Room type: ', ['class' => 'control-label']) !!}
            {!! Form::select('room_type', ['0' => '-- Select --',
                                         'Private room' => 'Private room', 
                                         'Shared room' => 'Shared room', 
                                         'Entire house' => 'Entire house'], 
                                         Auth::user()->room_type, 
                                         ['class' => 'form-control']) !!}
        </div>
	</div>
  <!-- /.row -->

  <hr class="divider">

  {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
  {!! Form::close() !!}
</div>
<!-- Accommodation tab end -->

