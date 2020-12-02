<div class="w-full flex items-center mt-6">
    <h3 class="tracking-widest font-semibold text-xl uppercase title-font text-white pb-1 border-b-2 border-indigo-500">
    <?= $params['post']->title ?>
    </h3>
</div>

<div class="mb-2">
    <?php foreach($params['post']->getTags() as $tag): ?>
        <span class="badge badge-success"><a href="/php_mvc/tags/<?= $tag->id ?>" class="text-white"><?= $tag->name ?></a></span>
    <?php endforeach ?>
</div>
<p><?= $params['post']->content ?></p>

<a href="/php_mvc/posts/" class="btn btn-secondary float-right">Retour</a>
