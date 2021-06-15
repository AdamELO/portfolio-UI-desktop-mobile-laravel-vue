<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'subject' => 'required',
        ]);
        $message = new Message();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->message = $request->message;
        $message->save();
        Mail::to('elomari-adam@hotmail.com')->send(new ContactEmail($message->name, $message->email, $message->subject, $message->message));
        return response()->json($message);
    }
}
