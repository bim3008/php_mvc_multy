<?php
class IndexController extends Controller{
	
	public function __construct($arrParams){
		parent::__construct($arrParams);
	}
	public function indexAction(){
		$infomationUser = Session::get('user') ;

		// echo '<pre>';
		// print_r($_SESSION);
		// echo '</pre>';
		// if(isset($_SESSION['FBRLH_state']))
		// {	
		// 	Session::delete('FBRLH_state') ;
		// 	URL::redirect('admin','index','index') ;
		// }
		// if ( $infomationUser['login'] == false || $infomationUser['group_acp'] != '1'){
		// 	Session::delete('user') ;
		// 	URL ::redirect('admin','index','login') ;
		// }
		//else if($_SESSION['FBRLH_state']){
		// 	Session::destroy('FBRLH_state') ;
		// 	URL ::redirect('admin','index','index') ;
		// }
		$this->_view->setTitle(ucfirst($this->_arrParam['action']) );
		$this->_templateObj->setFolderTemplate('admin/adminlte/');
		$this->_templateObj->setFileTemplate('index.php');
		$this->_templateObj->setFileConfig('template.ini');
		$this->_templateObj->load();
		$this->_view->countItemsIndex[] = $this->_model->countItemsIndex($this->_arrParam,array('task' => 'group'));
		$this->_view->countItemsIndex[] = $this->_model->countItemsIndex($this->_arrParam,array('task' => 'user'));
		$this->_view->render('index/index');
				
	}
	public function loginAction()
	{
		$infomationUser = Session::get('user') ;
		if( isset($infomationUser['login']) &&  $infomationUser['time'] + 3600 >= time() ){
			URL ::redirect('admin','index','index') ;
		}
		$this->_view->setTitle(ucfirst($this->_arrParam['action']) );
		$this->_templateObj->setFolderTemplate('admin/login/');
		$this->_templateObj->setFileTemplate('index.php');
		$this->_templateObj->setFileConfig('template.ini');
		$this->_templateObj->load();
		if(isset($this->_arrParam['form']['token']) > 0)
		{
			$validate = new Validate($this->_arrParam['form']) ;
			$username = $this->_arrParam['form']['username'] ;
			$password = $this->_arrParam['form']['password'] ;
		 	$query    = "SELECT `id` FROM `".DB_TABLE_USER."` WHERE `username` = '$username' AND  `password` = '$password'" ;
			$validate->addRule('username', 'existRecord' , array('database' => $this->_model , 'query'=> $query )) ;
			$validate->run() ;
			if($validate->isValid() == true)
			{	
				$infoUser = $this->_model->inforItems($this->_arrParam['form']) ;
					$arraySesssion = array(
								'login' 	=> true,
								'info'  	=> $infoUser ,
								'time'		=> time() ,
								'group_acp'	=> $infoUser['group_acp']
					) ;
				Session::set('user',$arraySesssion) ;	
				Session::set('fullname',$arraySesssion['info']['fullname']) ;
				URL::redirect('admin','index','index')	;
				
			}else
			{
				$this->_view->errors = $validate->showErrors() ;
			}
		}
		$this->_view->render('index/login');
		
	}
	public function logoutAction()
	{
		Session::delete('user') ;
		URL::redirect('admin','index','login') ;
	}

} 