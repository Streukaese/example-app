@extends ('layout')

<x-layout>
    @foreach ($jobs as $job)
        <article class="{{ $loop->even ? 'foobar' : '' }}">
            <h1>                
                <a href="/jobs/{{ $job->slug }}">    
                    {{ $job->title }}
                </a>
            </h1>
            <div>
                {{ $job->description }}
                <!-- <?= $jobs->description; ?> -->
            </div>
        </article>
    @endforeach;
</x-layout>