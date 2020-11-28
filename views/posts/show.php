<h1><?= $params['post']->title ?></h1>
<div class="mb-2">
    <?php foreach($params['post']->getTags() as $tag): ?>
        <span class="badge badge-success"><a href="/php_mvc/tags/<?= $tag->id ?>" class="text-white"><?= $tag->name ?></a></span>
    <?php endforeach ?>
</div>
<p><?= $params['post']->content ?></p>

<a href="/php_mvc/posts/" class="btn btn-secondary float-right">Retour</a>
