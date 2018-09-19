<?php
namespace app\index\controller;

class News
{
    public function read($msg)
    {
        return  "nasimeide" . "$msg";
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'helrlo,' . $name;
    }

    public function hello1($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
