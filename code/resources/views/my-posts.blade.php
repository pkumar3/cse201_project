@extends('layouts.app')

@section('css')
<style type="text/css">
	#main-wrapper {
		background-color: #f24f5f;
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
					<h2>My Posts</h2>
				</div>
			</div><!-- /.row -->

			<div class="row">
				<div class="col-md-12">
					<div class="card" style="width: 15rem;">
					  <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
					  <div class="card-body">
					    <h5 class="card-title">Sharpie</h5>
					    <p class="card-text">Quantity: 1</p>
					    <p class="card-text">Price: $1</p>
					    <a href="#" class="btn btn-primary">Edit</a>
					  </div>
					</div>	
				</div>
			</div><!-- /.row -->

		</div>
	</div>

@stop
