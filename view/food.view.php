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
    <div class="subDivFood">
        <h3>Données corporelles actuelles</h3>
        <div>Pourcentage de masse graisseuse: <span><?= $fatMass ?></span></div>
        <div>Indice de masse corporelle: <span><?= $imc ?></span></div>
    </div>

    <div class="subDivFood">
        <h3>Régularisation des Kcalories</h3>
        <div>
            <div class="divKcal">
                <div>
                    <p>Ajouter/modifier des/les kcalories pour ajd.</p>
                </div>

                <div>
                    <p>Choix du mois</p>
                </div>
            </div>

            <div class="divKcal">
                <div>
                    <button id="buttonAddKcal">Ajouter</button>
                </div>
                <div>
                    <select name="" id="">
                        <option value="01/2021">Janvier 2021</option>
                    </select>
                </div>
            </div>

        </div>
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Kcal absorbées</th>
                    <th>Kcal dépensées</th>
                    <th>Différences</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>23/11/2021</td>
                    <td>1300</td>
                    <td>2300</td>
                    <td>- 1000</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="subDivFood">
        <h3 id="statTitle">Statistiques des données corporel</h3>
        <div id="divCanvas"><canvas id="tableStat"></canvas></div>
    </div>
</div>
