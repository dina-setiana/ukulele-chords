<?php

namespace App\Controllers;

use App\Controller;
use App\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $this->setLayout('auth');

        echo '<pre>';
        var_dump($request->getBody());
        echo '</pre>';

        $params = [
            'name' => ''
        ];

        return $this->render('login', $params);
    }
}
