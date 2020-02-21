<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Administrateur</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="Template/plugins/font-awesome/css/font-awesome.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="Template/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="icon" href="TemplatePrincipal/img/core-img/favicon.ico">
</head>
  
  <body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('admin.logout') }}" class="nav-link" style="margin-left: 750px"><i class="fa fa-sign-out"></i> Deconexion</a>
      </li>

    </ul>
  </nav>



    <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
      <img src="Images/h-logo.png" alt="FastFood Logo" class="brand-image"
           style="opacity: 2.8">
      <span class="brand-text font-weight-light">FlashFood</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="Images/InShot_20170618_152811_3_3.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <p href="#" class="d-block"><strong style="color: white">MIMI</strong></p>
        </div>
      </div>

 <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-cube"></i>
              <p>
                Produits
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="#">
                <a href="{{ route('FormProduit') }}" class="nav-link">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Enr&eacute;gistrer un produit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('ListeProd') }}" class="nav-link">
                  <i class="fa fa-list nav-icon"></i>
                  <p>Liste des produits</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('EtatProduits') }}" class="nav-link">
                  <i class="fa fa-print nav-icon"></i>
                  <p>Imprimer la liste des menus</p>
                </a>
              </li>
            </ul>
          </li>
<li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-clipboard"></i>
              <p>
                Commandes
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('ListeCommandes') }}" class="nav-link">
                  <i class="fa fa-hourglass-half nav-icon"></i>
                  <p>Commandes en attente</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('ListeCommandesValider')}}" class="nav-link">
                  <i class="fa fa-list nav-icon"></i>
                  <p>Commandes valider</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{ route('CommandeEtat') }}" class="nav-link">
                  <i class="fa fa-print nav-icon"></i>
                  <p>Imprimer la liste commandes</p>
                </a>
              </li>
            </ul>
          </li>
<!--
<li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-file-o"></i>
              <p>
                Factures
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="#">
                <a href="#" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Nouvelle facture</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-list nav-icon"></i>
                  <p>Liste des factures</p>
                </a>
              </li>
            </ul>
</li>
-->
<li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-truck"></i>
              <p>
                Livraison
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="#">
                <a href="{{ route('ListeLivraisons') }}" class="nav-link">
                  <i class="fa fa-hourglass-half nav-icon"></i>
                  <p>Liste des livraisons en attente</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('LivraisonsEffectuer') }}" class="nav-link">
                  <i class="fa fa-list nav-icon"></i>
                  <p>Liste des livraison effectuer</p>
                </a>
              </li>
            </ul>
          </li>
      <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Clients
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="#">
                <a href="{{ route('ListeClient') }}" class="nav-link">
                  <i class="fa fa-users nav-icon"></i>
                  <p>Liste des client</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
          </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
</div>

@yield('content')


<footer style="margin-left: 20px; margin-right: 20px">
    <div class=" float-right d-none d-sm-block">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2020 <a href="#">FastFood</a>.</strong> Tout droits reserver
</footer>
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
</body>
</html>