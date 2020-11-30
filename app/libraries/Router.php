<?php

/* 
 * This is the router of the application.
 * 
 * This class is instanciated at the start of the application.
 * It is responsible for interpreting the url and calling the
 * requested controller/method based on that.
 * 
 */

class Router
{
    protected $controller = 'Pages';    // Default controller
    protected $method = 'index';        // Default method
    protected $params = [];

    public function __construct()
    {
        // Sanitize the url
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
        } else {
            $url = '';
        }

        // Separate the url parts
        $url = explode('/', $url);

        // Check if there is a controller matching the first part of the url
        if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
            $this->controller = ucwords($url[0]);
            unset($url[0]);
        }

        // Check Authentication
        if ($this->controller != 'Pages') {
            if (!isset($_SESSION["userLoggedIn"])) {
                header("Location: ../");
            }
        }

        // Require the controller
        require_once '../app/controllers/' . $this->controller . '.php';

        // Instantiate controller class
        $this->controller = new $this->controller;

        // Check for second part of url        
        if (isset($url[1])) {
            // Check if method exists in controller
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // Get params
        $this->params = $url ? array_values($url) : [];

        // Call the callback with array of params
        call_user_func_array([$this->controller, $this->method], $this->params);
    }
}

