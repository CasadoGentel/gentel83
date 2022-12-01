@extends('master')

@section('meta')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
@endsection

@section('content')
    <div class="row">
    @include('sidebar')
        <!-- Blog Entries Column -->
        <div class="col-md-8" style="margin-top:100px;">

        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif


<form action="" method="POST">
    @csrf
  
     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="form-group">
                <div class="card">
                    <h5 class="card-title">Upload du logo:</h5>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="formFileSm" class="form-label">Fichier à télécharger</label>
                            <input class="form-control form-control-sm" id="formFileSm" type="file">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                    
                </div>
            </div>
          
        </div>
            
        <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="card">
                <h5 class="card-title">Couleur du bandeau client:</h5>
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleColorInput" class="form-label">Color picker</label>
                        <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Valider</button>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="card">
            <h5 class="card-title">Redirection via hébergeur:</h5>
                <div class="card-body">
                <div class="row">
                        <div class="col-md-12 text-justify">
                            Créez un sous-domaine dans votre zone DNS qui pointe sur l'adresse extranet.gentel.fr 
                            et saisissez ensuite ci-dessous l'adresse du sous-domaine que vous venez de créer.
                            <ul class="mb-sm"> <br>  
                                <li> <span class="text-primary">Type de champ : </span> CNAME </li>
                                <li> <span class="text-primary mb-sm">Vers l'adresse :</span> extranet.gentel.fr</li>
                                <br>
                            </ul>
                        </div> 
                    </div>

                    <div class="jumbotron text-center mb-sm col-md-10"style="border:2px solid red;" >
                        <i class="fa fa-exclamation-triangle" aria-hidden="true" style="color:red;font-size:20px;margin-right:10px;"></i>
                        N'oubliez pas <strong style="font-size:17px;">le point final</strong> au CNAME.<br>
                        Exemple : Extranet.mondomaine.com <br>
                        <strong style="font-size:16px;">  CNAME extranet.gentel.fr.</strong>
                    </div>

                    <br>
                    <div class="form-group">
                        
                        <div class="mb-3">
                            <label class='control-label col-md-12'>Adresse du sous-domaine :</label>
                                <div class="row">
                                <div class='col-md-6'>
                                        <input class='form-control'type="text" name="url" id="url" >
                                </div>
                                <div class='col-md-6'>
                                    <button type="submit" class="btn btn-primary">Valider</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</form>

        </div>
    </div>
@endsection