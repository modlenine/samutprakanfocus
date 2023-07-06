<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set("Asia/Bangkok");
    }

    public function checklogin()
    {
        //check input
        if($this->input->post("regisName") != "" && $this->input->post("regisEmail") != "" && $this->input->post("regisTel") != "" && $this->input->post("regisPassword") != ""){

            //check duplicate email & tel
            $arrayRegister = array(
                "m_name" => $this->input->post("regisName"),
                "m_tel" => $this->input->post("regisTel"),
                "m_email" => $this->input->post("regisEmail"),
                "m_password" => $this->input->post("regisPassword"),
                "m_register_datetime" => date("Y-m-d H:i:s")
            );

        }else{
            $output = array(
                "msg" => "ลงทะเบียนไม่สำเร็จ",
                "status" => "Register Not Success"
            );
        }


        echo json_encode($output);
    }


    public function linelogin()
    {

        $channelId = '2000062175';
        $channelSecret = '024d01d024e8fbee603b557dbeb1814b';
        $callbackUrl = 'https://www.saleecolour.com/';

        if (!isset($_GET['code'])) {
            // Redirect เพื่อไปยังหน้า Line Login เพื่อขอรับรหัสอนุญาต
            $authUrl = 'https://access.line.me/oauth2/v2.1/authorize?response_type=code&client_id=' . $channelId . '&redirect_uri=' . urlencode($callbackUrl) . '&state=12345&scope=profile%20openid';
            header('Location: ' . $authUrl);
            exit;
        }

        $code = $_GET['code'];

        // ส่งคำขอเพื่อรับ Access Token
        $tokenUrl = 'https://api.line.me/oauth2/v2.1/token';
        $data = [
            'grant_type' => 'authorization_code',
            'code' => $code,
            'redirect_uri' => $callbackUrl,
            'client_id' => $channelId,
            'client_secret' => $channelSecret,
        ];
        $options = [
            'http' => [
                'method' => 'POST',
                'header' => 'Content-Type: application/x-www-form-urlencoded',
                'content' => http_build_query($data),
            ],
        ];
        $context = stream_context_create($options);
        $response = file_get_contents($tokenUrl, false, $context);
        $tokenData = json_decode($response, true);

        if (isset($tokenData['access_token'])) {
            $accessToken = $tokenData['access_token'];

            // ใช้ Access Token เพื่อรับข้อมูลผู้ใช้
            $profileUrl = 'https://api.line.me/v2/profile';
            $options = [
                'http' => [
                    'method' => 'GET',
                    'header' => 'Authorization: Bearer ' . $accessToken,
                ],
            ];
            $context = stream_context_create($options);
            $profileResponse = file_get_contents($profileUrl, false, $context);
            $profileData = json_decode($profileResponse, true);

            // แสดงข้อมูลผู้ใช้
            echo 'Line ID: ' . $profileData['userId'] . '<br>';
            echo 'Display Name: ' . $profileData['displayName'] . '<br>';
            echo 'Picture URL: ' . $profileData['pictureUrl'] . '<br>';
            echo 'Status Message: ' . $profileData['statusMessage'] . '<br>';
        } else {
            // เกิดข้อผิดพลาดในการรับ Access Token
            echo 'เกิดข้อผิดพลาดในการรับ Access Token';
        }


    }
    
    

}

/* End of file ModelName.php */


?>