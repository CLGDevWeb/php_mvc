<h1>Se connecter</h1>

<form action="/php_mvc/login" method="POST">

    <div class="form-group">
        <label for="username">Nom d'utilisateur</label>
        <input name="username" id="username" type="text" class="form-control" value="<?= $params['post']->username ?? '' ?>">
    </div>

    <div class="form-group">
        <label for="password">Mot de passe</label>
        <input name="password" id="username" type="password" class="form-control" value="<?= $params['post']->password ?? '' ?>">
    </div>

    <button type="submit" class="btn btn-success float-right">
        Se connecter
    </button>

</form>