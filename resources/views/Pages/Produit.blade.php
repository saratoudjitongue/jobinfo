@extends('Layouts.LayoutClient')


@section('content')

<div >
          <div class="col-md-6"  style="margin-left: 350px; margin-right: 220px" >
            <!-- Box Comment -->
            <div class="card card-info" >
            <div class="card card-widget" >
<div class="card-header ">
                <h3 class="card-title">Informations</h3>
 </div>
	<div class="card-body" >
		<div class="form-group">
            <a href="ImgProd/{{$Produits->ImageProduit }}" data-fluidbox>
		<img class="img-fluid pad" src="ImgProd/{{$Produits->ImageProduit }}" alt="Photo" style="height: 200px; width: 200px;"></a>
	</div>
    
    	         <div class="form-group">
                    <label for="NomProd" style="margin-left: 30px"><h4><strong>Designation:</strong> {{$Produits->NomProduit}}</h4></label>                  
                </div>
                <div class="form-group">
                    <label for="TypeProd" style="margin-left: 30px"><h4><strong>Type:</strong> {{$Produits->NomTypeProduit}} </h4></label>
                </div>
                <div class="form-group">
                    <label for="PrixProd" style="margin-left: 30px"><h4><strong>Prix:</strong> {{$Produits->PrixProduit}} Fcfa </h4></label>
                </div>
                <div class="form-group">
                    <label for="DetailProd" style="margin-left: 30px"><h4><strong>D&eacute;tails:</strong> {{$Produits->DetailsProduit}}</h4></label>
                </div> 

</div>
</div>
</div>
</div>
</div>


@endsection