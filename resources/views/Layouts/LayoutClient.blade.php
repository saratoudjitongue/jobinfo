<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>FastFood</title>
  
  <link href="css/fluidbox.min.css" rel="stylesheet">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="Template/plugins/font-awesome/css/font-awesome.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="Template/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="Template/plugins/select2/select2.min.css">
  <link rel="icon" href="TemplatePrincipal/img/core-img/favicon.ico">
  <link rel="stylesheet" href="css/monStyle.css">

</head>

<body class="hold-transition sidebar-mini btn-default">
      
<!-- Navbar -->
 <nav class="navbar navbar-expand bg-white navbar-light navbar-static-top border-bottom" style="height: 50px;position:fixed;right: 0;left: 0;z-index: 1030">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('Bienvenue') }}" class="nav-link"><i class="fa fa-home"></i> Acceuil</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('Acceuil') }}" class="nav-link"><i class="fa fa-list-alt"></i> Menus</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('Panier') }}" class="nav-link"><i class="fa fa-shopping-cart"></i> Panier <span class="badge badge-danger">{{$TotalProduit}}</span> </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-shopping-bag"></i> Categories</a>
        <div class="dropdown-menu dropdown-menu-right">
          @foreach($TypeProduits as $typeProd)
          <a href="{{route('categorie',[$typeProd->IdTypeProduit])}}" class="dropdown-item">
            <i class="fa fa-cutlery mr-2"></i>{{$typeProd->NomTypeProduit}}</a>
            <div class="dropdown-divider"></div>
          @endforeach
      </li>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3" action="{{ route('Recherche') }}">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="text" placeholder="Rechercher..." aria-label="Search" name="search" id="search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    <!--END OF SEARCH FORM -->

 @if (Auth::check())
<li class="nav-item dropdown" style="margin-left: 350px">
<a href="#" class="nav-link" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
 <strong>{{ Auth::user()->name }} <span class="fa fa-user"></span></strong> </a>
<ul class="dropdown-menu">
<li>
 <a href="#" class="dropdown-item" href="{{ route('logout') }}"
onclick="event.preventDefault();
   document.getElementById('logout-form').submit();">Deconnexion <i class="fa fa-sign-out"></i></a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
 {{ csrf_field() }}
</form>
 </li>
</ul>
</li>
</li>
 @else
    <li class="nav-item d-none d-sm-inline-block" style="margin-left: 250px">
        <a href="{{ route('login') }}" class="nav-link"> Connexion <i class="fa fa-sign-in"></i> </a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('/register') }}" class="nav-link"> S'enregistrer <i class="fa fa-user-plus"></i></a>
    </li>
@endif

    </ul>
</nav><br><br><br>

@yield('content')

<footer style="margin-left: 20px; margin-right: 20px">
    <div class=" float-right d-none d-sm-block">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2020 <a href="#">FastFood</a>.</strong> Tout droits reserver
  </footer>

<!-- PAGE SCRIPTS -->
    <script>window.jQuery || document.write('<script src="{{asset('js/jquery-slim.min.js')}}"><\/script>')</script>
 
<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
    <script src="Template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
    <script src="Template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
    <script src="Template/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
    <script src="Template/plugins/chart.js/Chart.min.js"></script>
    <script src="Template/dist/js/demo.js"></script>
    <script src="Template/dist/js/pages/dashboard3.js"></script>
    <script src="Template/js/jquery.fluidbox.min.js"></script>
    <!-- FastClick -->
<script src="Template/plugins/fastclick/fastclick.js"></script>
</body>
</html>
