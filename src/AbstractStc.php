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
		if(!empty($data)) {
			//die($this->key);
	        return sendRequest(array_merge($data, [
	        	'key' => $this->getKey()
	        ]), $this->getUri() . 'vehicles/listbrand');
    	}
	}

	public function addbrand($data) 
	{
		if(!empty($data)) {
			//die($this->key);
	        return sendRequest(array_merge($data, [
	        	'key' => $this->getKey()
	        ]), $this->getUri() . 'vehicle/addbrand');
    	}
	}

	public function removebrand($data)
	{
		if(!empty($data)) {
			//die($this->key);
	        return sendRequest(array_merge($data, [
	        	'key' => $this->getKey()
	        ]), $this->getUri() . 'vehicle/removebrand');
    	}
	}

	public function listModel($data)
	{
		if(!empty($data)) {
			//die($this->key);
	        return sendRequest(array_merge($data, [
	        	'key' => $this->getKey()
	        ]), $this->getUri() . 'vehicles/listmodel');
    	}
	}

	public function addModel($data) 
	{
		if(!empty($data)) {
			//die($this->key);
	        return sendRequest(array_merge($data, [
	        	'key' => $this->getKey()
	        ]), $this->getUri() . 'vehicle/addmodel');
    	}
	}

	public function removeModel($data)
	{
		if(!empty($data)) {
			//die($this->key);
	        return sendRequest(array_merge($data, [
	        	'key' => $this->getKey()
	        ]), $this->getUri() . 'vehicle/removemodel');
    	}
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
		if(!empty($data)) {
			//die($this->key);
	         return sendRequest(array_merge($data, [
	        	'key' => $this->getKey()
	        ]), $this->getUri() . 'client/remove');
    	}
	}

	public function listAllClient($data)
	{
		if(!empty($data)) {
			//die($this->key);
	        return sendRequest(array_merge($data, [
	        	'key' => $this->getKey()
	        ]), $this->getUri() . 'client/list');
    	}
	}

	public function addContact($data) 
	{
		if(!empty($data)) {
			//die($this->key);
	        return sendRequest(array_merge($data, [
	        	'key' => $this->getKey()
	        ]), $this->getUri() . 'client/addcontact');
    	}
	}

	public function updateContact($data) 
	{
		if(!empty($data)) {
			//die($this->key);
	        return sendRequest(array_merge($data, [
	        	'key' => $this->getKey()
	        ]), $this->getUri() . 'client/updatecontact');
    	}
	}

	public function removeContact($data)
	{
		if(!empty($data)) {
			//die($this->key);
	        return sendRequest(array_merge($data, [
	        	'key' => $this->getKey()
	        ]), $this->getUri() . 'client/removecontact');
    	}
	}

	public function addDevice($data) 
	{
		if(!empty($data)) {
			//die($this->key);
	        return sendRequest(array_merge($data, [
	        	'key' => $this->getKey()
	        ]), $this->getUri() . 'device/add');
    	}
	}

	public function listAllDevice($data)
	{
		if(!empty($data)) {
			//die($this->key);
	        return sendRequest(array_merge($data, [
	        	'key' => $this->getKey()
	        ]), $this->getUri() . 'device/list');
    	}
	}

	public function listmanagerDevice($data)
	{
		if(!empty($data)) {
			//die($this->key);
	        return sendRequest(array_merge($data, [
	        	'key' => $this->getKey()
	        ]), $this->getUri() . 'device/listmanager');
    	}
	}

	public function associateDevice($data)
	{
		if(!empty($data)) {
			//die($this->key);
	        return sendRequest(array_merge($data, [
	        	'key' => $this->getKey()
	        ]), $this->getUri() . 'device/associate');
    	}
	}

	public function updateLogin($data) 
	{
		if(!empty($data)) {
			//die($this->key);
	        return sendRequest(array_merge($data, [
	        	'key' => $this->getKey()
	        ]), $this->getUri() . 'client/updateLgwFunc');
    	}
	}

	public function changeonwerVehicle($data) 
    {
    	if(!empty($data)) {
			//die($this->key);
	        return sendRequest(array_merge($data, [
	        	'key' => $this->getKey()
	        ]), $this->getUri() . 'client/changeonwer');
    	}
    }

    public function addVehicle($data) 
    {
    	if(!empty($data)) {
			//die($this->key);
	        return sendRequest(array_merge($data, [
	        	'key' => $this->getKey()
	        ]), $this->getUri() . 'vehicle/add');
    	}
    }

    public function updateVehicle($data) 
    {
    	if(!empty($data)) {
			//die($this->key);
	        return sendRequest(array_merge($data, [
	        	'key' => $this->getKey()
	        ]), $this->getUri() . 'vehicle/update');
    	}
    }

    public function removeVehicle($data)
    {
    	if(!empty($data)) {
			//die($this->key);
	        return sendRequest(array_merge($data, [
	        	'key' => $this->getKey()
	        ]), $this->getUri() . 'vehicle/remove');
    	}
    }

    public function listAllVehicle($data)
    {
        if(!empty($data)) {
			//die($this->key);
	        return sendRequest(array_merge($data, [
	        	'key' => $this->getKey()
	        ]), $this->getUri() . 'vehicle/list');
    	}
    }

    public function listVehicleType($data)
	{
		if(!empty($data)) {
			//die($this->key);
	        return sendRequest(array_merge($data, [
	        	'key' => $this->getKey()
	        ]), $this->getUri() . 'vehicle/listtype');
    	}
	}

	public function listCities($data)
	{
		if(!empty($data)) {
			//die($this->key);
	        return sendRequest(array_merge($data, [
	        	'key' => $this->getKey()
	        ]), $this->getUri() . 'client/getcities');
    	}
	}

	public function vehicleHistoryPositions($data)
	{
		if(!empty($data)) {
			//die($this->key);
	        return sendRequest(array_merge($data, [
	        	'key' => $this->getKey()
	        ]), $this->getUri() . 'admin/getVehiclePositionsByLimit500');
    	}
	}

	public function listManufactures($data)
	{
		if(!empty($data)) {
			//die($this->key);
	        return sendRequest(array_merge($data, [
	        	'key' => $this->getKey()
	        ]), $this->getUri() . 'manufacture/list');
    	}
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