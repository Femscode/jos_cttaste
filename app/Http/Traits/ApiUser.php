<?php

namespace App\Http\Traits;

use App\Models\Category;
use App\Models\WorkingHour;
use App\Http\Traits\CreateMenu;
use Illuminate\Support\Facades\Http;

trait ApiUser
{
    function create_app_user($id,$user,$password)
    {
        // dd($id,$user);
        $image = "https://cttaste.com/cttaste_files/public/profilePic/" . ($user['image'] ?? "normal.webp");
        // dd($user,$image,$password);

        try {
            $jsonData = [
                "id" => $id,
                "name" => $user["name"],
                "phone" => $user["phone"],
                "address" => $user["address"],
                "username" => $user["slug"],
                "email" => $user['email'],
                "password" => $password,
                "image" => $image             
            ];
          
            $jsonEnc = json_encode($jsonData);
            // dd($email);

            $ch = curl_init('https://cttaste-ca8a70ea9683.herokuapp.com/api/v1/auth/register-vendor-ct/');

            // Set cURL options
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
            curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonEnc);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($jsonEnc)
            ));

            // Execute cURL session and store the response
            $response = curl_exec($ch);
            
            $response_json = json_decode($response, true);
            // dd($response,$response_json);
            if ($response_json['message'] == "Account Registered Successfully") {
                return true;
            } else {
                return false;
            }


            $token = $response_json['data']['access'];
            // dd($response, $response_json, $token);

            $reg_json = [
                "name" => $user['name'],
                "phone_number" => $user['phone'],
                "email" => $user['email'],
                "address" => $user['address']
            ];
            $regEnc = json_encode($reg_json);
            $ch = curl_init('https://cttaste-ca8a70ea9683.herokuapp.com/api/v1/business/register-vendor/');

            // Set cURL options
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
            curl_setopt($ch, CURLOPT_POSTFIELDS, $regEnc);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($regEnc),
                'Authorization: Bearer ' . $token
            ));

            // Execute cURL session and store the response
            $response = curl_exec($ch);
            $response_json = json_decode($response, true);
            if ($response_json['message'] == "Account Registerd Successfully") {
                return true;
            } else {
                return false;
            }
        } catch (\Exception $e) {

            $response = [
                'success' => false,
                'message' => $e->getMessage(),
            ];
            return response()->json($response);
        }
}
}
