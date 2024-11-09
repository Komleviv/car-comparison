<?php


namespace App\Http\Services\Api;


class ApiServices
{
    public static function getMarkModels()
    {
        $url = config('api.url_mark_model');

        return self::request($url);
    }

    private static function request(string $url) {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $url_e = curl_exec($ch);
        curl_close($ch);

        return json_decode($url_e, true);
    }
}
