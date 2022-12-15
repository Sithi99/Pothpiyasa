<?php

class App
{
    protected $controller = "Home";
    protected $method = "index";
    protected $params = array();

    public function __construct()
    {
        $URL = $this->getURL();
        if(file_exists("../private/controllers/".$URL[0].".php"))
        {
            $this->controller = ucfirst($URL[0]);
            unset($URL[0]);
        }
        
        require("../private/controllers/" . $this->controller . ".php");
        $this->controller = new $this->controller;

        if(isset($URL[1])){
            if(method_exists($this->controller, $URL[1]))
            {
                $this->method = ucfirst($URL[1]);
                unset($URL[1]);
            }
        }

        //Now, url only have params only, controller and method is unset
        $URL = array_values($URL);
        $this->params = $URL;

        // Using $this->controller & $this->method, this function identify the,
        // what class & what method that should call, then it pass the $this->params as
        // arguments and calling the particular funcion
        call_user_func_array([$this->controller,$this->method], $this->params);
    }

    private function getURL()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : "Home";
        return explode("/", filter_var(trim($url, "/")),FILTER_SANITIZE_URL);

    }
}


