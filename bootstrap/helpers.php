<?php

use Carbon\Carbon;


function create_token($len=6) {
    return ''.join(Arr::random([0, 1, 2, 3, 4, 5, 6, 7, 8, 9], $len));
}


function next5Min() {
    return Carbon::now()->add(5, 'min');
}


function sendSMSToken($phone, $token) {
    try{
        $message = "توکن جهت تغییر رمز عبور سایت املاک\n\n" . $token;
        $result = Kavenegar::Send('', $phone, $message);
        if($result) {
            return true;
        }
    }
    catch(\Kavenegar\Exceptions\ApiException $e){
        // در صورتی که خروجی وب سرویس 200 نباشد این خطا رخ می دهد
        return false;
    }
    catch(\Kavenegar\Exceptions\HttpException $e){
        // در زمانی که مشکلی در برقرای ارتباط با وب سرویس وجود داشته باشد این خطا رخ می دهد
        return false;
    }
 
    return false;
}