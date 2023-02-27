<title>Banque POO</title>

<?php
include "Compte.php";
include "Titulaire.php";

$bday = new DateTime('12.02.1998'); //date d'origine
$today = new DateTime('27.02.23'); // date actuel
$diff = $today->diff($bday);

$bday2 = new DateTime('04.10.2006'); ///date d'origine
$today2 = new DateTime('27.02.23'); // date actuel
$diff2 = $today->diff($bday2);

$bday3 = new DateTime('19.07.1970'); ///date d'origine
$today3 = new DateTime('27.02.23'); // date actuel
$diff3 = $today->diff($bday3);

$t1 = new Titulaire("Mathieu", "Stamm", $diff->y, "Mulhouse");
$c1 = new Compte("Compte Courant", 2000, "Euros", $t1); // Si seulement😭😭😭
$c2 = new Compte("Livret A", 200, "Euros", $t1);

echo $t1->afficherComptes();

echo $c1->virement($c2,1500);

$t2 = new Titulaire("Martin", "Stamm", $diff2->y, "Lutterbach");
$c1 = new Compte("Compte Courant", 1000, "Euros", $t2);
$c2 = new Compte("Livret A", 300, "Euros", $t2);

echo $t2->afficherComptes();

echo $c1->virement($c2,500);

$t3 = new Titulaire("Michaela", "Stamm", $diff3->y, "Mulhouse");
$c1 = new Compte ("Compte Courant", 5000, "Euros", $t3);
$c2 = new Compte("Livret A", 500, "Euros", $t3);

echo $t3->afficherComptes();


echo $c1->virement($c2,2000);
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