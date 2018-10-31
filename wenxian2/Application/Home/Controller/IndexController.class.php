<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function index(){

        $this->display();

    }

     public function About()
     {

        $this->display();

     }

     public function Information()
     {

        $this->display();

     }
     public function Activities()
     {

        $this->display();

     }
     public function Menu()
     {

        $this->display();

     }
     public function ContactUs()
     {

        $this->display();
     }
     //美食资讯
     public function duotiao()
     {

        $data = M('news')->select();

        if($data)
        {

            $code = 200;
            $message = 'success';

        }
        else
        {

            $code = 404;
            $message = 'fail';
        }

        $result = array('code'=>$code, 'message'=>$message,'data'=>$data);
        
        $this->ajaxReturn($result,'JSONP');
     }
     //app接口
     public function dantiao()
     {

        $data = M('news')->select();

        if($data)
        {

            $code = 200;
            $message = 'success';

        }
        else
        {

            $code = 404;
            $message = 'fail';
        }

        $result = array('code'=>$code, 'message'=>$message,'data'=>$data);

        $this->ajaxReturn($result,'JSON');

     }
     //美食详情
     public function xiangqing($id = 0 )
     {
        $data =M('news')->where(array('id'=>$id))->select();


        if($data)
        {

            $code = 200;
            $message = 'success';

        }
        else
        {

            $code = 404;
            $message = 'fail';
        }

        $result = array('code'=>$code, 'message'=>$message,'data'=>$data);
        
        $this->ajaxReturn($result,'JSONP');

     }

     //轮播图
     public function lunbo($type_id = 0)
     {

        $data = M('type as a')->join('shouye as b on b.type_id = a.type_id')->where(array('a.type_id'=>$type_id))->select();

         if($data)
        {

            $code = 200;
            $message = 'success';

        }
        else
        {

            $code = 404;
            $message = 'fail';
        }

        $result = array('code'=>$code, 'message'=>$message,'data'=>$data);

        $this->ajaxReturn($result,'JSONP');

     }
     //标题
     public function leixing()
     {

        $data =M('type')->select();

        if($data)
        {

            $code = 200;
            $message = 'success';

        }
        else
        {

            $code = 404;
            $message = 'fail';
        }

        $result = array('code'=>$code, 'message'=>$message,'data'=>$data);
        
        $this->ajaxReturn($result,'JSONP');

     }

   
}
