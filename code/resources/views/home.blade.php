@extends('layouts.app')

@section('css')
<style type="text/css">
	#main-wrapper {
		background-color: #f24f5f;
	}

	#next-button {
		background-color: #343A40;
		border-color: #303135;
	}

    a {
        text-decoration: none;
        color: #ffffff;
    }

    a:hover {
        text-decoration: none;
        color: rgba(255,255,255,.6);
    }

	@media screen and (min-width: 768px) {
		h1 {
			padding-top: 10%;
		}

		#search {
			padding-top: 5%;
		}

		.icon {
			margin-top: 2%;
			margin-bottom: 1%;
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
					<h1>Connecting Sellers to Buyers</h1>
				</div>
			</div><!-- /.row -->

			<div class="row">
				<div class="col-md-12">
					<h3>Search for items you want to buy</h3>
				</div>
			</div>

			<div class="row justify-content-center" id="search">
				<div class="col-6">
					<input type="text" class="form-control" placeholder="What would you like to buy?" id="search-bar" name="">
				</div>
				<div class="col-2">
					<button class="btn btn-primary" id="next-button"><a href="/buy-details">Next</a></button>
				</div>
			</div>

			<br><br><br><br>

		</div><!-- /.container -->
	</div><!-- /#main-wrapper -->

	<div id="info-wrapper">
		<div class="container">
			
			<div class="row">
				<div class="icon text-center col-sm-4">
					<i class="fas fa-shopping-cart fa-5x"></i>
					<h3>Buyer posts items to buy</h3>
				</div>
			
				<div class="icon text-center col-sm-4">
					<i class="fas fa-comments fa-5x"></i>
					<h3>Seller contacts buyer</h3>
				</div>
			
				<div class="icon text-center col-sm-4">
					<i class="fas fa-dollar-sign fa-5x"></i>
					<h3>Buyer and Seller complete transaction</h3>
				</div>
			</div><!-- /.row -->

		</div><!-- /.container -->
	</div><!-- /#info-wrapper -->
	
@stop