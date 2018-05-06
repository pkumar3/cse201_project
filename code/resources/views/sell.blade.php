@extends('layouts.app')

@section('css')
<style type="text/css">
	#main-wrapper {
		background-color: #f24f5f;
		height: 100vh;
	}

	.btn-primary {
		background-color: #343A40;
		border-color: #303135;
	}

	@media screen and (min-width: 768px) {

		h2 {
			margin-top: 5%;
		}
		
		.card {
			margin-bottom: 5%;
		}
		
	}
</style>
@stop

@section('body')
	@extends('layouts.nav-auth')

	<div id="main-wrapper">
		<div class="container">

			<div class="row">
				<div class="col-md-12">
					<h2>Posts</h2>
				</div>
			</div><!-- /.row -->

			<hr>

			<div class="row">
				<div class="col-md-12">
					<div class="card" style="width: 15rem;">
					  <div class="card-header">
					  	Test
					  </div>
					  <div class="card-body">
					    <h5 class="card-title">Sharpie</h5>
					    <p class="card-text">Quantity: 3</p>
					    <p class="card-text">Price: $2</p>
					    <a href="#" id="contact-button" class="btn btn-primary">Contact</a>
					  </div>
					</div>	
				</div>
			</div><!-- /.row -->

		</div>
	</div>
@stop

@section('js')
<script type="text/javascript">
	$("#contact-button").click( function() {
		$("#contact-button").html('513-091-1199 <br> test@t.com')
	})
</script>
@stop
