<?php
namespace App\Http\Controllers\Api\System;
use App\Http\Common\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Logic\Api\System\MenuLogic;
use App\Http\Validator\Api\System\MenuValidator;

class MenuController extends Controller
{
    public function __construct(MenuValidator $validator, MenuLogic $logic)
    {
        parent::__construct();
        $this->validator = $validator;
        $this->logic = $logic;
    }

    public function dataList(){
        $data = $this->validator->dataList($this->input);
        $result = $this->logic->dataList($data);
        return ApiResponse::success($result);
    }

    public function dataOne(){
        $data = $this->validator->dataOne($this->input);
        $result = $this->logic->dataOne($data);
        return ApiResponse::success($result);
    }

    public function store(){
        $data = $this->validator->store($this->input);
        $result = $this->logic->store($data);
        return ApiResponse::success($result);
    }

    public function update(){
        $data = $this->validator->update($this->input);
        $result = $this->logic->update($data);
        return ApiResponse::success($result);
    }

    public function delete(){
        $data = $this->validator->delete($this->input);
        $result = $this->logic->delete($data);
        return ApiResponse::success($result);
    }


}
