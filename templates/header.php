<?php session_start();
require __DIR__.'/function.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://localhost:3000/css/style.css">
    <script src="https://kit.fontawesome.com/cc3cbf0ed7.js" crossorigin="anonymous"></script>
    <title>TP PHP PROJET</title>
</head>

<body>

    <header>
        <nav class=" navbar navbar-expand-lg navbar-light" style='background-color:#e1cad7;'>
            <div class="container-fluid">
                <a class="navbar-brand titre_site" href="/">TP PHP</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll " style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Accueil</a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/add_ad">Créer une annonce</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/catalog">Toutes les annonces</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="/all_fav" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Mes favoris</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item" href="/catalog">Ajouter un favoris</a></li>
                                <li><a class="dropdown-item" href="/all_fav">Voir mes favoris</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="/all_fav">Supprimer un favoris</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="/catalog" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Mes annonces
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item" href="/add_ad">Créer une annonce</a></li>
                                <li><a class="dropdown-item" href="/catalog">Modifier une annonce</a></li>
                                <li>
                                <li><a class="dropdown-item" href="/catalog">Voir toutes les annonces</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="/catalog">Supprimer une annonce</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Recherche" aria-label="Search" size="35">
                        <button class="btn btn-outline-secondary" type="submit">Rechercher</button>
                    </form>
                </div>
            </div>
        </nav>
        <br>
    </header>