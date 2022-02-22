<?php

if (isset($_SERVER['PATH_INFO']) == false ||  ($_SERVER['PATH_INFO'] == "/")) {
    include __DIR__."/../src/controllers/homeCtrl.php";    //page d'accueil-



} else if ($_SERVER['PATH_INFO'] == "/catalog") {      //liste des annonces
    include __DIR__."/../src/controllers/catalogCtrl.php";
} elseif ($_SERVER['PATH_INFO'] == "/add_ad") {     //créer une annonce
    include __DIR__ . "/../src/controllers/adCtrl.php";
    add_ad();

} else if ($_SERVER['PATH_INFO'] == "/added_ad") {     //afficher une annonce
    include __DIR__ . "/../src/controllers/adCtrl.php";
    added_ad();


} else if ($_SERVER['PATH_INFO'] == "/ad") {     //afficher une annonce
    include __DIR__ . "/../src/controllers/adCtrl.php";
    show_ad();


} else if ($_SERVER['PATH_INFO'] == "/delete_ad") {     //supprimer une annonce
    include __DIR__ . "/../src/controllers/deleteCtrl.php";
    delete_ad();
} else if ($_SERVER['PATH_INFO'] == "/deleted_ad") {     //supprimer une annonce
    include __DIR__ . "/../src/controllers/deleteCtrl.php";
    deleted_ad();


} elseif ($_SERVER['PATH_INFO'] == "/edit_ad") {     //modifier une annonce
    include __DIR__ . "/../src/controllers/adCtrl.php";
    edit_ad(); 
} elseif ($_SERVER['PATH_INFO'] == "/edited_ad") {     //modifier une annonce
    include __DIR__ . "/../src/controllers/adCtrl.php";
    edited_ad();


} else if ($_SERVER['PATH_INFO'] == "/add_fav") {     //ajouter aux fav
    include __DIR__ . "/../src/controllers/favCtrl.php";
    add_fav();
} else if ($_SERVER['PATH_INFO'] == "/all_fav") {        //afficher tous les fav
    include __DIR__ . "/../src/controllers/favCtrl.php";
    all_fav();
} else if ($_SERVER['PATH_INFO'] == "/delete_fav") {        //suppr un fav
    include __DIR__ . "/../src/controllers/favCtrl.php";
    del_fav();
} else {
 echo "erreur";
}