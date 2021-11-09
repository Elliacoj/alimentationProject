<?php
if(!isset($_SESSION['id'])) {
    $title = "Connection";
    $class = "fas fa-sign-in-alt";
}
else {
    $title = "Profil";
    $class = "fas fa-id-card";
}
?>
<div id="menuDiv">
    <div id="homeDiv" title="Accueil"><a href="index.php"><i class="fas fa-home"></i></a></div>
    <div id="foodDiv" title="Alimentation"><a href="index.php?controller=homePage&action=foodPage"><i class="fas fa-utensils"></i></a></div>
    <div id="trainingDiv" title="Entrainement"><a href=""><i class="fas fa-running"></i></a></div>
    <div id="loginDiv" title="<?= $title ?>"><a href="index.php?controller=user"><i class="<?= $class ?>"></i></a></div>
</div>