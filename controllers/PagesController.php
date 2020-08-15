<?php


class PagesController
{
    public function home()
    {
        // $nameslist =App::get('database')->selectAll('names');
        // require 'views/index.view.php';
        return view('index');    }
    public function about()
    {
        // require 'views/about.view.php';
        return view ('about');
    }
    public function contact()
    {
        // require 'views/contact.view.php';
        return view('contact');
    }
}