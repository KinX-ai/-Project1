<?php
/**
 * Created by PhpStorm.
 * User: Dao Quang Huy
 * Date: 05/01/2019
 * Time: 10:46 SA
 */

class Category extends Item{

    public function __construct($data = array())
    {
        if(isset($data['catid'])){
            $this->Id = $data['catid'];
        }
        $this->Name = $data['catname'];
        $this->Image = $data['image'];
        $this->Status= $data['status'];
        $this->DateCreate = $data['datecreate'];
    }
    public function toArray()
    {
        // TODO: Implement toArray() method.
        $categoryArray = array();
        if(isset($this->Id)){
            $categoryArray['catid'] = $this->Id;
        }
        $categoryArray['catname'] = $this->Name;
        $categoryArray['image'] = $this->Image;
        $categoryArray['status'] = $this->Status;
        $categoryArray['datecreate'] = $this->DateCreate;
        return $categoryArray;
    }

}