<?php

namespace App\Http\Controllers;

use Redirect;
use Illuminate\Http\Request;
use App\Services\APIService;

class ArtController extends Controller
{
    public function __construct() {
        $this->apiService = new APIService();
    }

    public function index() {
        $response = $this->apiService->list_arts();
        $arts = $response->arts;
        return view('arts.showcase-open-ari', [
            'arts' => $arts,
        ]);
    }

    public function query(Request $request) {
        if ($request->has('art-id')) {
            return redirect(action('ArtController@show', [
                'artId' => $request->input('art-id')
            ]));
        }
        return redirect(action('ArtController@index'));
    }

    public function show($artId, $part='identification') {
        $art = $this->apiService->get_art($artId);

        if ($art === 'not found') {
            abort(404);
        } else if ($art === 'error') {
            abort(500);
        }

        if ($part == 'identification') {
            return view('arts.showcase-details', [
                'art' => $art,
                'identification' => $art->identification
            ]);
        } else if ($part == 'ownership') {
            return view('arts.showcase-details-2', [
                'art' => $art,
                'identification' => $art->identification
            ]);
        } else if ($part == 'certificate') {
            return view('arts.showcase-details-3', [
                'art' => $art,
                'identification' => $art->identification
            ]);
        } else if ($part == 'pointers') {
            return view('arts.showcase-details-4', [
                'art' => $art,
                'identification' => $art->identification
            ]);
        }

        abort('404');
    }

    public function create_step1() {
        $invitationCode = session('invitation_code');

        if (empty($invitationCode)) {
            return redirect('/artists-apply')->withErrors(['請您先輸入驗證碼!']);
        }

        return view('arts.register-step1-open-ari');
    }

    public function store_step1(Request $request) {
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

        return redirect(action('ArtController@create_step2'));
    }

    public function create_step2() {
        return view('arts.register-step2-open-ari');
    }

    public function store_step2(Request $request) {
        $validatedData = $request->validate([
            'brief' => 'string',
        ]);

        $cachedData = [];
        foreach($validatedData as $key => $val) {
            $cachedData['newart.identification.'.$key] = $val;
        }
        session($cachedData);

        return redirect(action('ArtController@create_step3'));
    }

    public function create_step3() {
        return view('arts.register-step3-open-ari');
    }

    public function store_step3(Request $request) {
        $validatedData = $request->validate([
            'owner' => 'required',
            'owner_public' => 'boolean',
            'email' => 'required',
            'phone' => 'required',
            'contact_public' => 'boolean',
            'price' => 'required',
            'price_public' => 'boolean',
        ]);

        $cachedData = [];
        foreach($validatedData as $key => $val) {
            $cachedData['newart.ownership.'.$key] = $val;
        }
        session($cachedData);

        return redirect(action('ArtController@create_step4'));
    }

    public function create_step4() {
        return view('arts.register-step4-open-ari');
    }

    public function store_step4(Request $request) {

        $validatedData = $request->validate([
            'g-recaptcha-response' => 'required|captcha',
        ], [
        ]);

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
        ];
        $ownership = [
            'owner' => session('newart.ownership.owner'),
            'email' => session('newart.ownership.email'),
            'phone' => session('newart.ownership.phone'),
            'price' => session('newart.ownership.price'),
        ];

        $ret = $this->apiService->register_art(
            session('invitation_code'),
            $identification,
            $ownership
        );

        if ($ret === 'success') {
            $request->session()->forget('newart');

            return redirect('/register-step1-open-ari')
                  ->with('message', '申請已送出。我們審核後將儘速以 Email 通知您，謝謝您的參與！');
        }

        return back()->withInput()->withErrors([ '作業失敗，請再試一次' ]);
    }

}
