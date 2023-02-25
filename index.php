<title>Banque POO</title>

<?php
include "Compte.php";
include "Titulaire.php";

$t1 = new Titulaire("Mathieu", "Stamm", 1998, "Mulhouse");
$c1 = new Compte("Compte Courant", 2000, "Euros", $t1);
$c2 = new Compte("Livret A", 200, "Euros", $t1);

$t2 = new Titulaire("Martin", "Stamm", 2006, "Lutterbach");
$c1 = new Compte("Compte Courant", 1000, "Euros", $t2);
$c2 = new Compte("Livret A", 500, "Euros", $t2);

$t3 = new Titulaire("Michaela", "Stamm", 1970, "Bad-Krozingen");
$c1 = new Compte("Compte Courant", 500, "Euros", $t3);
$c2 = new Compte("Livret A", 300, "Euros", $t3);

$t4 = new Titulaire("Roland", "Stamm", 1953, "Mulhouse");
$c1 = new Compte("Compte Courant", 2000, "Euros", $t4);
$c2 = new Compte("Livret A", 1000, "Euros", $t4);

echo $t1->afficherComptes();
echo $t2->afficherComptes();
echo $t3->afficherComptes();
echo $t4->afficherComptes();
?>

<style>
    h1 {
        text-align: center;
        padding: 1em 2em 0 0
    }

    p {
        text-align: center;
    }
</style>