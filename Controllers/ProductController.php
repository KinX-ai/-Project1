<?php
/**
 * Created by PhpStorm.
 * User: Dao Quang Huy
 * Date: 05/01/2019
 * Time: 6:57 CH
 */

class ProductController extends BaseController
{
    public static function addProduct(){
        $listCategory = CategoryModel::getListCategory();
        self::renderView('products','Admin','add',$listCategory);
        if(isset($_POST['addNew'])){
            array_pop($_POST);
            $data = $_POST;
            $data['image'] = self::uploadFileUrl($_FILES);
            $data['datecreate'] = date('Y-m-d h:i:s');
            $product = new Product($data);
            ProductModel::addProducts($product);
            header('location:list-product');
        }
    }
    public static function listProduct(){
        $listproduct = ProductModel::getListProduct();
        self::renderView('products','Admin','list',$listproduct);
    }
    public static function editProduct(){
        self::renderView('products','Admin','edit');
    }
}