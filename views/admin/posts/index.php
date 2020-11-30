<h1 class="h3 my-3">Administration des articles</h1>

<?php if ($_GET['success'] ?? false): ?>
    <div class="alert alert-success">Vous êtes connecté!</div>
<?php endif ?>

<a href="/php_mvc/admin/posts/create" class="btn btn-success mb-3">Nouvel article</a>

<div class="table-responsive-sm">
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">Publié</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($params['posts'] as $post): ?>
                <tr>
                    <th scope="row"><?= $post->id ?></th>
                    <td><?= $post->title ?></td>
                    <td><?= $post->getCreatedAt() ?></td>
                    <td class="text-right">
                        <a href="/php_mvc/admin/posts/edit/<?= $post->id ?>" class="btn btn-primary">Modifier</a>
                        <form action="/php_mvc/admin/posts/delete/<?= $post->id ?>" method="POST" class="d-inline">
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
