<?php include __DIR__ . "/header.php"; ?>

<h1 class="text-center text-black"> Annonce n°<?= $_GET['id'] ?> </h1>
<br>
<?php include __DIR__ . "/../src/entity/Annonce_db.php";
$entry = Annonce_db::retrieveByPK($_GET['id']);
?>

<div class="form_center" >
    <form class="form_create text-center" action="/catalog">
        <br>
        <label for="titre" class="form-label">Titre de l'annonce: </label>
        <h2> <?= $entry->titre ?> </h2>
        <br>

        <label for="message" class="form-label">Message de cette annonce: </label>
        <h3> <?= $entry->message ?> </h3>

        <br>
        <button type="submit" class="btn btn-secondary">Retourner aux autres annonces</button>
        <br><br>
    </form>
</div>

<?php include __DIR__ . "/footer.php"; ?>