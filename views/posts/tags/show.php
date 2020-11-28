<h1 class="h3 my-4">Articles: <?= $params['tag']->name ?></h1>
<ul class="list-group mb-3">
    <?php foreach($params['tag']->getPosts() as $post): ?>
        <li class="list-group-item"><a href="/php_mvc/posts/<?= $post->id ?>"><?= $post->title ?></a></li>
    <?php endforeach ?>
</ul>

<a href="/php_mvc/posts/" class="btn btn-secondary float-right">Retour</a>
