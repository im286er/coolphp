<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: yangweijie <yangweijiester@gmail.com> <code-tech.diandian.com>
// +----------------------------------------------------------------------

namespace app\admin\controller;
use think\Db;
use think\Request;
use think\Controller;
/**
 * 扩展后台管理页面
 * @author yangweijie <yangweijiester@gmail.com>
 */
class Addons extends Common {

    public function _initialize(){
        parent::_initialize();
    }

    //创建向导首页
    public function create(){
        if(!is_writable(ONETHINK_ADDON_PATH))
            $this->error('您没有创建目录写入权限，无法使用此功能');

        $hooks = M('Hooks')->field('name,description')->select();
        $this->assign('Hooks',$hooks);
        $this->meta_title = '创建向导';
        $this->display('create');
    }

    //预览
    public function preview($output = true){
    }

    public function checkForm(){

    }

    public function build(){

    }

    /**
     * 插件列表
     */
    public function index(){

    }

    /**
     * 插件后台显示页面
     * @param string $name 插件名
     */
    public function adminList($name){

    }

    /**
     * 启用插件
     */
    public function enable(){

    }

    /**
     * 禁用插件
     */
    public function disable(){

    }

    /**
     * 设置插件页面
     */
    public function config(){

    }

    /**
     * 保存插件设置
     */
    public function saveConfig(){

    }

    /**
     * 解析数据库语句函数
     * @param string $sql  sql语句   带默认前缀的
     * @param string $tablepre  自己的前缀
     * @return multitype:string 返回最终需要的sql语句
     */
    public function sql_split($sql, $tablepre) {
        if ($tablepre != "onethink_")
            $sql = str_replace("onethink_", $tablepre, $sql);
        $sql = preg_replace("/TYPE=(InnoDB|MyISAM|MEMORY)( DEFAULT CHARSET=[^; ]+)?/", "ENGINE=\\1 DEFAULT CHARSET=utf8", $sql);

        if ($r_tablepre != $s_tablepre)
            $sql = str_replace($s_tablepre, $r_tablepre, $sql);
        $sql = str_replace("\r", "\n", $sql);
        $ret = array();
        $num = 0;
        $queriesarray = explode(";\n", trim($sql));
        unset($sql);
        foreach ($queriesarray as $query) {
            $ret[$num] = '';
            $queries = explode("\n", trim($query));
            $queries = array_filter($queries);
            foreach ($queries as $query) {
                $str1 = substr($query, 0, 1);
                if ($str1 != '#' && $str1 != '-')
                    $ret[$num] .= $query;
            }
            $num++;
        }
        return $ret;
    }

    /**
     * 获取插件所需的钩子是否存在，没有则新增
     * @param string $str  钩子名称
     * @param string $addons  插件名称
     * @param string $addons  插件简介
     */
    public function existHook($str, $addons, $msg=''){
        $hook_mod = M('Hooks');
        $where['name'] = $str;
        $gethook = $hook_mod->where($where)->find();
        if(!$gethook || empty($gethook) || !is_array($gethook)){
            $data['name'] = $str;
            $data['description'] = $msg;
            $data['type'] = 1;
            $data['update_time'] = NOW_TIME;
            $data['addons'] = $addons;
            if( false !== $hook_mod->create($data) ){
                $hook_mod->add();
            }
        }
    }

    /**
     * 删除钩子
     * @param string $hook  钩子名称
     */
    public function deleteHook($hook){
        $model = M('hooks');
        $condition = array(
            'name' => $hook,
        );
        $model->where($condition)->delete();
        S('hooks', null);
    }
    /**
     * 安装插件
     */
    public function install(){
        $addon_name     =   trim(I('addon_name'));
        $class          =   get_addon_class($addon_name);
        if(!class_exists($class))
            $this->error('插件不存在');
        $addons  =   new $class;
        $info = $addons->info;
        if(!$info || !$addons->checkInfo())//检测信息的正确性
            $this->error('插件信息缺失');
        session('addons_install_error',null);
        $install_flag   =   $addons->install();
        if(!$install_flag){
            $this->error('执行插件预安装操作失败'.session('addons_install_error'));
        }
        $addonsModel    =   D('Addons');
        $data           =   $addonsModel->create($info);
        if(is_array($addons->admin_list) && $addons->admin_list !== array()){
            $data['has_adminlist'] = 1;
        }else{
            $data['has_adminlist'] = 0;
        }
        if(!$data)
            $this->error($addonsModel->getError());
        if($addonsModel->add($data)){
            $config         =   array('config'=>json_encode($addons->getConfig()));
            $addonsModel->where("name='{$addon_name}'")->save($config);
            $hooks_update   =   D('Hooks')->updateHooks($addon_name);
            if($hooks_update){
                S('hooks', null);
                $this->success('安装成功');
            }else{
                $addonsModel->where("name='{$addon_name}'")->delete();
                $this->error('更新钩子处插件失败,请卸载后尝试重新安装');
            }

        }else{
            $this->error('写入插件数据失败');
        }
    }

    /**
     * 卸载插件
     */
    public function uninstall(){
        $addonsModel    =   M('Addons');
        $id             =   trim(I('id'));
        $db_addons      =   $addonsModel->find($id);
        $class          =   get_addon_class($db_addons['name']);
        $this->assign('jumpUrl',U('index'));
        if(!$db_addons || !class_exists($class))
            $this->error('插件不存在');
        session('addons_uninstall_error',null);
        $addons =   new $class;
        $uninstall_flag =   $addons->uninstall();
        if(!$uninstall_flag)
            $this->error('执行插件预卸载操作失败'.session('addons_uninstall_error'));
        $hooks_update   =   D('Hooks')->removeHooks($db_addons['name']);
        if($hooks_update === false){
            $this->error('卸载插件所挂载的钩子数据失败');
        }
        S('hooks', null);
        $delete = $addonsModel->where("name='{$db_addons['name']}'")->delete();
        if($delete === false){
            $this->error('卸载插件失败');
        }else{
            $this->success('卸载成功');
        }
    }

    /**
     * 钩子列表
     */
    public function hooks(){
        $this->meta_title   =   '钩子列表';
        $map    =   $fields =   array();
        $list   =   $this->lists(D("Hooks")->field($fields),$map);
        int_to_string($list, array('type'=>C('HOOKS_TYPE')));
        // 记录当前列表页的cookie
        Cookie('__forward__',$_SERVER['REQUEST_URI']);
        $this->assign('list', $list );
        $this->display();
    }

    public function addhook(){
        $this->assign('data', null);
        $this->meta_title = '新增钩子';
        $this->display('edithook');
    }

    //钩子出编辑挂载插件页面
    public function edithook($id){
        $hook = M('Hooks')->field(true)->find($id);
        $this->assign('data',$hook);
        $this->meta_title = '编辑钩子';
        $this->display('edithook');
    }

    //超级管理员删除钩子
    public function delhook($id){
        if(M('Hooks')->delete($id) !== false){
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }

    public function updateHook(){
        $hookModel  =   D('Hooks');
        $data       =   $hookModel->create();
        if($data){
            if($data['id']){
                $flag = $hookModel->save($data);
                if($flag !== false){
                    S('hooks', null);
                    $this->success('更新成功', Cookie('__forward__'));
                }else{
                    $this->error('更新失败');
                }
            }else{
                $flag = $hookModel->add($data);
                if($flag){
                    S('hooks', null);
                    $this->success('新增成功', Cookie('__forward__'));
                }else{
                    $this->error('新增失败');
                }
            }
        }else{
            $this->error($hookModel->getError());
        }
    }

    public function execute($_addons = null, $_controller = null, $_action = null){
        if(C('URL_CASE_INSENSITIVE')){
            $_addons        =   ucfirst(parse_name($_addons, 1));
            $_controller    =   parse_name($_controller,1);
        }

        $TMPL_PARSE_STRING = C('TMPL_PARSE_STRING');
        $TMPL_PARSE_STRING['__ADDONROOT__'] = __ROOT__ . "/Addons/{$_addons}";
        C('TMPL_PARSE_STRING', $TMPL_PARSE_STRING);

        if(!empty($_addons) && !empty($_controller) && !empty($_action)){
            $Addons = A("Addons://{$_addons}/{$_controller}")->$_action();
        } else {
            $this->error('没有指定插件名称，控制器或操作！');
        }
    }

    public function edit($name, $id = 0){
        $this->assign('name', $name);
        $class = get_addon_class($name);
        if(!class_exists($class))
            $this->error('插件不存在');
        $addon = new $class();
        $this->assign('addon', $addon);
        $param = $addon->admin_list;
        if(!$param)
            $this->error('插件列表信息不正确');
        extract($param);
        $this->assign('title', $addon->info['title']);
        if(isset($model)){
            $addonModel = D("Addons://{$name}/{$model}");
            if(!$addonModel)
                $this->error('模型无法实列化');
            $model = $addonModel->model;
            $this->assign('model', $model);
        }
        if($id){
            $data = $addonModel->find($id);
            $data || $this->error('数据不存在！');
            $this->assign('data', $data);
        }

        if(IS_POST){
            // 获取模型的字段信息
            if(!$addonModel->create())
                $this->error($addonModel->getError());

            if($id){
                $flag = $addonModel->save();
                if($flag !== false)
                    $this->success("编辑{$model['title']}成功！", Cookie('__forward__'));
                else
                    $this->error($addonModel->getError());
            }else{
                $flag = $addonModel->add();
                if($flag)
                    $this->success("添加{$model['title']}成功！", Cookie('__forward__'));
            }
            $this->error($addonModel->getError());
        } else {
            $fields = $addonModel->_fields;
            $this->assign('fields', $fields);
            $this->meta_title = $id? '编辑'.$model['title']:'新增'.$model['title'];
            if($id)
                $template = $model['template_edit']? $model['template_edit']: '';
            else
                $template = $model['template_add']? $model['template_add']: '';
            if ($template)
                $this->display($addon->addon_path . $template);
            else
                $this->display();
        }
    }

    public function del($id = '', $name){
        $ids = array_unique((array)I('ids',0));

        if ( empty($ids) ) {
            $this->error('请选择要操作的数据!');
        }

        $class = get_addon_class($name);
        if(!class_exists($class))
            $this->error('插件不存在');
        $addon = new $class();
        $param = $addon->admin_list;
        if(!$param)
            $this->error('插件列表信息不正确');
        extract($param);
        if(isset($model)){
            $addonModel = D("Addons://{$name}/{$model}");
            if(!$addonModel)
                $this->error('模型无法实列化');
        }

        $map = array('id' => array('in', $ids) );
        if($addonModel->where($map)->delete()){
            $this->success('删除成功');
        } else {
            $this->error('删除失败！');
        }
    }

}