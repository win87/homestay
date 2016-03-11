<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author"   content="Tigris and Partners LLC">

    <title> @yield('title') </title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/business-frontpage.css') }}">
    <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css"> -->
    <link rel="shortcut icon" href="{{ asset('assets/images/gt_favicon.png') }}">

    <!-- Custom CSS -->
    <link href="{{ asset('/css/admin.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/scrolling-nav.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap-theme.css') }}" media="screen" >
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">

    <!-- gallery !!!require!!! -->
    <link rel="stylesheet" href="{{ asset('/css/jquery-gallery.min.css') }}">
    <!-- gallery Seems like no effect -->
    <!-- <link rel="stylesheet" href="{{ asset('/css/bootstrap-image-gallery.min.css') }}">  -->
    <link href="{{ asset('/css/sweetalert.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('/css/buttons.css') }}">

    <!-- file upload -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/dropzone.css') }}">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    @yield('css')

</head>