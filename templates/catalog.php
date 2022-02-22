<?php include __DIR__ . "/header.php"; ?>
<h1 class="text-center text-black">Toutes les annonces</h1>
<br>



<?php foreach ($entry as $mon_ad) : ?>
    <div class='liste_ad_site'>
        <a class='liste_ad' href='/ad?id=<?= $mon_ad->id ?>'> <?= $mon_ad->titre ?></a>
        <a class='liste_ad' href='/edit_ad?id=<?= $mon_ad->id ?>'><i class="fa fa-pen-square edit_fav"></i></a>
        <a class='liste_ad' href='/add_fav?id=<?= $mon_ad->id ?>'> <i class="fa fa-heart add_fav"></i></a>
        <a class='liste_ad' href='/delete_ad?id=<?=$mon_ad->id?>'><i class="fa fa-trash del_fav"></i></a>  
    </div>
<?php endforeach; ?>
<?php include __DIR__ . "/footer.php";
