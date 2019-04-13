<?php

namespace App\Services;

use Carbon\Carbon;
use Config;
use Log;
use GuzzleHttp\Client;

class APIService {
    private $client;
    private $endpoint;
    private $aid;
    private $secret;
    private $encryptionKey;

    private static $ServerTime;
    private static $TimeDiff;

    public function __construct() {
        $this->client = new Client();
        $this->endpoint = Config::get('services.api.endpoint');
        $this->access_token = Config::get('services.api.token');
    }

    private function request($path, $data=null) {

        $response = $this->client->post($this->endpoint.$path, [
            'form_params' => $data,
            'debug' => false,
            'http_errors' => false,
          ]);
        // $result = ($response->getBody()->getContents());

        return $response;
    }

    public function verify_artist($invitationCode) {
        $response = $this->request('/artist-verify', [
            'invitation_code' => $invitationCode
        ]);
        if ($response->getStatusCode() === 200) {
            return true;
        }

        return false;
    }

    public function get_artist($invitationCode) {
        $response = $this->request('/artist-verify', [
            'invitation_code' => $invitationCode
        ]);
        if ($response->getStatusCode() === 200) {
            $body = $response->getBody();

            return json_decode($body);
        }

        return false;
    }

    public function register_artist($name, $phone, $email, $url, $source, $description) {

        $response = $this->request('/artists', [
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'url' => $url,
            'source' => $source,
            'description' => $description,
        ]);

        Log::info('API Service /artists '.$response->getStatusCode().$response->getBody());

        if ($response->getStatusCode() === 201) {
            return 'success';
        } else if ($response->getStatusCode() === 401) {
            return 'conflicts';
        }

        return 'failed';
    }

    public function register_art($invitationCode, $identification, $ownership) {
        $body = [
            'invitation_code' => $invitationCode,
            'identification' => $identification,
            'ownership' => $ownership,
        ];

        $response = $this->client->post($this->endpoint.'/arts', [
            'body' => json_encode($body),
            'debug' => false,
            'http_errors' => false,
        ]);

        Log::info('API Service /arts '.$response->getStatusCode().$response->getBody());

        if ($response->getStatusCode() === 201) {
            return 'success';
        }

        return 'failed';
    }

}
