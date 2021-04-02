<?php

class Engine
{

    private $puissance;
    private $consommation;

    /**
     * Get the value of puissance
     */
    public function getPuissance()
    {
        return $this->puissance;
    }

    /**
     * Set the value of puissance
     *
     * @return  self
     */
    public function setPuissance($puissance)
    {
        $this->puissance = $puissance;

        return $this;
    }

    /**
     * Get the value of consommation
     */
    public function getConsommation()
    {
        return $this->consommation;
    }

    /**
     * Set the value of consommation
     *
     * @return  self
     */
    public function setConsommation($consommation)
    {
        $this->consommation = $consommation;

        return $this;
    }

    public function __construct()
    {
        $parametres = func_get_args();
        $nbParametres = func_num_args();

        if ($nbParametres == 0) {

            $this->getPuissance(100);
            $this->getConsommation(200);

            exit();
        }

        if (method_exists($this, $methode = '__construct' . $nbParametres)) {
            call_user_func_array(array($this, $methode), $parametres);
        }
    }

    public function __construct2($puissance, $consommation)
    {
        $this->getPuissance($puissance);
        $this->getConsommation($consommation);
    }
}
