<?php include __DIR__ . "/header.php"; ?>
<br>
<?php if (isset($erreur_titre)) echo $erreur_titre; ?>
<?php if (isset($erreur_message)) echo $erreur_message; ?>
<h1 class="text-center text-black">Créer une annonce</h1>

<div class="form_center">
    <form class="form_create" method="POST" action="/added_ad">
        <br>
        <label for="titre" class="form-label">Entrer le titre de l'annonce à créer: </label>
        <input type="text" name="titre" placeholder="Vélo BMX neuf" required maxlength="50" class="form-control" style="width:40%">
        <br>

        <label for="message" class="form-label">Entrer le message de l'annonce à créer: </label>
        <input type="text" name="message" placeholder="Renseignez votre message ici.." required maxlength="300" class="form-control" style="width:75%" rows="6">
        <br>
        <button type="submit" class="btn btn-secondary">Créer mon annonce</button>
        <br><br>
    </form>
</div>

<?php include __DIR__ . "/footer.php"; ?>