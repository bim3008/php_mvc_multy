
<?php
    $lblModule      = $this->arrParam['module'] ;
    $lblController  = $this->arrParam['controller'] ;
    $lblAction      = $this->arrParam['action'] ;
    $linkURL = URL::createLink($lblModule,$lblController,'login') ; 
    echo $error = isset($this->errors) ? $this->errors : '' ;
?> 
<form action = "<?php echo $linkURL ;?>" method="POST"  name="form-login">
   <span class="login100-form-title p-b-49">Đăng nhập</span>
 
            <div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
                <span class="label-input100">Tài khoản</span>
                <input class="input100" type="text" name="form[username]" placeholder="Nhập tài khoản của bạn">
                <span class="focus-input100" data-symbol="&#xf206;"></span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Password is required">
                <span class="label-input100">Mật khẩu</span>
                <input class="input100" type="password" name="form[password]" placeholder="Nhập mật khẩu của bạn">
                <span class="focus-input100" data-symbol="&#xf190;"></span>
            </div>
            <div>
                <input type="hidden" name="form[token]" value="<?php echo time() ;?>">
            </div>
            <div class="text-right p-t-8 p-b-31">
            </div>
            <div class="container-login100-form-btn">
                <div class="wrap-login100-form-btn">
                    <div class="login100-form-bgbtn"></div>
                    <button name="button" class="login100-form-btn">Login</button>
                </div>
            </div>

        <div class="txt1 text-center p-t-54 p-b-20">
            <span>
            </span>
        </div>
        <?php
            require_once 'config.php' ;
            $redirectURL = ' ' ;
            $redirectURL = 'http://localhost/php_mvc_multy/application/module/admin/views/index/fb-callback.php' ;
            $permission  = ['email'];
            $loginURL    = $helper->getLoginUrl($redirectURL,$permission) ; // link dev.facebook?
        ?>   
        <div class="flex-c-m">
                        <a  onclick="window.location ='<?php echo  $loginURL ;?>'" href="#" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>
        </div>
        <div class="flex-col-c p-t-10">
            <a href="#" class="txt2">
            Đăng ký
            </a>
        </div>
</form>
    