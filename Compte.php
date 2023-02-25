<?php

class Compte
{
    private $libellé;
    private $soldeinit;
    private $devise;
    private $titulaire;

    public function __construct($libellé, $soldeinit, $devise, $titulaire)
    {
        $this->libellé = $libellé;
        $this->soldeinit = $soldeinit;
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
        return $this->soldeinit;
    }
    public function getDevise()
    {
        return $this->devise;
    }

    public function setLibelle($libellé)
    {
        $this->libellé = $libellé;
    }
    public function setSoldInit($soldeinit)
    {
        $this->soldeinit = $soldeinit;
    }
    public function setDevise($devise)
    {
        $this->devise = $devise;
    }
    public function __toString()
    {
        return $this->libellé . " / " . $this->soldeinit . " / " . $this->devise;
    }
}
?>