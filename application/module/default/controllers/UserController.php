<?php
class UserController extends FontendController{
	
	public function indexAction()
	{ 
		$this->checkLogin();
		$this->_view->setTitle('Hồ Sơ');
		$this->_view->Items = $this->_model->listItems($this->_arrParam,['task'=>'history-cart']) ;

		// CHANGE PASSS
		if(isset($this->_arrParam['form']['token-fe-change'] ) && $this->_arrParam['form']['token-fe-change'] > 0){
			$this->checkSession('token-fe-change','default','user','index');
			$validate = new Validate($this->_arrParam['form']); 
			$validate ->addRule('old-pass', 'password',array('action' => 'add'))
					  ->addRule('new-pass', 'password',array('action' => 'add'))
					  ->addRule('re-pass', 'password',array('action' => 'add'));
				$validate->run();			 
				$this->_arrParam['form'] = $validate->getResult();
				if ($validate->isValid() == false) {
					$this->_view->errors = $validate->showErrorsPublic();					
				}else{
					$this->_model->saveItems($this->_arrParam['form'], ['task' => 'change-pass']);
				}
		
		}
		$this->_view->render($this->_arrParam['controller'] . DS . 'index');	
	}
	public function loginAction(){
		$this->checkLogined();
		$this->_view->setTitle('Đăng nhập');
		
		if(isset($this->_arrParam['form']['token']) && $this->_arrParam['form']['token'] > 0){
			$this->checkSession('token','default','user','login');
			$validate = new Validate($this->_arrParam['form']) ;
			$username = $this->_arrParam['form']['username'] ;
			$password = md5($this->_arrParam['form']['password']) ; 
			$query    = "SELECT `id` FROM `".DB_TABLE_USER."` WHERE `username` = '$username' AND  `password` = '$password' AND `status` = 0" ; 
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
				URL::redirect('default','index','index',null,'trang-chu.html')	;
			}else
			{
				$this->_view->errors = $validate->showErrorsPublic() ;
			}
		}
		$this->_view->render($this->_arrParam['controller'] . DS . 'login');
	}
	public function registerAction(){

		$this->checkLogined();
		$this->_view->setTitle('Đăng ký');
		if(isset($this->_arrParam['form']['submit'])){

			$this->checkSession('token','default','user','register');

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
	public function orderAction()
	{
		$this->checkLogin();
		$cart   = Session::get('cart') ;
		$bookID = $this->_arrParam['book_id']	;
		if(empty($cart)){
			$cart['quantity'][$bookID] = 1 ;
		}else{
			if(key_exists($bookID,$cart['quantity'])){
				$cart['quantity'][$bookID] += 1 ;
			}else{
			 	$cart['quantity'][$bookID] = 1 ;
			}
		}	
		Session::set('cart',$cart) ;
		URL::redirect($this->_arrParam['module'],'user','cart') ;
	}
	public function cartAction()
	{
		$this->checkLogin();
		$this->_view->setTitle('Giỏ hàng');
		$this->_view->Items = $this->_model->listItems($this->_arrParam,['task'=>'books-in-cart']) ;
		$this->_view->render($this->_arrParam['controller'] . DS . 'cart');		
	}
	public function buyAction()
	{
		$this->_view->Items = $this->_model->saveItems($this->_arrParam,['task'=>'save-buy-books']);
		URL::redirect('default','user','notice',['type'=>'buy-success']);	
	}
	public function deleteAction()
	{
		$this->_view->Items = $this->_model->delete($this->_arrParam,['task'=>'delete-in-cart']);
		// URL::redirect('default','user','notice',['type'=>'buy-success']);	
	}
	public function logoutAction()
	{
		Session::destroy() ;
		URL::redirect('default','index','index',null,'trang-chu.html') ;
	}
	
	
}