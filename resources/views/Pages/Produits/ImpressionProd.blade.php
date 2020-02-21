@extends('Layouts.Impression')

@section('content')

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
                <div style="margin-left: 250px"><h1><strong>LISTE DES MENUS</strong> </h1><br></div>
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Image</th>
                      <th>Designation</th>
                      <th>Type</th>
                      <th>Prix</th>
                    </tr>
                    </thead>
                    @foreach($produits as $produit)
                    <tbody>
                    <tr>
                      <td><img src="ImgProd/{{$produit->ImageProduit }}" width="50px" height="50px"/></td>
                      <td>{{$produit->NomProduit }} </td>
                      <td>{{$produit->NomTypeProduit }}</td>
                      <td>{{$produit->PrixProduit }} Fcfa</td>
                    </tr>
                    </tbody>
                     @endforeach
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection