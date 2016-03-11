<!-- Location tab begin -->
<div class="tab-pane fade" id="location" >

	<h3>  Help guests find your place </h3>
    <h5>  Highlight what makes your listing welcoming so that it stands out to guests who want to stay in your area.</h5>

    <hr class="divider">

    @include('flash')
	
    <div class="container">

        <!-- Google map display begin -->
        <div class="col-md-6">

            <div class="col-md-12" style="margin-left:-15px;">
                {!! Form::label('enter-address', 'Enter your address: ', ['class' => 'control-label form-group']) !!}
                {!! Form::text(null, null, ['class' => 'form-control form-group', 'id' => 'geocomplete', 'required']) !!}
            </div>
            <input type="button" class="btn btn-danger" id="findMe" value="Check your address" style="margin:29px 0 10px 0;" onclick="codeAddress(); modify_add();">
            <b><i><input id="pac-input" type="text" readonly style="width:70%;border:none;text-indent:10px;font-size:16px;" /></i></b>
            
            <div id="map-canvas" style="width:100%;height:380px;"></div>
            
        </div>
  	    <!-- Google map display end-->

        <div class="col-md-4" style="margin-right:-100px;">
            {!! Form::model($room, ['url' => '/host/room/update_location', 'class' => 'form-horizontal']) !!}
            {!! Form::hidden('user_id', $room->id) !!}
            
            <div class="col-md-10" style="display:non;" id="route-input">
                {!! Form::label('address1', 'Street Address: ', ['class' => 'control-label form-group']) !!}
                {!! Form::text('route', old('route'), ['class' => 'form-control form-group', 'id' => 'route', 'required']) !!}
            </div>
            <div class="col-md-10" style="display:non;" id="street-input">
                {!! Form::label('address2', 'Apt, Suite, Bldg. (optional): ', ['class' => 'control-label form-group']) !!}
                {!! Form::text('street_number', old('street_number'), ['class' => 'form-control form-group', 'id' => 'street_number']) !!}
            </div>
            <div class="col-md-10" style="display:none;" id="city-input">
                {!! Form::label('city', 'City: ', ['class' => 'control-label form-group']) !!}
                {!! Form::text('locality', old('locality'), ['class' => 'form-control form-group', 'id' => 'city', 'required']) !!}
            </div>
            <div class="col-md-6" style="margin-right:-29px; display:none;" id="state-input">
                {!! Form::label('state', 'State: ', ['class' => 'control-label form-group']) !!}
                {!! Form::text('administrative_area_level_1', old('administrative_area_level_1'), ['class' => 'form-control form-group', 'id' => 'state', 'required']) !!}
            </div>
            <div class="col-md-4" style="display:none;" id="zip-input">
                {!! Form::label('zip', 'Zip: ', ['class' => 'control-label form-group']) !!}
                {!! Form::text('postal_code', old('postal_code'), ['class' => 'form-control form-group', 'id' => 'zip', 'required']) !!}
            </div>
            <div class="col-md-10" style="display:none;" id="country-input">
                {!! Form::label('country', 'Country: ', ['class' => 'control-label form-group']) !!}
                {!! Form::text('country', old('country'), ['class' => 'form-control form-group', 'id' => 'country', 'required']) !!}
            </div>
            <input type="text" name="lat" id="lat" style="display:none;" value="<?php echo $room->lat?$room->lat:null ?>" />
            <input type="text" name="lng" id="lng" style="display:none;" value="<?php echo $room->lng?$room->lng:null ?>" />

        </div>

    </div>
  	<!-- container end -->
  	
  	<hr class="divider">
  
    {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
    {!! Form::close() !!}


</div>
<!-- Location tab end -->

@section('js')

    <!-- Google Maps Geocomplete -->
    <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
    <script type="text/javascript" src="//maps.google.cn/maps/api/js?sensor=false&libraries=places"></script>
    <script src="/js/googleMaps.js"></script>
    <script src="/js/jquery.geocomplete.js"></script>
    <!-- Google Maps Geocomplete END -->

@stop