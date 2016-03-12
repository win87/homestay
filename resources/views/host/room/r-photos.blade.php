<!-- Photos tab begin-->
<div class="tab-pane fade" id="photos">

    <h3>  Photos can bring your space to life </h3>

    <hr class="divider">
    
    <div class="row">
        <div class="dropzone" id="dropzoneFileUpload">
        </div>
    </div>

    <hr class="divider">

    <div class="row">
        <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
        <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
            <!-- The container for the modal slides -->
            <div class="slides"></div>
            <!-- Controls for the borderless lightbox -->
            <h3 class="title"></h3>
            <a class="prev">‹</a>
            <a class="next">›</a>
            <a class="close">×</a>
            <a class="play-pause"></a>
            <ol class="indicator"></ol>
            <!-- The modal dialog, which will be used to wrap the lightbox content -->
            <!-- <div class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" aria-hidden="true">&times;</button>
                            <h4 class="modal-title"></h4>
                        </div>
                        <div class="modal-body next"></div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left prev">
                                <i class="glyphicon glyphicon-chevron-left"></i>
                                Previous
                            </button>
                            <button type="button" class="btn btn-primary next">
                                Next
                                <i class="glyphicon glyphicon-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>

    <div id="links">
    	<div class="row">
    		
        	@foreach ($room->photos as $photo)
            <div class="col-md-3">
                <form method="POST" action="/photos/{{ $photo->id }}" class="col-md-3">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <button type="submit" class="button button-square button-tiny"><i class="fa fa-trash-o"></i></button>
                </form>
        		<a href="/{{ $photo->path }}" title="" data-gallery class="thumbnail">
					<img src="/{{ $photo->path }}" style="width:100px; height:100px;">
				</a>
            </div>
			@endforeach
			
		</div>
    </div>

</div>
<!-- Photos tab end -->

@section('js')

    <script src="/js/dropzone.js"></script>

    <script type="text/javascript">
        //Dropzone file upload
        var baseUrl = "{{ url('/') }}";
        var token = "{{ Session::getToken() }}";
        Dropzone.autoDiscover = false;
         var myDropzone = new Dropzone("div#dropzoneFileUpload", {
             url: baseUrl+"/rooms/{{$room->id}}/photos",
             params: {
                _token: token
              }
        });
        Dropzone.options.myDropzone = {
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 3, // MB
            acceptedFiles: '.jpg, .jpeg, .png, .bmp',
            addRemoveLinks: true,
            accept: function(file, done) {

            },
        };
    
    </script>
    
@stop

