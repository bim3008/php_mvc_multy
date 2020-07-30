    <head>
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <?php echo $this->_metaHTTP; ?>
        <?php echo $this->_metaName; ?>
        <?php echo $this->_title; ?>
        <?php echo $this->_cssFiles; ?>
        <?php echo $this->_font; ?>
    </head>
    <?php require_once('html/menu.php'); ?>
    <?php require_once('html/sidebar.php'); ?>
    <div class="content-wrapper">
        <?php
            require_once MODULE_PATH. $this->_moduleName . DS . 'views' . DS . $this->_fileView . '.php';
        ?>
    </div>
    <?php echo $this->_jsFiles; ?>
    <?php require_once 'html/footer.php'; ?>