<?php

class Airplane extends Aircraft
{

    private $capaciteCarburant;
    private $nbMoteurs;
    private $typeMoteur;


    /**
     * Get the value of capaciteCarburant
     */
    public function getCapaciteCarburant()
    {
        return $this->capaciteCarburant;
    }

    /**
     * Set the value of capaciteCarburant
     *
     * @return  self
     */
    public function setCapaciteCarburant($capaciteCarburant)
    {
        $this->capaciteCarburant = $capaciteCarburant;

        return $this;
    }

    /**
     * Get the value of nbMoteurs
     */
    public function getNbMoteurs()
    {
        return $this->nbMoteurs;
    }

    /**
     * Set the value of nbMoteurs
     *
     * @return  self
     */
    public function setNbMoteurs($nbMoteurs)
    {
        $this->nbMoteurs = $nbMoteurs;

        return $this;
    }

    /**
     * Get the value of typeMoteur
     */
    public function getTypeMoteur()
    {
        return $this->typeMoteur;
    }

    /**
     * Set the value of typeMoteur
     *
     * @return  self
     */
    public function setTypeMoteur($typeMoteur)
    {
        $this->typeMoteur = $typeMoteur;

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
            $this->setCapaciteCarburant(100);
            $this->setNbMoteurs(2);
            $this->setTypeMoteur(100);

            exit();
        }

        if (method_exists($this, $methode = '__construct' . $nbParametres)) {
            call_user_func_array(array($this, $methode), $parametres);
        }
    }


    public function __construct7($nom, $immatriculation, $nbPassagers, $coutHoraire, $capaciteCarburant, $nbMoteurs, $typeMoteur)
    {
        $this->setNom($nom);
        $this->setImmatriculation($immatriculation);
        $this->setNbPassagers($nbPassagers);
        $this->setCoutHoraire($coutHoraire);
        $this->setCapaciteCarburant($capaciteCarburant);
        $this->setNbMoteurs($nbMoteurs);
        $this->setTypeMoteur($typeMoteur);
    }
}
