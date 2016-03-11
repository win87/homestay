<div class="modal fade" id="updateDestination" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel"></h4>
            </div>
            {!! Form::model($stu_info, ['url' => '/admin/stu/update_destination', 'class' => 'form-horizontal']) !!}

              <div class="modal-body">

                {!! Form::hidden('id', $stu_info->id) !!}

                <h4>
                  {!! Form::label('d_country', 'Country: ', ['class' => 'control-label']) !!}
                  {!! Form::text('d_country', null, ['class' => 'form-control', 'required']) !!}
                </h4>
                <h4>
                  {!! Form::label('d_state', 'State: ', ['class' => 'control-label']) !!}
                  {!! Form::text('d_state', null, ['class' => 'form-control', 'required']) !!}
                </h4>
                <h4>
                  {!! Form::label('d_city', 'City: ', ['class' => 'control-label']) !!}
                  {!! Form::text('d_city', null, ['class' => 'form-control', 'required']) !!}
                </h4>
                <h4>
                  {!! Form::label('d_address1', 'Address line 1: ', ['class' => 'control-label']) !!}
                  {!! Form::text('d_address1', null, ['class' => 'form-control', 'required']) !!}
                </h4>
                <h4>
                  {!! Form::label('d_address2', 'Address line 2: ', ['class' => 'control-label']) !!}
                  {!! Form::text('d_address2', null, ['class' => 'form-control', 'required']) !!}
                </h4>
                <h4>
                  {!! Form::label('d_zip', 'Zip code: ', ['class' => 'control-label']) !!}
                  {!! Form::text('d_zip', null, ['class' => 'form-control', 'required']) !!}
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