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
	   'content' => I('myEditor','',htmlspecialchars_decode),
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

	public function drop(){
		if (session('username')=="")
	   $this->redirect('Login/login');
	   $id = $_GET['id']; 
       $drop=M('note')->where(array('id'=>$id))->delete();
       if ($drop)
	   {
		    echo "<script>alert('删除成功');</script>";
		  	  $this->redirect('Login/note');
	   }else{
		   $this->error('删除失败');			
	     }	
	}
	public function photo(){
		if (session('username')=="")
	    $this->redirect('Login/login');
	    import('ORG.Util.Page');
	    $count = M('photo')->count();
	    $page = new \Think\Page($count,10);	
	    $limit = $page->firstRow.','.$page->listRows;
	    $list = M('photo')->order('time DESC')->limit($limit)->select();
	    $this->photo = $list;
	    $this->page = $page->show();
	    $this->display();
	}
	public function addphoto(){  
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     5145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     './Public/Uploads/'; // 设置附件上传根目录
        $info   =   $upload->uploadOne($_FILES['photo']);
        if(!$info) {// 上传错误提示错误信息
        $this->error($upload->getError());
        }else{
            // 保存名字
			$data=array(
	        'name' => $info['savepath'].$info['savename'],
	        'time' => time()   
	   );
          $flag=M('photo')->data($data)->add();
	  if ($flag)
	   {
	         $this->redirect('Login/photo');
	   }else{
		   $this->error('上传失败');
	   }
	 }
	}
	public function deletephoto(){
		if (session('username')=="")
	   $this->redirect('Login/login');
	   $id = $_GET['id'];
	   $file=M('photo')->where(array('id'=>$id))->find();
	   $fi='./Public/Uploads/';
	   $filename=$file['name'];
	   unlink($fi.$filename);
       $drop=M('photo')->where(array('id'=>$id))->delete();
       if ($drop)
	   {    
		  	  $this->redirect('Login/photo');
	   }else{
		   $this->error('删除失败');			
	     }	
		
	}
}
?>
