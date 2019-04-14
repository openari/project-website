<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\APIService;

class ApplicationController extends Controller
{
    public function __construct() {
        $this->apiService = new APIService();
    }

    public function create() {
        return view('applications.register-open-ari');
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'g-recaptcha-response' => 'required|captcha',
            'applicant' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'source' => 'required',
            'url' => 'required|url',
            'description' => 'required',
            'agree_terms' => 'required|accepted',
        ], [
            'g-recaptcha-response.*' => '請勾選 I\'m not a robot.',
            'agree_terms.*' => '您必須同意了解 OPEN-ARI 相關計畫與隱私權條款才能繼續',
        ]);

        $ret = $this->apiService->register_application(
        // dd(
            $request->input('applicant'),
            $request->input('phone'),
            $request->input('email'),
            $request->input('url'),
            $request->input('source'),
            $request->input('description')
        );

        if ($ret === 'success') {
          return redirect('/applications/register')
                  ->with('message', '申請已送出。我們審核後將儘速以 Email 通知您，謝謝您的參與！');
        }

        return back()->withInput()->withErrors([ '作業失敗，請再試一次' ]);

    }
}
