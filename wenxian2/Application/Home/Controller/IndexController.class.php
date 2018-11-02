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
     //菜单中心接口
     public function memu()
     {

        $data =M('memu')->select();

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
     //推荐菜品接口
     public function memuhots()
     {

        $data =M('memu')->where(array('hots'=>'1'))->select();

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

     //菜品详情信息接口
     public function memuxiang($id = 0)
     {
        $data =M('memu')->where(array('id'=>$id))->select();

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
        $result = array('code'=>$code, 'message'=>$message, 'data'=>$data);

        $this->ajaxReturn($result,'JSONP');

    }

    public function huodong()
    {

        $data =M('activity')->select();

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

        $result = array('code'=>$code, 'message'=>$message, 'data'=>$data);

        $this->ajaxReturn($result,'JSONP');

    }

    public function huodongxiang($id = 0)
    {


        $data =M('activity')->where(array('id'=>$id))->select();

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

        $result = array('code'=>$code, 'message'=>$message, 'data'=>$data);

        $this->ajaxReturn($result,'JSONP');

    }

    public function yanqing()
    {

        $data =M('activity')->where(array('hots'=>'1'))->select();

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
