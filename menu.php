<?php

class menu
{

    protected $nomDuMenu;
    protected $prix;
    protected $description;



    public function getNomDuMenu()
    {
        return $this->nomDuMenu;
    }

    /**
     * Set the value of marque
     *
     * @return  self
     */
    public function setNomDuMenu($nomDuMenu)
    {
        $this->nomDuMenu = $nomDuMenu;

        return $this;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of marque
     *
     * @return  self
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of marque
     *
     * @return  self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}
