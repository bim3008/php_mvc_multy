<!DOCTYPE html>
<html lang="en">

<head>
	<?php  echo $this->_metaHTTP; ?>
    <?php  echo $this->_metaName; ?>
    <?php  echo $this->_title; ?>
    <?php  echo $this->_cssFiles; ?>
    <?php  echo $this->_font; ?>
    <?php $urlImages =   'public/template/admin/login/images/bg-01.jpg'; ?>         
</head>

<body>
    <div class="limiter">
        <div class="container-login100" style="background-image: url( '<?php echo $urlImages?>') ;">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                    <?php
                        require_once MODULE_PATH. $this->_moduleName . DS . 'views' . DS . $this->_fileView . '.php';
                    ?>          
            </div>
        </div>
    </div>
    <div id="dropDownSelect1"></div>
	<?php echo $this->_jsFiles; ?>

</body>

</html>