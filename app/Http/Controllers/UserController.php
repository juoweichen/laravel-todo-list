<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPSTORM_META\map;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return $request->fullUrl();
    }
}
