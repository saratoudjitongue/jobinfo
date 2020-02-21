 @extends('Layouts.LayoutClient')

@section('content')

 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fa fa-globe"></i> FASTFOOD, Inc.
                    <small class="float-right">Date: {{ date("Y-m-d") }}</small><br>
                    <small class="float-right">Client: <strong>{{ $Client->NomClt }} {{ $Client->PrenomomCl }}</strong> </small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
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
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Produits</th>
                      <th>Prix unitaire</th>
                      <th>Quantit&eacute;</th>
                      <th>Prix total</th>
                    </tr>
                    </thead>
                    @foreach($Prod as $produit)
                    <tbody>
                    <tr>
                      <td>{{$produit->NomProduit }}</td>
                      <td>{{$produit->PrixProduit }} Fcfa</td>
                      <td>{{$produit->Quantite }}</td>
                      <td>{{$produit->PrixProduit * $produit->Quantite }} Fcfa</td>
                    </tr>
                    </tbody>
                     @endforeach
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  <p class="lead">Methodes de payement</p>
                  <img src="Template/dist/img/credit/Flooz.png" alt="Flooz">
                  <img src="Template/dist/img/credit/Togocel.png" alt="TMoney">
                  <img src="Template/dist/img/credit/paypal2.png" alt="Paypal">
                </div>
                <!-- /.col -->
                <div class="col-6">

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Total à payer</th>
                        <td>{{$TotalPrix}} Fcfa</td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12"><br>
                  <a href="{{ route('CreerFacture') }}" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Imprimer</a>
                  <button type="button" class="btn btn-success float-right"><i class="fa fa-credit-card"></i>Proceder au payement
                  </button>
                  <a href="{{ route('CommandeTerminer') }}" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fa fa-download"></i> Terminer
                  </a>
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    @endsection