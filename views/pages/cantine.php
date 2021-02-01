<div class="container">
  <div class="row">
    <h2 class="col-md-12 text-center schoolCafeteriaTitle">Tarifs et règlement</h2>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="card-body">
        <table id="tableauCantine">
          <tr>
            <th class="text-center">Tarif</th>
            <th class="text-center">Description</th>
          </tr>
          <?php foreach ($tarifCantine as $tarif) : ?>
            <tr>
              <td class="text-center"><?= $tarif['tarif']; ?>€</td>
              <td><?= $tarif['libelle']; ?> <?= $tarif['description_tarif']; ?></td>
            </tr>
          <?php endforeach; ?>
        </table>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card-body">
        <p class="card-text">Pour régler vos factures en ligne s'adresser à la mairie.</p>

        <p class="text-justify">Vous pouvez également opter pour le prélèvement automatique, en complétant le document joint au
          formulaire d'inscription, déposez le à l'école ou à la mairie accompagné d'un RIB.</p>
        <small class="text-muted">Inscription : demander un formulaire d'inscription à la cantine de l'école ou à la mairie.</small>
      </div>
    </div>
  </div>

  <div class="row">
    <h2 class="col-md-12 text-center schoolCafeteriaTitle">Informations</h2>
    <div id="menuCantine">
      <a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
          <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
          <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
        </svg>
        <span>Télécharger le menu de la cantine</span>
      </a>
    </div>

    <div class="card-deck informations">
      <div class="card border-secondary">
        <div class="card-body">
          <h5 class="card-title">Allergies</h5>
          <p class="card-text">La ville accueille dans ses services (restaurants scolaires, périscolaires et centres de loisirs) des enfants dont l’état de santé nécessite un régime alimentaire particulier. Un contrat est alors passé entre la Ville et la famille après avis médical.</p>
          <p>L’ensemble des dossiers est également transmis au médecin de santé scolaire qui émet des recommandations. Si les allergies ou les pathologies sont sévères, les parents s’engagent à fournir un panier-repas complet et s’acquittent d’un tarif spécifique pour l’encadrement. S’il s’agit d’allergies plus légères, les parents fournissent alors des denrées de substitution.</p>
        </div>
      </div>

      <div class="card border-secondary">
        <div class="card-body">
          <h5 class="card-title">Le service de restauration scolaire, acteur de santé publique</h5>
          <p class="card-text">Le service de restauration scolaire mène une politique d’éducation nutritionnelle en lien avec les priorités nationales définies par le PNA (Programme national pour l’alimentation) dont les axes de travail sont :
          <ul>
            <li>favoriser l’accès à tous à une alimentation de qualité,</li>
            <li>améliorer l’offre alimentaire avec la mise en place de circuits courts et locaux,</li>
            <li>améliorer notamment auprès de la jeunesse au centre de ce dispositif, la connaissance et l’information sur l’alimentation,</li>
            <li>promouvoir le patrimoine alimentaire et culinaire.</li>
          </ul>
          </p>
        </div>
      </div>

      <div class="card border-secondary">
        <div class="card-body">
          <h5 class="card-title">Des matières premières de qualité pour une restauration responsable</h5>
          <p class="card-text">La politique des achats alimentaires mise en place valorise les produits frais qui sont ensuite travaillés et transformés en cuisine. Un soin rigoureux est apporté au choix des denrées pour leur qualité gustative et nutritionnelle. La saisonnalité des fruits et légumes est également respectée. Les « préparations maison » de l’entrée au dessert sont proposées quotidiennement car elles permettent non seulement de valoriser les savoir-faire des cuisiniers, mais sont également garantes d’une belle qualité gustative des plats proposés et les retours de satisfaction des convives le prouvent au quotidien. Le repas pris au restaurant scolaire doit en effet contribuer au bien-être et au plaisir du petit convive.</p>
        </div>
      </div>
    </div>
  </div>
</div>