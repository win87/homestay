<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav" id="myTabContent">   
        <li style="margin-top:4em;">
            <a href="#accommodation" data-toggle="tab"><i class="fa fa-fw fa-home"></i> Accommodation</a>
        </li>
        <li>
            <a href="#description" data-toggle="tab"><i class="fa fa-fw fa-bars"></i> Description</a>
        </li>
        <li>
            <a href="#location" data-toggle="tab"><i class="fa fa-fw fa-map-marker"></i> Location</a>
        </li>
        <li>
            <a href="#calendarpricing" data-toggle="tab"><i class="fa fa-fw fa-table"></i> Calendar & Pricing</a>
        </li>
        <li>
            <a href="#amenities" data-toggle="tab"><i class="fa fa-fw fa-cutlery"></i> Amenities</a>
        </li>
        <li>
            <a href="#photos" data-toggle="tab"><i class="fa fa-fw fa-file-image-o"></i> Photos</a>
        </li>

        <hr class="divider">

        <div class="col-md-12" style="margin-top:4em;">
            <a href="{{ url('rooms/'.$room->id.'/preview') }}"><button class="button button-3d button-primary">Preview Listing</button></a>
        </div>

<!--    <li>
            <a href="{{ url('host/room/'.$room->id.'/accommodation') }}"><i class="fa fa-fw fa-bar-chart-o"></i> Accommodation</a>
        </li>
        <li>
            <a href="{{ url('host/room/'.$room->id.'/location') }}"><i class="fa fa-fw fa-table"></i> Location</a>
        </li>
 -->
    </ul>
</div>
<!-- /.navbar-collapse -->
