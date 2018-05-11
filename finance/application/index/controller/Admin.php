<?php
namespace app\index\controller;
use think\Controller;
use think\View;
use think\Db;

class Admin extends Controller
{
    public function index()
    {
        return $this->fetch();
    }

    public function yonghuliebiao(){
        $re=Db::table('finance_user')->select();
        $this->assign('re',$re);
        return $this->fetch();
    }

    public function tianjiayonghu()
    {
        return $this->fetch();
    }

    public function yonghutianjia()
    {
        $data=[
            'username'=>input('username'),
            'password'=>input('password'),
        ];
        if(Db::table('finance_user')->insert($data)){          
                $this->success('添加成功!',url('yonghuliebiao'));
                // $userid = Db::name('finance_user')->getLastInsID(); 
                // session('userid',$userid);   
            }else{  
                $this->error('添加失败!'); 
            }
    }

    public function xiugaiyonghu($id)
    {
        $re=Db::table('finance_user')->where('id',$id)->find();
        $this->assign('re',$re);
        return $this->fetch();
    }

    public function yonghuxiugai($id){
        $data=[
            'username'=>input('username'),
            'password'=>input('password'),
        ];
        $re=Db::table('finance_user')->where('id',$id)->update($data);
        if ($re){
            $this->success('修改成功!',url('yonghuliebiao'));
        }else{  
                $this->error('修改失败!'); 
            }
    }

    public function shanchuyonghu($id){
        Db::table('finance_user')->where('id',$id)->delete();
    }

    //-------------------------------------

    public function adminliebiao(){
        $re=Db::table('finance_admin')->select();
        $this->assign('re',$re);
        return $this->fetch();
    }

    public function tianjiaadmin()
    {
        return $this->fetch();
    }

    public function admintianjia()
    {
        $data=[
            'username'=>input('username'),
            'password'=>input('password'),
        ];
        if(Db::table('finance_admin')->insert($data)){          
                $this->success('添加成功!',url('adminliebiao'));
                // $userid = Db::name('finance_user')->getLastInsID(); 
                // session('userid',$userid);   
            }else{  
                $this->error('添加失败!'); 
            }
    }

    public function xiugaiadmin($id)
    {
        $re=Db::table('finance_admin')->where('id',$id)->find();
        $this->assign('re',$re);
        return $this->fetch();
    }

    public function adminxiugai($id){
        $data=[
            'username'=>input('username'),
            'password'=>input('password'),
        ];
        $re=Db::table('finance_admin')->where('id',$id)->update($data);
        if ($re){
            $this->success('修改成功!',url('adminliebiao'));
        }else{  
                $this->error('修改失败!'); 
            }
    }

    public function shanchuadmin($id){
        Db::table('finance_admin')->where('id',$id)->delete();
    }


    public function emailliebiao(){
        $re=Db::table('finance_email')->select();
        $this->assign('re',$re);
        return $this->fetch();
    }

    public function shanchuemail($id){
        Db::table('finance_email')->where('id',$id)->delete();
    }

    public function liuyanliebiao(){
        $re=Db::table('finance_liuyan')->select();
        $this->assign('re',$re);
        return $this->fetch();
    }

    public function shanchuliuyan($id){
        Db::table('finance_liuyan')->where('id',$id)->delete();
    }
}