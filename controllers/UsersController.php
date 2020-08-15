<?php


class UsersController
{

    public function index()
    {
        $nameslist   = App::get('database')->selectAll('names');
        
        return view('users',
    [
        'nameslist'=>$nameslist
    ]);
    }
    public function store()
    {

        App::get('database')->insert('names',
        [
            'name'=>$_POST['name']
        ]);
        return redirect('users');
        // header('Location: /');
    }


}