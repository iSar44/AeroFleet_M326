<?php

class Fleet
{

    private $nomFlotte;
    private $lstAeronefs = [];
    private $lstAvions = [];
    private $lstPlaneur = [];

    /**
     * Get the value of nomFlotte
     */
    public function getNomFlotte()
    {
        return $this->nomFlotte;
    }

    /**
     * Set the value of nomFlotte
     *
     * @return  self
     */
    public function setNomFlotte($nomFlotte)
    {
        $this->nomFlotte = $nomFlotte;

        return $this;
    }

    /**
     * Get the value of lstAeronefs
     */
    public function getLstAeronefs()
    {
        return $this->lstAeronefs;
    }

    /**
     * Set the value of lstAeronefs
     *
     * @return  self
     */
    public function setLstAeronefs($lstAeronefs)
    {
        $this->lstAeronefs = $lstAeronefs;

        return $this;
    }

    /**
     * Get the value of lstAvions
     */
    public function getLstAvions()
    {
        return $this->lstAvions;
    }

    /**
     * Set the value of lstAvions
     *
     * @return  self
     */
    public function setLstAvions($lstAvions)
    {
        $this->lstAvions = $lstAvions;

        return $this;
    }

    /**
     * Get the value of lstPlaneur
     */
    public function getLstPlaneur()
    {
        return $this->lstPlaneur;
    }

    /**
     * Set the value of lstPlaneur
     *
     * @return  self
     */
    public function setLstPlaneur($lstPlaneur)
    {
        $this->lstPlaneur = $lstPlaneur;

        return $this;
    }


    public function __construct()
    {
        $parametres = func_get_args();
        $nbParametres = func_num_args();

        if ($nbParametres == 0) {

            $this->setNomFlotte("Flotte sans nom");
            $this->setLstAeronefs([]);
            $this->setLstAvions([]);
            $this->setLstPlaneur([]);

            exit();
        }

        if (method_exists($this, $methode = '__construct' . $nbParametres)) {
            call_user_func_array(array($this, $methode), $parametres);
        }
    }

    /**
     * 
     * Constructeur désigné de la classe Fleet
     *
     * @param string $nomFlotte
     * @param array $lstAeronefs
     * @param array $lstAvions
     * @param array $lstPlaneur
     * @return void
     */
    public function __construct4($nomFlotte, $lstAeronefs, $lstAvions, $lstPlaneur)
    {
        $this->setNomFlotte($nomFlotte);
        $this->setLstAeronefs($lstAeronefs);
        $this->setLstAvions($lstAvions);
        $this->setLstPlaneur($lstPlaneur);
    }


    /**
     * Fonction qui permet d'ajouter un avion à la flotte
     *
     * @param Avion $avion
     * @return void
     */
    public function AddAvion($avion)
    {
        array_push($lstAvions, $avion);
        array_push($lstAeronefs, $avion);
    }


    /**
     * Fonction qui permet d'ajouter un planeur à la flotte
     *
     * @param Planeur $planeur
     * @return void
     */
    public function AddPlaneur($planeur)
    {
        array_push($lstPlaneur, $planeur);
        array_push($lstAeronefs, $planeur);
    }


    /**
     *
     * Fonction qui retourne le nombre d'aéronefs dans la flotte
     *
     * @return integer
     */
    public function CountAeronefs(): int
    {
        $res = count($this->getLstPlaneur());

        return $res;
    }


    /**
     * 
     * Fonction qui retourne le total des passagers pour tous les avions
     *
     * @return integer
     */
    // public function CountNbPassagersTotal(): int
    // {
    //     $res = 0;


    //     foreach(Aircraft){

    //     }
    //     return $res;
    // }
}
