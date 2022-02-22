<?php 
// créer une annonce
function add_ad()
{
include __DIR__."/../../templates/add_ad.php";
}

function added_ad()
{
    include __DIR__ . '/../entity/Annonce_db.php';

    // Si on a le titre qui est vide ou ...
    // alors on renvoie une vue et on arrette

    if ($_POST['titre'] == "") {
        $erreur_titre = "<br /> - Veuillez indiquer un titre svp";
    }

    if ($_POST['message'] == "") {
        $erreur_message = "<br /> - Veuillez indiquer un message svp";
    }

    if (($_POST['titre'] == "") || ($_POST['message'] == "")) {

        include __DIR__ . '/../../templates/add_ad.php';
        return;
    }

    $entry = new Annonce_db();
    $entry->titre = $_POST['titre'];
    $entry->message = $_POST['message'];
    $entry->save();

    include __DIR__ . '/../../templates/added_ad.php';
}

// modifier une annonce
function edit_ad()
{
    include __DIR__ . '/../../templates/edit_ad.php';
}

function edited_ad()
{

    include __DIR__ . '/../entity/Annonce_db.php';
    
     if (($_POST['titre'] == "") || ($_POST['message'] == "")) {

        include __DIR__ . '/../../templates/edit_ad.php';
        return;
    }
    $titre = $_POST['titre'];
    $message = $_POST['message'];
    $id = $_POST['id'];

    // $titre = $_POST['titre'];
    // $message = $_POST['message'];
    // $id = $_POST['id'];

    $entry = Annonce_db::retrieveByPK($_POST['id']);

    $entry->titre = $_POST['titre'];
    $entry->message = $_POST['message'];
    $entry->save();

    // Afficher la vue
    include __DIR__ . '/../../templates/edited_ad.php';
}



// afficher 1 annonce
function show_ad()
{
    include __DIR__ . '/../../templates/ad.php';
}