<?php include __DIR__ . "/header.php"; ?>

<h1 class="text-center text-black">Modifier une annonce</h1>

<?php
// $id = $_GET['id'];

require(__DIR__ . "/../src/entity/Annonce_db.php");

$entry = Annonce_db::retrieveByPK($_GET['id']);

?>

<div class="form_center">
    <form class="form_create" method="POST" action="/edited_ad">
        <br>
        <input type="hidden" name="id" value=<?= $entry->id ?>>
        <label for="titre" class="form-label">Entrer le titre de l'annonce à modifier: </label>
        <input type="text" name="titre" placeholder="<?= $entry->titre ?>" maxlength="50" class="form-control" style="width:40%">
        <br>

        <label for="message" class="form-label">Entrer le message de l'annonce à modifier: </label>
        <input type="text" name="message" placeholder="<?= $entry->message ?>" maxlength="300" class="form-control" style="width:75%" rows="6">
        <br>
        <button type="submit" class="btn btn-secondary">Modifier mon annonce</button>
        <br><br>
    </form>
</div>

<?php include __DIR__ . "/footer.php"; ?>

<!-- il faut corriger le code pour qu'on puisse modifier le titre et conserver le msg et vice versa. Pour que ca fonctionne il faut modifier les 2 sinon ca crée une erreur-->