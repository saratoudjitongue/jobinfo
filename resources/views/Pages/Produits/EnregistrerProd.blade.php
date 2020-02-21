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
    <section class="content">
      <div class="container-fluname">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Enr&eacute;gistrer un nouveau produit</h3>
              </div>
              <!-- /.card-header -->
               <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" action="{{ route('EnregistrerProduit') }}">
                {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="NomProd">Nom </label>
                    <div class="col-sm-5">
                    <input type="text" class="form-control" name="NomProd" placeholder="Entrer le nom" required="required">
                  </div>
                </div>
                <div class="form-group">
                    <label>Type de produit</label>
                    <div class="col-sm-5">
                    <select class="form-control" name="TypeProd" required="required">
                       <option value="-1" >Veuillez choisir une catégorie</option>
                      @foreach($Type_produits as $type_produit)
                      <option value="{{$type_produit->IdTypeProduit}}">{{$type_produit->NomTypeProduit}}</option>
                       @endforeach
                      </select>                    
                  </div>
                </div>
                    <div class="form-group">
                    <label for="PrixProd">Prix </label>
                    <div class="col-sm-5">
                    <input type="integer" class="form-control" name="PrixProd" placeholder="Entrer le prix" required="required">
                  </div>
                   @if ($errors->has('PrixProd'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('PrixProd') }}</strong>
                                    </span>
                  @endif
                </div>
                  <div class="form-group">
                    <label for="DetailProd">D&eacute;tails</label>
                    <div class="col-sm-5">
                    <textarea type="text" class="form-control" rows="3" placeholder="Entrer les détails" name="DetailsProd" required="required"></textarea>
                  </div>
                </div>
                <div class="form-group">
                    <label for="Image" class="col-md-4 control-label">Image du produit</label>
                      <div class="col-sm-5">
                        <input type="file" name="ImageProd" id="ImageProd"><br>
                      </div>
                  @if ($errors->has('ImageProd'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('ImageProd') }}</strong>
                                    </span>
                  @endif
                </div>
                 <div class="form-group">   
                  <div class="col-sm-5">
                    <button class="btn btn-block btn-primary btn-lg">Valider</button><br>
                </div>
                </div> 
                </div>
              </form>
            </div>


@endsection
