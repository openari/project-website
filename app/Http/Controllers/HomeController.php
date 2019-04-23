<?php

namespace App\Http\Controllers;

use Redirect;
use Illuminate\Http\Request;
use App\Services\APIService;

class HomeController extends Controller
{
    public function __construct() {
        $this->apiService = new APIService();
    }

    public function index() {
        session()->forget('invitation_code');
        $response = $this->apiService->list_arts();
        $arts = $response->arts;
        return view('index', [
            'arts' => $arts,
        ]);
    }

}
