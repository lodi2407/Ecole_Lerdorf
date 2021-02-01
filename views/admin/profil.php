<div class="container-fluid">
    <div class="row">
        <form method="POST" action="/profil/update" class="col-md-4 offset-md-4">
            <div class="form-group">
                <label for="login">Login</label>
                <input type="text" class="form-control" name="login" aria-describedby="emailHelp" value="<?= $_SESSION['user']['nom_user']; ?>">
            </div>
            <div class="form-group">
                <label for="mdp">Nouveau mot de passe</label>
                <input type="password" class="form-control" name="mdp" value="">
                <small class="form-text text-muted">Si pas de nouveau mot de passe entré, l'actuel est conservé</small>
            </div>
            <div class="form-group">
                <label for="confirmNewMdp">Confirmation du nouveau mot de passe</label>
                <input type="password" class="form-control" name="confirmNewMdp" value="">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" value="<?= $_SESSION['user']['email_user']; ?>">
            </div>
            <button type="submit" class="btn btn-primary" <?= $_SESSION['user']['nom_user'] == 'invite' ? 'disabled style="cursor: not-allowed"' : '' ?>>Enregistrer</button>
        </form>
    </div>
</div>