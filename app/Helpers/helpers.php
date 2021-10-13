<?php

use Illuminate\Http\Request;

if(!function_exists('ip_info'))
{
    function ip_info($ip = null)
    {
        dd($ip);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://ipinfo.io/$ip/geo");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$info = curl_exec($ch);
		curl_close($ch);

		$info = json_decode($info, true);
		if(is_array($info) && array_key_exists('status', $info) && $info['status'] == 404) {
			return null;
		}

		return $info;
    }
}