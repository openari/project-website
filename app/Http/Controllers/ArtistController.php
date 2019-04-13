<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\APIService;

class ArtistController extends Controller
{
    public function __construct() {
        $this->apiService = new APIService();
    }

    public function index() {
        $invitation_code = session('invitation_code');
        return view('artists.apply-open-ari', [
          'invitation_code' => $invitation_code
        ]);
    }

    public function apply(Request $request) {
        $validatedData = $request->validate([
            'g-recaptcha-response' => 'required|captcha',
            'invitation_code' =>
                function ($attribute, $value, $fail) {
                    if (empty($value)) {
                        $fail('驗證碼為必要欄位');
                        return;
                    }

                    if (!$this->apiService->verify_artist($value)) {
                        $fail('無效的驗證碼，請確認後重新輸入');
                    }
                },
        ], [
            'g-recaptcha-response.*' => '請勾選 I\'m not a robot.',
        ]);

        $invitationCode = $request->input('invitation_code');

        session([
            'invitation_code' => $invitationCode,
            'artist' => $this->apiService->get_artist($invitationCode),
        ]);

        return redirect('/register-step1-open-ari');
    }

    public function create() {
        return view('artists.register-open-ari');
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'g-recaptcha-response' => 'required|captcha',
            'name' => 'required',
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

        $ret = $this->apiService->register_artist(
        // dd(
            $request->input('name'),
            $request->input('phone'),
            $request->input('email'),
            $request->input('url'),
            $request->input('source'),
            $request->input('description')
        );

        if ($ret === 'success') {
          return redirect('/artists-apply')
                  ->with('message', '申請已送出。我們審核後將儘速以 Email 通知您，謝謝您的參與！');
        } else if ($ret === 'conflicts') {
          return back()->withErrors([ '此 Email 已經申請過驗證碼，請洽系統管理員。' ]);
        }

        return back()->withInput()->withErrors([ '作業失敗，請再試一次' ]);

    }
}
