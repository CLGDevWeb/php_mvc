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

<form class="text-gray-500 bg-gray-900 body-font" action="/php_mvc/login" method="POST">
    <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
        <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
            <h1 class="title-font font-medium text-3xl text-white">Espace d'administration</h1>
            <p class="leading-relaxed mt-4">Gestion des articles ...</p>
        </div>
        <div class="lg:w-2/6 md:w-1/2 bg-gray-800 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
            <h2 class="text-white text-lg font-medium title-font mb-5">Sign Up</h2>
            <div class="relative mb-4">
                <label for="username" class="leading-7 text-sm text-gray-400">Nom d'utilisateur</label>
                <input type="text" id="username" name="username" class="w-full bg-gray-700 rounded border border-gray-600 focus:border-blue-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="password" class="leading-7 text-sm text-gray-400">Mot de passe</label>
                <input type="password" id="password" name="password" class="w-full bg-gray-700 rounded border border-gray-600 focus:border-blue-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <button type="submit" class="text-white bg-blue-500 border-0 py-2 px-8 focus:outline-none hover:bg-blue-600 rounded text-lg">Se connecter</button>
            <p class="text-xs text-gray-600 mt-3">That's it!</p>
        </div>
    </div>
</form>