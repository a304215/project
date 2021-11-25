<?php
    header('Content-Type: application/json; charset=UTF-8'); //設定資料類型為 json，編碼 utf-8
    if ($_SERVER['REQUEST_METHOD'] == "POST") { 
        @$nickname = $_POST["nickname"]; 
        @$gender = $_POST["gender"]; 
        @$code_number = $_POST['company_code'];
        if ($code_number != null) {
            if($code_number == "2330"){
                $max_price = "438";
                $min_price = "431.5";
                $open_price = '435';
                $q3_2019 = "3.9";
                $q4_2019 = "4.48";
                $q1_2020 = "4.51";
                $q2_2020 = "4.66";
                $investment  = '-80300';
                $credit = '5261';
                $employed = '4196';
                $total = '-70800';
                echo json_encode(array(
                    'code_number' => $code_number,
                    'code_company' => "台積電",
                    'max_price' => $max_price,
                    'min_price' => $min_price,
                    'open_price' => $open_price,
                    'q3_2019' => $q3_2019,
                    'q4_2019' => $q4_2019,
                    'q1_2020' => $q1_2020,
                    'q2_2020' => $q2_2020,
                    'investment' => $investment,
                    'credict' => $credit,
                    'employed' => $employed,
                    'total' => $total
                ));
            }if($code_number == "2303"){
                $max_price = "29.8";
                $min_price = "28.45";
                $open_price = '29';
                $q3_2019 = "0.25";
                $q4_2019 = "0.32";
                $q1_2020 = "0.19";
                $q2_2020 = "0.55";
                $investment  = '3448';
                $credit = '10';
                $employed = '1123';
                $total = '4581';
                echo json_encode(array(
                    'code_number' => $code_number,
                    'code_company' => "聯電",
                    'max_price' => $max_price,
                    'min_price' => $min_price,
                    'open_price' => $open_price,
                    'q3_2019' => $q3_2019,
                    'q4_2019' => $q4_2019,
                    'q1_2020' => $q1_2020,
                    'q2_2020' => $q2_2020,
                    'investment' => $investment,
                    'credict' => $credit,
                    'employed' => $employed,
                    'total' => $total
                ));
            } 
        } else {
            //回傳 errorMsg json 資料
            echo json_encode(array(
                'errorMsg' => '資料未輸入完全！'
            ));
        }
    } else {
        //回傳 errorMsg json 資料
        echo json_encode(array(
            'errorMsg' => '請求無效，只允許 POST 方式訪問！'
        ));
    }
?>
