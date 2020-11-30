<?php

/*
 * This is the base Controller.
 * 
 * All controllers in the application inherit from this class.
 * 
 * The model method receives a model name, checks if a file 
 * in the app/models directory with that name really exists,
 * loads it, instatiates and returns it as an object.
 * If the file does not exists, it then ends the application.
 * 
 * The view method receives a view and an optional data array, 
 * checks if a file in the app/views directory with that name 
 * really exists and loads it.
 * If the file does not exists, it then ends the application.
 * 
 */

class Controller
{
    public function model($model)
    {
        if (file_exists('../app/models/' . $model . '.php')) {
            require_once '../app/models/' . $model . '.php';
            return new $model();
        } else {
            die('Model does not exists.');
        }
    }

    public function view($view, $data = [])
    {
        if (file_exists('../app/views/' . $view . '.php')) {
            require_once '../app/views/' . $view . '.php';
        } else {
            die('View does not exists.');
        }
    }

    public function redirect($url)
    {
        header("Location: " . URLROOT . "/" . $url); 
    }
}
