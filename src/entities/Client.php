<?php

require_once 'src/Factory.php';

class Client extends Factory {

    private $uri;
    private $key;

    public function __construct($options, $uri)
    {
        $this->uri = $uri;
        $this->key = $options['key'];
    }

	/**
	* atributos de classes herdadas
	*/
	private $contact;
	private $lgwFunc;
	private $vehicle;

	/*
	* atributos da classe
	*/
	private $cpfcnpj;
	private $name;
	private $email;
	private $zipcode;
	private $city;
	private $usertype;
	private $ierg;
	private $address;
	private $neighbourhood;
	private $complement;
	private $uf;
	private $info;
	private $cities;


	public function add() 
	{

	}

	public function update() 
	{

	}

	public function remove()
	{

	}

	public function listAll($page = '', $cpfcnpj = '')
	{
		return $this->sendRequest($this->uri . 'client/list', [
            'key' => $this->key,
            'page' => $page,
            'cpfcnpj' => $cpfcnpj
        ]);
	}

    /**
     * @return mixed
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param mixed $contact
     *
     * @return self
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLgwFunc()
    {
        return $this->lgwFunc;
    }

    /**
     * @param mixed $lgwFunc
     *
     * @return self
     */
    public function setLgwFunc($lgwFunc)
    {
        $this->lgwFunc = $lgwFunc;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    /**
     * @param mixed $vehicle
     *
     * @return self
     */
    public function setVehicle($vehicle)
    {
        $this->vehicle = $vehicle;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCpfcnpj()
    {
        return $this->cpfcnpj;
    }

    /**
     * @param mixed $cpfcnpj
     *
     * @return self
     */
    public function setCpfcnpj($cpfcnpj)
    {
        $this->cpfcnpj = $cpfcnpj;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * @param mixed $zipcode
     *
     * @return self
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     *
     * @return self
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsertype()
    {
        return $this->usertype;
    }

    /**
     * @param mixed $usertype
     *
     * @return self
     */
    public function setUsertype($usertype)
    {
        $this->usertype = $usertype;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIerg()
    {
        return $this->ierg;
    }

    /**
     * @param mixed $ierg
     *
     * @return self
     */
    public function setIerg($ierg)
    {
        $this->ierg = $ierg;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNeighbourhood()
    {
        return $this->neighbourhood;
    }

    /**
     * @param mixed $neighbourhood
     *
     * @return self
     */
    public function setNeighbourhood($neighbourhood)
    {
        $this->neighbourhood = $neighbourhood;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getComplement()
    {
        return $this->complement;
    }

    /**
     * @param mixed $complement
     *
     * @return self
     */
    public function setComplement($complement)
    {
        $this->complement = $complement;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * @param mixed $uf
     *
     * @return self
     */
    public function setUf($uf)
    {
        $this->uf = $uf;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * @param mixed $info
     *
     * @return self
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCities()
    {
        return $this->cities;
    }

    /**
     * @param mixed $cities
     *
     * @return self
     */
    public function setCities($cities)
    {
        $this->cities = $cities;

        return $this;
    }
}