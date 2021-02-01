<h1 class="text-center">Modifier l'article "<?= $article['titre_article'] ?>"</h1>

<div class="container">
    <p>
        <a href="/article/index/<?= $article['num_article'] ?>">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-bar-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5zM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5z"/>
            </svg>
            Retour article
        </a>
    </p>
    <p>
        <a href="/pages/articles">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-bar-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5zM10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5z"/>
            </svg>
            Retour liste des articles
        </a>
    </p>
    <form method="post" action="" enctype="multipart/form-data"> 
        <div class="form-group col-5">
            <label for="titre">Titre</label>
            <input type="text" class="form-control" name="titre" aria-describedby="" placeholder="" value="<?= $article['titre_article'] ?>" required>
        </div>
        <div class="form-group col-5">
            <label for="date">Date</label>
            <input type="date" class="form-control" name="date" aria-describedby="" placeholder="" value="<?= $article['date_article'] ?>" required>
        </div>
        <div class="form-group col-10">
            <label for="contenu">Contenu</label>
            <input type="hidden" class="form-control" id="inputHidden" name="contenu" value="<?= $article['contenu_article'] ?>">
            <textarea type="text" class="form-control" id="txtarea" name="contenu" aria-describedby="" placeholder="" rows="8" required></textarea>
        </div>
        <div class="form-group col-2">
            <label for="theme">Thème</label>
            <p>1 = informations<br>2 = activités</p> 
            <select class="form-control" id="theme" name="theme">
                <?php foreach($themeArticle as $codeTheme) : ?>
                    <option <?=($article['code_themeArticles'] == $codeTheme['code_themeArticles']) ? 'selected' : '';  ?>>
                        <?= $codeTheme['code_themeArticles'] ?>
                    </option>
                <?php endforeach; ?>    
            </select>
        </div>
        <div class="form-group col-10">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <span>Ajouter une image : </span>
                        <label for="inputImage">
                            <a type="button">
                                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-folder-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M9.828 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91H9v1H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181L15.546 8H14.54l.265-2.91A1 1 0 0 0 13.81 4H9.828zm-2.95-1.707L7.587 3H2.19c-.24 0-.47.042-.684.12L1.5 2.98a1 1 0 0 1 1-.98h3.672a1 1 0 0 1 .707.293z"/>
                                    <path fill-rule="evenodd" d="M13.5 10a.5.5 0 0 1 .5.5V12h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V13h-1.5a.5.5 0 0 1 0-1H13v-1.5a.5.5 0 0 1 .5-.5z"/>
                                </svg>
                            </a>
                        </label>
                    </div>
                    <div class="col-md-7">
                        <span>Aperçu de l'image :</span>
                        <input type="hidden" name="MAX_FILE_SIZE" value="550000" />
                        <input type="file" name="image" id="inputImage" accept="image/png, image/jpeg" size="50">
                        
                        <div>
                            <?php if($article['lienImage_article']) { ?>
                                <img src="<?= $article['lienImage_article'] ? '/pictures/articles/' . $article['lienImage_article'] : '' ?>" alt="" id="imgBdd" style="width: 300px;">
                            <?php } ?>
                            <img src="" alt="" id="img" style="width: 300px;">
                            <span class="text-secondary font-italic text-center" id="noImage">Aucune image sélectionnée</span>
                        </div> 
                    </div>
                    <div class="col-md-1" id="deleteImage">
                        <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-x-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                            <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-secondary" <?= $_SESSION['user']['nom_user'] == 'invite' ? 'disabled style="cursor: not-allowed"' : '' ?>>Enregistrer</button>
        </div>
    </form>
</div>