<?php
class GroupController extends Controller{
	public function __construct($arrParam){
		parent::__construct($arrParam);
		$this->_templateObj->setFolderTemplate('admin/adminlte/');
		$this->_templateObj->setFileTemplate('index.php');
		$this->_templateObj->setFileConfig('template.ini');
		$this->_templateObj->load();		
	}	
	public function indexAction(){	
		$this->_view->setTitle('Group');
		$this->_view->listItems      = $this->_model->listItems($this->_arrParam);
		$this->_view->countItems 	 = $this->_model->countItems($this->_arrParam);
		$this->_view->render('group/index') ;			
	}	

	public function formAction(){	
		$this->_view->setTitle('CRUD');
		$this->_view->render('group/form') ;				
	}	

	public function changeStatusAction(){			
		$result = $this->_model->changeStatus($this->_arrParam,array('task' => 'ajax-change-status')) ;	
		echo json_encode($result) ;
	}	

	public function changeAjaxACPAction(){			
		$result = $this->_model->changeStatus($this->_arrParam,array('task' => 'ajax-change-group_acp')) ;	
		echo json_encode($result) ;
	}	


}