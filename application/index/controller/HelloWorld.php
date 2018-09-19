<?php
namespace app\index\controller;
use think\Controller;
class HelloWorld extends Controller{
    public function index()
    {
		return  "dadehello world";
	}

    public function hello()
    {
        return "hello!";
    }
}
