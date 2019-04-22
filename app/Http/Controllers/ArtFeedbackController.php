<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Mail\FeedbackEmail;

class ArtFeedbackController extends Controller
{
    public function __construct() {
    }

    public function create($artId) {
        return view('feedback.apply-feedback-open-ari', [ 'artId' => $artId ]);
    }

    public function store(Request $request, $artId) {
        $validatedData = $request->validate([
            'g-recaptcha-response' => 'required|captcha',
            'applicant' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'feedback' => 'required',
        ], [
            'g-recaptcha-response.*' => '請勾選 I\'m not a robot.',
        ]);

        $data = $validatedData;
        $data['artId'] = $artId;

        Mail::to($validatedData['email'])->send(new FeedbackEmail($data));

        return redirect(action('ArtController@show', [ 'artId' => $artId ]))
                  ->with('message', '檢舉資料已送出。謝謝您的參與！');
    }
}
