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
                <h3 class="card-title">Modifier le produit</h3>
              </div>
              <!-- /.card-header -->
               <!-- form start -->
              <form role="form" method="POST" enctype="mutipart/form-data" action="{{route('UpdateProd',[$Produits->id])}}" style="margin-left: 20px">
                {{ csrf_field() }}

                <div class="card-body">
                  <div class="form-group">
                    <label for="NomProd">Nom </label>
                    <div class="col-sm-5">
                    <input type="text" class="form-control" name="NomProd" placeholder="Entrer le nom" required="required" value="{{$Produits->NomProduit}}">
                  </div>
                </div>
                    <div class="form-group">
                    <label for="PrixProd">Prix </label>
                    <div class="col-sm-5">
                    <input type="integer" class="form-control" name="PrixProd" placeholder="Entrer le prix" required="required" value="{{$Produits->PrixProduit}}">
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
                    <textarea type="text" class="form-control" rows="3" placeholder="Entrer les détails" name="DetailsProd" required="required">{{$Produits->DetailsProduit}}"</textarea>
                  </div>
                </div>

                 <div class="form-group">   
                  <div class="col-sm-5">
                    <button class="btn btn-block btn-success btn-lg">Valider <i class="nav-icon fa fa-check"></i></button><br>
                </div>
                </div>             
              </form>

            </div>


@endsection
