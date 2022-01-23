<?php


class Brand {
	
	private $id;
	private $brand;
	

	public function listbrand()
	{

	}

	public function addbrand() 
	{

	}

	public function removebrand()
	{

	}

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param mixed $brand
     *
     * @return self
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }
}