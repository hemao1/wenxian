<?php
namespace Home\Controller;
use Think\Controller;
class LeixingController extends Controller {
    public function xinxi(){
        
        $data = M('cate') -> field('type_id','title') -> select();
        foreach($data as $k => $v){
            $data[$k]['imgs'] = $_SERVER['HTTP_HOST'].'/ceshi/Public/uploads/img/'.$v['imgs'];
        }
         $a = array(
            'code' => '200',
            'message' => '链接成功！',
            'data' => $data
            );

         $this->ajaxReturn($a,'JSON'); 
        
    }

    public function caipin(){
        
        $data = M('memu') ->  select();
        //$data = json_encode($data);
         $a = array(
            'code' => '200',
            'message' => '链接成功！',
            'data' => $data
            );

         $this->ajaxReturn($a,'JSON'); 
        
    }
  
    Public function detalis($id){
        $data = M('shouye') -> find($id);      
         $a = array(
            'code' => '200',
            'message' => '链接成功！',
            'data' => $data
            );

         $this->ajaxReturn($a,'JSON'); 
    }
}
  
