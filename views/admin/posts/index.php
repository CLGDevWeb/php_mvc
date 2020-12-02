<?php if ($_GET['success'] ?? false): ?>
    <div class="bg-red-lightest border-l-4 border-red text-red-dark p-4" role="alert">
        <p class="font-bold">Connexion</p>
        <p>Vous êtes connecté avec succés !/p>
    </div>
<?php endif ?>

<div class="w-full flex items-center mt-4">
    <h3 class="tracking-widest font-semibold text-xl uppercase title-font text-white">
        Administration des articles
    </h3>
    <a href="/php_mvc/admin/posts/create" class="ml-auto inline-flex text-white bg-green-500 border-0 py-2 px-4 focus:outline-none hover:bg-green-600 rounded font-semibold">
        Nouvel article
    </a>
</div>

<div class="-mx-4 px-4 py-4 overflow-x-auto">
    <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
        <table class="min-w-full leading-normal table-auto">
            <thead>
                <tr>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-700 bg-gray-800 text-left text-xs font-semibold text-gray-400 uppercase tracking-wider">
                        #
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-700 bg-gray-800 text-left text-xs font-semibold text-gray-400 uppercase tracking-wider">
                        Titre
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-700 bg-gray-800 text-center text-xs font-semibold text-gray-400 uppercase tracking-wider">
                        Publié
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-700 bg-gray-800 text-xs font-semibold text-gray-400 uppercase tracking-wider text-center">
                        
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($params['posts'] as $post): ?>
                    <tr>
                        <td class="px-5 py-5 border-b border-gray-600 bg-gray-700 text-sm">
                            <p class="text-gray-100 font-semibold">
                                <?= $post->id ?>
                            </p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-600 bg-gray-700">
                            <div class="flex items-center">
                                <p class="text-gray-100 font-semibold text-md">
                                    <?= $post->title ?>
                                </p>
                            </div>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-600 bg-gray-700">
                            <p class="text-gray-100 italic text-center text-sm">
                                <?= $post->getCreatedAt() ?>
                            </p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-600 bg-gray-700">
                            <div class="flex justify-end items-center">
                                <a href="/php_mvc/admin/posts/edit/<?= $post->id ?>" class="mr-2 ml-auto inline-flex text-white bg-blue-500 border-0 py-2 px-4 focus:outline-none hover:bg-blue-600 rounded font-semibold">
                                    Modifier
                                </a>
                                <form action="/php_mvc/admin/posts/delete/<?= $post->id ?>" method="POST" class="d-inline">
                                    <button type="submit" class="ml-auto inline-flex text-white bg-red-500 border-0 py-2 px-4 focus:outline-none hover:bg-red-600 rounded font-semibold">Supprimer</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
