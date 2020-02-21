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
    @if (session()->has('message'))
               <div class="col-md-12">
               <div class="alert alert-success alert-dismissible" style="margin-left: 7px;margin-right: 10px">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>   
                  <h4>{{ session()->get('message') }}</h4>
                </div> 
                </div>                
    @endif
      @if ($success_message)
               <div class="col-md-12">
               <div class="alert alert-info alert-dismissible" style="margin-left: 7px;margin-right: 10px">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>   
                  <h4>{{$success_message}}</h4>
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
                <h3 class="card-title">Nos menus
              </div>
              <div class="card-body" style="background-image: url({{asset('Images/background-906135_1920.jpeg')}});">
<!-- Produit -->
              <div class="row">
              @foreach($produits as $produit)
              <div class="col-md-2 ">
              <div class="card" style="background: none">
                <div class="card-header" ><strong>{{$produit->NomProduit }}</strong></div>
                <div class="card-body">
                  <a href="{{ route('DetailsProd',[$produit->id]) }}"><img src="ImgProd/{{$produit->ImageProduit }}" style="  height: 130px; width: 145px;" /></a>
                </div>
                 <form type="POST" action="{{ route('AjoutPanier',[$produit->id]) }}">
                    {{ csrf_field() }}
                <div class="card-heading" style="margin-left: 5px"><small class="badge badge-secondary"></i> {{$produit->PrixProduit }} Fcfa</small>
                  <button style="float:right; margin-right: 5px;margin-bottom: 5px;background-color: white;color: gray;"  class="btn btn-outline-danger col-sm-6 col-xs-5 btn-margin  AjoutBtn" type="submit">Ajouter <i class="nav-icon fa fa-cart-plus"></i>
                  </button>
                  </form>
                </div>
              </div>
            </div>
               @endforeach
         </div>
         <div style="margin-left: 565px">
               {{ $produits->links() }}
        </div>
          </div>
        </div>
      </div>
    </div>
</section>

@endsection