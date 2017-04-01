<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/4/1
 * Time: 9:41
 */
class SystemAction extends Action {
    public function index()
    {
        $id = $_REQUEST['id'] ? $_REQUEST['id'] : 0;
        echo $id . '<br/>';
        echo 'This is a system!';
    }
}