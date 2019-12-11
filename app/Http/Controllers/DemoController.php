<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class DemoController extends Controller
{
   public function userDemo()
   {
        return view('user');
   }

   public function managerDemo()
   {
       $messages = DB::select('SELECT * FROM user_message');

       return view('manager')->with('messages', $messages);
   }

   public function permisionDenied()
   {
       return view('nopermission');
   }

   public function messageUser()
   {
       $data = request()->validate([

           'name' => 'required',
           'email' => 'required',
           'subject' => 'required',
           'message' => 'required',
           'file' => 'required'

       ]);

        if(isset($_POST)){
           $name = strip_tags(\request('name'));
           $email = strip_tags(\request('email'));
           $subject = strip_tags(\request('subject'));
           $message = strip_tags(\request('message'));
           $file = strip_tags(\request('file'));

           DB::insert("INSERT INTO user_message (name, email, subject, message, file, answer_status, created_at) values(?, ?, ?,  ?, ?, ?, ?)",
               [$name, $email,  $subject, $message, $file, 0, date("Y-m-d H:i:s")]);


            App\Jobs\SendMessage::dispatch('TEST_MESSAGE')->delay(now()->addMinutes(10));
        }

       return view('upload');
   }

   public function answerManager()
   {
       if(isset($_POST)){
           $answered = \request('answer');
           $id = \request('id');
       }

       if( $answered == "on"){

           DB::update('UPDATE user_message SET answer_status = 1 WHERE id = ?', [$id]);

       }

       $messages = DB::select('SELECT * FROM user_message');

       return view('manager')->with('messages', $messages);
   }
}
