<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){  
	 $User = M('article');
     $list = $User->select();
     $this->assign('list',$list);
	 $this->display();
   }

    public function article(){
		$id=$_GET['id'];
		$article=M('article')->where(array('id'=>$id))->find();
		$this->assign('article',$article);
		$this->display();
	}


   
 }
