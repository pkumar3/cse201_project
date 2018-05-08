@extends('layouts.app')

@section('css')
<style type="text/css">
	#main-wrapper {
		background-color: #f24f5f;
        height:30%;
	}

	#next-button {
		background-color: #343A40;
		border-color: #303135;
	}

    h1 {
        margin-top: 5%;
    }

    #heading {
        font-size: 24px;
    }

    #description {
        font-size: 20px;
    }

    /*#form {
        width: 80%;
    }*/

    .icon {
        margin-top: 2%;
        margin-bottom: 1%;
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

        #main-wrapper {
            height: 60%;
        }

		h1 {
			padding-top: 2%;
		}

        #heading {
            font-size: 42px;
        }

        #description {
            font-size: 28px;
        }

		#search {
			padding-top: 5%;
		}

        #search-bar {
            width: 70%;
            margin-left: 10%;
        }

        #next-button {
            margin-left: -80%;
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
				<div class="col-8">
					<h1 id="heading">Connecting Sellers to Buyers</h1>
				</div>
			</div><!-- /.row -->

			<div class="row">
				<div class="col-12">
					<h3 id="description">Search for items you want to buy</h3>
				</div>
			</div>

			<div class="row justify-content-center" id="search">
				<form method="POST" action="startPost" style="display:contents">
					<div class="col-6">
						<input type="text" class="form-control" placeholder="What would you like to buy?" id="search-bar" name="postTitle">
					</div>
					<div class="col-2">
						{{ csrf_field() }}
						<button class="btn btn-primary" type="" id="next-button">Next</button>
					</div>
				</form>
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