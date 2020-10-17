<?php

/* 
 * This is responsible for 
 * looking at the url, 
 * pulling out whats needs to be pulled out and 
 * loading what needs to be loaded based on that.
 */

class Core
{
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct()
    {
        $this->getUrl();
    }

    public function getUrl()
    {
        echo $_GET['url'];
    }
}
