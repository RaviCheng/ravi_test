<?php

abstract class Controller
{
    // 動作名稱
    protected $action = '';

    // 抽象：預設動作
    protected abstract function index();

    // 路由器(狀態處理)
    protected $router = null;

    // 設定路由器(狀態處理)
    public function setRouter(Router $router)
    {
        if (method_exists($this, ($action = $router->getAction()))) {
            $this->action = $action;
        }
    }

    // 執行動作
    public final function run()
    {
        $this->{$this->action}();
    }

    // 重新導向
    protected function redirectTo($url)
    {
        header('Location: '.$url);
    }
}
