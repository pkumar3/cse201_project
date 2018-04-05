@extends('layouts.app')

@section('css')
<style type="text/css">
	#main-wrapper {
		background-color: #f24f5f;
	}

	@media screen and (min-width: 768px) {
		h1 {
			padding-top: 10%;
		}

		#search {
			padding-top: 5%;
		}

	}
</style>
@stop

@section('body')
	@extends('layouts.nav-home')

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
			</div>

			<br><br><br><br>

		</div><!-- /.container -->
	</div><!-- /#main-wrapper -->
	
@stop