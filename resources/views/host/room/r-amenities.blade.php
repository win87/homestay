<!--Accommodation tab begin-->
<div class="tab-pane fade" id="amenities">
	<h3>  Tell travelers about your space </h3>

    <hr class="divider">

    @include('flash')
	

    {!! Form::model($room, ['url' => '/host/room/update_amenities', 'class' => 'form-horizontal']) !!}
    {!! Form::hidden('user_id', $room->id) !!}

  <!-- Daily services row begin -->
  <div class="row">
      <div class="col-md-3">
          <h4>Services</h4>
      </div>

      <div class="col-md-9">
          <div class="form-group">
              <div class="checkbox checkbox-success">
                  <input id="me" name="amenities[]" value="Meals" type="checkbox" <?php if(in_array('Meals', $room->amenities)) echo 'checked="checked"'; ?> >
                  <label for="me" class="control-label">Meals</label>
              </div>
              <div class="checkbox checkbox-success">
                  <input id="tr" name="amenities[]" value="Transportation" type="checkbox" <?php if(in_array('Transportation', $room->amenities)) echo 'checked="checked"'; ?> >
                  <label for="tr" class="control-label">Transportation</label>
              </div>
              <div class="checkbox checkbox-success">
                  <input id="la" name="amenities[]" value="Language lesson" type="checkbox" <?php if(in_array('Language lesson', $room->amenities)) echo 'checked="checked"'; ?> >
                  <label for="la" class="control-label">Language lesson</label>
              </div>
              <div class="checkbox checkbox-success">
                  <input id="ai" name="amenities[]" value="Airport pick-up" type="checkbox" <?php if(in_array('Airport pick-up', $room->amenities)) echo 'checked="checked"'; ?> >
                  <label for="ai" class="control-label">Airport pick-up</label>
              </div>
              <div class="checkbox checkbox-success">
                  <input id="le" name="amenities[]" value="Legal guardianship" type="checkbox" <?php if(in_array('Legal guardianship', $room->amenities)) echo 'checked="checked"'; ?> >
                  <label for="le" class="control-label">Legal guardianship</label>
              </div>
          </div>
      </div>
  </div>
  <!-- daily services row end -->

  <hr class="divider">

  <!-- Common row begin -->
  <div class="row">
      <div class="col-md-3">
          <h4>Common</h4>
      </div>

      <div class="col-md-9 form-group">

          <div class="checkbox checkbox-success">
              <input id="tv" name="amenities[]" value="Tv" type="checkbox" <?php if(in_array('Tv', $room->amenities)) echo 'checked="checked"'; ?> >
              <label for="tv" class="control-label">Tv</label>
          </div>
          <div class="checkbox checkbox-success">
              <input id="ac" name="amenities[]" value="Air Conditioning" type="checkbox" <?php if(in_array('Air Conditioning', $room->amenities)) echo 'checked="checked"'; ?> >
              <label for="ac" class="control-label">Air Conditioning</label>
          </div>
          <div class="checkbox checkbox-success">
              <input id="he" name="amenities[]" value="Heating" type="checkbox" <?php if(in_array('Heating', $room->amenities)) echo 'checked="checked"'; ?> >
              <label for="he" class="control-label">Heating</label>
          </div>
          <div class="checkbox checkbox-success">
              <input id="ki" name="amenities[]" value="Kitchen" type="checkbox" <?php if(in_array('Kitchen', $room->amenities)) echo 'checked="checked"'; ?> >
              <label for="ki" class="control-label">Kitchen</label>
          </div>
          <div class="checkbox checkbox-success">
              <input id="wa" name="amenities[]" value="Washer" type="checkbox" <?php if(in_array('Washer', $room->amenities)) echo 'checked="checked"'; ?> >
              <label for="wa" class="control-label">Washer</label>
          </div>
          <div class="checkbox checkbox-success">
              <input id="dr" name="amenities[]" value="Dryer" type="checkbox" <?php if(in_array('Dryer', $room->amenities)) echo 'checked="checked"'; ?> >
              <label for="dr" class="control-label">Dryer</label>
          </div>
          <div class="checkbox checkbox-success">
              <input id="in" name="amenities[]" value="Internet" type="checkbox" <?php if(in_array('Internet', $room->amenities)) echo 'checked="checked"'; ?> >
              <label for="in" class="control-label">Internet</label>
          </div>
          <div class="checkbox checkbox-success">
              <input id="wi" name="amenities[]" value="Wifi" type="checkbox" <?php if(in_array('Wifi', $room->amenities)) echo 'checked="checked"'; ?> >
              <label for="wi" class="control-label">Wifi</label>
          </div>

      </div>
  </div>
  <!-- Common row end -->  

  <hr class="divider">

  <!-- Extras row begin -->
  <div class="row">
      <div class="col-md-3">
          <h4>Extras</h4>
      </div>

      <div class="col-md-9">
          <div class="form-group">
              <div class="checkbox checkbox-success">
                  <input id="po" name="amenities[]" value="Pool" type="checkbox" <?php if(in_array('Pool', $room->amenities)) echo 'checked="checked"'; ?> >
                  <label for="po" class="control-label">Pool</label>
              </div>
              <div class="checkbox checkbox-success">
                  <input id="gy" name="amenities[]" value="Gym" type="checkbox" <?php if(in_array('Gym', $room->amenities)) echo 'checked="checked"'; ?> >
                  <label for="gy" class="control-label">Gym</label>
              </div>
              <div class="checkbox checkbox-success">
                  <input id="fp" name="amenities[]" value="Free Parking" type="checkbox" <?php if(in_array('Free Parking', $room->amenities)) echo 'checked="checked"'; ?> >
                  <label for="fp" class="control-label">Free Parking</label>
              </div>
          </div>
      </div>
  </div>
  <!-- Extras row end -->

  <hr class="divider">

  {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
  {!! Form::close() !!}

</div>
<!-- Accommodation tab end -->