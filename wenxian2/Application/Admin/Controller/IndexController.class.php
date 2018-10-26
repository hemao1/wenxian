<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function index()
    {
    
       $this->display();

    }

    public function Login()
    {

    	if($_POST)
    	{

    	  $data= M('news')->select();		
    	    
    	  $this->success('登录成功', 'index');

    	}
    	else
    	{

    		 $this->display('login');

    	}

    }




}
