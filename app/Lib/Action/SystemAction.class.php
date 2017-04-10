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

    public function vagrant()
    {
        $name = 'Mc_wheat';
        $pwd = '123456';
        $info = array(
            'title' => '孙中山先生',
            'time' => time(),
        );
        $person = array(
            array(
                'name' => 'Jack',
                'age' => 17
            ),
            array(
                'name' => 'Robbin',
                'age' => 18
            ),
            array(
                'name' => 'Tim',
                'age' => 32
            )
        );

        $zoom = array(
            [
                'name' => 'tiger',
                'cry' => '吼吼'
            ],
            [
                'name' => 'cat',
                'cry' => '喵喵'
            ]
        );

        $this->assign('name', $name);
        $this->assign('info', $info);
        $this->assign('pwd', $pwd);
        $this->assign('person', $person);
        $this->assign('zoom', $zoom);
        $this->display();
    }

    public function user()
    {
//        trace('name', C('name'));
        G('run');
        $count = 0;
        for ($i = 0; $i < 10000; $i ++) {
            $count += $i;
        }
        G('run', 'end');
        $this->display();
    }
}