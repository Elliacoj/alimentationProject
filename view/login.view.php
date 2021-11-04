<div id="loginForm">
    <h2>Connection</h2>
    <form action="index.php?controller=user&action=login" method="POST">
        <div>
            <label for="loginMail">Adresse mail:</label>
            <input type="text" id="loginMail" name="loginMail" title="Votre adresse mail">
        </div>
        <div>
            <label for="loginPassword">Mot de passe:</label>
            <input type="password" id="loginPassword" name="loginPassword" title="Votre mot de passe">
        </div>
        <input class="buttonSubmit" type="submit" value="Connection">
        <p><a href="">Pas encore de compte? Créé le ici.</a></p>
    </form>
</div>