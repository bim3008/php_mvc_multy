<?php
class Template{
	
	// File config (admin/main/template.ini)
	private $_fileConfig;
	
	// File template (admin/main/index.php)
	private $_fileTemplate;
	
	// Folder template (admin/main/)
	private $_folderTemplate;
	
	// Controller Object
	private $_controller;

	public function __construct($controller){
		$this->_controller = $controller;
	}
	
	public function load(){  
		$fileConfig 	= $this->getFileConfig();
		$folderTemplate = $this->getFolderTemplate();
		$fileTemplate 	= $this->getFileTemplate();
		
		$pathFileConfig	= TEMPLATE_PATH . $folderTemplate . $fileConfig;
		if(file_exists($pathFileConfig)){
			$arrCongif = parse_ini_file($pathFileConfig);
	
			$_view = $this->_controller->getView();
			$_view->_title 		= $_view->createTitle($arrCongif['title']);
			$_view->_metaHTTP 	= $_view->createMeta($arrCongif['metaHTTP'], 'http-equiv');
			$_view->_metaName 	= $_view->createMeta($arrCongif['metaName'], 'name');
			$_view->_cssFiles 	= $_view->createLink($this->_folderTemplate . $arrCongif['dirCss'], $arrCongif['fileCss'], 'css');
			$_view->_jsFiles 	= $_view->createLink($this->_folderTemplate . $arrCongif['dirJs'], $arrCongif['fileJs'], 'js');
			$_view->_dirImg 		=  TEMPLATE_URL.$this->_folderTemplate . $arrCongif['dirImg'];
								
			$_view->setTemplatePath(TEMPLATE_PATH . $folderTemplate . $fileTemplate);
		}
	
	}
	
	// SET FILE TEMPLATE ('index.php')
	public function setFileTemplate($value = 'index.php'){
		$this->_fileTemplate = $value;
	}
	
	// GET FILE TEMPLATE
	public function getFileTemplate(){
		return $this->_fileTemplate;
	}
	
	// SET FILE CONFIG ('template.ini)
	public function setFileConfig($value = 'template.ini'){
		$this->_fileConfig = $value;
	}
	
	// GET FILE CONFIG
	public function getFileConfig(){
		return $this->_fileConfig;
	}
	
	
	// SET FOLDER TEMPLATE (default/main/)
	public function setFolderTemplate($value = 'default/main/'){
		$this->_folderTemplate = $value;
	}
	
	// GET FOLDER CONFIG
	public function getFolderTemplate(){
		return $this->_folderTemplate;
	}
}