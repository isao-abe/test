<?php


namespace App\Http\Controllers;


use App\User;

class TestController extends Controller
{
    public function index()
    {
        $user = new User();
        $users = $user->getUser();
        return view('welcome', [
            "users" => $users
        ]);
    }
}
