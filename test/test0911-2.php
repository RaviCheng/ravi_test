<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ravi
 * Date: 2013/9/11
 * Time: 上午 11:20
 * To change this template use File | Settings | File Templates.
 */

//function __autoload($class_name)
//{
//    echo $class_name;
//    require_once strtolower($class_name) . '.php';
//}
//
//$guest_book = new Guestbook();
//print_r($guest_book->get_all_message());

function foo()
{

    $numargs = func_num_args();

    echo "Number of arguments: $numargs<br>\n";

    if ($numargs >= 2) {

        echo "Second argument is: ".func_get_arg(1)."<br>\n";

    }

    $arg_list = func_get_args();

    for ($i = 0; $i < $numargs; $i ++) {

        echo "Argument $i is: ".$arg_list[$i]."<br>\n";

    }

}

foo(1, 2, 3);