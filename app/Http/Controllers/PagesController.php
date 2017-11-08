<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Return index view
    public function index () {
        return view('pages.index');
    }

    // Return about view
    public function about () {
        return view('pages.about');
    }

    //Return services view
    public function services () {
        return view('pages.services');
    }
}
