<?php
class UserController extends Controller
{

	public function __construct($arrParam)
	{
		parent::__construct($arrParam);
		$this->_templateObj->setFolderTemplate('default/main/');
		$this->_templateObj->setFileTemplate('index.php');
		$this->_templateObj->setFileConfig('template.ini');
		$this->_templateObj->load();
	}
	public function loginAction()
	{
		$this->_templateObj->setFileTemplate('login.php');
		$this->_view->render($this->_arrParam['controller'] . DS . 'login');
	}
	
}
