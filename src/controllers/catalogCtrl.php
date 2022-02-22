<?php

include __DIR__ . '/../entity/Annonce_db.php'; // afficher listes de toutes les annonces

$entry = Annonce_db::all();

include __DIR__ . '/../../templates/catalog.php';