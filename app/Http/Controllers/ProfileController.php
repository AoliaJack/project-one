<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function profile()
    {
        # code...
        return view('profile/profile');
    }
    public function education()
    {
        # code...
        return view('profile/education');
    }
    public function career()
    {
        # code...
        return view('profile/career');
    }
    public function profedit()
    {
        # code...
        return view('profile/profedit');
    }
    public function postprofile(Request $r)
    {
        # code...
        var_dump($r->all());
        $data = array(
            "Authorization" => $r->get('profToken'),
            "name" => $r->get('profName'),
            "gender" => $r->get('profGender'),
            "birthday" => $r->get('profBirthday'),
            "hometown" => $r->get('profHometown'),
            "bio" => $r->get('profAboutme')
        );
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://pretest-qa.privydev.id/api/v1/profile",
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
}
