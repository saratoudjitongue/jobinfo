@extends('Layouts.LayoutClient')

@section('content')
   <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Commande</h1>
          </div>
      </div>
  </div>
</section>
 <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          <!-- left column -->
        
             <!-- general form elements -->
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Fiche de commande</h3>
              </div>
              <!-- /.card-header -->
              <form role="form" method="POST" action="{{ route('EnregistrerClient') }}" id="feedback_form">
                 {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                  <label>Date de la commande</label>
                  <div class="col-sm-5">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                    </div>
                    <input type="date" class="form-control" data-inputmask="'alias': 'yyyy-mm-dd'" name="DateCommande" id="Date" required="required" value="{{ date("Y-m-d") }}">
                  </div>
                  </div>
          
                  @if ($errors->has('DateCommande'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('DateCommande') }}</strong>
                                    </span>
                  @endif
                </div>
                  <div class="form-group">
                    <div class="col-sm-5">
                    <label for="NomClt">Nom</label>
                    <input type="text" class="form-control" id="NomClt" placeholder="Veuillez entrer votre nom" name="NomClt" required="required">
                  </div>
                  @if ($errors->has('NomClt'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('NomClt') }}</strong>
                                    </span>
                  @endif
                </div>

                  <div class="form-group">
                    <div class="col-sm-5">
                    <label for="PrenomClt">Prenom</label>
                    <input type="text" class="form-control" id="PrenomClt" placeholder="Veuillez entrer votre prenom" name="PrenomClt" required="required">
                  </div>
                  @if ($errors->has('PrenomClt'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('PrenomClt') }}</strong>
                                    </span>
                  @endif
                </div>		
                  <div class="form-group">
                  	 <div class="col-sm-5">
                    <label for="TelClt">Telephone</label>
                    <input type="text" class="form-control" id="TelClt" placeholder="Veuillez entrer votre numero de telephone" name="TelClt" required="required">
                  </div>
                  @if ($errors->has('TelClt'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('TelClt') }}</strong>
                                    </span>
                  @endif
                  </div>
                  <div class="form-group">
                  	 <div class="col-sm-5">
                    <label for="EmailClt">Email</label>
                    <input type="text" class="form-control" id="EmailClt" placeholder="Veuillez entrer votre adresse mail" name="EmailClt" required="required">
                  </div>
                  @if ($errors->has('EmailClt'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('EmailClt') }}</strong>
                                    </span>
                  @endif
                  </div>
                  <div class="form-group">
                  	 <div class="col-sm-5">
                    <label for="PaysClt">Pays</label>
                    <input type="text" class="form-control" id="PaysClt" placeholder="Veuillez entrer votre pays" name="PaysClt" required="required">
                  </div>
                  @if ($errors->has('PaysClt'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('PaysClt') }}</strong>
                                    </span>
                  @endif
                  </div>
                  <div class="form-group">
                  	 <div class="col-sm-5">
                    <label for="VilleClt">Ville</label>
                    <input type="text" class="form-control" id="VilleClt" placeholder="Veuillez entrer votre ville" name="VilleClt" required="required">
                  </div>
                  @if ($errors->has('VilleClt'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('VilleClt') }}</strong>
                                    </span>
                  @endif
                  </div>
                  <div class="form-group">
                  	 <div class="col-sm-5">
                    <label for="AdresseClt">Adresse</label>
                    <input type="text" class="form-control" id="AdresseClt" placeholder="Veuillez entrer votre address" name="AdresseClt" required="required">
                  	 </div>
                     @if ($errors->has('AdresseClt'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('AdresseClt') }}</strong>
                                    </span>
                     @endif
                  </div>
                  <div style="margin-left: 1050px">   
                  <div class="col-sm-12">
                    <button class="btn btn-block  btn-outline-secondary btn-lg">Suivant ></button><br>
                </div>
                </div>

              </div>
          </form>
      </div>
  </div>


@endsection