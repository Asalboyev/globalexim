<?php

namespace App\Traits;

use Illuminate\Support\Facades\Http;

trait ReCaptcha {
    public function checkCaptcha($token)
    {
        $baseUrl = 'https://www.google.com/recaptcha/api/siteverify';
        $data = [
            'secret' => env('RE_CAPTCHA_TOKEN'),
            'response' => $token
        ];

        $res = Http::get($baseUrl, $data);

        return $res->json();
    }
}
