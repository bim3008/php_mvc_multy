<div class="entry-header-area"></div>
<div class="my-account-wrapper mb-70">
        <div class="container">
            <div class="section-bg-color">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- My Account Page Start -->
                        <div class="myaccount-page-wrapper">
                            <!-- My Account Tab Menu Start -->
                            <div class="row">
                                <div class="col-lg-3 col-md-4">
                                    <div class="myaccount-tab-menu nav" role="tablist">
                                        <a href="#dashboad" class="active" data-toggle="tab"><i class="fa fa-dashboard"></i> Hồ sơ </a>
                                        <a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Lịch sử </a>
                                        <a href="#account-info" data-toggle="tab"><i class="fa fa-user"></i> Thay đổi mật khẩu </a>                   
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-8">

                                    <div class="tab-content" id="myaccountContent">
                                        <?php
                                                require_once 'element/orders.php' ;
                                                require_once 'element/change-pass.php' ;
                                        ?>                                                 
                                    </div>
                                </div> 
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
</div>