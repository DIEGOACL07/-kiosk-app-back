<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistroRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(RegistroRequest $request) {
        $data = $request->validated();
    }
    public function login(Request $request) {
        $data
    }
    public function logout(Request $request) {
        $data
    }

}
