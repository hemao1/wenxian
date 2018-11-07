<?php
namespace Home\Controller;
use Think\Controller;
class DuotiaoController extends Controller {
    public function tuijian(){
        
        $data = M('memu') ->  select();
        foreach($data as $k => $v){
            $data[$k]['imgs'] = $_SERVER['HTTP_HOST'].'/Public/img/'.$v['imgs'];
        }
        //var_dump($data) ;die;
         $result = array(
         	'code' => '200',
         	'message' => '链接成功！',
         	'data' => $data
         	);

        $this->ajaxReturn($result,'JSON'); 
        
    }
  
       public function jingdian(){
        
        $data = M('news') ->  select();
        foreach($data as $k => $v){
            $data[$k]['imgs'] = $_SERVER['HTTP_HOST'].'/Public/img/'.$v['imgs'];
        }
        //$data = json_encode($data);
         $a = array(
            'code' => '200',
            'message' => '链接成功！',
            'data' => $data
            );

         $this->ajaxReturn($a,'JSON'); 
        
    }
     
   
}
  
