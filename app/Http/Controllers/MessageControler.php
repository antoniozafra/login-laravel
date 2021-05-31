<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\MessageRecived;


class MessageControler extends Controller
{

    public function store()
    {

         $message = request()->validate( [
             'name'=> 'required',
             'email' => 'required|email',
             'password' => 'required"min;4',
         ],[
             'nombre.required' => __('I need your name')

         ]);


         //enviar email

         Mail :: to('antonioza123456789@gmail.com')->queue(new MessageRecived($message));
            


         return back()->with('status','Mensaje Enviado');
        

    }



}
