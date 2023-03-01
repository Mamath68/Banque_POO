<title>Banque POO</title>

<?php
include "Compte.php";
include "Titulaire.php";
// Titulaire : propriétaire du compte
$t1 = new Titulaire("Mathieu", "Stamm", "12-02-1998", "Mulhouse");
$t2 = new Titulaire("Martin", "Stamm", "04-10-2006", "Lutterbach");
$t3 = new Titulaire("Michaela", "Stamm", "19-07-1970", "Mulhouse");
// comptes apartenant 
$c1 = new Compte("Compte Courant", 2000, "Euros", $t1); // Si seulement😭😭😭
$c2 = new Compte("Livret A", 200, "Euros", $t1);

$c3 = new Compte("Compte Courant", 1000, "Euros", $t2);
$c4 = new Compte("Livret A", 300, "Euros", $t2);

$c5 = new Compte("Compte Courant", 5000, "Euros", $t3);
$c6 = new Compte("Livret A", 500, "Euros", $t3);


$c1->debiter(500);
$c1->crediter(450);
$c1->virement($c2, 1800);

$c3->debiter(600);
$c3->crediter(500);
$c3->virement($c4, 700);

$c5->debiter(1500);
$c5->crediter(500);
$c5->virement($c6, 4500);

$t1->afficherComptes();
$t2->afficherComptes();
$t3->afficherComptes();
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