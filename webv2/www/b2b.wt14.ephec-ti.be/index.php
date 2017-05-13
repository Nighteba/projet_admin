<?php
include ('dbConnect.inc.php');
include ('mesFonction.inc.php');

    //$dbName = 'shop';
    $sql = "select * from shop.produit";

    try {
				$dbh = new PDO('mysql:host=172.17.0.5;dbname=shop','root',);
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
