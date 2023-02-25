<?php


class Titulaire
{
    private $prenom;
    private $nom;
    private $datenaissance;
    private $ville;
    private array $comptes;

    public function __construct($prenom, $nom, $datenaissance, $ville)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->datenaissance = $datenaissance;
        $this->ville = $ville;
        $this->comptes = [];
    }

    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getDateNaissance()
    {
        return $this->datenaissance;
    }
    public function getVille()
    {
        return $this->ville;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function setDateNaissance($datenaissance)
    {
        $this->datenaissance = $datenaissance;
    }
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    public function ajouterCompte($comptes)
    {
        $this->comptes[] = $comptes;
    }
    public function afficherComptes()
    {
        echo "<h1>Comptes de " . $this->prenom . " " . $this->nom . " " . $this->datenaissance . " " . $this->ville . "</h1>";
        foreach ($this->comptes as $value) {
            echo "<p> Libéllé " . " / " . "Solde Initiale" . " / " . "Dévise <br>" . $value . "<p>";
        }
    }
    public function __toString()
    {
        return $this->prenom . " " . $this->nom;
    }
}
?>