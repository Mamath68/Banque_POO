<?php

class Compte
{
    private $libellé;
    private $soldinit;
    private $devise;
    private $argent;
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

    public function crediter($argent)
    {
        $this->soldinit += $argent;
    }
    public function debiter($argent)
    {
        if ($this->getSoldInit() >= $argent) {
            $this->soldinit -= $argent;
        }
    }

    public function virement(Compte $compteDestinataire, float $argent)
    {
        $this->debiter($argent);
        $this->debiter($argent);
        $compteDestinataire->crediter($argent);
    }
    public function __toString()
    {
        return $this->libellé . " / " . $this->soldinit . " / " . $this->devise;
    }
}
?>