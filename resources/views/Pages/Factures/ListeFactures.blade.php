@extends('Layouts.Admin')


@section('content')

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Factures</h1>
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
                <h3 class="card-title">Liste des Factures</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Client</th>
                  <th>Commande</th>
                  <th>Date</th>
                  <th>Prix total</th>
                  <th>Etat</th>
                  <th tabindex="0" aria-controls="example2" rowspan="1" colspan="2" aria-label="Action: activate to sort column ascending">Action</th>
                </tr>
                </thead>
                @foreach($factures as $facture)
                 <tbody>
            
                <tr role="row" class="odd">
                  <td>{{$facture->IdClt }}</td>
                  <td>{{$facture->IdCommande }}</td>
                  <td>{{$facture->DateFacture }}</td>
                  <td>{{$facture->PrixTotalFacture }} Fcfa</td>
                  <td>{{$facture->EtatFacture }}</td>
                  <td>
                    <form class="row" method="POST" action="" onsubmit = "return confirm('Voulez-vous vraiment supprimer?')">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <a href="" class="btn btn-success col-sm-4 col-xs-5 btn-margin" style="margin-left: 10px" >
                        Payer <i class="nav-icon fa fa-check"></i>
                        </a>
                         <button type="submit" class="btn btn-danger col-sm-4 col-xs-5 btn-margin" style="margin-left: 10px">
                          Impayer <i class="nav-icon fa fa-times"></i>
                        </button>
                    </form>
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