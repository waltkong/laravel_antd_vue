<?php
namespace App\Http\Common;

use App\Http\Constant\ResultCode;

class ApiResponse
{
    public static function success(array $data=[],$msg='ok'){
        $res = [
            'code' => ResultCode::SUCCESS,
            'msg' => $msg,
            'data' => $data,
        ];
        return response()->json($res, 200 );
    }

    public static function error($msg='error',$code='',$data=[]){
        $res = [
            'code' => empty($code) ? ResultCode::ERROR :$code,
            'msg' => $msg,
            'data' => $data,
        ];
        return response()->json($res, 200 );
    }

}
