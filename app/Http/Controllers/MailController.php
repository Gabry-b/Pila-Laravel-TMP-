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
            'title' => 'Correo de su camaradas MedievalWorld' ,
            'body' => 'Este es un ejemplo para enviar correos'
        ];

        
        Mail::to("blackops2570@gmail.com")->send(new TestMail($details));
        return "Correo Electronico ENVIADO";
    }
}
