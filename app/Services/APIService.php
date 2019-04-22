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
        $this->endpoint = Config::get('services.api.endpoint');
        $this->client = new Client([ 'base_uri' => $this->endpoint ]);
        $this->access_token = Config::get('services.api.token');
    }

    private function headers() {
        return [
            'Authorization' => 'Bearer ' . $this->access_token
        ];
    }

    private function request($path, $data=null) {

        $response = $this->client->post($path, [
            'headers' => $this->headers(),
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

    public function upload_image($file) {
        $response = $this->client->post('/images', [
        // dd([
            'headers' => $this->headers(),
            'multipart' => [[
                'name' => 'image',
                'contents' => fopen($file, 'r'),
            ]],
            'debug' => true,
            'http_errors' => false,
        ]);

        Log::info('API Service /images '.$response->getStatusCode().$response->getBody());

        $ret = json_decode($response->getBody());

        if ($response->getStatusCode() === 201) {
            return $ret->url;
        }

        return false;
    }

    public function upload_attachment($file) {
        $response = $this->client->post('/attachments', [
        // dd([
            'headers' => $this->headers(),
            'multipart' => [[
                'name' => 'attachment',
                'contents' => fopen($file, 'r'),
            ]],
            'debug' => true,
            'http_errors' => false,
        ]);

        Log::info('API Service /attachments '.$response->getStatusCode().$response->getBody());

        $ret = json_decode($response->getBody());

        if ($response->getStatusCode() === 201) {
            return $ret;
        }

        return false;
    }

    public function register_art($invitationCode, $identification, $ownership) {
        $body = [
            'invitation_code' => $invitationCode,
            'identification' => $identification,
            'ownership' => $ownership,
        ];

        Log::info('API Service register_art');
        Log::info(var_export($body));

        $response = $this->client->post('/arts', [
            'headers' => $this->headers(),
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

    public function list_arts() {

        $response = $this->client->get('/arts', [
            'headers' => $this->headers(),
            'debug' => false,
            'http_errors' => false,
        ]);

        if ($response->getStatusCode() === 200) {
            $body = $response->getBody();

            return json_decode($body);
        }

        return false;
    }

    public function get_art($artId) {

        $response = $this->client->get('/arts/'.$artId, [
            'headers' => $this->headers(),
            'debug' => false,
            'http_errors' => false,
        ]);

        if ($response->getStatusCode() === 200) {
            $body = $response->getBody();

            return json_decode($body);
        } else if ($response->getStatusCode() === 404) {

            return 'not found';
        } else {
            return 'error';
        }

    }

    public function add_pointer($invitationCode, $artId, $applicant, $phone, $email, $title, $pointer_url, $abstract) {

        $body = [
            'invitation_code' => $invitationCode,
            'pointer' => [
                'applicant' => $applicant,
                'phone' => $phone,
                'email' => $email,
                'title' => $title,
                'pointer_url' => $pointer_url,
                'abstract' => $abstract,
            ]
        ];

        $response = $this->client->post('/arts/'.$artId.'/pointers', [
            'headers' => $this->headers(),
            'body' => json_encode($body),
            'debug' => false,
            'http_errors' => false,
        ]);

        Log::info('API Service /arts/'.$artId.'/pointers '.$response->getStatusCode().$response->getBody());

        if ($response->getStatusCode() === 201) {
            return 'success';
        }

        return 'failed';
    }

    public function register_application($applicant, $phone, $email, $url, $source, $description) {

        $response = $this->request('/applications', [
            'applicant' => $applicant,
            'phone' => $phone,
            'email' => $email,
            'url' => $url,
            'source' => $source,
            'description' => $description,
        ]);

        Log::info('API Service /applications '.$response->getStatusCode().$response->getBody());

        if ($response->getStatusCode() === 201) {
            return 'success';
        }

        return 'failed';
    }

}
