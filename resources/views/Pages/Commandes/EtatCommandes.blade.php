@extends('Layouts.Admin')

@section('content')


 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  <address>
                    <strong>Fastfood, Inc.</strong><br>
                    795 Folsom Boulevard, 13 Janvier<br>
                    Lomé, BP 6299<br>
                    Contact: (228) 92708712<br>
                    Email: dosseh34@gmail.com
                  </address>
                </div>
                  <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
              	<div style="margin-left: 250px"><h1><strong>LISTE DES COMMANDES</strong> </h1><br></div>
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>N° Commande</th>
                      <th>Client</th>
                      <th>Date</th>
                      <th>Prix total</th>
                    </tr>
                    </thead>
                    @foreach($Commandes as $commande)
                    <tbody>
                    <tr>
                      <td>{{$commande->id }}</td>
                      <td>{{$commande->name }} </td>
                      <td>{{$commande->DateCommande }}</td>
                      <td>{{$commande->PrixTotalCommande }} Fcfa</td>
                    </tr>
                    </tbody>
                     @endforeach
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->


              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12"><br>
                  <a href="{{ route('CommandeImpression') }}" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Imprimer</a>
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection