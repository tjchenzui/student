<?php
/**
 * Created by PhpStorm.
 * User: chenzui
 * Date: 2017/9/14
 * Time: 15:04
 */
namespace app\kecheng\controller;

use cmf\controller\AdminBaseController;
class  AdminExaminationPaperController extends AdminBaseController{
    /**
     * 试题列表
     * @adminMenu(
     *     'name'   => '试题列表',
     *     'parent' => 'kecheng/AdminIndex/default',
     *     'display'=> true,
     *     'hasView'=> true,
     *     'order'  => 10000,
     *     'icon'   => '',
     *     'remark' => '试题列表',
     *     'param'  => ''
     * )
     */
    function index(){
        return $this->fetch();
    }

    /**
     * 添加试题
     * @adminMenu(
     *     'name'   => '添加试题',
     *     'parent' => 'index',
     *     'display'=> false,
     *     'hasView'=> true,
     *     'order'  => 10000,
     *     'icon'   => '',
     *     'remark' => '添加试题',
     *     'param'  => ''
     * )
     */
    function add(){
        return $this->fetch();

    }

}
