<h1><?= $params['post']->title ?? 'Créer un nouvel article' ?></h1>

<form action="<?php isset($params['post']) ? "/php_mvc/admin/posts/edit/{$params['post']->id}" : "/php_mvc/admin/posts/create" ?>" method="POST">

    <div class="form-group">
        <label for="title">Titre</label>
        <input name="title" id="title" type="text" class="form-control" value="<?= $params['post']->title ?? '' ?>">
    </div>

    <div class="form-group">
        <label for="content">Contenu</label>
        <textarea name="content" id="content" type="text" class="form-control" rows="8"><?= $params['post']->content ?? '' ?></textarea>
    </div>

    <div class="form-group">
        <label for="tags">Tags de l'article</label>
        <select multiple class="form-control" id="tags" name="tags[]">
            <?php foreach($params['tags'] as $tag): ?>
                <option value="<?= $tag->id ?>"
                <?php if (isset($params['post'])): ?>
                    <?php foreach($params['post']->getTags() as $postTag) {
                        echo ($tag->id === $postTag->id) ? 'selected' : '';
                    } ?>
                <?php endif ?>
                ><?= $tag->name ?></option>
            <?php endforeach ?>
        </select>
    </div>

    <a href="/php_mvc/admin/posts/" class="btn btn-secondary">Retour</a>
    <button type="submit" class="btn btn-success float-right">
        <?= isset($params['post']) ? 'Enregistrer' : 'Créer' ?>
    </button>

</form>