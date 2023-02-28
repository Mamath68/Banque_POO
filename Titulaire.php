<?php
// classe
class Titulaire
{
    private $prenom;
    private $nom;
    private DateTime $datenaissance;
    private $ville;
    private array $comptes;

    public function __construct($prenom, $nom, string $datenaissance, $ville)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->datenaissance = new DateTime($datenaissance);
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
    public function calculerAge()
    {
        // recuper datenaissance de la personne dans variable
        // Recuper jour, mis dans variable.
        // diff entre les deux dates
        // return format en année (Y)
        $bday = $this->datenaissance;
        $now = new DateTime();
        $diff = $now->diff($bday);

        return $diff->y;

    }

    public function afficherComptes()
    {
        echo "<h1>Comptes de " . $this->prenom . " " . $this->nom . " " .$this->calculerAge() ." ans " . $this->ville . "</h1>";
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