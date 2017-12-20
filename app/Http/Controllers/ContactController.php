<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class ContactController extends Controller
{
    public function index()
    {
    	return view('contact');
    }

    public function postMessage(Request $request)
    {
        $this->validate($request, [
        	'name' => 'required',
            'email' => 'email|required',
            'message' => 'min:5|required' 
        ]);

        $name = $request->name;
        $email = $request->email;
        $message = $request->message;

        $detail = new Message;
        $detail->name = $name;
        $detail->email = $email;
        $detail->message = $message;

        $detail->save();

        return redirect('/')->with('Sucess Alert', 'Thank you for your query');

        
    }
}
