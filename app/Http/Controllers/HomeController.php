<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Mail;
use Session;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function contactSuccess()
    {
        return view('contactSuccess');
    }

    public function postContact(Request $request)
    {
    	$this->validate($request, [
    				'email' => 'required|email']);

    	$data = array(
    		'email' => $request->email,
    		'subject' => $request->subject,
    		'bodyMessage' => $request->message
    		);

    	Mail::send('emails.contact', $data, function($message) use ($data){
    		$message->from($data['email']);
    		$message->to('christian.lewis.sims@gmail.com');
    		$message->subject($data['subject']);
    	});

    	return redirect('/contact-success');

    }

    public function cv()
    {
    	$file= public_path(). "/pdf/Christian-Sims-CV.pdf";

    	$headers = [
    	              'Content-Type' => 'application/pdf',
    	           ];

    	return response()->download($file, 'Christian-Sims-CV.pdf', $headers);
    }
}
