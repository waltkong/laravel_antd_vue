<?php
namespace App\Http\Logic\Api\System;

use App\Http\Logic\Api\BaseLogic;
use App\Http\Logic\Common\PageListData;
use App\Model\System\SystemMenuModel;

class MenuLogic extends BaseLogic
{

    protected $pageListData;

    public function __construct(PageListData $pageListData)
    {
        $this->pageListData = $pageListData;
    }

    public function dataList(array $input){
        $qs = $this->dataListQs($input);
        $listQs = $this->pageListData->getPaginateListQuerySet($qs,$input);
        $total = $qs->count();
        $list = $listQs->get()->toArray();
        return [
            'list' => $list,
            'total' => $total
        ];
    }

    protected function dataListQs(array $input){
        $qs = new SystemMenuModel();
        if(isset($input['name']) && strlen($input['name'])>0 ){
            $qs = $qs->where('name',$input['name']);
        }
        return $qs;
    }

    public function dataOne(array $input){

    }

    public function store(array $input){

    }

    public function update(array $input){

    }

    public function delete(array $input){

    }

}
