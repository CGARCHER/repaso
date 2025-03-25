<?php 

class Airport {
    private $id;
    private $location;
    private $numRoad;
    private $gateway;

    function __construct($idP = 0,$locationP = "",$numRoadP = 0,$gatewayP = 0)
    {
        $this->id = $idP;
        $this->location = $locationP;
        $this->numRoad = $numRoadP;
        $this->gateway = $gatewayP;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of location
     */ 
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set the value of location
     *
     * @return  self
     */ 
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get the value of numRoad
     */ 
    public function getNumRoad()
    {
        return $this->numRoad;
    }

    /**
     * Set the value of numRoad
     *
     * @return  self
     */ 
    public function setNumRoad($numRoad)
    {
        $this->numRoad = $numRoad;

        return $this;
    }

    /**
     * Get the value of gateway
     */ 
    public function getGateway()
    {
        return $this->gateway;
    }

    /**
     * Set the value of gateway
     *
     * @return  self
     */ 
    public function setGateway($gateway)
    {
        $this->gateway = $gateway;

        return $this;
    }
}


?>