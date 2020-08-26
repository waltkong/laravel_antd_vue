<?php
namespace App\Exceptions;

use Exception;
use Illuminate\Http\Request;
use Throwable;

class ApiRespException extends Exception {
    public function __construct(string $message = "", int $code = 0,Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }

    public function render(Request $request) {
        $res = [
            'code' => $this->getCode(),
            'msg' => $this->getMessage(),
            'data' => [],
        ];
        if(env('APP_DEBUG',false)){
            $res['debug'] = [
                'file' => $this->getFile(),
                'line' => $this->getLine(),
            ];
        }
        return response()->json($res, 200 );
    }

}
