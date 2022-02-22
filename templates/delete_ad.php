<?php include __DIR__ . "/header.php"; ?>

<?php
include __DIR__ . '/../src/entity/Annonce_db.php';

$id = $_GET['id'];
$entry = Annonce_db::retrieveByPK($_GET['id']);
$entry->delete();

?>

<h1 class="text-center text-black"> Confirmer la suppression de l'annonce n°<?= $id ?> ? </h1>
<br>

<div class="form_center">
    <form class="form_create text-center" method="POST " action="/deleted_ad">
        <br>
        <label for="titre" class="form-label">Titre de l'annonce: </label>
        <h2> <?= $entry->titre ?> </h2>
        <br>

        <label for="message" class="form-label">Message de cette annonce: </label>
        <h3> <?= $entry->message ?> </h3>
        <button type="submit" class="btn btn-outline-danger" style="margin: 10px; font-size:20px; font-weight:600;">Je veux supprimer cette annonce</button>
        <br>
        <br>
    </form>
</div>

<?php include __DIR__ . "/footer.php"; ?>