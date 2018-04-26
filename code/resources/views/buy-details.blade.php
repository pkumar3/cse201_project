@extends('layouts.app')

@section('css')
<style type="text/css">
	#main-wrapper {
		background-color: #f24f5f;
	}

	@media screen and (min-width: 768px) {
		
	}
</style>
@stop

@section('body')
	@extends('layouts.nav-auth')

	<div id="main-wrapper">
		<div class="container">

			<div class="row">
				<div class="col-md-12">
					<h2>Item Details</h2>
				</div>
			</div><!-- /.row -->

		</div>
	</div>

@stop
