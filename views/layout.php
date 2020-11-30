<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= SCRIPTS.'css'.DIRECTORY_SEPARATOR.'main.css' ?>">
    <title><?= APP_NAME ?></title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/php_mvc/"><?= APP_NAME ?></a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/php_mvc/">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/php_mvc/posts">Articles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/php_mvc/admin/posts">Admin</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <?php if(isset($_SESSION['auth'])): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/php_mvc/logout">Se déconnecter</a>
                    </li>
                <?php endif ?>
            </ul>
        </div>
    </nav>
    <div class="container">
        <?= $content ?> 
    </div>
</body>
</html>