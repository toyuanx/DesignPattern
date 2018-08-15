<?php

class singLeton
{
    private static $_instance;  //私有属性，在构造方法中使用
    private $config;    //静态私有属性，类内实例化之后赋值给该属性

    private function __construct($config)
    {
        $this->config = $config;
    }

    public static function getInstance($config)
    {
        if (self::$_instance instanceof singLeton) {//已被实例化之后直接返回实例
            return self::$_instance;
        } else {
            return self::$_instance = new singLeton($config);
        }
    }

    public function getConfig()
    {
        return $this->config;
    }

    //防止类被克隆后实例化重写
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }
}