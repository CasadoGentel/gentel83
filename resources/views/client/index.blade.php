@extends('master')


@section('content')
<div class="row" style="min-height: calc(100vh - 336px);">
    <div class="col-md-2"></div>
    <div class="col-md-8" style="margin-top:60px;">
        <div class="content-wrapper">
            <div class="content-heading">
                <h3>Mes clients</h3>
            </div>
           {{-- <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <div class="col-md-12 bg-danger text-center"><h2>Vous devez paramétrer votre serveur de mails (SMTP) dans Paramétrages</h2></div>
                            <div class="row">
                                <div class="col-md-4"><h4 class="text-primary">Informations Gentel &nbsp;  |
                                        <button type="button" class="btn btn-primary btn-xs pr-lg" style="margin-left: 15px;" onclick="envoieMail('0')">Envoyer tous les mails d'activation</button>
                                    </h4>
                                </div>
                                <h5 class='mt-lg'>
                                    <div class="col-md-1">
                                        <strong>Légende :</strong>
                                    </div>
                                    <div class="col-md-6">
                                        <i class="fa fa-circle text-yellow mr-sm"></i> <span style="margin-right: 15px;">Accès autorisé</span>
                                        <i class="fa fa-circle text-danger mr-sm"></i> <span style="margin-right: 15px;">Accès non autorisé</span>
                                        <i class="fa fa-circle text-primary mr-sm"></i> Client multi-comptes

                                    </div>
                                </h5>
                            </div>



                        </div>

                        <div class="panel-body " style="margin-top: 20px;">
                            <div class="table-responsive style-scroll table-sm mt-2">

                            </div>
                        </div>
                    </div>
                </div>
            </div>--}}
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-4"><h4 class="text-primary">Informations Gentel &nbsp;  |  </h4> <button type="button" class="btn btn-primary btn-xs pr-lg" style="margin-left: 15px;" onclick="envoieMail('0')">Envoyer tous les mails d'activation</button>

                        </div>
                       
                            <div class="col-md-1">
                                <strong>Légende :</strong>
                            </div>
                            <div class="col-md-6">
                                <i class="fa fa-circle text-yellow mr-sm"></i> <span style="margin-right: 15px;">Accès autorisé</span>
                                <i class="fa fa-circle text-danger mr-sm"></i> <span style="margin-right: 15px;">Accès non autorisé</span>
                                <i class="fa fa-circle text-primary mr-sm"></i> Client multi-comptes

                            </div>
                        </h5>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered table-hover table-sm">
                        <thead>
                        <tr>
                            <th scope="col">N° Client gentel</th>
                            <th scope="col">Raison sociale</th>
                            <th scope="col">IDClient extranet</th>
                            <th scope="col">Accès Extranet</th>
                            <th scope="col">Se connecter</th>
                            <th scope="col">Mail Identifiant</th>
                            <th scope="col">Statut</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Téléphone</th>
                            <th scope="col">Email</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($client as $cli)

                            <tr>
                                <th scope="row">{{$cli->num_client}}</th>
                                <td>{{$cli->raison_sociale}}</td>
                                <td>{{$cli->id}}</td>
                                <td>{{$cli->acces_intranet}}</td>
                                <td>{{$cli->num_client}}</td>
                                <td>{{$cli->mail_identifiant}}</td>
                                <td>{{$cli->statut_client}}</td>
                                <td>{{$cli->rattachement_client}}</td>
                                <td>{{$cli->telephone}}</td>
                                <td>{{$cli->mail}}</td>
                            </tr>


                        @endforeach



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
