<?php
if($data['personalData']->getBirthday() !== null) {
    $dateB = new DateTime();
    $date = new DateTime($data['personalData']->getBirthday());
    $date = $dateB->diff($date);
    $birthday = $date->format("%Y ans");
}
else {
    $birthday = "";
}

$sex = ($data['personalData']->getSex() === 0 ? 'H':"F");
$size = (is_null($data['personalData']->getSize()) ? '': $data['personalData']->getSize() . " cm");
$weight = (is_null($data['personalData']->getWeight()) ? '': $data['personalData']->getWeight() . " Kg");
$sizeNeck = (is_null($data['personalData']->getSizeNeck()) ? '': $data['personalData']->getSizeNeck() . " cm");
$sizeStomach = (is_null($data['personalData']->getSizeStomach()) ? '': $data['personalData']->getSizeStomach() . " cm");

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
        <div>Taille: <span><?= $size ?></span></div>
        <div>Poids: <span><?= $weight ?></span></div>
        <div>Tour de cou: <span><?= $sizeNeck ?></span></div>
        <div>Tour de ventre: <span><?= $sizeStomach ?></span></div>
    </div>
    <button id="updateProfile">Mettre à jour</button>
    <button>Se déconnecter</button>
</div>
