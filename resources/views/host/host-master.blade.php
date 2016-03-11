<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author"   content="Tigris and Partners LLC">

    <title> @yield('title') </title>

    <link rel="shortcut icon" href="{{ asset('assets/images/gt_favicon.png') }}">
    <!-- <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700"> -->
    <link rel="stylesheet" href="{{ asset('/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/all.css') }}">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/awesome-bootstrap-checkbox.css') }}">

    <!-- file upload -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/dropzone.css') }}">

    <!-- Custom CSS for Host-master-blade -->
    <link href="{{ asset('/css/admin.css') }}" rel="stylesheet">

    <link href="{{ asset('/css/sweetalert.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('/css/jquery-gallery.min.css') }}">

    <link rel="stylesheet" href="{{ asset('/css/buttons.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img src="/images/public/logo.png" alt="homestay logo"></a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
      
             
                <li class="message-preview" style="margin-top:8px;">
                    <div class="col-md-12">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for ... ">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button" style="border-radius:0; background:rgb(245,245,245)">Search</button>
                            </span>
                        </div>
                    </div>
                </li>
                    
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ Auth::user()->email }} <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="/rooms"><i class="fa fa-fw fa-user"></i> Listing</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
    
        </nav>

        <div id="page-wrapper">

            <div class="col-md-10">
                <ol class="breadcrumb" style="padding-top:15px; padding-bottom:15px; margin-top:60px; border-radius:0">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="/host/profile">Dashboard</a>
                    </li>
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="/rooms">Your Listing</a>
                    </li>
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="/host/profile">Profile</a>
                    </li>
                </ol>
            </div>
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-md-12">
                        @yield('content')
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<!-- jQuery -->
<script type="text/javascript" src="/js/all.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script src="/js/buttons.js"></script>
<script src="/js/sweetalert.min.js"></script>
<script src="/js/jquery-gallery.min.js"></script>

<!-- Google Maps Geocomplete -->
<script type="text/javascript" src="//maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
<script type="text/javascript" src="//maps.google.cn/maps/api/js?sensor=false&libraries=places"></script>
<script src="/js/googleMaps.js"></script>
<script src="/js/jquery.geocomplete.js"></script>
<!-- Google Maps Geocomplete END -->

@include('flash')

@yield('js')


<!-- More content link -->
<script>

$(document).ready(function(){
    // Redirect to current tab after submitting
    $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
        localStorage.setItem('activeTab', $(e.target).attr('href'));
    });
    var activeTab = localStorage.getItem('activeTab');
    if(activeTab){
        $('#myTabContent a[href="' + activeTab + '"]').tab('show');
    }


    //Show tooltip
     $('[data-toggle="tooltip"]').tooltip();  

});



</script>
<!-- More content link END -->

</body>
</html>
