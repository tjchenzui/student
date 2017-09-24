<?php
/**
 * Created by PhpStorm.
 * User: chenzui
 * Date: 2017/9/13
 * Time: 18:33
 */
namespace app\kecheng\controller;

use cmf\controller\AdminBaseController;
use app\kecheng\model\AdminClassificationModel;

class AdminClassificationController extends AdminBaseController{

    /**
     * 课程分类
     * @adminMenu(
     *     'name'   => '课程分类',
     *     'parent' => 'kecheng/AdminIndex/default',
     *     'display'=> true,
     *     'hasView'=> true,
     *     'order'  => 10000,
     *     'icon'   => '',
     *     'remark' => '课程分类',
     *     'param'  => ''
     * )
     */
    function index(){
        $AdminClassificationModel = new AdminClassificationModel();

        if($query = $this->request->param('query')){
            $kecheng = $AdminClassificationModel->where('name','like',"%$query%")
                ->select();

            $this->assign('kecheng', $kecheng);
            return $this->fetch();

        }

        //展示课程的页面
        $kecheng         = $AdminClassificationModel->select();
        $this->assign('kecheng', $kecheng);
        return $this->fetch();
    }

    /**
     * 添加课程
     * @adminMenu(
     *     'name'   => '添加课程',
     *     'parent' => 'index',
     *     'display'=> false,
     *     'hasView'=> true,
     *     'order'  => 10000,
     *     'icon'   => '',
     *     'remark' => '添加课程',
     *     'param'  => ''
     * )
     */
    function add(){

        return $this->fetch();
    }
    /**
     * addPost
     * @adminMenu(
     *     'name'   => 'addPost',
     *     'parent' => 'index',
     *     'display'=> false,
     *     'hasView'=> false,
     *     'order'  => 10000,
     *     'icon'   => '',
     *     'remark' => 'addPost',
     *     'param'  => ''
     * )
     */
    function addPost(){
        //修改
        if($id = $this->request->param('id')){
            $data           = $this->request->param();
            $update_time = date("Y-m-d H:i:s");
            $data['update_time'] = $update_time;
            $AdminClassificationModel = new AdminClassificationModel();
            $result         = $AdminClassificationModel->validate(true)->save($data, ['id' => $data['id']]);
            if ($result === false) {
                $this->error($AdminClassificationModel->getError());
            }
            $this->success("保存成功！", url("admin_classification/index"));
        }
        //添加
        $data           = $this->request->param();
        $create_time = date("Y-m-d H:i:s");
        $data['create_time'] = $create_time;
        $AdminClassificationModel = new AdminClassificationModel();
        $result = $AdminClassificationModel->validate(true)->save($data);
        if ($result === false) {
            $this->error($AdminClassificationModel->getError());
        }
        $this->success("添加成功！", url("admin_classification/index"));
    }
    /**
     * 修改课程
     * @adminMenu(
     *     'name'   => '修改课程',
     *     'parent' => 'index',
     *     'display'=> false,
     *     'hasView'=> false,
     *     'order'  => 10000,
     *     'icon'   => '',
     *     'remark' => '修改课程',
     *     'param'  => ''
     * )
     */
    function edit(){
        $id             = $this->request->param('id');
        $AdminClassificationModel = new AdminClassificationModel();
        //find 和 select 的区别 select 是二维数组 find 是一维数组
        //select 需要遍历一下  //需要指定要 find 的对像的 id
        $kecheng         = $AdminClassificationModel->find($id);

        $this->assign('kecheng', $kecheng);
        return $this->fetch();
    }
    /**
     * 删除课程
     * @adminMenu(
     *     'name'   => '删除课程',
     *     'parent' => 'index',
     *     'display'=> false,
     *     'hasView'=> false,
     *     'order'  => 10000,
     *     'icon'   => '',
     *     'remark' => '删除课程',
     *     'param'  => ''
     * )
     */
    function delete(){
        $id             = $this->request->param('id', 0, 'intval');
        echo '1312';
        exit;

    }
}