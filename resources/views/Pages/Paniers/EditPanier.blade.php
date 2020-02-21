@extends('Layouts.LayoutClient')

@section('content')

 <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Modifier mon panier</h3>
              </div>
              <div class="card-body">
<!-- Produit -->
<!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                   <th>Image</th>
                  <th>Nom</th>
                  <th>Prix</th>
                  <th>Quatité</th>
                  <th>Prix total</th>
                  <th tabindex="0" aria-controls="example2" rowspan="1" colspan="2" aria-label="Action: activate to sort column ascending">Action</th>
                </tr>
                </thead>
           
            @foreach($Prod as $produit)
            <form role="form" method="POST" action="{{route('UpdatePanier',[$produit->id]) }}">
              {{ csrf_field() }}
                <tbody>
                <tr role="row" class="odd">
                  <td width="80px" height="80px"><img  src="ImgProd/{{$produit->ImageProduit }}" width="60px" height="60px" style="margin-left: 20px" name="ImageProd" /></td>
                  
                  <td width="300px"><h4><strong>{{$produit->NomProduit }}</strong></h4></td>
                  <td width="200px"><h5><strong>{{$produit->PrixProduit }} Fcfa</strong></h5></td>
                  <td width="200px"><input type="number" min="1" class="form-control" name="QteProd" value="{{$produit->Quantite }}">
                  </td>
                   <td width="200px"><h5><strong>{{$produit->PrixProduit * $produit->Quantite }} Fcfa</strong></h5></td>

                  <td class="col-sm-2"><a href="{{route('RemovePanier',[$produit->id])}}" class="btn btn-danger col-sm-3 col-xs-5" style="margin-left: 30px"><i class="nav-icon fa fa-trash-o" onclick="return confirm('Voulez-vous vraiment enlever ce produit de votre panier?')"></i></a>
                  	  <button class="btn btn-success col-sm-3 col-xs-5" style="margin-left: 30px"><i class="nav-icon fa fa-check"></i></button>
                  </td>
                 
				        </tr>
				</tbody>
         </form>
        @endforeach
</table>
</div>
<div class="card-footer" style="margin-left: 1005px; margin-right: 20px;" >
  Prix total : <div href="#" class="btn btn-secondary col-sm-13 btn-margin">{{$TotalPrix}} Fcfa</div>
  </div>
	</div>
</div>
</div>
</div>
</div>
</section>
@endsection