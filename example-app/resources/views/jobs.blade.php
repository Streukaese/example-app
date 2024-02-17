<!doctype html>

<title>Job</title>
<link rel="stylesheet" href="/app.css">

<body>
    <?php foreach ($jobs as $job): ?>
        <article>
            <h1>
                <a href="/jobs/<?= $job->slug; ?>">    
                    <? $job->title; ?>
                </a>
            </h1>

            <div>
                <?= $jobs->description; ?>
            </div>
        </article>
    <?php endforeach; ?>
</body>
