<?php

class Users extends Controller
{
    public function index()
    {
        $data = [
            'title' => SITENAME
        ];

        $this->view('users/index', $data);
    }    
}
