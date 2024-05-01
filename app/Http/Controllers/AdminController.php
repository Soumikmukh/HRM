<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function login(Request $request) {
        echo "<pre>";
        print_r($request->getData());
        return view("admin.login");
    }
}
