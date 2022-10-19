<?php

define("SERVER", "localhost");
define("USERNAME", "root");
define("PASSWORD", "root");
define("DBNAME", "ligue");

function connectDB()
    {
        //se connecter à la base de données
        $c = mysqli_connect(SERVER, USERNAME, PASSWORD, DBNAME);

        if(!$c)
        {
            die("Erreur de connexion. MySQLI : " . mysqli_connect_error());
        }

        //s'assurer que la connexion traite le utf8
        mysqli_query($c, "SET NAMES 'utf8'");

        return $c;
    }

    $connexion = connectDB();