<?php
class BookController extends AdminController
{
	public function indexAction()
	{
		$this->_view->setTitle(ucfirst($this->_arrParam['controller']));
		$this->_view->listItems      		= $this->_model->listItems($this->_arrParam);
		$this->_view->selectBox             = $this->_model->itemsInSelectBox($this->_arrParam);
		$this->_view->countItems[]			= $this->_model->countItems($this->_arrParam);
		$this->_view->countItems[]   		= $this->_model->countItems($this->_arrParam, ['task' => 'active']);
		$this->_view->countItems[]   		= $this->_model->countItems($this->_arrParam, ['task' => 'inactive']);
		$this->_view->pagination        	= new Pagination($this->_view->countItems[0]['total'], $this->_pagination);

		$this->_view->render($this->_arrParam['controller'] . DS . 'index');
	}
	public function formAction()
	{	
		$task = (!empty($this->_arrParam['form']['id'])) ? 'edit' : 'add';
		$this->_view->setTitle(ucfirst($this->_arrParam['controller']) . ' : Add');
		$this->_view->selectBoxCategory  = $this->_model->itemsInSelectBox($this->_arrParam) ;
		if(!empty($_FILES)) $this->_arrParam['form']['picture'] = $_FILES['picture'];
		
		if (!empty($this->_arrParam['id'])) {
			$this->_view->setTitle(ucfirst($this->_arrParam['controller']) . ': Edit');
			$this->_arrParam['form'] = $this->_model->infoItems($this->_arrParam, null);
			if (empty($this->_arrParam['form'])) URL::redirect('admin', $this->_arrParam['controller'], 'index');
		}
		if(isset($this->_arrParam['form']['token']) > 0) {	
			$validate = new Validate($this->_arrParam['form']);
			$validate->addRule('name'       , 'string',  array('min' => 3, 'max' => 500))
					 ->addRule('description', 'string',  array('min' => 3, 'max' => 5000))
					//  ->addRule('picture'    , 'file',    array('min' => 100, 'max' => 1000000,'extension'=>array('jpg','png')),false)
					 ->addRule('price'      , 'int',     array('min' => 1000, 'max' => 1000000000))
					 ->addRule('special'    , 'status',  array('deny' => array('default')))
					 ->addRule('status'     , 'status',  array('deny' => array('default')))
					 ->addRule('category_id', 'status',  array('deny' => array('default')))
					 ->addRule('ordering'   , 'int',     array('min' => 1, 'max' => 1000)) ;
					 if($task == 'add' || $this->_arrParam['form']['picture']['name'] != null) {
						$validate->addRule('picture' , 'file',    array('min' => 100, 'max' => 1000000,'extension'=>array('jpg','png')),false) ;
					}
			$validate->run();
			$this->_arrParam['form'] = $validate->getResult();
			if ($validate->isValid() == false) {
				$this->_view->errors = $validate->showErrors();
			}else{
				$id = $this->_model->insertItems($this->_arrParam['form'], array('task' => $task));
				$type = $this->_arrParam['type'];
				if ($type == 'save-close') URL::redirect('admin', $this->_arrParam['controller'], 'index');
				if ($type == 'save-new')   URL::redirect('admin', $this->_arrParam['controller'], 'form');
				if ($type == 'save') 	   URL::redirect('admin', $this->_arrParam['controller'], 'form', array('id' => $id));
			}
		}
		$this->_view->arrParam =  $this->_arrParam;
		$this->_view->render( $this->_arrParam['controller'] . DS .'form');
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
