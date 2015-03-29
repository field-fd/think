<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends CommonController{
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
	session('username',$user['username']);
	session('password',$user['password']);
	 $User = M('article');
     $list = $User->select();
     $this->assign('list',$list);
	 $this->display('admin');
	}
	
	
	public function addarticle(){
		 $this->display();
		}
		
   public function add(){    
	   if (!IS_POST)    $this->error('页面不存在');
	   $data=array(
	   'title' => I('title'),
	   'content' => I('content'),
	   'time' => time()   
	   );
	   $flag=M('article')->data($data)->add();
	  if ($flag)
	   {
		    echo "<script>alert('发布成功');</script>";
		   	 $User = M('article');
             $list = $User->select();
             $this->assign('list',$list);
	         $this->display('admin');
	   }else{
		   $this->error('发布失败');
	   }	   
   }
  
  public function delete(){
	if (!IS_GET)    $this->error('页面不存在');
	   $id = $_GET['id']; 
     $drop=M('article')->where(array('id'=>$id))->delete();
       if ($drop)
	   {
		    echo "<script>alert('删除成功');</script>";
		  	 $User = M('article');
             $list = $User->select();
             $this->assign('list',$list);
	         $this->display('admin');
	   }else{
		   $this->error('删除失败');			
	     }	
	   }
}
?>
