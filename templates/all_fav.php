<?php include __DIR__ . "/header.php"; ?>

<h1 class="text-center text-black">Tous les favoris</h1>
<br>
<?php
include __DIR__ . '/../src/entity/Annonce_db.php';


foreach($_SESSION["favoris"] as $mon_adfav){
$entry = Annonce_db::retrieveByPK($mon_adfav);
echo $entry->titre. " ";

echo $mon_adfav . "<hr> ";

}

?>

<?php include __DIR__ . "/footer.php";
