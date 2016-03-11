@extends('host.host-master')

@section('title')
    Your Listings - TP
@stop

@section('content')

<div class="row">

    @include('host.listing_bar')

    <div class="col-md-7">
        <div class="panel panel-default">
            
            <div class="panel-heading">
               <h4>Your Listings: {{ $count }}</h4>
            </div>

            @include('errors.list')

            <table class="table table-striped" id="sortTable">

                @if (count($rooms))
                    @for ($i = 0; $i < count($rooms); $i++ )
                        
                        <tr>               
                            <td class="col-md-3">
                                <a href="{{ url('rooms/'.$rooms[$i]->id) }}" >
                                @if (count($photos[$i]) != 0)
                                    <img src="/{{ $photos[$i]->path }}" alt="..." class="img-thumbnail" style="border:none !important;">
                                @else
                                    <img src="/images/public/no-image.png" alt="..." class="img-thumbnail" style="border:none !important;">
                                @endif
                                </a>
                            </td>
                            
                                <td class="col-md-6">
                                    <a href="{{ url('rooms/'.$rooms[$i]->id) }}" >
                                        <h4>{{ $rooms[$i]->room_type }} in {{ $rooms[$i]->locality }}</h4>
                                    </a> 
                                    <div>{{ $rooms[$i]->title }}</div>
                                    <div>{{ $rooms[$i]->title }}</div>
                                </td>  
                                                   
                            <td class="col-md-2">
                                <form action="{{ url('host/room/'.$rooms[$i]->id) }}" style='display: inline' method="POST" id="delete_form">
                                     <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}"> 
                                </form>
                                <button class="btn btn-sm btn-danger " id="delete">
                                    <i class="fa fa-trash-o"></i>
                                        Delete
                                </button>
                            </td>
                        </tr>     
                       
                    @endfor
                @endif
            </table>

        </div>
    </div>

</div>
<?php echo $rooms->render(); ?>

@stop


@section('js')


    <script type="text/javascript">

        $('button#delete').on('click', function(){
            swal({   
            title: "Are you sure?",
            text: "You will not be able to recover this listing!",         
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!", 
            closeOnConfirm: false 
        }, 
        
        function(){   
            $("#delete_form").submit();
          }
          );
        })

        

    </script>

@stop