    <div class="wrapper-form">
        <h1>Authentification</h1>

        <form method="POST" action="index.php">
            <div>
                <label for="user">Nom d'usager: </label>
                <input type="text" id="user" name="user">
            </div>
            <div>   
                <label for="password">Mot de passe: </label>
                <input type="password" id="password" name="password">
            </div> 
            <input type="hidden" name="commande" value="login">
            <input type="submit" name="btnSubmit" value="login">
        </form>
    </div>
    <?php
        if(isset($message)) {
            echo "<p>" . $message . "</p>";
        }
    ?>