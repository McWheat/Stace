<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
//        header("Content-Type:text/html; charset=utf-8");
//        echo '<div style="font-weight:normal;color:blue;float:left;width:345px;text-align:center;border:1px solid silver;background:#E8EFFF;padding:8px;font-size:14px;font-family:Tahoma">^_^ Hello,欢迎使用<span style="font-weight:bold;color:red">ThinkPHP</span></div>';

        //U('地址','参数','伪静态','是否跳转','显示域名');
        echo U('/system/index', array('id' => 1), false, true, 'tp.app');
//        echo '<br/>';
//        echo C('name') . '<br/>';
//        $condition = array();
//        $condition['memberid'] = 10;
//        $collect = D('questionnaire_collect')->where($condition)->find();
//        var_dump($collect);
    }

    public function test()
    {
        $id = $_REQUEST['id'] ? $_REQUEST['id'] : '0';
        echo $id;
    }
}