<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SmartController extends Controller
{
    public static function send($company_id,$order_type_id,$phone_no = null,$amount = null,$cat_id = null)
    {
        $url = 'https://smart-recharge.com/SmartWebService/SmartRecharge.svc/SaveOrder';

//        $ch = curl_init();
//            curl_setopt($ch, CURLOPT_URL,$url);
//            curl_setopt ($ch, CURLOPT_HEADER, false);
//            curl_setopt ($ch, CURLOPT_POST, true);
//            $data_arr =
//                [
//                    'username' => 'اليمامة',
//                    'password' => '201531',
//                    'client_name' => 'EgyptDream',
//                    'CompanyID' => $company_id,
//                    'OrderTypeID' => $order_type_id,
//                    'phoneno' => $phone_no,
//                    'amount' => $amount,
//                    'CatID' => $cat_id
//                ];
//            $data_arr = array_filter($data_arr);
//            $data_arr['ActionTypeID'] = 0;
//            $data = http_build_query($data_arr);
//            curl_setopt ($ch, CURLOPT_POSTFIELDS, $data);
//            curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
//            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
//            curl_setopt($ch, CURLOPT_VERBOSE, 0);
//            curl_setopt($ch, CURLE_HTTP_NOT_FOUND,1);
//            $response = curl_exec ($ch);
//        curl_close ($ch);

        $data_arr =
            [
                'username' => 'اليمامة',
                'password' => '201531',
                'client_name' => 'EgyptDream',
                'CompanyID' => $company_id,
                'OrderTypeID' => $order_type_id,
                'phoneno' => $phone_no,
                'amount' => $amount,
                'CatID' => $cat_id
            ];
        $data_arr = array_filter($data_arr);
        $data_arr['ActionTypeID'] = 0;

        $response = Http::post($url, $data_arr);
        dd($response);
        $response_arr['status'] = boolval($response->status);
        if($response->result == 'No Record Found !' && $response_arr['status'] == 0) $response_arr['msg'] = __('error_contact_admin');
        elseif($response->result == 'Your amount is greater then of your balance' && $response_arr['status'] == 0) $response_arr['msg'] = __('no_credit');
        elseif($response->result == '.عملية مكررة-  لا يمكن إتمام هذه العملية' && $response_arr['status'] == 0) $response_arr['msg'] = __('repeated');
        elseif($response->result == 'Record Saved Successfuly' && $response_arr['status'] == 1)
        {
            $response_arr['msg'] = __('success_transaction');
            $response_arr['info'] = $response->result;
        }
        else $response_arr['msg'] = __('error_contact_admin');

        return response()->json(['response' => $response_arr,'request' => array_filter($data_arr)]);
    }
}