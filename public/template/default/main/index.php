<!DOCTYPE html>
<html lang="en">
<html class="no-js" lang="en">
    <head>
        <?php  echo $this->_metaHTTP; ?>
        <?php  echo $this->_metaName; ?>
        <?php  echo $this->_title; ?>
        <?php  echo $this->_cssFiles; ?>
        <?php  echo $this->_font; ?>
        <?php $urlImages =   'public/template/default/main/img/slider'; ?>
    </head>
    <body>
        <?php   
            // CREATE LINK
            $linkHome      = URL::createLink('default','index'   ,'index');    
            $linkCategory  = URL::createLink('default','category','index');    
        ?>
        <header>
            <?php require_once 'html/view.php';?>
            <?php require_once 'html/header/header-top.php';?>
            <?php require_once 'html/header/header-mid.php';?>
            <?php require_once 'html/header/header-menu.php';?>
		</header>
        <?php 
              require_once MODULE_PATH. $this->_moduleName . DS . 'views' . DS . $this->_fileView . '.php';
        ?>
        <?php 
            require_once BLOCK_PATH . 'category.php' ;
            require_once 'html/footer.php' ;
            echo $this->_jsFiles;
        ?>
    </body>
</html>

