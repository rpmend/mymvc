<?php

class Pages extends Controller
{

    public function index()
    {
        $this->view('pages/index');
    }

    public function about()
    {
        $this->view('pages/about');
    }

    public function contact()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $contact = new Contact();
            $formData = [
                "name" => $_POST['name'],
                "email" => $_POST['email'],
                "subject" => $_POST['subject'],
                "message" => $_POST['message']
            ];            
            if ($contact->sendForm($formData)) {
                $data = [
                    'feedbackArray' => Messages::$flash
                ];
                $this->view('pages/contact', $data);
            } else {
                $data = [
                    'feedbackArray' => Messages::$flash
                ];
                $this->view('pages/contact', $data);
            }            
        }
        $this->view('pages/contact');
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user = new User();
            $user->setUsername($_POST['username']);
            $user->setPassword($_POST['password']);
            if ($user->login()) {
                $this->redirect('dashboard');
            } else {
                $data = [
                    'feedbackArray' => $user->getFeedbackArray()
                ];
                $this->view('pages/login', $data);
            }            
        }
        $this->view('pages/login');
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user = new User();
            $user->setUsername($_POST['username']);
            $user->setPassword($_POST['password']);
            if ($user->register()) {                
                $data = [
                    'feedbackArray' => $user->getFeedbackArray()
                ];
                $this->view('pages/login', $data);
            } else {
                $data = [
                    'feedbackArray' => $user->getFeedbackArray()
                ];
                $this->view('pages/register', $data);
            }
        }
        $this->view('pages/register');
    }

    public function logout()
    {
        $user = new User();
        $user->logout();
        $this->redirect('');
    }
}
