<?php
/*if($data['personalData']->getBirthday() !== null) {
    $dateB = new DateTime();
    $date = new DateTime($data['personalData']->getBirthday());
    $date = $date->diff($dateB);
    $birthday = $date->format('%R%a years');
}
else {*/
    $birthday = "";
/*}*/

if($data['personalData']->getSex() === 0) {
    $sex = "H";
}
else {
    $sex = "F";
}
?>
<div id="profileDiv">
    <h2>Vos informations</h2>
    <div id="personalDiv">
        <div>Nom: <span><?= $data['personalData']->getLastname() ?></span></div>
        <div>Prénom: <span><?= $data['personalData']->getfirstname() ?></span></div>
        <div>Age: <span><?= $birthday ?></span></div>
        <div>Sex: <span><?= $sex ?></span></div>
    </div>
    <div id="physicalDiv">
        <div>Taille: <span><?= $data['personalData']->getLastname() ?></span></div>
        <div>Poids: <span><?= $data['personalData']->getLastname() ?></span></div>
        <div>Tour de cou: <span><?= $data['personalData']->getLastname() ?></span></div>
        <div>Tour de ventre: <span><?= $data['personalData']->getLastname() ?></span></div>
    </div>
    <button>Mettre à jour</button>
    <button>Se déconnecter</button>
</div>
