<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Message; // Ensure this is imported

class ContactController extends Controller
{
    public function send()
    {
        Mail::raw('Hello everyone', function (Message $message) {
            $message->to('e.e.mtambala@gmail.com')
                ->subject('Niaje')
                ->from('e.e.mtambala@gmail.com');
        });

        return 'Thank you, your message has been sent successfully';
    }
}
