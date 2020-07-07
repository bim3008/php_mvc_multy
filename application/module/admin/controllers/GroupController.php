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
	 	$totalItems = $this->_view->countItems[] = $this->_model->countItems($this->_arrParam,null);
		$this->_view->countItems[] 	    = $this->_model->countItems($this->_arrParam,array('task'=>'active'));
		$this->_view->countItems[] 	    = $this->_model->countItems($this->_arrParam,array('task'=>'inactive'));  
		$this->_view->countItems[] 	    = $this->_model->countItems($this->_arrParam,array('task'=>'filter_search')); 
		$this->_view->listItems      	= $this->_model->listItems($this->_arrParam);
		$this->_view->pagination        = new Pagination($totalItems, $this->_pagination) ;
		$this->_view->render('group/index') ;				
	}	
	public function changeStatusAction(){		
		$result = $this->_model->changeStatus($this->_arrParam,array('task' => 'ajax-change-status')) ;	
		echo json_encode($result) ;
	}	
	public function changeAjaxACPAction(){			
		$result = $this->_model->changeStatus($this->_arrParam,array('task' => 'ajax-change-group_acp')) ;	
		echo json_encode($result) ;
	}	
	public function deleteAction(){		
		$this->_model->deleteItem($this->_arrParam,array('task'=>'delete')) ;
		URL::redirect('admin','group','index') ;		
	}	
	public function multyDeleteAction(){			
		$this->_model->deleteItem($this->_arrParam,array('task'=>'multy-delete')) ;	
		URL::redirect('admin','group','index') ;	 		
	}	
	public function orderingAction(){			
		$this->_model->ordering($this->_arrParam,null) ;	 		
		URL::redirect('admin','group','index') ; 
	}	





}