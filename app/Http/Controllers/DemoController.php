<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
   public function userDemo()
   {
        return view('user');
   }

   public function managerDemo()
   {
        return view('manager');
   }

   public function permisionDenied()
   {
       return view('nopermission');
   }
}
