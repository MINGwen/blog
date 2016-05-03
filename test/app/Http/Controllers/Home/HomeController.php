<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
public function index(){
//  return view('welcome');
return view("Home.index");
}
    public function welcome(){
  return view('welcome');

    }

}
