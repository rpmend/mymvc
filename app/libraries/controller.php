<?php

/*
 * Base Controller
 * Loads the models and views
 */

class Controller
{
    public function model($model)
    // Load model
    {
        // Require model file
        require_once '../app/models/' . $model . '.php';

        // Instantiate the model
        return new $model();
    }

    // Load view
    public function view($view, $data = [])
    {
        // Check for the view file
        if (file_exists('../app/views/' . $view . '.php')) {
            // Require view file
            require_once '../app/views/' . $view . '.php';
        }else {
            // View does not exists
            die('View does not exists.');
        }
    }
}
