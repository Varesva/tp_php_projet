<?php
// supprimer une annonce
function delete_ad()
{
    include __DIR__ . '/../../templates/delete_ad.php';
}

function deleted_ad()
{
    // $titre->titre = $_POST['titre'];
    // $message->message = $_POST['message'];
    // $id = $_POST['id'];
    // include __DIR__ . '/../src/entity/Annonce_db.php';


    // $entry = Annonce_db::retrieveByPK($_POST['id']);

    // $entry->delete();

    include __DIR__ . '/../../templates/deleted_ad.php';
}

