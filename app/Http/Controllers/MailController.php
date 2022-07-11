<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function contact(Request $request) {

        $request->validate([
            "name" => "required",
            "email" => "required | email",
            "sujet" => "required",
            "details" => "required"
        ]);


        $sujet = $request->sujet;
        $email = $request->email;
        $data = array("name" => $request->name, "subject" => $request->sujet, "details" => $request->details);
        Mail::send('mail.contact', $data, function($message) use ($sujet, $email) {
           $message->to('protransdem.fr@gmail.com', 'Contact')->subject
              ($sujet);
           $message->from($email);
        });
        return back()->with('success', 'Votre mail a été envoyé avec succès !');
     }

    public function devis(Request $request) {

        $request->validate([
            "name" => "required",
            "email" => "required | email",
            "rue" => "required",
            "ville" => "required",
            "zip" => "required",
            "radioGroup1" => "required",
            "radioGroup2" => "required",
            "rue1" => "required",
            "ville1" => "required",
            "zip1" => "required",
            "radioGroup3" => "required",
            "radioGroup4" => "required",
            "radioGroup5" => "required",
            "radioGroup6" => "required",
            "type" => "required",
            "categorie" => "required",
            "etage_1" => "required",
            "etage_2" => "required",
        ]);
        $data = array(
            "name" => $request->name,
            "phone" => $request->phone,
            "email" => $request->email,
            "rue" => $request->rue,
            "ville" => $request->name,
            "zip" => $request->name,
            "radioGroup1" => $request->name,
            "radioGroup2" => $request->name,
            "rue1" => $request->name,
            "ville1" => $request->name,
            "zip1" => $request->name,
            "radioGroup3" => $request->name,
            "radioGroup4" => $request->name,
            "radioGroup5" => $request->name,
            "radioGroup6" => $request->name,
            "type" => $request->name,
            "categorie" => $request->name,
            "etage_1" => $request->etage_1,
            "etage_2" => $request->etage_2,
        );
        Mail::send('mail.devis', $data, function($message) use ($request) {
           $message->to('protransdem.fr@gmail.com', 'Demande de devis')->subject
              ('Demande de devis');
           $message->from($request->email);
        });
        return back()->with('success', 'Demande de devis a été envoyé avec succès !');
     }
}
