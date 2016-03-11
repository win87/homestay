@if (Session::has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

@if (Session::has('message_warning'))
    <div class="alert alert-warning">
        {{ session('message_warning') }}
    </div>
@endif

@if(session()->has('flash_message'))

	<script>
		swal({   
			title: "{{ session('flash_message.title') }}",   
			text: "{{ session('flash_message.message') }}",   
			type: "{{ session('flash_message.level') }}",   
			timer: 2000,   
			showConfirmButton: true
		});
	</script>

@endif

@if(session()->has('flash_message_overlay'))

	<script>
		swal({   
			title: "{{ session('flash_message_overlay.title') }}",   
			text: "{{ session('flash_message_overlay.message') }}",   
			type: "{{ session('flash_message_overlay.level') }}",   
			confirmButtonText: 'Okay'
		});
	</script>

@endif

@if(session()->has('message_warning'))

	<script>
		swal({   
			title: "Error!",   
			text: "Opps!",   
			type: "error",   
			timer: 2000,   
			showConfirmButton: true
		});
	</script>

@endif