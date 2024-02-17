@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="jumbotron text-center">
            <h1>Willkommen zur Jobbörse</h1>
            <p class="lead">Hier finden Sie die neuesten Stellenangebote und Unternehmen.</p>
            <a class="btn btn-primary btn-lg" href="{{ route('jobs.index') }}" role="button">Jobs anzeigen</a>
            <a class="btn btn-secondary btn-lg" href="{{ route('companies.index') }}" role="button">Unternehmen anzeigen</a>
        </div>
    </div>
@endsection