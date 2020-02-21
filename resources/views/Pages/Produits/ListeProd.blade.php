@extends('Layouts.Admin')

@section('content')

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Produit</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
   <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Liste des produits</h3>
              </div>
              <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                   <th>Image</th>
                  <th>Nom</th>
                  <th>Type produit</th>
                  <th>Prix</th>
                  <th tabindex="0" aria-controls="example2" rowspan="1" colspan="2" aria-label="Action: activate to sort column ascending">Action</th>
                </tr>
                </thead>

           @foreach($produits as $produit)
                <tbody>           
                <tr role="row" class="odd">
                  <td><img src="ImgProd/{{$produit->ImageProduit }}" width="50px" height="50px"/></td>
                  <td>{{$produit->NomProduit }}</td>
                  <td>{{$produit->NomTypeProduit }}</td>
                  <td>{{$produit->PrixProduit }} Fcfa</td>
                  <td width="180px">
                    <form class="row" action="{{route('SpprimerProd',[$produit->id])}}" onsubmit = "return confirm('Voulez-vous vraiment supprimer cet plat?')">

                       <a href="{{route('ModifierProd',[$produit->id])}}" class="btn btn-warning col-sm-3 col-xs-3 btn-margin"  style="margin-left: 10px;margin-right: 15px"><i class="nav-icon fa fa-edit"></i>
                        </a>                      
                         <button class="btn btn-danger col-sm-3 col-xs-3 btn-margin"><i class="nav-icon fa fa-trash-o"></i>
                          </button>
                        <a href="{{route('InfoProd',[$produit->id])}}" class="btn btn-primary col-sm-3 col-xs-3 btn-margin" style="margin-left: 15px"><i class="nav-icon fa fa-info"></i>
                        </a>
                    </form>
                  </td>
              </tr>
         
            </tbody>
            @endforeach

      </table>
    </div>
    </div>
  </section>
  </div>

@endsection