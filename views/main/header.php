<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="/pages">Ecole Lerdorf</a>
        <button class="navbar-toggler navbar-toggler-right" 
                type="button" 
                data-toggle="collapse" 
                data-target="#navbarResponsive" 
                aria-controls="navbarResponsive" 
                aria-expanded="false" 
                aria-label="Toggle navigation">
                Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/pages/articles">Actualités</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" 
                       href="/pages/periscolaire" 
                       id="navbarDropdown" 
                       role="button" 
                       data-toggle="dropdown" 
                       aria-haspopup="true" 
                       aria-expanded="false">Périscolaire</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a id="item1" class="dropdown-item" href="/pages/cantine">Cantine</a>
                        <a id="item2" class="dropdown-item" href="/pages/tap">TAP</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" 
                       href="#" 
                       id="navbarDropdown" 
                       role="button" 
                       data-toggle="dropdown" 
                       aria-haspopup="true" 
                       aria-expanded="false">L'école</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a id="item1" class="dropdown-item" href="/pages/classes">Les classes</a>
                        <a id="item2" class="dropdown-item" href="/pages/reglementInterieur">Règlement intérieur</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pages/infosPratiques">Infos pratiques</a>
                </li>
                <?php if (isset($_SESSION['user'])) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/profil">Profil</a>
                    </li>
                <?php endif; ?>
            </ul>

            <?php if (isset($_SESSION['user'])) : ?>
                <form class="form-inline" action="/user/logout" method="POST">
                    <button type="submit" class="btn btn-outline-light" id="btnDeconnexion">Déconnexion</button>
                </form>
            <?php else : ?>
                <form class="form-inline">
                    <a href="/connexion" id="btnConnexion" type="button" class="btn btn-outline-light">Connexion</a>
                </form>
            <?php endif; ?>
        </div>
    </div>
</nav>

<!-- Header -->
<header class="masthead" style="background-image: url(<?= $image ?? '' ?>); max-height: 600px">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1><?= $titre ?></h1>
                    <span class="subheading font-italic"><?= $subHeading ?? '' ?></span>
                </div>
            </div>
        </div>
    </div>
</header>