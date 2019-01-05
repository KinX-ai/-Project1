<?php
/**
 * Created by PhpStorm.
 * User: Dao Quang Huy
 * Date: 05/01/2019
 * Time: 10:29 SA
 */

class Database
{
    private const HOSTNAME = 'localhost';
    private const USER_NAME = 'root';
    private const PASSWORD = '';
    private const DATABASE_NAME = 'project1';
    protected static $connection = null;
    public function __construct()
    {
        try{
            self::$connection = mysqli_connect(self::HOSTNAME,self::USER_NAME,self::PASSWORD,self::DATABASE_NAME);
            mysqli_set_charset(self::$connection,'utf8');
        }
        catch (Exception $ex){
            echo $ex->getMessage();
        }
    }
    public static function insertData($tableName,$data){
        $fields = '';
        $value = '';
        $count =0;
        foreach ($data as $key=>$val){
            $count++;
            if($count==1){
                $fields .= '`'.$key.'`';
                $value .= "'".$val."'";
            }
            else{
                $fields.= ',`'.$key.'`';
                $value.= ",'".$val."'";
            }
        }
        $insertQuery = "INSERT INTO $tableName ($fields) VALUES ($value)";
        mysqli_query(self::$connection,$insertQuery) or die("loi truy van");
    }
    public static function getData($tablename,$condition = "",$fleid='*'){
        $selectQuery = "SELECT $fleid FROM $tablename ".$condition;
        $result = mysqli_query(self::$connection,$selectQuery);
        $itemArray = array();
        $i=0;
        while($row = mysqli_fetch_array($result)){
            $itemArray[$i] = $row;
            $i++;
        }
        return $itemArray;
    }
    public static function updateData($tablename,$data,$condition=""){
        $insertQuery = "UPDATE $tablename SET ";
        $i = 0;
        $length = count($data);
        foreach ($data as $key =>$value){
            $temp = "";
            if($i<$length-1) {
                $temp .= '`' . $key . '`' . " = '" . $value . "' , ";
                $i++;
            }
            else{
                $temp .= '`' . $key . '`' . " = '" . $value . "' ";
                $i++;
            }
            $insertQuery .= $temp;
        }
        $insertQuery.=$condition;
        mysqli_query(self::$connection,$insertQuery);
    }
    public static function deleteData($tablename,$condition){
        $deleteQuery = "DELETE FROM $tablename " . $condition;
        mysqli_query(self::$connection,$deleteQuery);
    }
}