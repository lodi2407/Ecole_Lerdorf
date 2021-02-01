<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/pages">Ecole Lerdorf</a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/pages/articles">Actualités</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/pages/periscolaire" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Périscolaire</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a id="item1" class="item dropdown-item" href="/pages/cantine">Cantine</a>
                    <a id="item2" class="dropdown-item" href="/pages/tap">TAP</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/pages">Conseil d'école</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/pages/infosPratiques">Infos pratiques</a>
            </li>
            <?php if (isset($_SESSION['user'])) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="profil">Profil</a>
                </li>
            <?php endif; ?>

        </ul>
    </div>

    <?php if (isset($_SESSION['user'])) : ?>
        <form class="form-inline" action="/user/logout" method="POST">
            <button type="submit" class="btn btn-outline-light">Déconnexion</button>
        </form>
    <?php else : ?>
        <form class="form-inline">
            <button class="btn btn-outline-light">
                <a href="/connexion">Connexion</a>
            </button>
        </form>
    <?php endif; ?>
</nav>