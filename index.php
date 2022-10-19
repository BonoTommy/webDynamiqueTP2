<?php

session_start();

if(isset($_REQUEST["commande"]))
{
    $commande = $_REQUEST["commande"];
}
else 
{
    //ici, on devrait spécifier la commande par défaut, typiquement celle qui mène à votre page d'accueil
    $commande = "form_login";
}

require_once("modele.php");

switch($commande)
{   
    case "PageArticles":
        break;

    case "form_login":
        afficheFormLogin();
        break;

    case "login":
        if(isset($_REQUEST["user"], $_REQUEST["password"])) {
            $nomUsager = loginEncrypte($_REQUEST["user"], $_REQUEST["password"])
        }

        break;
    
}

function afficheFormLogin($donnees = array()) {
    $donnees["titre"] = "Authentification";
    //afficher les vues
    require_once("./vues/header.php");
    require("./vues/form_login.php");
    require_once("./vues/footer.php");
}
?>