<h1 class="mb-3">Listing</h1>

<?php foreach($params['posts'] as $post): ?>
    <div class="card mb-3">
        <div class="card-header bg-dark d-flex justify-content-between align-items-center">
            <span class="d-block h5 text-white">
                Article n° <?= $post->id ?>
            </span>
            <small class="d-block badge badge-light">
                <?= $post->getCreatedAt() ?>
            </small>
        </div>
        <div class="card-body">
            <h5 class="card-title"><?= $post->title ?></h5>
            <div class="mb-2">
                <span class="badge badge-info">!!!</span>
            </div>
            <p class="card-text"><?= $post->getExcerpt() ?></p>
            <?= $post->getButton() ?>
        </div>
    </div>
<?php endforeach ?>