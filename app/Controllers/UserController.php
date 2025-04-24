<?php

namespace App\Controllers;

use App\Helpers\View;
use App\Models\User;

class UserController
{
    public function index()
    {
        $users = (new User())->all();
        View::render('users/index', compact('users'));
    }

    public function create()
    {
        View::render('users/create');
    }

    public function store()
    {
        $user = new User();
        $user->create($_POST);
        header("Location: /users");
        exit;
    }

    public function edit($id)
    {
        $user = (new User())->find($id);
        View::render('users/edit', compact('user'));
    }

    public function update($id)
    {
        (new User())->update($id, $_POST);
        header("Location: /users");
        exit;
    }

    public function delete($id)
    {
        (new User())->delete($id);
        header("Location: /users");
        exit;
    }
}
