<div class="loginForm">
    <h2>Connection</h2>
    <form action="index.php?controller=user&action=login" method="POST">
        <div>
            <label for="loginMail">Adresse mail:</label>
            <input type="text" id="loginMail" name="loginMail" title="Votre adresse mail" required>
        </div>
        <div>
            <label for="loginPassword">Mot de passe:</label>
            <input type="password" id="loginPassword" name="loginPassword" title="Votre mot de passe" required>
        </div>
        <input class="buttonSubmit" type="submit" value="Connection">
        <p><a href="index.php?controller=user&action=createPage">Pas encore de compte? Créé le ici.</a></p>
    </form>
</div>