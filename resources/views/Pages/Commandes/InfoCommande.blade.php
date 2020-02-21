@extends('Layouts.Admin')

@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Commandes</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
   <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Info de la Commandes</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Produits</th>
                  <th>Prix Unitaire</th>
                  <th>Quantite</th>
                  <th>Prix total</th>
                </tr>
                </thead>
                 @foreach($Prod as $commande)
                 <tbody>
            
                <tr role="row" class="odd">
                  <td>{{$commande->NomProduit }}</td>
                  <td>{{$commande->PrixProduit }} Fcfa</td>
                  <td>{{$commande->Quantite }}</td>
                  <td>{{$commande->PrixProduit * $commande->Quantite}} Fcfa</td>
              </tr>
         
            </tbody>
            @endforeach
        </table>
      </div>
    </div>
  </section>
</div>

@endsection