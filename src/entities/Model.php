<?php


class Model {

	private $modelId;
	private $model;
	private $brand;


	public function listmodel()
	{

	}

	public function addmodel()
	{
		
	}

	public function removemodel()
	{
		
	}

    /**
     * @return mixed
     */
    public function getModelId()
    {
        return $this->modelId;
    }

    /**
     * @param mixed $modelId
     *
     * @return self
     */
    public function setModelId($modelId)
    {
        $this->modelId = $modelId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     *
     * @return self
     */
    public function setModel($model)
    {
        $this->model = $model;

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