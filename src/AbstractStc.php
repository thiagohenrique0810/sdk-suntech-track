<?php

include_once('Config.php');

class AbstractStc {

	private $uri;
	private $key;

	public function __construct($options) 
	{
		//verificando o tipo de acesso se de produção ou desenvolvimento
		if($options['sandbox']) {
			$this->setUri('http://ap3.stc.srv.br/integration/sandbox/ws/');
		}else {
			$this->setUri('http://ap3.stc.srv.br/integration/prod/ws/');
		}
	}

	public function listbrand()
	{

	}

	public function addbrand() 
	{

	}

	public function removebrand()
	{

	}

	public function addClient($data) 
	{

	}

	public function updateClient() 
	{

	}

	public function removeClient()
	{

	}

	public function listAllClient($page = '', $cpfcnpj = '')
	{
        return sendRequest([

        	'key' => $this->key,
        	'page' => $page,
        	'cpfcnpj' => $cpfcnpj

        ], $this->uri . 'client/list');
	}

	public function addContact() 
	{

	}

	public function updateContact() 
	{

	}

	public function removeContact()
	{

	}

	public function addDevice() 
	{

	}

	public function listAllDevice()
	{

	}

	public function listmanagerDevice()
	{

	}

	public function associateDevice()
	{

	}

	public function updateLogin() 
	{
		
	}

	public function changeonwerVehicle() 
    {

    }

    public function addVehicle() 
    {

    }

    public function updateVehicle() 
    {

    }

    public function removeVehicle()
    {

    }

    public function listAllVehicle()
    {
        
    }

    public function listtype()
	{

	}



    /**
     * @return mixed
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @param mixed $uri
     *
     * @return self
     */
    public function setUri($uri)
    {
        $this->uri = $uri;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param mixed $key
     *
     * @return self
     */
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }
}