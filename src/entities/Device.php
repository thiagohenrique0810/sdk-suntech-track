<?php


class Device {
	
	private $deviceId;
	private $manufacture;
	private $associate;
	private $licensePlate;
	private $manufacture;
	private $ownerName;
	private $ownerType;
	private $lastCommunication;


	public function add() 
	{

	}

	public function listAll()
	{

	}

	public function listmanager()
	{

	}

	public function associate()
	{

	}

    /**
     * @return mixed
     */
    public function getDeviceId()
    {
        return $this->deviceId;
    }

    /**
     * @param mixed $deviceId
     *
     * @return self
     */
    public function setDeviceId($deviceId)
    {
        $this->deviceId = $deviceId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getManufacture()
    {
        return $this->manufacture;
    }

    /**
     * @param mixed $manufacture
     *
     * @return self
     */
    public function setManufacture($manufacture)
    {
        $this->manufacture = $manufacture;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAssociate()
    {
        return $this->associate;
    }

    /**
     * @param mixed $associate
     *
     * @return self
     */
    public function setAssociate($associate)
    {
        $this->associate = $associate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLicensePlate()
    {
        return $this->licensePlate;
    }

    /**
     * @param mixed $licensePlate
     *
     * @return self
     */
    public function setLicensePlate($licensePlate)
    {
        $this->licensePlate = $licensePlate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getManufacture()
    {
        return $this->manufacture;
    }

    /**
     * @param mixed $manufacture
     *
     * @return self
     */
    public function setManufacture($manufacture)
    {
        $this->manufacture = $manufacture;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOwnerName()
    {
        return $this->ownerName;
    }

    /**
     * @param mixed $ownerName
     *
     * @return self
     */
    public function setOwnerName($ownerName)
    {
        $this->ownerName = $ownerName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOwnerType()
    {
        return $this->ownerType;
    }

    /**
     * @param mixed $ownerType
     *
     * @return self
     */
    public function setOwnerType($ownerType)
    {
        $this->ownerType = $ownerType;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastCommunication()
    {
        return $this->lastCommunication;
    }

    /**
     * @param mixed $lastCommunication
     *
     * @return self
     */
    public function setLastCommunication($lastCommunication)
    {
        $this->lastCommunication = $lastCommunication;

        return $this;
    }
}