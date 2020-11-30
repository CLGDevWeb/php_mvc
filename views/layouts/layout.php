<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?= SCRIPTS.'css'.DIRECTORY_SEPARATOR.'tailwind.css' ?>">
        <title><?= APP_NAME ?></title>
    </head>
    <body class="bg-gray-900">
        <header class="text-gray-300 bg-blue-800 body-font">
            <div class="container mx-auto flex flex-wrap p-5 items-center">

                <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-blue-500 rounded-full" viewBox="0 0 24 24">
                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                    </svg>
                    <span class="ml-3 text-xl"><?= APP_NAME ?></span>
                </a>

                <nav class="mr-auto ml-4 py-1 pl-4 border-l border-gray-300	flex flex-wrap items-center text-base justify-center">
                    <a class="mr-5 hover:text-white" href="/php_mvc/">Accueil</a>
                    <a class="mr-5 hover:text-white rounded px-2 py-1 ring-2 ring-blue-400 bg-blue-600" href="/php_mvc/posts">Articles</a>
                    <?php if(isset($_SESSION['auth'])): ?>
                        <a class="mr-5 hover:text-white" href="/php_mvc/admin/posts">Admin</a>
                    <?php endif ?>
                </nav>

                <?php if(isset($_SESSION['auth'])): ?>
                    <a class="inline-flex items-center bg-gray-800 border-0 py-1 px-3 focus:outline-none hover:bg-gray-700 rounded text-base mt-4 md:mt-0" href="/php_mvc/logout">
                        Se déconnecter
                    </a>
                <?php else: ?>
                    <a class="inline-flex items-center bg-gray-800 text-gray-500 border-0 py-1 px-3 focus:outline-none hover:bg-green-600 hover:text-gray-100 rounded text-base mt-4 md:mt-0" href="/php_mvc/login">
                        Se connecter
                    </a>
                <?php endif ?>

            </div>
        </header>

        <div class="container mx-auto px-5">
            <?= $content ?> 
        </div>
        
    </body>
</html>