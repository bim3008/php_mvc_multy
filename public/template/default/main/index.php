﻿<!DOCTYPE html>
<html lang="en">
<html class="no-js" lang="en">
    <head>
        <?php  echo $this->_metaHTTP; ?>
        <?php  echo $this->_metaName; ?>
        <?php  echo $this->_title; ?>
        <?php  echo $this->_cssFiles; ?>
        <?php  echo $this->_font; ?>
       
    </head>
    <?php   $controller = !empty($this->arrParam['controller']) ? $this->arrParam['controller'] : 'index' ; ?>
    <body>
        <?php   
            require_once DEFAULT_BLOCK_PATH .'link.php' ;
        ?>
        <header>
            <script type="text/javascript">    
                        var controller = "<?php echo $controller ;?>" ;
                        console.log(controller) ;
            </script>

            <?php require_once 'html/view.php';?>
            <?php require_once 'html/header/header-top.php';?>
            <?php require_once 'html/header/header-mid.php';?>
            <?php require_once 'html/header/header-menu.php';?>
		</header>
        <?php 
            if($this->arrParam['controller'] == 'index' || $this->arrParam['action'] =='details'|| $this->arrParam['controller'] == 'user'  ){
                require_once MODULE_PATH. $this->_moduleName . DS . 'views' . DS . $this->_fileView . '.php';
            }
            else{
                require_once BLOCK_PATH . 'category.php' ;
                require_once MODULE_PATH. $this->_moduleName . DS . 'views' . DS . $this->_fileView . '.php';
            }  
        ?>
        <?php 
            require_once 'html/footer.php' ;
           echo $this->_jsFiles;
        ?>
        <a class="btn-call-now" href="tel:0364764002">
            <i class="fa fa-phone"></i>
            <span>Hotline: 0364 764 4002</span>
        </a>
    </body>
</html>

