<?php

abstract class View
{
    // 樣版變數
    protected $vars = array();

    public function setVar($tpl_var, $value = null)
    {

        if (is_array($tpl_var)) {
            foreach ($tpl_var as $key => $val) {
                if ($key != '') {
                    $this->vars[$key] = $val;
                }
            }
        } else {
            if ($tpl_var != '') {
                $this->vars[$tpl_var] = $value;
            }
        }
    }

    function __get($name)
    {
        return isset($this->vars[$name]) ? $this->vars[$name] : null;
    }

    // 抽象：擷取結果
   // public abstract function fetch();

    // 抽象：輸出結果
   // public abstract function render();

    /**
     *
     */
}
