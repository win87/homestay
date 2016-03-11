@include('public.header')

   
<div class="row">
    
    <!-- Article main content -->
    <article class="col-xs-12 maincontent">

        <header class="page-header">
            <h1 class="page-title text-center" style="color:black">
                <a href="/">Logo</a>
            </h1>
        </header>
        
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="thin text-center">Register a new account</h3>
                    <p class="text-center text-muted">Already have an account? <a href="/login">Login</a></p>
                    <hr>

                    @include('errors.list')


                    {!! Form::open(['url' => '/register', 'class' => 'form-horizontal', 'role' => 'form']) !!}
                        <div class="form-group">
                            {!! Form::label('email', 'Email', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('email', old('email'), ['class' => 'form-control', 'required']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('user_type', 'User type: ', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::select('user_type', ['1' => 'Host', '2' => 'Student'], null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('password', 'Password', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::password('password', ['class' => 'form-control', 'required']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('password', 'Re-password', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::password('re-password', ['class' => 'form-control', 'required']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {!! Form::submit('Sign up', ['class' => 'button button-3d button-primary button-rounded']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}

                
                </div>
            </div>

        </div>
        
    </article>
    <!-- /Article -->

</div>


<!-- Highlights - jumbotron -->
<div class="jumbotron top-space">

    <h3 class="text-center thin">Reasons to use this template</h3>
    
    <div class="container">
        
        <div class="row">
            <div class="col-md-3 col-sm-6 highlight">
                <div class="h-caption"><h4><i class="fa fa-cogs fa-5"></i>Guidance</h4></div>
                <div class="h-body text-center">
                    <p>We provide guidance on how to become a host family and what to expect as a guest</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 highlight">
                <div class="h-caption"><h4><i class="fa fa-flash fa-5"></i>Fast & Easy</h4></div>
                <div class="h-body text-center">
                    <p>You are only one click away from being connected with your host/guest</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 highlight">
                <div class="h-caption"><h4><i class="fa fa-heart fa-5"></i>Professional Team</h4></div>
                <div class="h-body text-center">
                    <p>Our team will assist you in every way to provide you the best hosting experience</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 highlight">
                <div class="h-caption"><h4><i class="fa fa-smile-o fa-5"></i>Security & Privacy</h4></div>
                <div class="h-body text-center">
                    <p>You are only one click away from being connected with your host/guest</p>
                </div>
            </div>
        </div> <!-- /row  -->
    
    </div>

</div>
<!-- /Highlights -->

