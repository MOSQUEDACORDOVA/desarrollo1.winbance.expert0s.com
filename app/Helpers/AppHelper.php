<?php

namespace App\Helpers;

use Exception;

use Illuminate\Support\Facades\Crypt;


class AppHelper
{
    public static function encryptionDataL($data, $action = 'e')
    {
        try {
            if ($action == 'e') {
                return base64_encode(Crypt::encrypt($data));
            } else {
                return Crypt::decrypt(base64_decode($data));
            }
        } catch (\Exception $e) {

            return null;

    }
    }
}
