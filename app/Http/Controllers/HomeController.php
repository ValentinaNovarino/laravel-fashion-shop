<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;

class HomeController extends Controller
{
    public function index() {
        $allDresses = Dress::all();
        $data = [
            'dresses' => $allDresses
        ];
        return view('home', $data);
    }
}
