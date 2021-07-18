<?php

namespace App\Http\Controllers;
use Mail;
use App\Mail\MessageReceived;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    //
    public function store(){
       $message= request()->validate([
            'nombre'=>'required',
            'apellidos'=>'required',
            'email'=>'required|email',
            'direccion'=>'required|min:8',
        ],[
            'nombre.required'=>'El nombre es necesario'
        ]);
        Mail::to('admin@gmail.com')->queue(new MessageReceived(($message)));

        //return new MessageReceived($message);

        return 'Mensaje Enviado';
    }
}
