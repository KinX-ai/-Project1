<?php
/**
 * Created by PhpStorm.
 * User: Dao Quang Huy
 * Date: 04/01/2019
 * Time: 4:45 CH
 */

class CategoryController extends BaseController
{
    public function __construct()
    {
        self::listCategory();
    }
    public static function addCategory(){
        self::renderView('categorys','Admin','add');
        if(isset($_POST['addNew'])){
            array_pop($_POST);
            $urlImage = self::uploadFileUrl($_FILES);
            $_POST['image'] = $urlImage;
            $_POST['datecreate'] = date('Y-m-d h:i:s');
            $category = new Category($_POST);
            CategoryModel::addCategorys($category);
            header('location:list-category');
        }
    }
    public static function listCategory(){
        $listCategorys = CategoryModel::getListCategory();
        self::renderView('categorys','Admin','list',$listCategorys);

    }
    public function editCategory($id){
        $categoryEdit = CategoryModel::getCategoryById($id);
        self::renderView('categorys','Admin','edit',$categoryEdit);
        if(isset($_POST['addNew'])){
            array_pop($_POST);
            if(file_exists($categoryEdit->getImage())){
                unlink($categoryEdit->getImage());
            }
            $newUrlImage = self::uploadFileUrl($_FILES);
            $_POST['image'] = $newUrlImage;
            $_POST['datecreate'] = date('Y-m-d h:i:s');
            $newCategory = new Category($_POST);
            CategoryModel::editCategory($newCategory,$id);
            header('location:list-category');
        }
    }
    public function deleteCategory($id){
        CategoryModel::deleteCategorys($id);
        header('location:list-category');
    }
}