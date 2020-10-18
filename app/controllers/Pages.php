<?php

class Pages extends Controller
{
    public function __construct() {
    }

    public function index()
    {
        $this->view('helo');
    }

    public function about($id)
    {
        echo $id;
    }
}
