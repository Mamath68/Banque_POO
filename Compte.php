<?php

class Compte
{
    private $libellé;
    private $soldinit;
    private $devise;
    private $titulaire;

    public function __construct($libellé, $soldinit, $devise, $titulaire)
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

    public function setLibelle($libellé)
    {
        $this->libellé = $libellé;
    }
    public function setSoldInit($soldinit)
    {
        $this->soldinit = $soldinit;
    }
    public function setDevise($devise)
    {
        $this->devise = $devise;
    }

    public function debiter($somme)
    {
        if ($this->soldinit <= $somme) {
            $this->soldinit -= $somme;
        }
    }

    public function crediter($somme)
    {
        if ($this->soldinit >= $somme) {
            $this->soldinit += $somme;
        }
    }

    public function virement(Compte $compteDestinataire, float $somme)
    {
        if ($this->getSoldInit() >= $somme) {
            $this->debiter($somme);
            return "Un débit a été effectué";
        }
        if ($this->getSoldInit() <= $compteDestinataire) {
            $this->crediter($somme);
            return "Un crédit a été effectué";
        }
    }
    public function __toString()
    {
        return $this->libellé . " / " . $this->soldinit . " / " . $this->devise;
    }
}
?>