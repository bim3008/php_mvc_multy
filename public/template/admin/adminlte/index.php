<head>
    <?php echo $this->_metaHTTP; ?>
    <?php echo $this->_metaName; ?>
    <?php echo $this->_title; ?>
    <?php echo $this->_cssFiles; ?>
</head>
<?php require_once('html/search.php'); ?>
<?php require_once('html/sidebar.php'); ?>
<div class="content-wrapper">
    <?php
    require_once    MODULE_PATH. $this->_moduleName . DS . 'views' . DS . $this->_fileView . '.php';
    ?>
</div>
<?php echo $this->_jsFiles; ?>
<?php require_once 'html/footer.php'; ?>