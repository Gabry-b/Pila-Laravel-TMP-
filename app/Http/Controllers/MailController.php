<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class MailController extends Controller
{
    public function sendEmail()
    {
        $details=[
            'title' => 'Newsletter MedievalWorld' ,
            'body' => 'Estamos encantados de recibir un miembro más, te trataremos mejor que al anillo de Sauron'
        ];

        
        Mail::to("blackops2570@gmail.com")->send(new TestMail($details));
        return back();
    }
}
