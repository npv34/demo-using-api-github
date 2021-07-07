<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    function index() {

        $response = Http::get('https://api.github.com/users');
        $users = json_decode($response->body());
        return view('home', compact('users'));
    }

    function search(Request $request) {
        $keyword = $request->name;
        $response = Http::get('https://api.github.com/users/' . $keyword);
        $user = json_decode($response->body());
        $users = [$user];
        return view('home', compact('users'));
    }
}
