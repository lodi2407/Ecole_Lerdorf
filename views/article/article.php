<div class="container">
    <p>
        <a href="/pages/articles" id="allArticles">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-bar-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5zM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5z" />
            </svg>
            <span>Tous les articles</span>
        </a>
    </p>
    <?php if (isset($_SESSION['user']) && ($_SESSION['user']['nom_user'] === 'admin' || 'enseignants')) : ?>
        <p class="text-right addArticle">
            <a href="/article/ajouter" class="btn btn-success">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                    <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                </svg>
                Ajouter un article
            </a>
        </p>
    <?php endif; ?>

    <div class="row">
        <table class="tableArticles mb-3 mx-auto text-justify <?= (isset($_SESSION['user']) && ($_SESSION['user']['nom_user'] === 'Administrateur' || 'enseignants')) ? 'col-lg-10 col-md-11' : 'col-lg-8 col-md-10' ?>">
            <tr>
                <td>
                    <p class="card-text"><?= $article['contenu_article']; ?></p>
                    <p class="card-text text-right"><?= $article['auteur_article']; ?></p>
                    <p class="card-text text-right"><small class="text-muted"><?= $article['date_article']; ?></small></p>
                </td>
                <?php if (isset($_SESSION['user']) && ($_SESSION['user']['nom_user'] === 'admin' || 'enseignants')) : ?>
                    <td class="thUpDel text-right" valign="top">
                        <div class=" mb-3 upDelArticle">
                            <a href="/article/modifier/<?= $article['num_article'] ?>" class="btn btn-primary">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg>
                                <span>Modifier l'article</span>
                            </a>
                            <a href="#" data-toggle="modal" data-target="#suppr<?= $article['num_article'] ?>" class="btn btn-danger">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                </svg>
                                <span>Supprimer l'article</span>
                            </a>
                        </div>
                        <div class="modal fade" tabindex="-1" role="dialog" id="suppr<?= $article['num_article'] ?>">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Confirmation</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Êtes-vous sûr de vouloir supprimer l'article ?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="<?= $_SESSION['user']['nom_user'] == 'invite' ? '' : '/article/supprimer/' . $article['num_article'] ?>" type="button" class="btn btn-success">Oui</a>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Non</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                <?php endif; ?>
            </tr>
        </table>
    </div>
</div>