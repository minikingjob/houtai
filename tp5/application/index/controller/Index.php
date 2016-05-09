<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        return $this->fetch('template/login');
    }

    public function  hello($name)
    {
        return 'hello '.$name;
    }
}
