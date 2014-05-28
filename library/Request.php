<?php

class Request {
	protected $url;

	public function __construct($url)
	{
		$this->url = $url;
		$segments = explode('/', $this->getUrl());
		var_dump($segments);
		exit();
	}

	public function getUrl()
	{
		return $this->url;
	}

	public function getController()
	{

	}
	public function getControllerClassName()
	{

	}

	public function getControllerFileName()
	{

	}

}