@extends('layouts.app')

@section('css')
<style type="text/css">
	#main-wrapper {
		background-color: #f24f5f;
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

			<div class="row">
				<div class="col-md-12">
					<div class="card" style="width: 15rem;">
					  <div class="card-header">
					  	Test
					  </div>
					  <div class="card-body">
					    <h5 class="card-title">Sharpie</h5>
					    <p class="card-text">Quantity: 1</p>
					    <p class="card-text">Price: $1</p>
					    <a href="#" class="btn btn-primary">Contact</a>
					  </div>
					</div>	
				</div>
			</div><!-- /.row -->

		</div>
	</div>

@stop
