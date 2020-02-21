@extends('Layouts.LayoutClient')

@section('content')

   @if (session()->has('success_message'))
              <div class="col-md-12">
               <div class="alert alert-info alert-dismissible" style="margin-left: 7px;margin-right: 10px">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h4>{{ session()->get('success_message') }}</h4>
                </div>
                </div>               
   @endif
 <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Mon panier</h3>
              </div>
              <div class="card-body" >
<!-- Produit -->
<!-- /.card-header -->

            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                   <th>Image</th>
                  <th>Designation</th>
                  <th>Prix</th>
                  <th>Quatité</th>
                  <th>Prix total</th>
                </thead>
           
            @foreach($Prod as $produit)
                <tbody>
                <tr role="row" class="odd">
                  <td width="80px" height="80px"><img  src="ImgProd/{{$produit->ImageProduit }}" width="50px" height="50px" style="margin-left: 20px" name="ImageProd" /></td>
                  <td width="300px"><h4><strong>{{$produit->NomProduit }}</strong></h4></td>
                  <td width="200px"><h5><strong>{{$produit->PrixProduit }} Fcfa</strong></h5></td>
                  <td width="200px"><h5><strong>{{$produit->Quantite }}</strong></h5></td>
                  <td width="200px"><h5><strong>{{$produit->PrixProduit * $produit->Quantite }} Fcfa</strong></h5></td>
				        </tr>
				</tbody>
        @endforeach
</table>
</div>
<div class="card-footer" style="margin-left: 1005px; margin-right: 20px;" >
	Prix total : <div href="#" class="btn btn-secondary col-sm-13 btn-margin">{{$TotalPrix}} Fcfa</div>
	</div>
  <form action="{{route('ViderPanier') }}" onsubmit = "return confirm('Voulez-vous vraiment vider votre panier?')" style="  margin-right: 20px; margin-left: 20px">
<div class="card-footer" >
  <a href="{{route('ModifierPanier') }}" class="btn btn-warning col-sm-2 col-xs-5">Modifier <i class="nav-icon fa fa-edit"></i></a>
  <button type="submit"  class="btn btn-danger col-sm-2 col-xs-5" style="margin-left: 280px">Vider <i class="nav-icon fa fa-trash-o"></i></button>
	<a href="{{route('FicheCommandes') }}" class="btn btn-primary col-sm-2 col-xs-5" style="margin-left: 250px">Commander <i class="nav-icon fa fa-shopping-cart"></i></a>
	</div>
  </form>
</div>
</div>
</div>
</div>
</section>
@endsection
