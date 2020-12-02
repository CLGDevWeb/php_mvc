<?php if (isset($_SESSION['errors'])) : ?>

    <?php foreach ($_SESSION['errors'] as $errorsArray) : ?>
        <?php foreach ($errorsArray as $errors) : ?>
            <div class="alert alert-danger">
                <?php foreach ($errors as $error) : ?>
                    <li><?= $error ?></li>
                <?php endforeach ?>
            </div>
        <?php endforeach ?>

    <?php endforeach ?>

<?php endif ?>

<?php session_destroy(); ?>

<section class="text-gray-500 body-font relative">
    <form class="container px-5 py-12 mx-auto" action="/php_mvc/login" method="POST">
        <div class="w-1/3 mx-auto bg-gray-800 rounded-lg p-8">
            <h1 class="text-2xl font-medium title-font mb-4 text-indigo-200 mb-6">Espace d'administration</h1>
            <div class="flex flex-wrap -m-2">
                <div class="p-2 w-full">
                    <div class="relative">
                        <label for="username" class="leading-7 text-sm text-gray-400">Nom d'utilisateur</label>
                        <input type="text" id="username" name="username" class="w-full bg-gray-700 rounded border border-gray-600 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                </div>
                <div class="p-2 w-full mb-4">
                    <div class="relative">
                        <label for="password" class="leading-7 text-sm text-gray-400">Mot de passe</label>
                        <input type="text" id="password" name="password" class="w-full bg-gray-700 rounded border border-gray-600 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                </div>
            </div>
            <button type="submit" class="w-full text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Se connecter</button>
        </div>
    </form>
</section>