<?php
class Controller{
	
	// View Object
	protected $_view;
	
	// Model Object
	protected $_model;
	
	// Template object
	protected $_templateObj;
	
	// Params (GET - POST)
	protected $_arrParam;

	// Pagination
	protected $_pagination	= array(
				'totalItemsPerPage'	=> 4, // Tổng số phần tử một trang
				'pageRange'			=> 3, // Trang hiển thị 	
	);
	public function __construct($arrParams){
		$this->setModel($arrParams['module'], $arrParams['controller']);
		$this->setTemplate($this);
		$this->setView($arrParams['module']) ;
		$this->_pagination['currentPage']	= (isset($arrParams['page'])) ? $arrParams['page'] : 1;
		$arrParams['pagination'] = $this->_pagination;
		$this->setParams($arrParams);
	 
		$this->_view->arrParam = $arrParams ;
	}	
	// SET MODEL
	public function setModel($moduleName, $modelName){
		$modelName = ucfirst($modelName) . 'Model';
		$path = MODULE_PATH . $moduleName . DS . 'models' .  DS . $modelName . '.php';
		if(file_exists($path)){
			require_once $path;
			$this->_model	= new $modelName();
		}
	}	
	// GET MODEL
	public function getModel(){
		return $this->_model;
	}	
	// SET VIEW
	public function setView($moduleName){
		$this->_view = new View($moduleName);
	}	
	// GET VIEW
	public function getView(){
		return $this->_view;
	}
	// SET TEMPLATE
	public function setTemplate(){
		$this->_templateObj = new Template($this);	
	}
	// GET TEMPLATE
	public function getTemplate(){
		return $this->_templateObj;
	}
	// GET PARAMS
	public function setParams($arrParam){
		$this->_arrParam= $arrParam;
	}
	// GET PARAMS
	public function getParams($arrParam){
		$this->_arrParam= $arrParam;
	}

	// GET PAGINATION
	public function setPagination($config){
		$this->_pagination['totalItemsPerPage'] = $config['totalItemsPerPage'] ;
		$this->_pagination['pageRange'] 		= $config['pageRange'] ;
	}
}