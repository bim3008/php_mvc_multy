<?php

class AdminController extends Controller{
    public function __construct($arrParam){
      
        parent::__construct($arrParam);
        $this->_templateObj->setFolderTemplate('admin/adminlte/');
        $this->_templateObj->setFileTemplate('index.php');
        $this->_templateObj->setFileConfig('template.ini');
        $this->_templateObj->load();    
    }
}

?>