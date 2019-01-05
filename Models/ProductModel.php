<?php
/**
 * Created by PhpStorm.
 * User: Dao Quang Huy
 * Date: 05/01/2019
 * Time: 7:09 CH
 */

class ProductModel extends Database
{
    private const TABLE_NAME = 'tbl_products';
    public static function addProducts($product){
        self::insertData(self::TABLE_NAME,$product->toArray());
    }
    public static function getListProduct(){
        $listData=  self::getData(self::TABLE_NAME);
        $listProduct = array();
        foreach ($listData as $key => $value){
            $listProduct[$key] = new Product($value);
        }
        return $listProduct;
    }
    public static function getCategoryTag($id){
        $conđition = "Where tbl_categorys.catid = ".self::TABLE_NAME.".catid AND ".self::TABLE_NAME.".proid = $id";
        $catname = self::getData(self::TABLE_NAME.',tbl_categorys',$conđition,'catname');
        return $catname[0]['catname'];
    }
}