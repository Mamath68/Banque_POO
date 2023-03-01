<?php
class Titulaire
{
    private $prenom;
    private $nom;
    // DateTime : Classe pour les dates et l'heure.
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

    // Représente le prénom
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    // Représente le nom de famille
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    // Représente la date de naissance
    public function setDateNaissance($datenaissance)
    {
        $this->datenaissance = $datenaissance;
    }
    // Représente la ville
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    public function ajouterCompte($comptes)
    {
        $this->comptes[] = $comptes;
    }
// Fonction personnalisé permettant de calculer l'âge d'une personne, sans avoir a modifer chaque jours la date manuellement.
    public function calculerAge()
    {
        // recuper datenaissance de la personne dans variable Recuper jour, mis dans variable.                  diff entre les deux dates                       return format en année (Y)
        $bday = $this->datenaissance;
        $now = new DateTime();
        $diff = $now->diff($bday);

        return $diff->y;
    }
// fonction permettant l'affichage des comptes avec les infos des propriétaires des comptes.
    public function afficherComptes()
    {
        echo "<h1>Comptes de " . $this->prenom . " " . $this->nom . " " .$this->calculerAge() ." ans " . $this->ville . "</h1>";
        foreach ($this->comptes as $value) {
            echo "<p> Libéllé " . " / " . "Solde Initiale" . " / " . "Dévise <br>" . $value . "<p>";
        }
    }
// Convertis en chaines de caractères.
    public function __toString()
    {
        return $this->prenom . " " . $this->nom;
    }
}
?>