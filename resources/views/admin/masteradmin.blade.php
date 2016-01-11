<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titre')</title>
    <link rel="stylesheet" href="{{ URL::asset('assets\Skeleton-2.0.4\css\normalize.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets\Skeleton-2.0.4\css\normalize.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets\Skeleton-2.0.4\css\skeleton.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets\bootstrap\dist\css\bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets\main.css') }}">
<body>
<div class="row">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h5 class="white">Star Wars shop</h5>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav " role="menu">
                    <li>
                        <a href="{{ url('/') }}"><i class="glyphicon glyphicon-home"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Produit <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/category/2') }}">Laser</a></li>
                            <li><a href="{{ url('/category/1') }}">Casque</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav pull-right">
                    @if(Auth::check())
                    <li><a href="{{ url('auth/logout') }}">Deconnexion</a> </li>
                    <li><a href="{{ url('dashboard/product') }}">Dashboard</a></li>
                    <li><a href="{{ url('dashboard/product/create') }}">Ajouter un produit</a></li>
                    @endif
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
</div>
<div class="row">
    <div class="container">
        @yield('contenu')
    </div>
</div>
<div class="footer">

</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="{{ URL::asset('assets\bootstrap\js\bootstrap.min.js')}}"></script>
<!-- Note: columns can be nested, but it's not recommended since Skeleton's grid has %-based gutters, meaning a nested grid results in variable with gutters (which can end up being *really* small on certain browser/device sizes) -->
</body>
</html>



