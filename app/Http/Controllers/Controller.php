<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function captchaCheck() {

      $response = Input::get('g-recaptcha-response');
      $remoteip = $_SERVER['REMOTE_ADDR'];
      $secret = env('RE_CAP_SECRET');

      $recaptcha = new \ReCaptcha\ReCaptcha($secret);
      $resp = $recaptcha->verify($response, $remoteip);
      if ($resp->isSuccess()) {
        return true;
      }
      return false;
    }

}
