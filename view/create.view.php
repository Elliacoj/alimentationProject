<?php
if(isset($_SESSION['id'])) {
    header("Location : index.php");
}
?>
<div class="loginForm">
    <h2>Inscription</h2>
    <form action="index.php?controller=user&action=create" method="POST">
        <div>
            <label for="createMail">Adresse mail:</label>
            <input type="email" id="createMail" name="createMail" title="Votre adresse mail" required>
        </div>
        <div>
            <label for="createPassword">Mot de passe:</label>
            <input type="password" id="createPassword" name="createPassword" title="Doit contenir: 1 maj, 1 min, 1 chiffre, 1 caract spécific et 8 caractères mini" required>
        </div>
        <div>
            <label for="createCheckPassword">Confirmation du mot de passe:</label>
            <input type="password" id="createCheckPassword" name="createCheckPassword" title="Doit contenir: 1 maj, 1 min, 1 chiffre, 1 caract spécific et 8 caractères mini" required>
        </div>
        <input id="buttonCreate" class="buttonSubmit" type="submit" value="S'inscrire">
        <p><a href="index.php?controller=user">Vous avez déjà un compte? Cliquer ici.</a></p>
    </form>
</div>
