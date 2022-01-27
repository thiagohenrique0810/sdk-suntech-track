<?php


class Stc {

	public $Client;
	private $uri = '';


	public function __construct($options) 
	{
		//verificando o tipo de acesso se de produção ou desenvolvimento
		if($options['sandbox']) {
			$this->setUri('http://ap3.stc.srv.br/integration/sandbox/ws/');
		}else {
			$this->setUri('http://ap3.stc.srv.br/integration/prod/ws/');
		}

		//setando classes
		$this->client = new Client($options, $this->getUri());
	}


    /**
     * @return mixed
     */
    public function getClient()
    {
        return $this->Client;
    }

    /**
     * @param mixed $Client
     *
     * @return self
     */
    public function setClient($Client)
    {
        $this->Client = $Client;

        return $this;
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
}