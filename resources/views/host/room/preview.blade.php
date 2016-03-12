@include('public.header')

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background:rgba(255,255,255, .35)">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">photos</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About This Listing</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#host">The Host</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#map">Map</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{ url('rooms/'.$room->id) }}">Return to listing</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- Navigation End -->

    <section id="intro" style="margin-top:-50px;">
        
        <header>
            @if (!empty($photo))
            <a href="/{{ $photo->path }}" data-gallery> 
                <img class="business-header" style="width:100%;" src="/{{ $photo->path }}" alt="">
            </a>
            @else
                <img class="business-header" style="width:100%;" src="/images/public/no-image.png" alt="">
            @endif
        </header>
        
        <div class="container" style="padding-top:30px;">
            <div class="row">
                
                <div class="col-sm-2">
                    @if (!empty($photo)) 
                        <img class="img-responsive img-center" src="/{{ $photo->path }}" alt="">                   
                    @endif
                </div>
                                     
                <div class="col-sm-5">
                    <h3>{{ $room->title }}</h3>
                    <div>{{ $room->locality }} {{ $room->adminitrative_area_level_1 }} {{ $room->country }}</div>   
                    
                    <hr class="divider">
                    
                    <div class="row">
                        <div class="col-sm-4">
                            <h3><i class="fa fa-home col-md-offset-2"></i></h3>
                            <b>{{ $room->house_type }}</b>
                        </div>
                        <div class="col-sm-4">
                            <h3><i class="fa fa-hotel col-md-offset-2"></i></h3>
                            <b>{{ $room->room_type }}</b>
                        </div>
                        <div class="col-sm-4">
                            <h3><i class="fa fa-flash col-md-offset-2"></i></h3>                            <b>{{ $room->house_type }}</b>
                        </div>
                    </div>   
                </div>

                <div class="col-sm-5"> 

                    <div class="row" style="background:rgb(77,79,80); height:40px; margin-top:-70px;"></div>

                    <div class="row" style="border:1px solid #ccc; padding:15px 0;">
                        <div class="col-md-4">
                            {!! Form::label('city', 'Check in: ', ['class' => 'control-label']) !!}
                            {!! Form::text('city', null, ['class' => 'form-control form-group', 'required']) !!}
                        </div>
                        <div class="col-md-4">
                            {!! Form::label('city', 'Check out: ', ['class' => 'control-label']) !!}
                            {!! Form::text('city', null, ['class' => 'form-control form-group', 'required']) !!}
                        </div>
                        <div class="col-md-4">
                            {!! Form::label('city', 'Guests: ', ['class' => 'control-label']) !!}
                            {!! Form::text('city', null, ['class' => 'form-control form-group', 'required']) !!}
                        </div>
                        <div class="col-md-4">
                            {!! Form::label('city', 'Check in: ', ['class' => 'control-label']) !!}
                            {!! Form::text('city', null, ['class' => 'form-control form-group', 'required']) !!}
                        </div>
                        <div class="col-md-4">
                            {!! Form::label('city', 'Check out: ', ['class' => 'control-label']) !!}
                            {!! Form::text('city', null, ['class' => 'form-control form-group', 'required']) !!}
                        </div>
                        <div class="col-md-4">
                            {!! Form::label('city', 'Guests: ', ['class' => 'control-label']) !!}
                            {!! Form::text('city', null, ['class' => 'form-control form-group', 'required']) !!}
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-success btn-block">Reqeust to book</button>
                        </div>
                    </div>     
                </div>
            </div>
            <!-- .row end -->
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container" style="padding-top:20px;">

            <div class="col-md-7">
            
                <hr class="divider">

                <div class="col-sm-3">
                    <h4>The space</h4>
                </div>
                <div class="col-sm-4">
                    <table class="table table-condensed"> 
                        <tbody>
                            <tr>
                                <td style="border-top:none;">Accommodates: <b>{{ $room->adult_num }}</b></td>
                            </tr>
                            <tr>
                                <td style="border-top:none;">Bathrooms: <b>{{ $room->adult_num }}</b></td>
                            </tr>
                            <tr>
                                <td style="border-top:none;">Bedrooms: <b>{{ $room->adult_num }}</b></td>
                            </tr>
                        </tbody>              
                    </table>
                </div>
                <div class="col-sm-5">
                    <table class="table table-condensed"> 
                        <tbody>
                            <tr>
                                <td style="border-top:none;">Beds: <b>{{ $room->child_num }}</b></td>
                            </tr>
                            <tr>
                                <td style="border-top:none;">Property type: <b>{{ $room->house_type }}</b></td>
                            </tr>
                            <tr>
                                <td style="border-top:none;">Room type: <b>{{ $room->room_type }}</b></td>
                            </tr>

                        </tbody>              
                    </table>
                </div>

      
                <div class="col-sm-3">
                    <h4>Amenities</h4>
                </div>
                <div class="col-sm-8">
                    <table class="table table-condensed"> 
                        <tbody>
                            <tr>
                                <td style="border-top:none;"><b>{{ $room->amenities }}</b></td>
                            </tr>
                        </tbody>              
                    </table>
                </div>


                <div class="col-sm-3">
                    <h4>Prices</h4>
                </div>
                <div class="col-sm-4">
                    <table class="table table-condensed"> 
                        <tbody>
                            <tr>
                                <td style="border-top:none;">Monthly price: <b> ${{ $room->m_price }}</b></td>
                            </tr>
                        </tbody>              
                    </table>
                </div>
                <div class="col-sm-5">
                    <table class="table table-condensed"> 
                        <tbody>
                            <tr>
                                <td style="border-top:none;">Daily price: <b> ${{ $room->d_price }}</b></td>
                            </tr>
                        </tbody>              
                    </table>
                </div>

                <hr class="divider">
                <div class="col-sm-3">
                    <h4>Availability</h4>
                </div>
                <div class="col-sm-4">
                    <table class="table table-condensed"> 
                        <tbody>
                            <tr>
                                <td style="border-top:none;">From: <b>{{ $room->avail_from }}</b></td>
                            </tr>
                        </tbody>              
                    </table>
                </div>
                <div class="col-sm-5">
                    <table class="table table-condensed"> 
                        <tbody>
                            <tr>
                                <td style="border-top:none;"><b>{{ $room->min_days }}</b> nights minimun stay</td>
                            </tr>
                        </tbody>              
                    </table>
                </div>
        
                <hr class="divider">
                
                <div class="col-sm-3">
                    <h4>Description</h4>
                </div>
                <div class="col-sm-9">
                    <table class="table table-condensed"> 
                        <tbody>
                            <tr>
                                <td style="border-top:none;">
                                    <div class="comment">{{ $room->intro }}</div>
                                </td>
                            </tr>
                        </tbody>              
                    </table>
                </div>
            </div>

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
            </div>

            <div class="col-md-12" style="overflow: scroll; width:100%; height: 150px;">

                @if (!empty($photo)) 
                    @foreach ($room->photos as $photo)
                    <div class="col-md-3 portfolio-item">
                        <a href="/{{ $photo->path }}" title="" data-gallery>
                            <img src="/{{ $photo->path }}" class="img-responsive">
                        </a>
                    </div>
                    @endforeach
                @endif

            </div>
        </div>
        <!-- /.container -->
    </section>



    <!-- The Host Section -->
    <section id="host" class="" style="background-color:rgb(245,245,245); padding:30px">
        <div class="container" style="padding-top:30px;">
            <div class="row">
                <div class="col-sm-2">
                    <img class="img-circle img-responsive img-center" src="http://placehold.it/300x300" alt="">
                </div>
                <div class="col-sm-10">
                    <h3>About the Host, </h3>
                    <div>Listing Address</div>   
                    <h4>Listing Name</h4>
                    <div class="row">
                        <div class="col-sm-4">123</div>
                        <div class="col-sm-4">123</div>
                        <div class="col-sm-4">123</div>
                    </div>   
                </div>
            </div>
        </div>
    </section>

    <section id="map">
        <div class="row">
   
                <div id="map-canvas" style="width:100%;height:300px; margin:0 auto;"></div>
                <input type="hidden" id="lat" value="<?php echo $room->lat; ?>" />
                <input type="hidden" id="lng" value="<?php echo $room->lng; ?>" />

            </div>
    </section>



@include('public.footer')


