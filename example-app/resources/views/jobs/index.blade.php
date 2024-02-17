@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Jobs</h1>
        
        <div class="row">
            @foreach ($jobs as $job)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $job->title }}</h5>
                            <p class="card-text">{{ $job->description }}</p>
                            <p class="card-text">Location: {{ $job->location }}</p>
                            <p class="card-text">Salary: {{ $job->salary }}</p>
                            <a href="{{ route('jobs.show', $job->id) }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection