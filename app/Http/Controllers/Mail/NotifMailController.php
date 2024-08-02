<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use App\Mail\NotifMail;
use App\Models\FicheModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NotifMailController extends Controller
{
    public static function send($subject,$details,FicheModel $patient)
    {
        Mail::to($patient['mail'])->send(new NotifMail($subject,$details));

        return [
            "message" => "mail sent successfully"
        ];
    }
}
