<!-- Calendar tab begin-->
<div class="tab-pane fade" id="calendarpricing">
	<h3>  Set your calendar </h3>

    <hr class="divider">

    @include('flash')

	<h4>  Listing </h4>
	
	<div class="row">
        {!! Form::model($room, ['url' => '/host/room/update_calendarPrice', 'class' => 'form-horizontal']) !!}
        {!! Form::hidden('user_id', $room->id) !!}

        <div class="col-md-6">
            {!! Form::label('avail_from', 'Room available from: ', ['class' => 'control-label']) !!}
            {!! Form::text('avail_from', null, ['class' => 'form-control', 'id' => 'Arrival_datepicker', 'style' => 'position:relative;z-index:100', 'required']) !!}
        </div>
        <div class="col-md-6">
            {!! Form::label('min_days', 'Minmiun days to stay: ', ['class' => 'control-label']) !!}
            <div class="input-group">
              <div class="input-group-addon">Min.</div>
                {!! Form::text('min_days', null, ['class' => 'form-control', 'required']) !!}
              <div class="input-group-addon"><b>days</b></div>
            </div>
        </div>
        <div class="col-md-6">
            {!! Form::label('m_price', 'Monthly price: ', ['class' => 'control-label']) !!}
            <div class="input-group">
              <div class="input-group-addon">$</div>
                {!! Form::text('m_price', null, ['class' => 'form-control', 'required']) !!}
                <div class="input-group-addon"><b>dollors</b></div>
            </div>
        </div>
        <div class="col-md-6">
            {!! Form::label('d_price', 'Daily price: ', ['class' => 'control-label']) !!}
            <div class="input-group">
              <div class="input-group-addon">$</div>
                {!! Form::text('d_price', null, ['class' => 'form-control', 'required']) !!}
                <div class="input-group-addon"><b>dollors</b></div>
            </div>
        </div>
        
	</div>
  <!-- /.row -->

  <hr class="divider">

  {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
  {!! Form::close() !!}

</div>
<!-- Calendar tab end -->