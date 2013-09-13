<?php

class Router
{
    protected $action = 'index';

    // 解析get變數
    public function __construct()
    {
        $this->action = isset($_GET['act']) ? strtolower($_GET['act']) : 'index';
    }

    // 後續動作
    public function getAction()
    {
        return $this->action;
    }

}
