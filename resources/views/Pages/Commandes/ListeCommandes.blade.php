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
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Liste des commandes en attente</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>N°</th>
                  <th>Client</th>
                  <th>Date</th>
                  <th>Prix total</th>
                  <th tabindex="0" aria-controls="example2" rowspan="1" colspan="2" aria-label="Action: activate to sort column ascending">Action</th>
                </tr>
                </thead>
                 @foreach($commandes as $commande)
                 <tbody>
            
                <tr role="row" class="odd">
                  <td>{{$commande->id }}</td>
                  <td>{{$commande->name }}</td>
                  <td>{{$commande->DateCommande }}</td>
                  <td>{{$commande->PrixTotalCommande }} Fcfa</td>
                  <td  style="width: 150px">
                        <a href="{{route('UpdateCommande',[$commande->id])}}" class="btn btn-success col-sm-4 col-xs-5 btn-margin">
                        <i class="nav-icon fa fa-check"></i>
                        </a>
                          <a href="{{route('InfoCommande',[$commande->id])}}" class="btn btn-primary col-sm-4 col-xs-5 btn-margin" style="margin-left: 30px">
                        <i class="nav-icon fa fa-info"></i>
                        </a>
                  </td>
              </tr>
         
            </tbody>
            @endforeach
        </table>
      </div>
    </div>
  </section>
</div>

@endsection