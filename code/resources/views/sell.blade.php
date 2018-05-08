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
				@foreach($posts as $post)
				<div class="col-4">
					
					<div class="card" style="width: 15rem;">
					  <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
					  <div class="card-body">
					  <form action="editPost" method="post" style="display:contents">
						<h5 class="card-title">{{ $post->postTitle }}</h5>
						<p class="card-text">Quantity: {{$post->postQty}}</p>
						<p class="card-text">Price Limit: ${{$post->postPrice}}</p>
						<p class="card-text">Posted On: {{ $post->creationDate }}</p>
						 <a href="#" id="contact-button" class="btn btn-primary">Contact</a>
						</form>
					  </div>
					</div>		
				</div>
				@endforeach
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
