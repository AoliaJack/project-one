<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function signup()
    {
        # code...
        return view('signup');
    }
    public function postsignup(Request $r)
    {
        # code...
        // var_dump($r->all());
        $data = array(
            "phone" => $r->get('regPhone'),
            "password" => $r->get('regPassword'),
            "country" => $r->get('regCountry'),
            "latlong" => $r->get('regLat'),
            "device_token" => $r->get('regDevtok'),
            "device_type" => (int) $r->get('regType')
        );
        
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://pretest-qa.privydev.id/api/v1/register",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30000,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => array(
                // Set here requred headers
                "accept: /",
                "accept-language: en-US,en;q=0.8",
                "content-type: application/json",
            ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
        }
        
    }
    public function signin()
    {
        # code...
        return view('signin');
    }
    public function otp()
    {
        # code...
        return view('otp');
    }
}
