<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                <li class="nav-link" href="#" role="button">
                    <a style="color:red">  Hi ! <span><?php 
                        $fullname  = isset($_SESSION['loginFacebook']) ? $_SESSION['loginFacebook']['name'] : '' ;
                        $fullname .= isset($_SESSION['fullname']) ? $_SESSION['fullname']: '' ;
                         echo $fullname ;
                    ?></span></a>
                    <a href="<?php echo URL::createLink('admin', 'index', 'logout') ?>" class="fas fa-sign-out-alt">Logout</a>
                </li>
                </li>
            </ul>
        </nav>