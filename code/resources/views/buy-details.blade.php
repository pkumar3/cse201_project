@extends('layouts.app')

@section('css')
<style type="text/css">
	#main-wrapper {
		background-color: #f24f5f;
		height: 100vh;
	}

	.card {
		margin-top: 5%;
	}

	.card-body {
		padding: 2% 2% 2% 2%;
	}

	.form {
		margin-left: 2em;
	}

	@media screen and (min-width: 768px) {
		
		h2 {
			padding-top: 5%;
		}

		a {
			text-decoration: none;
			color: #FFFFFF;
		}

		a:hover {
			text-decoration: none;
			color: #FFFFFF;
		}

	}
</style>
@stop

@section('body')
	@extends('layouts.nav-auth')

	<div id="main-wrapper">
		<div class="container">

			<div class="row justify-content-sm-center">
				<div class="col-md-12">

					<div class="card" style="width: 20rem;">
						<div class="card-header">
							<h3>Item Details</h3>
						</div>
						<div class="card-body">
							<p>Item Name: Sharpie</p>
						<form>
							<div class="form-group">
								<label for="qty">Quantity</label>
						    	<input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter qunantity">
						  	</div>
						  	<div class="form-group">
						    	<label for="exampleInputPassword1">Price Limit</label>
						    	<input type="number" class="form-control" id="exampleInputPassword1" placeholder="Max amount">
						  	</div>
						  	<button type="submit" class="btn btn-primary"><a href="/my-posts">Post</a></button>
						</form>
						</div>
						
					</div>
					
				</div>
			</div><!-- /.row -->				

		</div>
	</div>

@stop
