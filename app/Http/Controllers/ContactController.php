<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Mail\ContactEmail;

class ContactController extends Controller
{
    public function __construct() {
    }

    public function store(Request $request, $artId) {
        $validatedData = $request->validate([
            'g-recaptcha-response' => 'required|captcha',
            'name' => 'required',
            'website' => 'required|url',
            'email' => 'required|email',
            'comments' => 'required',
        ], [
            'g-recaptcha-response.*' => '請勾選 I\'m not a robot.',
        ]);

        $data = $validatedData;
        $data['artId'] = $artId;

        $to = explode(';', str_replace(',', ';', \Config::get('app.adminEmails')));
        Mail::to($to)->send(new ContactEmail($data));

        return redirect(action('ArtController@show', [ 'artId' => $artId, 'part' => 'certificate' ]))
                  ->with('message', '謝謝您，表單資料已送出。我們將儘快與您聯絡！');
    }
}
