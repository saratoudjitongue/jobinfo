@extends('Layouts.Admin')

@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluname">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Produits</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluname -->
    </div>
    <!-- /.content-header -->

     <!-- Main content -->
     <section class="content" >
      <div class="container-fluname">
       
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Informations du produit</h3>
              </div>
              <!-- /.card-header -->
               <!-- form start -->
              <form role="form" action="#" style="margin-left: 20px">
                <div class="card-body">
                  <div class="col-md-6">
                  <div class="card card-primary">
                  <div class="card-body">
                  <img src="ImgProd/{{$Produits->ImageProduit }}" style="width: 180px; height: 180px" />
                  </div>
                  </div>
                  </div>
                </div>
                  <div class="form-group">
                    <label for="NomProd" style="margin-left: 30px"><strong><h4>Designation:</strong> {{$Produits->NomProduit}}</h4></label>
                  
                </div>
                <div class="form-group">
                    <label for="TypeProd" style="margin-left: 30px"><strong><h4>Type:</strong> {{$Produits->NomTypeProduit}} </h4></label>
                </div>
                    <div class="form-group">
                    <label for="PrixProd" style="margin-left: 30px"><strong><h4>Prix:</strong> {{$Produits->PrixProduit}} Fcfa </h4></label>
                </div>
                  <div class="form-group">
                    <label for="DetailProd" style="margin-left: 30px"><strong><h4>D&eacute;tails:</strong> {{$Produits->DetailsProduit}}</h4></label>
                </div>         
              </form>
            </div>
          </div>

    </section>
    </div>

@endsection