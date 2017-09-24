<?php
/**
 * Created by PhpStorm.
 * User: chenzui
 * Date: 2017/9/14
 * Time: 9:21
 */
namespace app\kecheng\controller;

use think\Db;
use cmf\controller\AdminBaseController;


class AdminClassificationItemController extends AdminBaseController{
    /**
     * 试题列表
     * @adminMenu(
     *     'name'   => '试题列表',
     *     'parent' => 'kecheng/admin_classification/index',
     *     'display'=> false,
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

}