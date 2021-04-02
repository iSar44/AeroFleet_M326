<?php

class Glider extends Aircraft
{
    private $finesse;

    /**
     * Get the value of finesse
     */
    public function getFinesse()
    {
        return $this->finesse;
    }

    /**
     * Set the value of finesse
     *
     * @return  self
     */
    public function setFinesse($finesse)
    {
        $this->finesse = $finesse;

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
            $this->setFinesse(45);

            exit();
        }

        if (method_exists($this, $methode = '__construct' . $nbParametres)) {
            call_user_func_array(array($this, $methode), $parametres);
        }
    }

    public function __construct5($nom, $immatriculation, $nbPassagers, $coutHoraire, $finesse)
    {
        $this->setNom($nom);
        $this->setImmatriculation($immatriculation);
        $this->setNbPassagers($nbPassagers);
        $this->setCoutHoraire($coutHoraire);
        $this->setFinesse($finesse);
    }
}
