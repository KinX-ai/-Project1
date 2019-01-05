<?php
/**
 * Created by PhpStorm.
 * User: Dao Quang Huy
 * Date: 04/01/2019
 * Time: 4:11 CH
 */

class BaseController
{
    public static function renderView($viewname,$type,$action='',$data=array()){
        self::renderDefaultViewTop($type);
        require_once ('Views/'.$type.'/'.$viewname.'/'.$action.$viewname.'.php');
        self::renderDefaultViewBottom($type);
    }
    public static function renderDefaultViewTop($type){
        require_once ('Views/'.$type.'/pages/leftpanel.php');
        require_once ('Views/'.$type.'/pages/header.php');
    }
    public static function renderDefaultViewBottom($type){
        require_once ('Views/'.$type.'/pages/foot.php');
    }
    public static function uploadFileUrl($data = array()){
        $upload = '';
        if(isset($data["image"]["name"])) {
            if ($data["image"]["type"] == "image/jpeg" || $data["image"]["type"] == "image/gif" || $data["image"]["type"] == "image/png" || $data["image"]["type"] == "image/jpg") {
                if ($data["image"]["error"] == 0) {
                    move_uploaded_file($data["image"]["tmp_name"], "Views/Admin/uploads/" . $data["image"]["name"]);
                    $upload .= 'Views/Admin/uploads/' . $data["image"]["name"];
                } else {
                    echo "Lỗi file ";
                }
            } else {
                echo "File không đúng yêu cầu";
            }
        }
        return $upload;
    }
}