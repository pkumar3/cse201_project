<nav class="navbar navbar-expand-sm navbar-fixed-top navbar-dark bg-dark" id="navbar" role="banner">
    <div class="container">
        <a class="navbar-brand" href="/home">BuyerBoard</a>
    	<button type="button" class="btn navbar-toggler collapsed" data-toggle="collapse" data-target="#navbar_list" aria-expanded="false" aria-controls="navbar" aria-label="toggle-navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbar_list" class="collapse navbar-collapse">
            <ul class="mr-auto"></ul>
            <ul class="navbar-nav">
                <div class="p-2"><li><a href="/my-posts">My Posts</a></li></div>
                <div class="p-2"><li><a href="/sell">Sell</a></li></div>
                <div class="p-2"><li><a href=""><i class="fas fa-user"></i>{{ Auth::user()->name }}</a></li></div>
            </ul>
        </div><!-- /.nav-collapse -->
    </div>
</nav>