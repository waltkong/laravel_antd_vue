<?php
namespace App\Http\Validator\Api;

use App\Exceptions\ApiRespException;
use App\Http\Constant\ResultCode;
use Illuminate\Support\Facades\Validator;

class BaseValidator
{

    public static function validate($data, $rule, $ruleChinese = [])
    {
        $validator = Validator::make($data, $rule, $ruleChinese);
        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            $error0 = $errors[0];
            throw new ApiRespException($error0,ResultCode::PARAMS_IS_INVALID);
        }
    }

}
