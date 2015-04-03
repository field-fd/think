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
    public function note(){
	  import('ORG.Util.Page');
	  $count = M('note')->count();
	  $page = new \Think\Page($count,6);	
	  $limit = $page->firstRow.','.$page->listRows;
	  $list = M('note')->order('time DESC')->limit($limit)->select();
	  $this->list = $list;
	  $this->page = $page->show();
	  $this->display();
		
	}
      public function addnote(){   
	  if (I('name')==""){
		  $name="匿名用户";
	  }else{
		  $name=I('name');
	  }	  
	  $data=array(
	   'name' => $name,
	   'content' => I('myEditor','',htmlspecialchars_decode),
	   'time' => time()   
	   );
	   $flag=M('note')->data($data)->add();
	  if ($flag)
	   {
		    echo "<script>alert('留言成功');</script>";
	         $this->redirect('note');
	   }else{
		   $this->error('留言失败');
	   }
   }
   
     public function photo(){
	  import('ORG.Util.Page');
	  $count = M('photo')->count();
	  $page = new \Think\Page($count,8);	
	  $limit = $page->firstRow.','.$page->listRows;
	  $list = M('photo')->order('time DESC')->limit($limit)->select();
	  $this->list = $list;
	  $this->page = $page->show();
	  $this->display();
		 
		 
	 }





	 }
