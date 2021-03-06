@extends('Layouts.Admin')


@section('content')

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Livraisons</h1>
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
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Liste des livraisons en effectuer</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>N°</th>
                  <th>Client</th>
                  <th>Commande</th>
                  <th>Date</th>
                  <th>Prix</th>
                  <th>Lieux</th>
                </thead>
                 @foreach($livraisons as $livraison)
                 <tbody>
            
                <tr role="row" class="odd">
                  <td>{{$livraison->IdLivraison }}</td>
                  <td>{{$livraison->name }}</td>
                  <td>N° {{$livraison->IdCommande }}</td>
                  <td>{{$livraison->DateLivraison }}</td>
                  <td>{{$livraison->PrixTotalLivraison }} Fcfa</td>
                  <td>{{$livraison->LieuLivraison }}</td>
                </tr>
         
            </tbody>
            @endforeach
        </table>
      </div>
    </div>
  </section>
</div>

@endsection