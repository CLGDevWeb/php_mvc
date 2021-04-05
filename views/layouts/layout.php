<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="<?= SCRIPTS.'favicon.ico' ?>" />
        <link rel="stylesheet" href="<?= SCRIPTS.'css'.DIRECTORY_SEPARATOR.'tailwind.css' ?>">
        <title><?= APP_NAME ?></title>
    </head>
    <body>
        <div class="min-h-screen">
            <div class="relative flex flex-col flex-1 h-screen">
                <header class="relative">
                    <div class="bg-blue-900 py-6">
                        <nav class="relative max-w-7xl mx-auto flex items-center justify-between px-4 sm:px-6" aria-label="Global">
                            <div class="flex items-center flex-1">
                                <div class="flex items-center justify-between w-full md:w-auto">
                                <a href="#">
                                    <span class="sr-only"><?= APP_NAME ?></span>
                                    <svg class="w-10 h-10 text-indigo-400" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 512 512">
                                        <path fill="currentColor" d="M463.02979,313.67773H410.92352a63.70693,63.70693,0,0,0-30.56073-25.43457l-97.02-38.21972a16.41,16.41,0,0,1-10.45263-15.35352V218.291a104.33219,104.33219,0,0,0,36.47656-76.542,26.92413,26.92413,0,0,0,23.42578-26.65918,21.18467,21.18467,0,0,0-21.16016-21.15966h-2.23V34.5a34.27574,34.27574,0,0,0-3.85168-15.81055c-.04651-.10644-.10144-.207-.15826-.30859A34.52764,34.52764,0,0,0,274.90234,0H176.15771a34.539,34.539,0,0,0-34.5,34.5V93.93018h-2.23a21.18373,21.18373,0,0,0-21.16015,21.15966A26.92413,26.92413,0,0,0,141.69336,141.749a104.33006,104.33006,0,0,0,36.47656,76.542v16.3789a16.41,16.41,0,0,1-10.45263,15.35352l-97.02,38.21972a63.139,63.139,0,0,0-40.22706,59.07715V508.5a3.5,3.5,0,0,0,7,0V457.48438H101.1499V508.5a3.5,3.5,0,0,0,7,0V435.32617a3.5,3.5,0,1,0-7,0v15.15821H37.47021V347.32031A56.17679,56.17679,0,0,1,73.2627,294.75684l88.7901-34.97852a70.97731,70.97731,0,0,0,126.95446,0l88.79059,34.97852a56.69756,56.69756,0,0,1,24.6579,18.92089H301.708a18.52065,18.52065,0,0,0-18.5,18.5V493.5a18.52065,18.52065,0,0,0,18.5,18.5H463.02979a18.521,18.521,0,0,0,18.5-18.5V332.17773A18.521,18.521,0,0,0,463.02979,313.67773ZM309.40234,101.5v-.56982h2.23a14.1765,14.1765,0,0,1,14.16016,14.15966,19.92243,19.92243,0,0,1-16.39014,19.582Zm-167.74463,0v33.17188a19.92243,19.92243,0,0,1-16.39013-19.582,14.17587,14.17587,0,0,1,14.16015-14.15966h2.23ZM302.03418,30.03418A27.56014,27.56014,0,0,1,302.40234,34.5V94.96484A65.45391,65.45391,0,0,1,287.73975,80.023a64.685,64.685,0,0,1-9.23133-19.27637A91.39659,91.39659,0,0,0,291.60254,47.084,91.15384,91.15384,0,0,0,302.03418,30.03418Zm-59.00439,84.28711a10.5121,10.5121,0,0,0-10.5,10.5v2.99853h-14v-2.99853a10.51211,10.51211,0,0,0-10.5-10.5h-34.0503l-16.25842-9.52051a213.44044,213.44044,0,0,0,67.20178-13.93213,213.79162,213.79162,0,0,0,47.646-25.6001,71.6007,71.6007,0,0,0,9.44482,18.78077,72.55062,72.55062,0,0,0,17.24317,17.28613l-22.17676,12.98584Zm31.5,7v16.5a3.50425,3.50425,0,0,1-3.5,3.5h-28a3.50424,3.50424,0,0,1-3.5-3.5v-13a3.50424,3.50424,0,0,1,3.5-3.5Zm-63,3.5v13a3.50425,3.50425,0,0,1-3.5,3.5h-28a3.50424,3.50424,0,0,1-3.5-3.5v-16.5h31.5A3.50425,3.50425,0,0,1,211.52979,124.82129ZM148.65771,97.43018V34.5a27.53112,27.53112,0,0,1,27.5-27.5h98.74463a27.50924,27.50924,0,0,1,23.59778,13.39844A84.43329,84.43329,0,0,1,286.07227,42.793a84.45329,84.45329,0,0,1-13.69819,13.94824A206.948,206.948,0,0,1,222.419,84.33154a207.02756,207.02756,0,0,1-73.76124,13.67432Zm8.49366,81.34375a96.74947,96.74947,0,0,1-8.49366-39.77539V107.60547l20.87208,12.22265v17.99317a10.5121,10.5121,0,0,0,10.5,10.5h28a10.51211,10.51211,0,0,0,10.5-10.5v-3.00147h14v3.00147a10.5121,10.5121,0,0,0,10.5,10.5h28a10.51211,10.51211,0,0,0,10.5-10.5V119.82812l20.87255-12.22265v31.39307a97.3819,97.3819,0,0,1-44.481,81.75976,59.71439,59.71439,0,0,1-64.78272,0A97.1623,97.1623,0,0,1,157.15137,178.77393ZM225.52979,292a64.06752,64.06752,0,0,1-56.93427-34.79932l1.68719-.66455a23.37047,23.37047,0,0,0,14.88721-21.86621V223.77734c1.366.98,2.74841,1.94043,4.166,2.85791a66.72432,66.72432,0,0,0,72.38818-.00048c1.4176-.917,2.8-1.87793,4.166-2.85791v10.89306a23.37047,23.37047,0,0,0,14.8872,21.86621l1.6872.66455A64.06825,64.06825,0,0,1,225.52979,292Zm249,201.5a11.5131,11.5131,0,0,1-11.5,11.5H301.708a11.5131,11.5131,0,0,1-11.5-11.5V355.67773H474.52979Zm0-144.82227H290.208v-16.5a11.5131,11.5131,0,0,1,11.5-11.5H463.02979a11.5131,11.5131,0,0,1,11.5,11.5ZM414.394,450.25586a3.50044,3.50044,0,0,0,4.251,5.5625l25.54-19.52051a7.50042,7.50042,0,0,0,.00049-11.918L418.645,404.85938a3.50044,3.50044,0,0,0-4.251,5.5625l25.541,19.5205a.499.499,0,0,1-.00049.793ZM335.04694,331.5542a3.5,3.5,0,1,0,3.5,3.5A3.49993,3.49993,0,0,0,335.04694,331.5542Zm-14,0a3.5,3.5,0,1,0,3.5,3.5A3.49993,3.49993,0,0,0,321.04694,331.5542Zm-.49469,104.74365,25.54052,19.52051a3.50044,3.50044,0,0,0,4.251-5.5625l-25.541-19.52051a.499.499,0,0,1,.00049-.793l25.54053-19.5205a3.50044,3.50044,0,0,0-4.251-5.5625l-25.54,19.5205a7.50041,7.50041,0,0,0-.00048,11.918ZM307.04694,331.5542a3.5,3.5,0,1,0,3.5,3.5A3.49993,3.49993,0,0,0,307.04694,331.5542Zm59.33538,129.80225a3.49811,3.49811,0,0,0,4.71485-1.50782l28.76611-55.8125a3.50023,3.50023,0,0,0-6.22266-3.207L364.875,456.6416A3.5002,3.5002,0,0,0,366.38232,461.35645ZM225.52979,181.83984a16.2212,16.2212,0,0,0,16.20459-16.20117v-5.52978a3.5,3.5,0,1,0-7,0v5.52978a9.20435,9.20435,0,0,1-18.4087,0v-5.52978a3.5,3.5,0,0,0-7,0v5.52978A16.22078,16.22078,0,0,0,225.52979,181.83984Zm-15.71827,19.30567a36.93967,36.93967,0,0,0,15.72022,3.53662h.11035a36.94788,36.94788,0,0,0,15.606-3.53662,3.5001,3.5001,0,0,0-2.99707-6.32617,29.8943,29.8943,0,0,1-12.63037,2.86279h-.08936a29.89042,29.89042,0,0,1-12.72217-2.86279,3.50021,3.50021,0,0,0-2.99756,6.32617Z"/>
                                    </svg>
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

                <main class="flex flex-col flex-1 bg-gray-800">
                    <?= $content ?> 
                </main>
            </div>
        </div>
    </body>
</html>