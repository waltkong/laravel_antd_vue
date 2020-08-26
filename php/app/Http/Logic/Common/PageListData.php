<?php
namespace App\Http\Logic\Common;

class PageListData
{
    public $paramPageIndex = 'pageIndex';

    public $paramPageSize = 'pageSize';

    public $paramOrderBy = 'orderBy';

    public $paramOrderWay = 'orderWay';

    public $paramPageIndexDefault = 1;

    public $paramPageSizeDefault = 20;

    public $paramOrderByDefault = 'id';

    public $paramOrderWayDefault  = 'desc';

    public function set($property,$value){
        $this->$property = $value;
        return $this;
    }

    /**
     *  分页规则
     * @param array $input
     * @return array
     */
    public function getPageParams(array $input){
        $page_index = $input[$this->paramPageIndex] ?? $this->paramPageIndexDefault;
        $page_size = $input[$this->paramPageSize] ?? $this->paramPageSizeDefault;
        $page_offset = ((int)$page_size) * ((int)$page_index - 1);
        $order_by = $input[$this->paramOrderBy] ?? $this->paramOrderByDefault;
        $order_way = $input[$this->paramOrderWay] ?? $this->paramOrderWayDefault;
        return [
            'page_index' => $page_index,
            'page_size' => $page_size,
            'page_offset' => $page_offset,
            'order_by' => $order_by,
            'order_way' => $order_way
        ];
    }

    /**
     * 列表查询构造器
     * @param $querySet
     * @param array $input
     * @return mixed
     */
    public function getPaginateListQuerySet($querySet, array $input){

        $pageParams = $this->getPageParams($input);

        return  $querySet->orderBy($pageParams['order_by'], $pageParams['order_way'])
            ->offset($pageParams['page_offset'])->limit($pageParams['each_page']);

    }




}
