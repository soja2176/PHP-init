<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
 public function home(){
  return view('welcome')->with([
    'tasks' => [
        'Go to the store',
        'Finish my screencast',
        'Clean the house',
        'Go to the gym',
        'Eat healthy',
        'Build my API',
    ],
    'foo' => 'bar',
]);
 }
    public function about(){
    return view('about');
    }
    public function contact(){
    return view('contact');
    }
}


