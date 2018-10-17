<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;

class ContactMessageController extends Controller
{
    public function create()
    {
    	return view('contacto');
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
    		'nombre' => 'required',
    		'telefono' => 'required|digits:9',
    		'email' => 'required|email',
    		'comentario' => 'required'
    	]);

    	$data = array(
    		'email' => $request->email, 
    		'nombre' => $request->nombre,
    		'msg' => 	$request->comentario,
    		'telefono' => $request->telefono
    	);

    	Mail::send('emails.contact-message', $data, function($message) use($data){
    		$message->from('dra.mora.cirugiaplastica@gmail.com');
    		$message->replyto($data['email']);
    		$message->to('dra.mora.cirugiaplastica@gmail.com');
    		$message->subject($data['nombre']);
    	});

        Session::flash('success', 'Tu mensaje ha sido enviado exitosamente!');

    	return redirect()->back();
    }
}
