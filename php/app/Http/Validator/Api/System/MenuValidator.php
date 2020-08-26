<?php
namespace App\Http\Validator\Api\System;

use App\Http\Validator\Api\BaseValidator;

class MenuValidator extends BaseValidator
{

    public function dataList(array $input){
        return $input;
    }

    public function dataOne(array $input){
        return $input;
    }

    public function store(array $input){
        $rule = [
            'name' => 'required',
        ];
        $ruleChinese = [
            'name.required' => '名称必须',
        ];
        parent::validate($input,$rule,$ruleChinese);
        return $input;
    }

    public function update(array $input){
        $rule = [
            'name' => 'required',
        ];
        $ruleChinese = [
            'name.required' => '名称必须',
        ];
        parent::validate($input,$rule,$ruleChinese);
        return $input;
    }

    public function delete(array $input){
        $rule = [
            'id' => 'required',
        ];
        $ruleChinese = [
            'id.required' => 'id必须',
        ];
        parent::validate($input,$rule,$ruleChinese);
        return $input;
    }

}
