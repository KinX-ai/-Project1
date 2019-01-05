<?php
/**
 * Created by PhpStorm.
 * User: Dao Quang Huy
 * Date: 04/01/2019
 * Time: 5:12 CH
 */

class CategoryModel extends Database
{
    private const TABLE_NAME = 'tbl_categorys';
    public static function addCategorys($category){
        self::insertData(self::TABLE_NAME,$category->toArray());
    }
    public static function getListCategory(){
        $listData =  self::getData(self::TABLE_NAME);
        $listCategory = array();
        foreach ($listData as $key=>$value){
            $listCategory[$key] = new Category($value);
        }
        return $listCategory;
    }
    public static function editCategory($newCategory,$oldCategoryId){
        self::updateData(self::TABLE_NAME,$newCategory->toArray(),"WHERE catid = $oldCategoryId");
    }
    public static function getCategoryById($id){
        return new Category(self::getData(self::TABLE_NAME,"WHERE catid = $id")[0]);
    }
    public static function deleteCategorys($id){
        self::deleteData(self::TABLE_NAME,"WHERE catid = $id");
    }

}