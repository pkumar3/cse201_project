@extends('layouts.app')

@section('css')
<style type="text/css">
	#main-wrapper {
		background-color: #f44253;
	}
</style>
@stop

@section('body')
	@extends('layouts.nav-home')

	<div id="main-wrapper">
		<div class="container">
			
			<div class="row">
				<div class="col-md-12">
					<h1>Hello World!</h1>
				</div>
			</div><!-- /.row -->

			<div class="row">
				<div class="col-md-12">
					<h3>Search for items you want to buy</h3>
				</div>
			</div>

		</div><!-- /.container -->
	</div><!-- /#main-wrapper -->
	
@stop