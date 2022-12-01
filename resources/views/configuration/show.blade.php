@extends('master')

@section('meta')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
@endsection

@section('content')

<img src="{{ asset('storage/'.$configuration->picture) }}" alt="Image de couverture" style="max-width: 300px;">

	
    <div> {{ var_dump($configuration->nom_logo) }}</div>
    <div> {{ var_dump($configuration->couleur_fond) }}</div>
    <div> {{ var_dump($configuration->site_origine) }}</div>

	<p><a href="{{ route('configuration.index') }}" title="Retourner aux articles" >Retourner aux configurations</a></p>


@endsection