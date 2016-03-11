<!-- Accommodation tab begin-->
<div class="tab-pane fade" id="description">
	<h3>  Help travelers know about your space </h3>

    <hr class="divider">

    @include('flash')
	
	<div class="row">
        {!! Form::model($room, ['url' => '/host/room/update_description', 'class' => 'form-horizontal']) !!}
        {!! Form::hidden('user_id', $room->id) !!}

        <div class="form-group">
            {!! Form::label('title', 'Listing name: ', ['class' => 'control-label col-md-2']) !!}
            <div class="col-md-8">
                {!! Form::text('title', old('title'), ['class' => 'form-control']) !!}
            </div>
        </div>
        
        <hr class="divider">

        <div class="form-group">
            {!! Form::label('intro', 'Summary: ', ['class' => 'control-label col-md-2']) !!}
            <div class="col-md-8">
                {!! Form::textarea('intro', old('intro'), ['class' => 'form-control']) !!}
            </div>
        </div>

        <hr class="divider">

        {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
        {!! Form::close() !!}
	</div>
<!-- /.row -->
</div>
<!-- Accommodation tab end -->
