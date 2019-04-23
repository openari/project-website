<?php

namespace App\Http\Controllers;

use Redirect;
use Illuminate\Http\Request;
use App\Services\APIService;

class ArtRevisionController extends Controller
{
    public function __construct() {
        $this->apiService = new APIService();
    }

    public function create($artId) {

        $invitationCode = session('invitation_code');

        if (empty($invitationCode)) {
            session([ 'todo' => 'revision', 'todo_arg1' => $artId ]);
            return redirect('/artists-apply')->withErrors(['請您先輸入驗證碼!']);
        }
        $art = $this->apiService->get_art($artId);

        if ($art === 'not found') {
            abort(404);
        } else if ($art === 'error') {
            abort(500);
        }

        session()->forget('newart');
        session()->forget('modifyart');

        // recursively cast a PHP object to array
        $array = json_decode(json_encode($art), true);
        session(['newart' => $array]);
        session(['modifyart' => true]);

        return redirect(action('ArtRevisionController@create_step1', ['artId' => $artId ]));
    }

    public function create_step1($artId) {
        if (null == session('modifyart')) {
            return redirect('/');
        }

        return view('arts.register-step1-open-ari', [ 'revision' => true, 'artId' => $artId ]);
    }

    public function store_step1(Request $request, $artId) {
        $validatedData = $request->validate([
            'type_of_object' => 'required',
            'materials' => 'required',
            'techniques' => 'required',
            'measurements' => 'required',
            'inscriptions_and_markings' => 'required',
            'distinguishing_features' => 'required',
            'title' => 'required',
            'subject' => 'required',
            'date_or_period' => 'required',
            'maker' => 'required',
        ]);

        $cachedData = [];
        foreach($validatedData as $key => $val) {
            $cachedData['newart.identification.'.$key] = $val;
        }
        session($cachedData);

        return redirect(action('ArtRevisionController@create_step2', ['artId' => $artId ]));
    }

    public function create_step2($artId) {
        if (null == session('modifyart')) {
            return redirect('/');
        }

        return view('arts.register-step2-open-ari', [ 'revision' => true, 'artId' => $artId ]);
    }

    public function store_step2(Request $request, $artId) {
        $validatedData = $request->validate([
            'brief' => 'string',
        ]);

        $cachedData = [];
        foreach($validatedData as $key => $val) {
            $cachedData['newart.identification.'.$key] = $val;
        }
        session($cachedData);

        return redirect(action('ArtRevisionController@create_step3', ['artId' => $artId ]));
    }

    public function create_step3($artId) {
        if (null == session('modifyart')) {
            return redirect('/');
        }

        return view('arts.register-step3-open-ari', [ 'revision' => true, 'artId' => $artId ]);
    }

    public function store_step3(Request $request, $artId) {
        $validatedData = $request->validate([
            'owner' => 'required',
            'owner_public' => 'boolean',
            'email' => 'required',
            'phone' => 'required',
            'contact_public' => 'boolean',
            'price' => '',
            'price_public' => 'boolean',
        ]);

        $cachedData = [];
        foreach($validatedData as $key => $val) {
            $cachedData['newart.ownership.'.$key] = $val;
        }
        session($cachedData);

        return redirect(action('ArtRevisionController@create_step4', ['artId' => $artId ]));
    }

    public function create_step4($artId) {
        if (null == session('modifyart')) {
            return redirect('/');
        }

        return view('arts.register-step4-open-ari', [ 'revision' => true, 'artId' => $artId ]);
    }

    public function store_step4(Request $request, $artId) {

        $validatedData = $request->validate([
            'g-recaptcha-response' => 'required|captcha',
        ], [
        ]);

        if (session('newart.identification.image') == null) {
            return back()->withInput()->withErrors([ '請您上傳圖片' ]);
        }

        $identification = [
            'applicant' => session('artist')->name,
            'email' => session('artist')->email,
            'phone' => session('artist')->phone,
            'type_of_object' => session('newart.identification.type_of_object'),
            'materials' => session('newart.identification.materials'),
            'techniques' => session('newart.identification.techniques'),
            'measurements' => session('newart.identification.measurements'),
            'inscriptions_and_markings' => session('newart.identification.inscriptions_and_markings'),
            'distinguishing_features' => session('newart.identification.distinguishing_features'),
            'title' => session('newart.identification.title'),
            'subject' => session('newart.identification.subject'),
            'date_or_period' => session('newart.identification.date_or_period'),
            'maker' => session('newart.identification.maker'),
            'brief' => session('newart.identification.brief'),
            'image' => session('newart.identification.image'),
        ];
        if (null !== session('newart.identification.attachments')) {
            $identification['attachments'] = session('newart.identification.attachments');
        }
        $owner_public = session('newart.ownership.owner_public') ? true: false;
        $contact_public = session('newart.ownership.contact_public') ? true: false;
        $price_public = session('newart.ownership.price_public') ? true: false;
        $ownership = [
            'owner' => session('newart.ownership.owner'),
            'owner_public' => $owner_public,
            'email' => session('newart.ownership.email'),
            'phone' => session('newart.ownership.phone'),
            'contact_public' => $contact_public,
            'price' => session('newart.ownership.price'),
            'price_public' => $price_public,
        ];

        // dd($identification,
        //     $ownership);

        $ret = $this->apiService->update_an_art(
            $artId,
            session('invitation_code'),
            $identification,
            $ownership
        );

        if ($ret === 'success') {
            $request->session()->forget('newart');
            $request->session()->forget('modifyart');

            return redirect(action('ArtController@show', ['artId' => $artId ]))
                  ->with('message', '異動申請已送出。我們審核後將儘速以 Email 通知您，謝謝您的參與！');
        }

        return back()->withInput()->withErrors([ '作業失敗，請再試一次' ]);
    }

}
