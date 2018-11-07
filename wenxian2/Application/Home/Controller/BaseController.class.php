<?php
namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller {
	//首页
	//轮播图
	public function index(){
        $data = M('lunbotu') ->  select();
        foreach($data as $k => $v){
            $data[$k]['fimg_src'] = $_SERVER['HTTP_HOST'].'/Public/img/lunbotu/'.$v['fimg_src'];
        }
        //var_dump($data) ;die;
         $result = array(
         	'code' => '200',
         	'message' => '链接成功！',
         	'data' => $data
         	);

        $this->ajaxReturn($result,'JSON'); 
        
    }
  
}