<nav class="navbar navbar-expand-sm navbar-fixed-top navbar-dark bg-dark" id="navbar" role="banner">
    <div class="container">
        <a class="navbar-brand" href="">BuyerBoard</a>
    	<button type="button" class="btn navbar-toggler collapsed" data-toggle="collapse" data-target="#navbar_list" aria-expanded="false" aria-controls="navbar" aria-label="toggle-navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbar_list" class="collapse navbar-collapse">
            <ul class="mr-auto"></ul>
            <ul class="navbar-nav">
                <div class="p-2"><li><a href="">About</a></li></div>
                <div class="p-2"><li><a href="">Contact</a></li></div>
                <div class="p-2"><li><a href="">{{ Auth::user()->name }}</a></li></div>
            </ul>
        </div><!-- /.nav-collapse -->
    </div>
</nav>