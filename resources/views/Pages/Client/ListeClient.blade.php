@extends('Layouts.Admin')


@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Clients</h1>
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
                <h3 class="card-title">Liste des Client</h3>
              </div>
              <!-- /.card-header -->
            <div class="card-body">

             
              <table id="example1" class="table table-bordered">
                <thead>
                <tr>
                  <th>Nom</th>
                  <th>Prenom</th>
                  <th>Telephone</th>
                  <th>Email</th>
                  <th>Pays</th>
                  <th>Ville</th>
                  <th>Adresse</th>
                </thead>
                 @foreach($clients as $client)
                <tbody>
            
                <tr role="row" class="odd">
                  <td>{{$client->NomClt }}</td>
                  <td>{{$client->PrenomomCl }}</td>
                  <td>{{$client->TelClt }}</td>
                  <td>{{$client->EmailClt }}</td>
                  <td>{{$client->PaysClt }}</td>
                  <td>{{$client->VilleClt }}</td>
                  <td>{{$client->AdresseClt }}</td>
              </tr>
         
            </tbody>
              @endforeach
      </table>
    
    </div>
    </div>
  </section>
  </div>

 
@endsection