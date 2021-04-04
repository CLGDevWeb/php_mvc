<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="<?= SCRIPTS.'favicon.ico' ?>" />
        <link rel="stylesheet" href="<?= SCRIPTS.'css'.DIRECTORY_SEPARATOR.'tailwind.css' ?>">
        <title><?= APP_NAME ?></title>
    </head>
    <body class="min-h-screen">
        <div class="relative overflow-hidden">
            <header class="relative">
                <div class="bg-gray-900 pt-6">
                    <nav class="relative max-w-7xl mx-auto flex items-center justify-between px-4 sm:px-6" aria-label="Global">
                        <div class="flex items-center flex-1">
                            <div class="flex items-center justify-between w-full md:w-auto">
                            <a href="#">
                                <span class="sr-only"><?= APP_NAME ?></span>
                                <img class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="logo">
                            </a>
                            <div class="-mr-2 flex items-center md:hidden">
                                <button type="button" class="bg-gray-900 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-800 focus:outline-none focus:ring-2 focus-ring-inset focus:ring-white" aria-expanded="false">
                                <span class="sr-only">Open main menu</span>
                                <!-- Heroicon name: outline/menu -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                                </button>
                            </div>
                            </div>
                            <div class="hidden space-x-8 md:flex md:ml-10">
                                <a href="/php_mvc/" class="text-base font-medium text-white hover:text-gray-300">Accueil</a>

                                <a href="/php_mvc/posts" class="text-base font-medium text-white hover:text-gray-300">Actualités</a>

                                <a href="/php_mvc/about" class="text-base font-medium text-white hover:text-gray-300">Qui suis-je</a>
                                <?php if(isset($_SESSION['auth'])): ?>
                                    <a href="/php_mvc/admin/posts" class="text-base font-medium text-white hover:text-gray-300">Admin</a>
                                <?php endif ?>
                            </div>
                        </div>
                        <div class="hidden md:flex md:items-center md:space-x-6">
                            <?php if(isset($_SESSION['auth'])): ?>
                                <a href="/php_mvc/logout" class="text-base font-medium text-white hover:text-gray-300">
                                    Se déconnecter
                                </a>
                            <?php else: ?>
                                <a href="/php_mvc/login" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700">
                                    Se connecter
                                </a>
                            <?php endif ?>

                        </div>
                    </nav>
                </div>

                <!--
                    Mobile menu, show/hide based on menu open state.

                    Entering: "duration-150 ease-out"
                    From: "opacity-0 scale-95"
                    To: "opacity-100 scale-100"
                    Leaving: "duration-100 ease-in"
                    From: "opacity-100 scale-100"
                    To: "opacity-0 scale-95"
                -->
                <div class="absolute top-0 inset-x-0 p-2 transition transform origin-top md:hidden">
                    <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
                        <div class="px-5 pt-4 flex items-center justify-between">
                            <div>
                                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="">
                            </div>
                            <div class="-mr-2">
                                <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-600">
                                    <span class="sr-only">Close menu</span>
                                    <!-- Heroicon name: outline/x -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="pt-5 pb-6">
                            <div class="px-2 space-y-1">
                                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">Product</a>

                                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">Features</a>

                                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">Marketplace</a>

                                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">Company</a>
                            </div>
                            <div class="mt-6 px-5">
                                <a href="#" class="block text-center w-full py-3 px-4 rounded-md shadow bg-indigo-600 text-white font-medium hover:bg-indigo-700">Start free trial</a>
                            </div>
                            <div class="mt-6 px-5">
                                <p class="text-center text-base font-medium text-gray-500">Existing customer? <a href="#" class="text-gray-900 hover:underline">Login</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <main>
                <?= $content ?> 
            </main>
        </div>
    </body>
</html>