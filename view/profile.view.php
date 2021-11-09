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
$size = ($data['personalData']->getSize() === "" || $data['personalData']->getSize() === null ? '': $data['personalData']->getSize() . " cm");
$weight = ($data['personalData']->getWeight() === "" || $data['personalData']->getWeight() === null ? '': $data['personalData']->getWeight() . " Kg");
$sizeNeck = ($data['personalData']->getSizeNeck() === "" || $data['personalData']->getSizeNeck() === null ? '': $data['personalData']->getSizeNeck() . " cm");
$sizeStomach = ($data['personalData']->getSizeStomach() === "" || $data['personalData']->getSizeStomach() === null ? '': $data['personalData']->getSizeStomach() . " cm");
$sizeHaunch = ($data['personalData']->getSizeHaunch() === "" || $data['personalData']->getSizeHaunch() === null? '': $data['personalData']->getSizeHaunch() . " cm");
?>

<div id="profileDiv">
    <h2>Vos informations</h2>
    <div id="personalDiv">
        <div>Nom: <span id="lastnameSpan"><?= $data['personalData']->getLastname() ?></span></div>
        <div>Prénom: <span id="firstnameSpan"><?= $data['personalData']->getfirstname() ?></span></div>
        <div>Age: <span id="birthdaySpan"><?= $birthday ?></span></div>
        <div>Sex: <span id="sexSpan"><?= $sex ?></span></div>
    </div>
    <div id="physicalDiv">
        <div>Taille: <span id="sizeSpan"><?= $size ?></span></div>
        <div>Poids: <span id="weightSpan"><?= $weight ?></span></div>
        <div>Tour de cou: <span id="sizeNeckSpan"><?= $sizeNeck ?></span></div>
        <div>Tour de ventre: <span id="sizeStomachSpan"><?= $sizeStomach ?></span></div>
        <div>Tour de hanche : <span id="sizeHaunchSpan"><?= $sizeHaunch ?></span><br>(Femme uniquement)</div>
    </div>
    <button id="updateProfile" data-idUser="<?= $_SESSION['id'] ?>">Mettre à jour</button>
    <button class="buttonA"><a href="index.php?controller=user&action=logout">Se déconnecter</a></button>
</div>
