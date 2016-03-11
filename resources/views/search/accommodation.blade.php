@extends('host.host-master')

@section('title')
    Your Listings - TP
@stop

@section('content')

<div class="row">

    @include('search.search_bar')

    <div class="col-md-7">

        @if (count($rooms))
        @for ($i = 0; $i < count($rooms); $i++ )
        <a href="{{ url('rooms/'.$rooms[$i]->id.'/details') }}" >
            <div class="panel panel-default">        
                <table class="table">
                    <tr>               
                        <td class="col-md-3">  
                            @if (count($photos[$i]) != 0)
                                    <img src="/{{ $photos[$i]->path }}" alt="..." class="img-thumbnail" style="border:none !important;">
                                @else
                                    <img src="/images/public/no-image.png" alt="..." class="img-thumbnail" style="border:none !important;">
                                @endif      
                        </td>   
                        <td class="col-md-6"> 
                            <h4>{{ $rooms[$i]->room_type }} in {{ $rooms[$i]->locality }}  {{ $rooms[$i]->administrative_area_level_1 }} </h4>      
                            <div>{{ $rooms[$i]->house_type }}</div>
                            <div>{{ $rooms[$i]->room_type }}</div>
                        </td>                       
                        <td class="col-md-2">
                            <h4> $ {{ $rooms[$i]->m_price }} <h5>per month</h5> </h4>
                        </td>
                    </tr>                     
                </table>
            </a>
            </div>
        @endfor
        @endif
    </div>

</div>

@if(count($rooms))
@for ($i = 0; $i < count($rooms)/10; $i++)
<?php echo $rooms->appends(['locality' => $rooms[$i]->locality, 'administrative_area_level_1' => $rooms[$i]->administrative_area_level_1, 'country' => $rooms[$i]->country])->render(); ?>
@endfor
@endif

@stop

@section('js')
    <script src="/js/jquery.pin.min.js"></script>

    <script>
        $(".pinned").pin()
    </script>
@stop

