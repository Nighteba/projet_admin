<?php
include ('mesFonction.inc.php');

    //$dbName = 'shop';
    $sql = "select * from produit";
    $dbname = "woody";
    $host="79.137.38.241"

    try {
	//$dbh = new PDO('mysql:host='.$host.';dbname='.$dbname.,'root','vulcain');
	$dbh = new PDO('mysql:host=79.137.38.241;dbname=woody','root','vulcain');
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
