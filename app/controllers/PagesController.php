<?php

namespace App\Controllers;

use App\Core\App;

class PagesController {
  public function home() {
    require 'utils/functions.php';

    $tasks = App::get('database')->selectAll('todos', 'Task');
    $users = App::get('database')->selectAll('names', 'Name');
    
    return view('index', compact ('users', 'tasks'));
  }

  public function about() {
    return view('about');
  }

  public function contact() {
    return view('contact');
  }
}