<div class="container">
    <div class="row mb-3 col-lg-10 col-md-11 mx-auto text-justify">
        <h2 class="section-heading heading-ecole col-md-12">Notre École</h2>
        <p class="text-justify">
            L'école Lerdorf comprend dans un vaste espace paysagé une école maternelle et une école primaire 
            qui regroupent 10 classes et plus de 250 élèves. Les enfants sont acceptés à partir de 2 ans et demi 
            dans une structure maternelle dotée d’un encadrement bienveillant permettant aux enfants de démarrer leur 
            scolarité de façon progressive, en fonction de leurs besoins.
        </p>
        <p>
            A l’école primaire, nous proposons aux élèves, au-delà du respect des programmes de l’éducation nationale, 
            de s’ouvrir aux arts, au sport et aux découvertes du patrimoine local dans un espace moderne et bien équipé. 
            Nous accueillons tous les élèves, dans le respect de notre projet d’établissement.
        </p>
    </div>
    
    <div class="row mb-3 col-lg-10 col-md-11 mx-auto">
        <h2 class="section-heading col-md-12">Les actualités du moment</h2>
        <div class="card-deck">
            <?php   
                foreach($articles as $article) :
            ?>
            <div class="card">
                <img src="../pictures/articles/<?= $article['lienImage_article'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="/article/index/<?= $article['num_article'] ?>">
                        <h5 class="card-title"><?= $article['titre_article']; ?></h5>
                    </a>
                    <p class="card-text"><?= $article['contenu_article']; ?>... <br>
                        <a href="/article/index/<?= $article['num_article'] ?>">Lire la suite</a>
                    </p>
                    <p class="card-text">
                        <small class="text-muted"><?= $article['date_article']; ?></small>
                    </p>
                </div>
            </div>
            <?php
                endforeach;
            ?>
        </div>
        <a href="/pages/articles">
            <p id="allArticles">> Voir tous les articles</p>
        </a>
    </div> 

    <div class="row mb-3 col-lg-10 col-md-11 mx-auto">
        <h2 class="section-heading col-md-12">Inscrivez-vous à la newsletter</h2>  
        <p>Inscrivezvous à la lettre d'informations de l'école Lerdorf.
            <br>Entrez votre courriel et recevez régulièrement l'essentiel de la vie de vos enfants dans notre établissement.
        </p>   
        <form method="POST" id="newsForm">
            <div class="form-group">
                <input type="text" name="nom" class="newsField col-md-10 offset-md-1" id="newsName" placeholder="Nom">
                <input type="text" name="prenom" class="newsField col-md-10 offset-md-1" id="newsFirstName" placeholder="Prénom">
                <input type="email" name="email" class="newsField col-md-10 offset-md-1" id="newsMail" placeholder="Email" required>
            </div>
            
            <button type="submit" class="btn btn-secondary col-md-2 offset-md-5" id="newsButton">Valider</button>
        </form>   
    </div>

    <div class="row mb-2 col-lg-10 col-md-11 mx-auto">
        <h2 class="section-heading heading-galerie col-md-12">Galerie photos</h2>
    </div>
    <div class="row mb-3 col-lg-10 col-md-11 mx-auto">
        <div class="carousel">
            <img src="../pictures/home/carousel/1.jpg" alt="">
            <img src="../pictures/home/carousel/2.jpg" alt="">
            <img src="../pictures/home/carousel/3.jpg" alt="">
            <img src="../pictures/home/carousel/4.jpg" alt="">
            <img src="../pictures/home/carousel/6.jpg" alt="">
            <img src="../pictures/home/carousel/7.jpg" alt="">
            <img src="../pictures/home/carousel/8.jpg" alt="">
            <img src="../pictures/home/carousel/9.jpg" alt="">
            <img src="../pictures/home/carousel/10.jpg" alt="">
            <img src="../pictures/home/carousel/11.jpg" alt="">
        </div>
    </div>
</div>