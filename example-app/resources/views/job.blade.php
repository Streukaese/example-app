<!doctype html>

<title>Jobs</title>
<link rel="stylesheet" href="/app.css">

<body>
    <article> <!-- <?= $job->title; ?> -->
        <h1>{ $job->title }</h1>
        <div>
            {!! $job->body !!}
           <!-- <?= $job ->description; ?> -->
        </div>
    </article>

<a href="/">Back</a>
</body>
