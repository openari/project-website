<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\APIService;

class PointerController extends Controller
{
    public function __construct() {
        $this->apiService = new APIService();
    }

    public function create($artId) {
        $invitationCode = session('invitation_code');

        if (empty($invitationCode)) {
            session([ 'todo' => 'pointer', 'todo_arg1' => $artId ]);
            return redirect('/artists-apply')->withErrors(['請您先輸入驗證碼!']);
        }

        $art = $this->apiService->get_art($artId);

        if ($art === 'not found') {
            abort(404);
        } else if ($art === 'error') {
            abort(500);
        }

        return view('pointers.apply-d-open-ari', [
            'art' => $art,
        ]);
    }

    public function store(Request $request, $artId) {
        $validatedData = $request->validate([
            'g-recaptcha-response' => 'required|captcha',
            'applicant' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'title' => 'required',
            'pointer_url' => 'required|url',
            'abstract' => 'required',
            'agree' => 'required|accepted',
        ], [
            'g-recaptcha-response.*' => '請勾選 I\'m not a robot.',
            'agree.*' => '您必須同意「指向連結，如有修改或更動將會失效」才能繼續',
        ]);

        $invitationCode = session('invitation_code');

        if (empty($invitationCode)) {
            return redirect('/artists-apply')->withErrors(['請您先輸入驗證碼!']);
        }

        $ret = $this->apiService->add_pointer(
        // dd(
            $invitationCode,
            $artId,
            $request->input('applicant'),
            $request->input('phone'),
            $request->input('email'),
            $request->input('title'),
            $request->input('pointer_url'),
            $request->input('abstract')
        );

        if ($ret === 'success') {
          return redirect(action('ArtController@show', [ 'artId' => $artId, 'part' => 'pointers' ]))
                  ->with('message', '申請已送出。我們審核後將儘速以 Email 通知您，謝謝您的參與！');
        } else if ($ret === 'conflicts') {
          return back()->withErrors([ '此 Email 已經申請過驗證碼，請洽系統管理員。' ]);
        }

        return back()->withInput()->withErrors([ '作業失敗，請再試一次' ]);

    }
}
