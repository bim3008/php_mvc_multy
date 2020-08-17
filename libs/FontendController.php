<?php
    class FontendController extends Controller{

        public function __construct($arrParam)
        {
            parent::__construct($arrParam);
            $this->_templateObj->setFolderTemplate('default/main/');
            $this->_templateObj->setFileTemplate('index.php');
            $this->_templateObj->setFileConfig('template.ini');
            $this->_templateObj->load();
        }
        protected function   checkLogin(){

            if(($_SESSION['userDefault']['login']) != 1 ){
                URL::redirect('default','user','login',null,'dang-nhap.html');
            }
        }
        protected function checkLogined(){
            // ĐĂNG NHẬP RỒI KHÔNG VÔ ĐƯỢC ĐĂNG KÝ NỮA
            if(isset($_SESSION['userDefault']) && ($_SESSION['userDefault']['login'])== 1 )
            {
                URL::redirect('default','user','index',null,'ho-so.html');
            }
        }
        protected function checkSession($token,$module,$controller,$action){           
            if(Session::get($token) == $this->_arrParam['form'][$token] ){
                Session::delete($token);
                URL::redirect($module,$controller,$action);
            }else{
                Session::set($token,$this->_arrParam['form'][$token]) ;
            }
        }
    }

?>