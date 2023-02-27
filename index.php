<title>Banque POO</title>

<?php
include "Compte.php";
include "Titulaire.php";

$bday = new DateTime('12.02.1998');//dd.mm.yyyy
$today = new DateTime('27.02.23'); // date actuel
$diff = $today->diff($bday);
$bday2 = new DateTime('04.10.2006');//dd.mm.yyyy
$today2 = new DateTime('27.02.23'); // date actuel
$diff2 = $today->diff($bday2);
$bday3 = new DateTime('19.07.1970');//dd.mm.yyyy
$today3 = new DateTime('27.02.23'); // date actuel
$diff3 = $today->diff($bday3);
$bday4 = new DateTime('25.02.1953');//dd.mm.yyyy
$today4 = new DateTime('27.02.23'); // date actuel
$diff4 = $today->diff($bday4);

$t1 = new Titulaire("Mathieu", "Stamm", $diff->y, "Mulhouse");
$c1 = new Compte("Compte Courant", 2000, "Euros", $t1);
$c2 = new Compte("Livret A", 200, "Euros", $t1);

$t2 = new Titulaire("Martin", "Stamm", $diff2->y, "Lutterbach");
$c1 = new Compte("Compte Courant", 1000, "Euros", $t2);
$c2 = new Compte("Livret A", 500, "Euros", $t2);

$t3 = new Titulaire("Michaela", "Stamm", $diff3->y, "Bad-Krozingen");
$c1 = new Compte("Compte Courant", 500, "Euros", $t3);
$c2 = new Compte("Livret A", 300, "Euros", $t3);

$t4 = new Titulaire("Roland", "Stamm", $diff4->y, "Mulhouse");
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