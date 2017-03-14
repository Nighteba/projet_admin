<?php
include ('dbConnect.inc.php');
include ('mesFonction.inc.php');

    $dbName = '1617he201408';
    $sql = "select * from $dbName.produit";

    try {
        $dbh = new PDO('mysql:host='.getServer().';dbname='.$dbName, 'PETRE', 'SamuelFv77');
        $donnee = $dbh->query($sql);
				$donnee->execute();
				echo(creeTableau($donnee->fetchAll(PDO::FETCH_ASSOC), 'Liste des produits', true));
				$donnee -> closeCursor();
        $dbh = null;
    }
    catch (PDOException $e) {
        print ("Error : " . $e->getMessage() . "<br/>");
        die();
    }