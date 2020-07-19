    <head>
        <?php echo $this->_metaHTTP; ?>
        <?php echo $this->_metaName; ?>
        <?php echo $this->_title; ?>
        <?php echo $this->_cssFiles; ?>
        <?php echo $this->_font; ?>
    </head>

    <?php require_once('html/menu.php'); ?>
    <?php // require_once('html/sidebar.php'); ?>
    <div class="content-wrapper">
        <?php
            require_once MODULE_PATH. $this->_moduleName . DS . 'views' . DS . $this->_fileView . '.php';
        ?>
    </div>

    
    <?php echo $this->_jsFiles; ?>
    <?php require_once 'html/footer.php'; ?>