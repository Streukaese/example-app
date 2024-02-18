@extends('layout')

@section('content')
    <article> <!-- <?= $job->title; ?> -->
        <h1>{ $job->title }</h1>

        <div>
            {!! $job->body !!}
        <!-- <?= $job ->description; ?> -->
        </div>
    </article>

    <a href="/">Back</a>
@endsection