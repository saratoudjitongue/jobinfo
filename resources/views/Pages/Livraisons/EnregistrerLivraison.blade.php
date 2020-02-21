@extends('Layouts.Admin')


@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluname">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Livraisons</h1>
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
                <h3 class="card-title">Enr&eacute;gistrer nouvelle livraison</h3>
              </div>
              <!-- /.card-header -->
               <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" action="{{route('EnregistrerLivraison',[$commande->id])}}">
                {{ csrf_field() }}
                <div class="card-body">
                <div class="form-group">
                  <label>Date de livraison</label>
                  <div class="col-sm-5">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                    </div>
                    <input type="date" class="form-control" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask name="DateLiv" id="Date" required="required" value="{{ date("Y-m-d") }}">
                  
                  </div>
                  </div>
                </div>
                <div class="form-group">
                    <label for="PrixProd">Prix de la livraison </label>
                    <div class="col-sm-5">
                    <input type="integer" class="form-control" name="PrixLiv" placeholder="Entrer le prix" required="required">
                  </div>
                   @if ($errors->has('PrixLiv'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('PrixLiv') }}</strong>
                                    </span>
                  @endif
                </div>
                <div class="form-group">
                    <label for="LieuLiv">Lieu de la livraison </label>
                    <div class="col-sm-5">
                    <input type="text" class="form-control" name="LieuLiv" placeholder="Entrer le lieu de la livraison" required="required">
                  </div>
                </div>
                 <div class="form-group">   
                  <div class="col-sm-5">
                    <button class="btn btn-block btn-primary btn-lg">Valider</button><br>
                </div>
                </div>              
              </form>

            </div>


@endsection
