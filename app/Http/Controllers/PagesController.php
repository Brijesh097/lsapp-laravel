<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Return index view
    public function index () {
        $title = 'Welcome to Laravel :)';

        // Passing value into blade template using WITH method
        return view('pages.index')->with('title', $title);
    }

    // Return about view
    public function about () {
        $title = 'About Page';

        // Passing value into blade template using COMPACT function
        return view('pages.about', compact('title'));
    }

    //Return services view
    public function services () {

        // Created an associative array containing the title & services to be provided
        $data = array(
            'title'    => 'Services Page',
            'services' => ['Web Design', 'Programming', 'SEO']
        );

        // Passing value into blade template using WITH method
        return view('pages.services')->with($data);
    }
}
