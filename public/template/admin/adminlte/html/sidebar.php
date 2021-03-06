<?php
    $urlLink            =  URL::createLink('admin','index','index') ;
    $urlGroupAdd        =  URL::createLink('admin','group','form') ;
    $urlGroupList       =  URL::createLink('admin','group','index') ;

    $urlUserAdd         =  URL::createLink('admin','user','form') ;
    $urlUserList        =  URL::createLink('admin','user','index') ;

    $urlCategoryAdd     =  URL::createLink('admin','category','form') ;
    $urlCategoryList    =  URL::createLink('admin','category','index') ;

    $urlBookAdd         =  URL::createLink('admin','book','form') ;
    $urlBookList        =  URL::createLink('admin','book','index') ;
    $urlOrderList        =  URL::createLink('admin','order','index') ;

    $pictureLogo        = $this->_dirImg .'/avatar.jpg ' ;
    $fullname           = isset($_SESSION['loginFacebook']) ? $_SESSION['loginFacebook']['name'] : '' ;
    $pitureLogo         = isset($_SESSION['loginFacebook']) ? $_SESSION['loginFacebook']['picture']['url'] : $pictureLogo  ;
    $fullname           .= isset($_SESSION['fullname']) ? $_SESSION['fullname']: '' ;

?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="<?php echo $urlLink ;?>" class="brand-link">
        <img src="<?php echo  $this->_dirImg ?>/admin.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo  $pitureLogo  ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"> <?php echo mb_strtoupper($fullname) ;?> </a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                    <li class="nav-item ">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            DASHBROAD
                        </p>
                    </a>
                </li>         
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-layer-group"></i>
                        <p>
                            Group
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <?php                    
                            echo HelperAdmin::sidebarAdmin($urlGroupList,'List') ;
                            echo HelperAdmin::sidebarAdmin($urlGroupAdd,'Add') ;
                    ?>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            USER
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <?php                    
                            echo HelperAdmin::sidebarAdmin($urlUserList,'List') ;
                            echo HelperAdmin::sidebarAdmin($urlUserAdd,'Add') ;
                    ?>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-book-reader"></i>
                        <p>
                            CATEGORY
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <?php                    
                            echo HelperAdmin::sidebarAdmin($urlCategoryList,'List') ;
                            echo HelperAdmin::sidebarAdmin($urlCategoryAdd,'Add') ;
                    ?>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-book-open"></i>
                        <p>
                            BOOK
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <?php                    
                            echo HelperAdmin::sidebarAdmin($urlBookList,'List') ;
                            echo HelperAdmin::sidebarAdmin($urlBookAdd,'Add') ;
                    ?>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-shopping-cart"></i>
                        <p>
                            ORDER
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <?php                    
                            echo HelperAdmin::sidebarAdmin($urlOrderList,'List') ;
                    ?>
                </li>

            </ul>
        </nav>
 
    </div>
    
</aside>