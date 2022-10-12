<?php

namespace App\Rules;
use Illuminate\Contracts\Validation\Rule;
class Recaptcha implements Rule {
    public function __construct() {

    }

    public function passes($attribute, $value) {
        $data = array('secret' => env('GOOGLE_RECAPTCHA_SECRET'),
            'response' => $value);

        try {
            $verify = curl_init();
            curl_setopt($verify, CURLOPT_URL,
                "https://www.google.com/recaptcha/api/siteverify");
            curl_setopt($verify, CURLOPT_POST, true);
            curl_setopt($verify, CURLOPT_POSTFIELDS,
                http_build_query($data));
            curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($verify);

            return json_decode($response) -> success;
        }
        catch (\Exception $e) {
            return false;
        }
    }

    public function message() {
        return 'ReCaptcha verification failed.';
    }

    public function postContactForm(Request $request) {
        $this -> validate($request, [
            'g-recaptcha-response' =>
                ['required', new Recaptcha()]]);

        // Recaptcha passed, do what ever you need
    }


}
?>
