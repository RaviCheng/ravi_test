<?php

class HtmlView extends View
{
    // 取得template
    public function fetch()
    {
        $args             = func_get_args();
        $templateFileName = $args[0];

        $html = '';
        ob_start();
        include 'templates/'.$templateFileName;
        $html = ob_get_contents();
        ob_end_clean();

        return $html;
    }

    // output
    public function render()
    {
        $args             = func_get_args();
        $templateFileName = $args[0];
        header('Content-Type: text/html; charset=utf-8');
        echo $this->fetch($templateFileName);
    }

}
