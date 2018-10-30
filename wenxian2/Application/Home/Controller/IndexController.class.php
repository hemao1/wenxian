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

     



}
