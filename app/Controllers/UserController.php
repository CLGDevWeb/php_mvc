<?php

namespace App\Controllers;

use App\Models\User;
use App\Validation\Validator;

class UserController extends Controller
{
    public function login()
    {
        return $this->view('auth.login');
    }
    
    public function store()
    {
        $validator = new Validator($_POST);
        $errors = $validator->validate([
            'username' => ['required', 'min:3'],
            'password' => ['required'],
        ]);

        if ($errors) {
            $_SESSION['errors'][] = $errors;
            header('Location: /php_mvc/login');
            exit;
        }
        
        $user = (new User($this->getDB()))->getByUsername($_POST['username']);

        if (password_verify($_POST['password'], $user->password )) {
            $_SESSION['auth'] = (int) $user->admin;
            return header('Location: /php_mvc/admin/posts?success=true');
        } else {
            return header('Location: /php_mvc/login');
        }
    }

    public function logout()
    {
        session_destroy();

        return header('Location: /php_mvc/');
    }
}