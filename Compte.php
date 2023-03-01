<?php

class Compte
{
    private $libellé;
    private $soldinit;
    private $devise;
    private $argent;
    private $titulaire;

    public function __construct($libellé, $soldinit, $devise, Titulaire $titulaire)
    {
        $this->libellé = $libellé;
        $this->soldinit = $soldinit;
        $this->devise = $devise;
        $this->titulaire = $titulaire;
        $titulaire->ajouterCompte($this);
    }

    public function getLibelle()
    {
        return $this->libellé;
    }
    public function getSoldInit()
    {
        return $this->soldinit;
    }
    public function getDevise()
    {
        return $this->devise;
    }
    // Représente le nom du compte, le libellé.
    public function setLibelle($libellé)
    {
        $this->libellé = $libellé;
    }
    // Représente le solde initial du ou des comptes.
    public function setSoldInit($soldinit)
    {
        $this->soldinit = $soldinit;
    }
    // représente la devise monétaire qu'accueil ce compte, actuellement l'euros.
    public function setDevise($devise)
    {
        $this->devise = $devise;
    }
    // fonction permettant le crédit d'un compte bancaire.
    public function crediter($argent)
    {
        $this->soldinit += $argent;
    }
    // fonction permettant le débit d'un compte bancaire.
    public function debiter($argent)
    {
        if ($this->getSoldInit() >= $argent) {
            $this->soldinit -= $argent;
        }
    }
    // fonction permettant le virement entre 2 comptes. ex (compte courant et livre A).
    public function virement(Compte $compteDestinataire, float $argent)
    {
        $this->debiter($argent);
        $this->debiter($argent);
        $compteDestinataire->crediter($argent);
    }
    // Convertis en chaines de caractères.
    public function __toString()
    {
        return $this->libellé . " / " . $this->soldinit . " / " . $this->devise;
    }
}
?>