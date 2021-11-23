<?php
use Amaur\App\manager\PersonalDataManager;

if($data['personalData']->getSizeNeck()!== "" && $data['personalData']->getSize()!== "" && $data['personalData']->getSizeStomach()!== "") {
    if($data['personalData']->getSex() === 0) {
        $fatMass = round(86.010 * log10($data['personalData']->getSizeStomach() - $data['personalData']->getSizeNeck()) - 70.041 * log10($data['personalData']->getSize()) + 30.30, 2) . " %";
    }
    else if($data['personalData']->getSizeHaunch()!== "" && $data['personalData']->getSex() === 1) {
        $fatMass = round(163.205 * log10($data['personalData']->getSizeStomach() + $data['personalData']->getSizeHaunch() - $data['personalData']->getSizeNeck()) - 97.684 * log10($data['personalData']->getSize()) - 104.912, 2) . " %";
    }
    else {
        $fatMass = '<a href="index.php?controller=user">Compléter votre profil</a>';
    }
}
else {
    $fatMass = '<a href="index.php?controller=user">Compléter votre profil</a>';
}

if($data['personalData']->getSize()!== "" && $data['personalData']->getWeight()!== "") {
    $imc = round($data['personalData']->getWeight() / (($data['personalData']->getSize() / 100) * ($data['personalData']->getSize() / 100)), 2);
}
else {
    $imc = '<a href="index.php?controller=user">Compléter votre profil</a>';
}

$allPersonalData = PersonalDataManager::get();

?>
<div id="foodPageDiv">
    <h2>Alimentation</h2>
    <div>
        <h3>Données corporelles actuelles</h3>
        <div>Pourcentage de masse graisseuse: <span><?= $fatMass ?></span></div>
        <div>Indice de masse corporelle: <span><?= $imc ?></span></div>
    </div>

    <div>
        <h3>Statistiques des données corporel</h3>
        <canvas id="tableStat"></canvas>
    </div>
</div>
