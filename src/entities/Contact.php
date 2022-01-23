<?php


class Contact {
	
	private $name;
	private $phone1;
	private $phone2;
	private $phone3;
	private $phone4;

	public function add() 
	{

	}

	public function update() 
	{

	}

	public function remove()
	{

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
    public function getPhone1()
    {
        return $this->phone1;
    }

    /**
     * @param mixed $phone1
     *
     * @return self
     */
    public function setPhone1($phone1)
    {
        $this->phone1 = $phone1;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhone2()
    {
        return $this->phone2;
    }

    /**
     * @param mixed $phone2
     *
     * @return self
     */
    public function setPhone2($phone2)
    {
        $this->phone2 = $phone2;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhone3()
    {
        return $this->phone3;
    }

    /**
     * @param mixed $phone3
     *
     * @return self
     */
    public function setPhone3($phone3)
    {
        $this->phone3 = $phone3;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhone4()
    {
        return $this->phone4;
    }

    /**
     * @param mixed $phone4
     *
     * @return self
     */
    public function setPhone4($phone4)
    {
        $this->phone4 = $phone4;

        return $this;
    }
}