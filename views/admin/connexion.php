<div class="container">
    <form action="user/connexionSession" method="POST">
        <?php if (!empty($_SESSION['erreur'])) : ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_SESSION['erreur'];
                unset($_SESSION['erreur']); ?>
            </div>
        <?php endif; ?>

        <?php if(isset($_SESSION['user'])) : ?>

            <div class="alert alert-success" role="alert">
                Connexion réussie !
            </div>
        
        <?php else : ?>

        <div class="row">
            <div class="col-md-4 form-group offset-md-3">
                <label for="loginuser">Login</label>
                <input type="text" class="form-control" name="loginuser" placeholder="Login">
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 form-group offset-md-3">
                <label for="mdp">Mot de passe</label>
                <input type="password" class="form-control" name="mdp" placeholder="Mot de passe">
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 form-group offset-md-3">
                <button type="submit" class="btn btn-primary">Connexion</button>
            </div>
        </div>
    </form>
    <form method="post" action="user/connexionInvite" id="form-invite">
        <div class="row">
            <div class="col-md-4 form-group offset-md-3">
                <button type="submit" class="btn btn-success" title="Voir les actions possibles en tant qu'administrateur">Session invité</button>
            </div>
        </div>
    </form>
</div>
<?php endif; ?>