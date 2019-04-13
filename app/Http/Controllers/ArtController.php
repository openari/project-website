<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;

class ArtController extends Controller
{
    public function create_step1() {
        $invitationCode = session('invitation_code');

        if (empty($invitationCode)) {
            return Redirect::back()->withErrors(['請您先輸入驗證碼!']);
        }

        return view('arts.register-step1-open-ari');
    }

    public function create_step2() {
        return view('arts.register-step2-open-ari');
    }

    public function create_step3() {
        return view('arts.register-step3-open-ari');
    }

    public function create_step4() {
        return view('arts.register-step4-open-ari');
    }

    public function store() {

    }
}
