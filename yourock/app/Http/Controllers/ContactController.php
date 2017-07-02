<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    //Función para enviar un email a la compañía
    public function postContact(Request $request) {
        $this->validate($request, [
            'email' => 'required|email|max:255',
            'subject' => 'required|max:50',
            'message' => 'required|max:255',
		]);

        $data = array(
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'bodyMessage' => $request->input('message')
        );

        Mail::send('emails.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('yourockmusic1992@gmail.com', 'YOU ROCK!')->subject($data['subject']);
        });

        return redirect()->action('ContactController@index')->with('message', 'Mensaje enviado');

    }
}
