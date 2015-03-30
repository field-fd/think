<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){  
	 import('ORG.Util.Page');
	 $count = M('article')->count();
	 $page = new \Think\Page($count,8);	
	 $limit = $page->firstRow.','.$page->listRows;
	 $list = M('article')->order('time DESC')->limit($limit)->select();
	 $this->list = $list;
	 $this->page = $page->show();
	 $this->display();
   }

    public function article(){	
		$id=$_GET['id'];
		$article=M('article')->where(array('id'=>$id))->find();
		$this->assign('article',$article);
		$this->display();
		
	}


   
 }
