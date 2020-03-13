<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/13 0013
 * Time: 17:45
 */

namespace app\admin\controller;
use think\Controller;

class Index extends Controller
{
    //登录页面
    public function login(){

        return $this->fetch('login');

    }

}