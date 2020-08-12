<?php
class UserController extends Controller{
	
	public function __construct($arrParams){
		parent::__construct($arrParams);
		$this->_templateObj->setFolderTemplate('default/main/');
		$this->_templateObj->setFileTemplate('index.php');
		$this->_templateObj->setFileConfig('template.ini');
		$this->_templateObj->load();
	}
	public function loginAction(){
		$this->_view->setTitle('Đăng nhập');

		if(isset($this->_arrParam['form']['submit'])){
			if(Session::get('token') == $this->_arrParam['form']['token'] ){
				Session::delete('token');
				URL::redirect('default','user','login');
			}else{
				 Session::set('token',$this->_arrParam['form']['token']) ;
			}
		}
		if(isset($this->_arrParam['form']['token']) && $this->_arrParam['form']['token'] > 0){
			$validate = new Validate($this->_arrParam['form']) ;
			$username = $this->_arrParam['form']['username'] ;
			$password = md5($this->_arrParam['form']['password']) ; 
			$query    = "SELECT `id` FROM `".DB_TABLE_USER."` WHERE `username` = '$username' AND  `password` = '$password'" ; 
			$validate->addRule('username', 'existRecord' , array('database' => $this->_model , 'query'=> $query)) ;
			$validate->run() ;
			if($validate->isValid() == true)
			{	
				$infoUser = $this->_model->inforItems($this->_arrParam['form']) ;
					$arraySesssionDefault = array(
								'login' 	=> true,
								'info'  	=> $infoUser ,
								'time'		=> time() ,
								'group_acp'	=> $infoUser['group_acp']
					) ;
				Session::set('userDefault',$arraySesssionDefault) ;	
				URL::redirect('default','index','index')	;
			}else
			{
				$this->_view->errors = $validate->showErrorsPublic() ;
			}
		}
		
		$this->_view->render($this->_arrParam['controller'] . DS . 'login');
	}
	public function registerAction(){

		$this->_view->setTitle('Đăng ký');

		if(isset($this->_arrParam['form']['submit'])){
			if(Session::get('token') == $this->_arrParam['form']['token'] ){
				Session::delete('token');
				URL::redirect('default','user','register');
			}else{
				 Session::set('token',$this->_arrParam['form']['token']) ;
			}
			if(isset($this->_arrParam['form']['token']) > 0){
				$queryUserName  = "SELECT `id` FROM `".DB_TABLE_USER."` WHERE `username` = '".$this->_arrParam['form']['username']."'" ; 
				$queryUserEmail = "SELECT `id` FROM `".DB_TABLE_USER."` WHERE  `email`   = '".$this->_arrParam['form']['email']."'" ; 
				$validate = new Validate($this->_arrParam['form']); 
				$validate ->addRule('email','email-notExistRecord', array('database'=>$this->_model, 'query'      => $queryUserEmail))
						  ->addRule('phone', 'int', array('min' => 1 , 'max' => 1000000000000)) 
						  ->addRule('username', 'string-notExistRecord', array('database'=>$this->_model, 'query' => $queryUserName ,'min' => 2 , 'max' => 50))
						  ->addRule('password', 'password',array('action' => 'add'));
					$validate->run();			 
					$this->_arrParam['form'] = $validate->getResult();
					if ($validate->isValid() == false) {
						$this->_view->errors = $validate->showErrorsPublic();					
					}else{
						$this->_model->saveItems($this->_arrParam['form'], ['task' => 'user-register']);
						URL::redirect('default','user','notice',['type'=>'register-success']) ;
					}	
			}			
		}
		$this->_view->render($this->_arrParam['controller'] . DS . 'register');
	}
	public function noticeAction(){

		$this->_view->setTitle('Thông báo');
		
		$this->_view->render($this->_arrParam['controller'] . DS . 'notice');
	}
	public function logoutAction()
	{
		Session::destroy() ;
		URL::redirect('default','index','index') ;
	}
}