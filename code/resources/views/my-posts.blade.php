@extends('layouts.app')

@section('css')
<style type="text/css">
	#main-wrapper {
		background-color: #f24f5f;
		height: 100%;
	}

	#delete-button {
		margin-left: 5%;
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
						<a href="#" class="btn btn-primary">Edit</a>
						{{ csrf_field() }}
						<input type="hidden" name="postID" value="{{ $post->postID }}">
						<button type="submit" id="delete-button" class="btn btn-primary">Delete</button>
						</form>
					  </div>
					</div>		
				</div>
				@endforeach
			</div><!-- /.row -->

		</div>
	</div>

@stop
