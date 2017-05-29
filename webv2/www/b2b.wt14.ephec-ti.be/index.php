<?php
require_once ('dbConnect.inc.php');
require_once ('mesFonction.inc.php');

    $sql = "select * from produit";

    try {
        $dbh = new PDO('mysql:host=172.17.0.6;dbname=shop','samuel','vulcain');
        //$dbh = new PDO('mysql:host=79.137.38.241;dbname=woody','root','vulcain');
        //$dbh = new PDO('mysql:host='.getServer().';dbname='.$dbName, 'PETRE', 'SamuelFv77');
        $donnee = $dbh->query($sql);
                                $donnee->execute();
                                echo(creeTableau($donnee->fetchAll(PDO::FETCH_ASSOC), 'Liste des produits', true));
        $dbh = null;
    }
    catch (PDOException $e) {
        print ("Error : " . $e->getMessage() . "<br/>");
        die();
    }
