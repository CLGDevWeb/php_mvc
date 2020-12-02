<section class="text-gray-500 bg-gray-900 body-font relative">
    <form class="container px-5 py-12 mx-auto" action="<?php isset($params['post']) ? "/php_mvc/admin/posts/edit/{$params['post']->id}" : "/php_mvc/admin/posts/create" ?>" method="POST">
        <div class="flex flex-col text-center w-full mb-6">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white"><?= $params['post']->title ?? 'Créer un nouvel article' ?></h1>
        </div>
        <div class="w-1/3 mx-auto">
            <div class="flex flex-wrap -m-2">
                <div class="p-2 w-full">
                    <div class="relative">
                        <label for="title" class="leading-7 text-sm text-gray-400">Titre</label>
                        <input type="text" id="title" name="title" value="<?= $params['post']->title ?? '' ?>" class="w-full bg-gray-800 rounded border border-gray-700 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                </div>
                <div class="p-2 w-full">
                    <div class="relative">
                        <label for="content" class="leading-7 text-sm text-gray-400">Contenu</label>
                        <textarea id="content" name="content" class="w-full bg-gray-800 rounded border border-gray-700 focus:border-indigo-500 h-40 text-base outline-none text-gray-100 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"><?= $params['post']->content ?? '' ?></textarea>
                    </div>
                </div>
                <div class="p-2 w-full">
                    <label for="tags" class="leading-7 text-sm text-gray-400">Tags de l'article</label>
                    <select multiple class="w-full bg-gray-800 rounded border border-gray-700 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3" id="tags" name="tags[]">
                        <?php foreach ($params['tags'] as $tag) : ?>
                            <option value="<?= $tag->id ?>" <?php if (isset($params['post'])) : ?> 
                            <?php foreach ($params['post']->getTags() as $postTag) {
                                echo ($tag->id === $postTag->id) ? 'selected' : '';
                            } ?> <?php endif ?>><?= $tag->name ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="p-2 w-full">
                    <button type="submit" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                        <?= isset($params['post']) ? 'Enregistrer' : 'Créer' ?>
                    </button>
                    <a href="/php_mvc/admin/posts/" class="btn btn-secondary">Retour</a>
                </div>
            </div>
        </div>
    </form>
</section>