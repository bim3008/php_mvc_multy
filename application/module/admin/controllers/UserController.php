<?php
class UserController extends AdminController
{

	public function indexAction(){
		$this->_view->setTitle(ucfirst($this->_arrParam['controller']));
		$this->_view->listItems      		= $this->_model->listItems($this->_arrParam);
		$this->_view->selectBoxGroup        = $this->_model->itemsInSelectBox($this->_arrParam);
		$this->_view->countItems[]			= $this->_model->countItems($this->_arrParam);
		$this->_view->countItems[]   		= $this->_model->countItems($this->_arrParam, array('task' => 'active'));
		$this->_view->countItems[]   		= $this->_model->countItems($this->_arrParam, array('task' => 'inactive'));
		$this->_view->pagination        	= new Pagination($this->_view->countItems[0]['total'], $this->_pagination);
		$this->_view->render($this->_arrParam['controller'] . DS . 'index');
	}
	public function formAction(){

		$title = ucfirst($this->_arrParam['controller']) ;
		if(isset($this->_arrParam['type'])=='change-pass'){
			if(!empty($this->_arrParam['change'])){
				$this->_model->changePassword($this->_arrParam['change']) ;
			}		
		}
		$this->_view->setTitle($title. ': Add');
		$this->_view->selectBoxGroup  = $this->_model->itemsInSelectBox($this->_arrParam) ;
		if (isset($this->_arrParam['id']) && !(isset($this->_arrParam['form']['token']))){
			$this->_view->setTitle($title. ' : Edit');
			$this->_arrParam['form'] = $this->_model->infoItems($this->_arrParam, null); 
			if(empty($this->_arrParam['form'])) URL::redirect('admin', $this->_arrParam['controller'], 'index');
		}
		if(isset($this->_arrParam['form']['token']) > 0){
			$requirePass = true ;
			$queryUserName  = "SELECT `id` FROM `".DB_TABLE_USER."` WHERE `username` = '".$this->_arrParam['form']['username']."'" ; 
			$queryUserEmail = "SELECT `id` FROM `".DB_TABLE_USER."` WHERE  `email`   = '".$this->_arrParam['form']['email']."'" ; 
			$task  = 'add' ;
			if(!empty($this->_arrParam['form']['id'])){
				$requirePass = false ;
		        $task = 'edit' ;
				$queryUserName  .= "AND `id`  <> '".$this->_arrParam['form']['id']."' " ;
				$queryUserEmail .= "AND `id`  <> '".$this->_arrParam['form']['id']."' " ;
			}
			if(!empty($this->_arrParam['type']) && $this->_arrParam['type'] != 'change-pass'){
				$validate = new Validate($this->_arrParam['form']); 
				$validate->addRule('username', 'string-notExistRecord', array('database'=>$this->_model, 'query' => $queryUserName ,'min' => 2 , 'max' => 50))
						->addRule('password', 'password',array('action' => $task) , $requirePass)
						->addRule('email','email-notExistRecord', array('database'=>$this->_model, 'query' => $queryUserEmail))
						->addRule('fullname', 'string', 	array('min' => 10, 'max' => 50))
						->addRule('status',    'status',   array('deny' => array('default')))
						->addRule('ordering', 'int', array('min' => 1, 'max' => 100))
						->addRule('group_id',  'status',    array('deny' => array('default'))) ;
				$validate->run();			 
				$this->_arrParam['form'] = $validate->getResult();
				if ($validate->isValid() == false) {
					$this->_view->errors = $validate->showErrors();					
				}else{
					$this->_model->insertItemsUser($this->_arrParam['form'], array('task' => $task));
					$type = $this->_arrParam['type'];
					if ($type == 'save-close') URL::redirect('admin', $this->_arrParam['controller'], 'index');
					if ($type == 'save-new')   URL::redirect('admin', $this->_arrParam['controller'], 'form' );
					if ($type == 'save')   	   URL::redirect('admin', $this->_arrParam['controller'],  'form',array('id'=> $this->_arrParam['form']['id']));
				}
			}
		}
		$this->_view->arrParam =  $this->_arrParam;
		$this->_view->render($this->_arrParam['controller'] . DS . 'form');
	}
	public function changeStatusAction()
	{
		$result = $this->_model->changeStatus($this->_arrParam, array('task' => 'ajax-change-status'));
		URL::redirect($this->_arrParam['module'], $this->_arrParam['controller'], 'index');
	}
	public function changeGroupAcpAction()
	{
		$result = $this->_model->changeStatus($this->_arrParam, array('task' => 'ajax-change-group_acp'));
		URL::redirect($this->_arrParam['module'], $this->_arrParam['controller'], 'index');
	}
	public function deleteAction()
	{

		$this->_model->deleteItem($this->_arrParam, array('task' => 'delete'));
		URL::redirect($this->_arrParam['module'], $this->_arrParam['controller'], 'index');
	}
	public function multyDeleteAction()
	{
		$this->_model->deleteItem($this->_arrParam, array('task' => 'multy-delete'));
		URL::redirect($this->_arrParam['module'], $this->_arrParam['controller'], 'index');
	}
	public function orderingAction()
	{
		$this->_model->ordering($this->_arrParam, null);
		URL::redirect($this->_arrParam['module'], $this->_arrParam['controller'], 'index');
	}
}
