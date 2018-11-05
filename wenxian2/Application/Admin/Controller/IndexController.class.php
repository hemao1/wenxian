<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function index()
    {
    
       $this->display();

    }

    //后台登录
    public function Login()
    {
    	if($_POST)
    	{

           $username = $_POST['username'];

           $password   = $_POST['pwd'];

           if($username)
           {
           
             $data =M('user')->where(array('username'=>$username))->find();
         
            $name = $data['username'];

            $pwd  = $data['pwd'];

            if($username == $name && $password ==$pwd)
            {

                $this->success('登录成功', 'index');

            }
            else
            {

                $this->success('账号错误', 'login');

            }

           }
           else
           {

            $this->success('账号不能为空', 'login');

           }

    	}
    	else
    	{

           
    		 $this->display('login');

    	}

    }





}
