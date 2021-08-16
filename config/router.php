<?php

class router
{
	private $routes; // переменная с путями
	function __construct()
	{
		$routesPatch = ROOT.'/routes/routes.php'; // путь к массиву с путями
		$this->routes = include($routesPatch); // заполняю массив с путями путями
	}
	
	private function getUrl() // функция на получение пути в браузере
	{
		$url = $_SERVER['REQUEST_URI']; 
		$url = trim($url, '/');
		return $url;
	}

	public function run()
	{
		$url = $this->getUrl();
		foreach ($this->routes as $pattern => $path)
		{
			if ($url == $pattern) 
			{
				$segments = explode('/', $path);
				$controllerName = array_shift($segments). 'Controller';
				$controllerName = ucfirst($controllerName);
				$functionName = array_shift($segments);
				$parametrs = $segments;
				$controlFile = ROOT.'/controllers/'. $controllerName . '.php';
				if(file_exists($controlFile))
				{
					include_once($controlFile);
				}
				$controller = new $controllerName;
				$result = call_user_func_array([$controller, $functionName], $parametrs);
			}
		}
	}
}