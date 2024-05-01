<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class loginController extends Controller
{
    public function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        $response = Http::withBasicAuth($username, $password)
                        ->post('http://192.168.0.102:8080/api/v1/users/login', [
                            'username' => 'admin',
                            'password' => 'admin',
                        ]);
        
        dd($response);    
    }
}
