<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller{
	public function login(){
		 $this->display();
	}
	
   public function handle(){  
     header("Content-type: text/html; charset=utf-8");
	if (!IS_POST)    $this->error('页面不存在');
    $username=I('username');
    $password=I('password');

	$user=M('user')->where(array('username'=>$username))->find();
	if (!$user||$user['password']!=$password){
		$this->error('账号或者密码错误');
	}
	session('uid',$user['id']);
	session('username',$username);
	session('password',$password);
	// $User = M('article');
    // $list = $User->select();
     //$this->assign('list',$list);	 
      $this->redirect('Login/admin');
	}
	
    public function admin(){
	 import('ORG.Util.Page');
	 $count = M('article')->count();
	 $page = new \Think\Page($count,10);	
	 $limit = $page->firstRow.','.$page->listRows;
	 $list = M('article')->order('time DESC')->limit($limit)->select();
	 $this->list = $list;
	 $this->page = $page->show();
	 $this->display();
	
}	
	public function addarticle(){
		if (session('username')=="")
		 $this->redirect('Login/login');
		 $this->display();
		}
		
   public function add(){    
	   if (session('username')=="")
		$this->redirect('Login/login');
	   $data=array(
	   'title' => I('title'),
	   'content' => I('content'),
	   'time' => time()   
	   );
	   $flag=M('article')->data($data)->add();
	  if ($flag)
	   {
		    echo "<script>alert('发布成功');</script>";
	         $this->redirect('Login/admin');
	   }else{
		   $this->error('发布失败');
	   }	   
   }
  
  public function delete(){
	if (session('username')=="")
	   $this->redirect('Login/login');
	   $id = $_GET['id']; 
     $drop=M('article')->where(array('id'=>$id))->delete();
       if ($drop)
	   {
		    echo "<script>alert('删除成功');</script>";
		  	  $this->redirect('Login/admin');
	   }else{
		   $this->error('删除失败');			
	     }	
	   }
	public function logout(){
		session(null);
		$this->redirect('Login/login');
	}
}
?>
