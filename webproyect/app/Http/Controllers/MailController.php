<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $status = false;
        return View('contacto',['status' => $status]);
	}

    public function send(Request $request)
    {
        //guarda el valor de los campos enviados desde el form en un array
        $data = $request->all();
        //se envia el array y la vista lo recibe en llaves individuales {{ $email }} , {{ $subject }}...
        Mail::send('emails.mensaje', $data, function($message) use ($request)
        {
            //remitente
            $message->from($request->email, $request->name);
            //asunto
            $message->subject($request->subject);
            //receptor
            $message->to(env('CONTACT_MAIL'), env('CONTACT_NAME'));
        });
        $status = true;
        return View('contacto')->with(['status' => $status]);
    }

}