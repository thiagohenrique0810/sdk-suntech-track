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

		//verificando se foi enviada a chave de integracao
		if(!empty($options['key'])) {
			$this->key = $options['key'];
		}else {
			die('missing integration key');
		}
	}

	public function listbrand($data)
	{

	}

	public function addbrand($data) 
	{

	}

	public function removebrand($data)
	{

	}

	public function addClient($data) 
	{
		if(!empty($data)) {
			//die($this->key);
	        return sendRequest(array_merge($data, [

	        	'key' => $this->getKey()

	        ]), $this->getUri() . 'client/add');
    	}
	}

	public function updateClient($data) 
	{
		if(!empty($data)) {
			//die($this->key);
	        return sendRequest(array_merge($data, [

	        	'key' => $this->getKey()

	        ]), $this->getUri() . 'client/update');
    	}
	}

	public function removeClient($data)
	{

	}

	public function listAllClient($data)
	{
		if(!empty($data)) {
			//die($this->key);
	        return sendRequest([

	        	'key' => $this->getKey(),
	        	'page' => $data['page'],
	        	'cpfcnpj' => $data['cpfcnpj']

	        ], $this->getUri() . 'client/list');
    	}
	}

	public function addContact($data) 
	{

	}

	public function updateContact($data) 
	{

	}

	public function removeContact($data)
	{

	}

	public function addDevice($data) 
	{

	}

	public function listAllDevice($data)
	{

	}

	public function listmanagerDevice($data)
	{

	}

	public function associateDevice($data)
	{

	}

	public function updateLogin($data) 
	{
		
	}

	public function changeonwerVehicle($data) 
    {

    }

    public function addVehicle($data) 
    {

    }

    public function updateVehicle($data) 
    {

    }

    public function removeVehicle($data)
    {

    }

    public function listAllVehicle($data)
    {
        
    }

    public function listtype($data)
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