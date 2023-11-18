<?php 

namespace App\Http\Services\YocoApi;

use Illuminate\Support\Facades\Log;

class YocoChargeApi {
    
    /**
     * @param array $data
     * @return bool|string
     */
    public static function processCharge(array $data): string|bool
    {
        $secret_key = env('YOCO_LIVE_SECRET_KEY');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://online.yoco.com/v1/charges/");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);

        // Basic Authentication method
        // Specify the secret key using the CURLOPT_USERPWD option
        curl_setopt($ch, CURLOPT_USERPWD, $secret_key . ":");

        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

        // send to yoco
        $result = curl_exec($ch);
        Log::debug(curl_getinfo($ch, CURLINFO_HTTP_CODE));

        // close the connection
        curl_close($ch);
        return $result;
    }

}
