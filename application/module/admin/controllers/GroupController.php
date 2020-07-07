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
	public function formAction(){		

		$this->_view->setTitle('Group : Add');
		if(!empty($this->_arrParam['id']))
		{
			$this->_view->setTitle('Group : Edit');
			$this->_arrParam['form'] = $this->_model->infoItems($this->_arrParam,null) ;
			if(empty($this->_arrParam['form'])) URL::redirect('admin','group','index') ;
		}	
		if($this->_arrParam['form']['token'] > 0)
		{
			$validate = new Validate($this->_arrParam['form']) ;

			$validate 	->addRule('name','string',array('min'=> 3, 'max'=>50))
						->addRule('ordering','int',array('min'=>1,'max'=>100))
						->addRule('status','status',array('deny'=>array('default'))) 
						->addRule('group_acp','status',array('deny'=>array('default'))) ;						
			$validate->run();
			$this->_arrParam['form'] = $validate->getResult() ;
			if($validate->isValid()==false)
			{
				$this->_view->errors = $validate->showErrors() ;
			}
			else
			{
				$task = (isset($this->_arrParam['form']['id'])) ? 'edit' :'add' ; 
				$this->_model->insertItems($this->_arrParam['form'],array('task'=> $task )) ;
				$type = $this->_arrParam['type'];
				if($type == 'save-close') URL::redirect('admin','group','index') ;
				if($type == 'save-new')   URL::redirect('admin','group','form')  ;			
			}
		}
		$this->_view->arrParam =  $this->_arrParam ;
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