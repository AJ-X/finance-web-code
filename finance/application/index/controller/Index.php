<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\View;

class Index extends Controller
{
    public function index()
    {
        return $this->fetch();
    }

    public function services()
    {
        return $this->fetch();
    }

    public function portfolio()
    {
        return $this->fetch();
    }

    public function mail()
    {
        return $this->fetch();
    }

    public function person($username)
    {
        $re=Db::table('finance_liuyan')->where('username',$username)->select();
        $this->assign('re',$re);
        return $this->fetch();
    }

    public function login(){
        $data = [                                       
                'username' => input('username'),  
                'password' => input('password'),
            ];

            $result=Db::table('finance_user')->where('username',$data['username'])->where('password',$data['password'])->select();
            $result2=Db::table('finance_admin')->where('username',$data['username'])->where('password',$data['password'])->select();

        if ($result){
            session('user',$data['username']);       
            $this->success('登陆成功!',url('indexdl'));
        }
        elseif ($result2) {
            session('admin',$data['username']); 
            $time=time();
            session('time',$time);       
            $this->success('登陆成功!',url('admin/index'));
        }
        else{
            $this->error('登陆失败!');
        }
    }

    public function register(){
        $data = [                                         
                'username' => input('username'),  
                'password' => input('password'),
            ];      
            if(Db::table('finance_user')->insert($data)){          
                $this->success('注册成功!');
                // $userid = Db::name('finance_user')->getLastInsID(); 
                // session('userid',$userid);   
            }else{  
                $this->error('注册失败!'); 
            }
    }

    public function loginfirst(){
        $this->error('还未登录，请先登录！！!');
    }


    public function indexdl()
    {
        return $this->fetch();
    }

    public function servicesdl()
    {
        return $this->fetch();
    }

    public function portfoliodl()
    {
        return $this->fetch();
    }

    public function maildl()
    {
        return $this->fetch();
    }

    public function email($username){
        $data=[
            'email'=>input('email'),
            'username'=>$username,
        ];
        $re=Db::table('finance_email')->insert($data);
        if ($re) {
            $this->success('提交成功！');
        }else{
            $this->error('提交失败！');
        }
    }

    public function liuyan(){
        $time=time();
        $data=[
            'username'=>input('username'),
            'email'=>input('email'),
            'phone'=>input('phone'),
            'message'=>input('message'),
            'time'=>$time,
        ];
        $re=Db::table('finance_liuyan')->insert($data);
        if ($re) {
            $this->success('提交成功！');
        }else{
            $this->error('提交失败！');
        }
    }

    public function xiugaimima(){
        $data=[
            'username'=>input('username'),
            'password'=>input('password'),
        ];
        $re=Db::table('finance_user')->where('username',$data['username'])->update($data);
        if ($re){
            $this->success('修改成功!');
        }else{  
            $this->error('修改失败!'); 
        }
    }
}
