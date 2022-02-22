<?php include __DIR__ . "/header.php"; ?>
<?php
// $titre->titre = $_POST['titre'];
// $message->message = $_POST['message'];
// $id = $_POST['id'];

// include __DIR__ . '/../src/entity/Annonce_db.php';

// $entry = Annonce_db::retrieveByPK($_POST['id']);

// $entry->delete();
?>

<br>
<h2 class="text-center text-black">Votre annonce a bien été supprimée !</h2>
<div class='text-center text-black' style="margin:20px;">
    <button type="button" class="btn btn-primary" style="text-decoration: none;"><a href="/" style="text-decoration: none; color:white;">Aller à la page d'accueil</a></button>
    <button type="button" class="btn btn-success" style="text-decoration: none;"><a href="/add_ad" style="text-decoration: none; color:white;">Ajouter une nouvelle annonce</a></button>

    <button type="button" class="btn btn-secondary" style="text-decoration: none;"><a href="/catalog" style="text-decoration: none; color:white;">Retourner à la liste des annonces</a></button>

</div>
<br>


<?php include __DIR__ . "/footer.php"; ?>