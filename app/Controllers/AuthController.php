<?php

namespace App\Controllers;

use App\Helpers\View;
use App\Models\User;

class AuthController 
{
    public function login()
    {
        View::render('auth/login', [
            'title' => 'Login'
        ]);
    }

    public function authenticate()
    {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        $user = (new User())->findByEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user;
            header('Location: /dashboard'); // or /users
            exit;
        }

        View::render('auth/login', ['error' => 'Invalid credentials']);
    }

    public function register()
    {
        View::render('auth/register', [
            'title' => 'Register'
        ]);
    }

    public function storeUser()
    {
        // Logic to store the new user in the database
        $user = new User();
        $user->create([
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => password_hash($_POST['password'], PASSWORD_BCRYPT)
        ]);
        header("Location: /login");
        exit;
    }

    public function logout()
    {
        // Logic to log out the user
        header("Location: /login");
        exit;
    }
}