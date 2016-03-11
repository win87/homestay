@extends('host.host-master')

@extends('host.manage_list_bar')

@section('content')
<!-- Page Content -->
<div class="container">

    <!-- Content Row -->
	<div class="row">

		<!-- Tab contents col-md-8 right side -->
		<div class="col-md-8">
			<div class="tab-content">

				@include('host.room.r-photos')
				@include('host.room.r-accommodation')
				@include('host.room.r-description')
				@include('host.room.r-location')
				@include('host.room.r-calendarpricing')
				@include('host.room.r-amenities')
				
			</div>
			<!-- Tab contents -->
		</div>
		<!-- Tab col-md-8 end-->
	</div>
	<!-- row -->
</div>
<!-- outside container -->
@stop

