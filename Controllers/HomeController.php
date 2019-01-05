<?php
/**
 * Created by PhpStorm.
 * User: Dao Quang Huy
 * Date: 04/01/2019
 * Time: 4:13 CH
 */

class HomeController extends BaseController
{
    public function __construct()
    {
        self::renderView('home','Admin');
    }
}