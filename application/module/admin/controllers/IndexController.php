<?php
class IndexController extends Controller{
	
	public function __construct($arrParams){
		parent::__construct($arrParams);
	}
	public function indexAction(){

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
				// echo '<h3>ok'.__METHOD__.'<h3>' ;
					URL::redirect('admin', 'index', 'index');
			}else
			{
				$this->_view->errors = $validate->showErrors() ;
			}
		}
		$this->_view->render('index/login');
		
	}
} 