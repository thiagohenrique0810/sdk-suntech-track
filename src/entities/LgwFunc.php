<?php


class LgwFunc {
	
	/*
	* dados para acesso do webclient
	*/
	private $login;
	private $pass;
	/*
	* atributos da classe login e suas funcoes true or false (1 ou 0)
	*/
	private $loginId;
	private $command;
	private $fence;
	private $isca;
	private $convoy;
	private $setup;
	private $logistics;
	private $groups;
	private $maintenance;
	private $workingHours;
	private $subaccount;
	private $events;
	private $reports;
	private $associate;
	private $temperature;
	private $collaborativeNetwork;
	private $commandCollaborativeNetwork;
	private $gridHorimeter;
	private $gridOutput3;
	private $appLimited;
	private $users;
	private $routing;
	private $commandKeyboard;
	private $appAf;

	public function update() 
	{
		
	}


    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     *
     * @return self
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * @param mixed $pass
     *
     * @return self
     */
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLoginId()
    {
        return $this->loginId;
    }

    /**
     * @param mixed $loginId
     *
     * @return self
     */
    public function setLoginId($loginId)
    {
        $this->loginId = $loginId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCommand()
    {
        return $this->command;
    }

    /**
     * @param mixed $command
     *
     * @return self
     */
    public function setCommand($command)
    {
        $this->command = $command;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFence()
    {
        return $this->fence;
    }

    /**
     * @param mixed $fence
     *
     * @return self
     */
    public function setFence($fence)
    {
        $this->fence = $fence;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsca()
    {
        return $this->isca;
    }

    /**
     * @param mixed $isca
     *
     * @return self
     */
    public function setIsca($isca)
    {
        $this->isca = $isca;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getConvoy()
    {
        return $this->convoy;
    }

    /**
     * @param mixed $convoy
     *
     * @return self
     */
    public function setConvoy($convoy)
    {
        $this->convoy = $convoy;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSetup()
    {
        return $this->setup;
    }

    /**
     * @param mixed $setup
     *
     * @return self
     */
    public function setSetup($setup)
    {
        $this->setup = $setup;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLogistics()
    {
        return $this->logistics;
    }

    /**
     * @param mixed $logistics
     *
     * @return self
     */
    public function setLogistics($logistics)
    {
        $this->logistics = $logistics;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * @param mixed $groups
     *
     * @return self
     */
    public function setGroups($groups)
    {
        $this->groups = $groups;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMaintenance()
    {
        return $this->maintenance;
    }

    /**
     * @param mixed $maintenance
     *
     * @return self
     */
    public function setMaintenance($maintenance)
    {
        $this->maintenance = $maintenance;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getWorkingHours()
    {
        return $this->workingHours;
    }

    /**
     * @param mixed $workingHours
     *
     * @return self
     */
    public function setWorkingHours($workingHours)
    {
        $this->workingHours = $workingHours;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSubaccount()
    {
        return $this->subaccount;
    }

    /**
     * @param mixed $subaccount
     *
     * @return self
     */
    public function setSubaccount($subaccount)
    {
        $this->subaccount = $subaccount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * @param mixed $events
     *
     * @return self
     */
    public function setEvents($events)
    {
        $this->events = $events;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getReports()
    {
        return $this->reports;
    }

    /**
     * @param mixed $reports
     *
     * @return self
     */
    public function setReports($reports)
    {
        $this->reports = $reports;

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
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * @param mixed $temperature
     *
     * @return self
     */
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCollaborativeNetwork()
    {
        return $this->collaborativeNetwork;
    }

    /**
     * @param mixed $collaborativeNetwork
     *
     * @return self
     */
    public function setCollaborativeNetwork($collaborativeNetwork)
    {
        $this->collaborativeNetwork = $collaborativeNetwork;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCommandCollaborativeNetwork()
    {
        return $this->commandCollaborativeNetwork;
    }

    /**
     * @param mixed $commandCollaborativeNetwork
     *
     * @return self
     */
    public function setCommandCollaborativeNetwork($commandCollaborativeNetwork)
    {
        $this->commandCollaborativeNetwork = $commandCollaborativeNetwork;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGridHorimeter()
    {
        return $this->gridHorimeter;
    }

    /**
     * @param mixed $gridHorimeter
     *
     * @return self
     */
    public function setGridHorimeter($gridHorimeter)
    {
        $this->gridHorimeter = $gridHorimeter;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGridOutput3()
    {
        return $this->gridOutput3;
    }

    /**
     * @param mixed $gridOutput3
     *
     * @return self
     */
    public function setGridOutput3($gridOutput3)
    {
        $this->gridOutput3 = $gridOutput3;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAppLimited()
    {
        return $this->appLimited;
    }

    /**
     * @param mixed $appLimited
     *
     * @return self
     */
    public function setAppLimited($appLimited)
    {
        $this->appLimited = $appLimited;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @param mixed $users
     *
     * @return self
     */
    public function setUsers($users)
    {
        $this->users = $users;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRouting()
    {
        return $this->routing;
    }

    /**
     * @param mixed $routing
     *
     * @return self
     */
    public function setRouting($routing)
    {
        $this->routing = $routing;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCommandKeyboard()
    {
        return $this->commandKeyboard;
    }

    /**
     * @param mixed $commandKeyboard
     *
     * @return self
     */
    public function setCommandKeyboard($commandKeyboard)
    {
        $this->commandKeyboard = $commandKeyboard;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAppAf()
    {
        return $this->appAf;
    }

    /**
     * @param mixed $appAf
     *
     * @return self
     */
    public function setAppAf($appAf)
    {
        $this->appAf = $appAf;

        return $this;
    }
}