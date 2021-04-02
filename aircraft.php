<?php

class Aircraft
{

    private $nom;
    private $immatriculation;
    private $nbPassagers;
    private $coutHoraire;

    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of immatriculation
     */
    public function getImmatriculation()
    {
        return $this->immatriculation;
    }

    /**
     * Set the value of immatriculation
     *
     * @return  self
     */
    public function setImmatriculation($immatriculation)
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }

    /**
     * Get the value of nbPassagers
     */
    public function getNbPassagers()
    {
        return $this->nbPassagers;
    }

    /**
     * Set the value of nbPassagers
     *
     * @return  self
     */
    public function setNbPassagers($nbPassagers)
    {
        $this->nbPassagers = $nbPassagers;

        return $this;
    }

    /**
     * Get the value of coutHoraire
     */
    public function getCoutHoraire()
    {
        return $this->coutHoraire;
    }

    /**
     * Set the value of coutHoraire
     *
     * @return  self
     */
    public function setCoutHoraire($coutHoraire)
    {
        $this->coutHoraire = $coutHoraire;

        return $this;
    }


    public function __construct()
    {
        $parametres = func_get_args();
        $nbParametres = func_num_args();

        if ($nbParametres == 0) {

            $this->setNom("Appareil sans nom");
            $this->setImmatriculation("ABC 123");
            $this->setNbPassagers(4);
            $this->setCoutHoraire(150);

            exit();
        }

        if (method_exists($this, $methode = '__construct' . $nbParametres)) {
            call_user_func_array(array($this, $methode), $parametres);
        }
    }
}
