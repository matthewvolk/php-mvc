<?php

class UsersController {

  public function index() {
    $users = App::get('database')->selectAll('names', 'Name');

    return view('users', compact('users'));
  }

  public function store() {
    App::get('database')->insert('names', [
      'name' => $_POST['name'],
    ]);
    
    return redirect('users');
  }
}