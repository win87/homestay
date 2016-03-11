@extends('host.host-master')

@section('title')
    Profile - TP
@stop

@section('content')

<div class="row">

        @include('host.profile_bar')

        <div class="col-md-7">  

            <div class="panel panel-default">
                <div class="panel-heading">
                   <h4>Profile Photo</h4>
                </div>

                @include('flash')
                @include('errors.list')

                <div class="row">
                    <div class="col-md-12">
                        <div>
                            @if (Auth::user()->photo)
                                <img class="img-thumbnail" src="/{{ Auth::user()->photo }}" alt="">
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="dropzone" id="profilePhotoUpload">
                        </div>
                    </div>
                </div>
                    
            </div>
        </div>

    </div>

@stop


@section('js')

    <script src="/js/dropzone.js"></script>

    <script type="text/javascript">
        //Dropzone file upload
        var baseUrl = "{{ url('/') }}";
        var token = "{{ Session::getToken() }}";
        Dropzone.autoDiscover = false;
         var myDropzone = new Dropzone("div#profilePhotoUpload", {
             url: baseUrl+"/hosts/{{ $user->id }}/profile_photo",
             params: {
                _token: token
              }
        });
        Dropzone.options.myAwesomeDropzone = {
            paramName: "file", // The name that will be used to transfer the file
            maxFiles:1,
            maxFilesize: 3, // MB
            addRemoveLinks: true,

            accept: function(file, done) {
 
            },
        };


    


    </script>
    
@stop

