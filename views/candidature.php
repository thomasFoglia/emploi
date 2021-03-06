<?php
if (
  isset($_POST["entreprise"]) &&
  isset($_POST["type"]) &&
  isset($_POST["adresse"]) &&
  isset($_POST["telephone"]) &&
  isset($_POST["mail"]) &&
  isset($_POST["lien_annonce"]) &&
  isset($_POST["commentaire"])
) {
  $id = null;
  $entreprise = $_POST["entreprise"];
  $type = $_POST["type"];
  $adresse = $_POST["adresse"];
  $dateDemande = date('Y-m-d');
  $telephone = $_POST["telephone"];
  $mail = $_POST["mail"];
  $dateRappel = null;
  $commentaire = $_POST["commentaire"];
  $lien_annonce = $_POST["lien_annonce"];
  $reponse =  null;

  $candidature = new BDD($id, $entreprise, $type, $adresse, $dateDemande, $telephone, $mail, $dateRappel, $commentaire, $lien_annonce, $reponse);
  $candidature->save();
  echo "<script type='text/javascript'>document.location.replace('/emploi/?name_added=$entreprise');</script>";
}

?>

<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Tableau de bord</a>
      </li>
      <li class="breadcrumb-item active">Nouvelle candidature</li>
    </ol>
    <div class="row">
      <div class="col-lg-12">
        <div class="container">
          <div class="card-body" style='padding:0 !important;'>
            <form action="" method='post'>
              <div class="form-group" style='margin-bottom:7px !important'>
                <label for="entreprise">Entreprise *</label>
                <input class="form-control" id="entreprise" name="entreprise" type="text" placeholder="Nom de l'entreprise" required>
              </div>
              <div class="form-group" style='margin-bottom:7px !important'>
                <label for="entreprise">Type</label>
                <select class="form-control" id="type" name="type" type="text">
                  <option value=""></option>
                  <option value="Alternance">Alternance</option>
                  <option value="Stage">Stage</option>
                  <option value="Intérim">Intérim</option>
                  <option value="CDD">CDD</option>
                  <option value="CDI">CDI</option>
                </select>
              </div>
              <div class="form-group" style='margin-bottom:7px !important'>
                <label for="adresse">Adresse</label>
                <input class="form-control" id="adresse" name="adresse" type="text" placeholder="Adresse">
              </div>
              <div class="form-group" style='margin-bottom:7px !important'>
                <label for="telephone">Téléphone</label>
                <input class="form-control" id="telephone" name="telephone" type="text" placeholder="Téléphone">
              </div>
              <div class="form-group" style='margin-bottom:7px !important'>
                <label for="mail">Mail</label>
                <input class="form-control" id="mail" name="mail" type="email" placeholder="Mail">
              </div>
              <div class="form-group" style='margin-bottom:7px !important'>
                <label for="lien_annonce">URL vers l'annonce</label>
                <input class="form-control" id="lien_annonce" name="lien_annonce" type="text" placeholder="URL vers l'annonce">
              </div>
              <div class="form-group" style='margin-bottom:7px !important'>
                <label for="lien_annonce">Commentaire</label>
                <input class="form-control" id="commentaire" name="commentaire" type="text" placeholder="Commentaire">
              </div>

              <br>
              <input class="btn btn-primary btn-block" type='submit' value="Ajouter">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
