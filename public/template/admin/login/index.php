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
                <form class="login100-form validate-form">
                    <span class="login100-form-title p-b-49">
						Login
					</span>

                    <?php
                            require_once MODULE_PATH. $this->_moduleName . DS . 'views' . DS . $this->_fileView . '.php';
                    ?>

                    <div class="txt1 text-center p-t-54 p-b-20">
                        <span>
							Or Sign Up Using
						</span>
                    </div>

                    <div class="flex-c-m">
                        <a href="#" class="login100-social-item bg1">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#" class="login100-social-item bg3">
                            <i class="fa fa-google"></i>
                        </a>
                    </div>

                    <div class="flex-col-c p-t-10">
                        <span class="txt1 p-b-17">
							Or Sign Up Using
						</span>

                        <a href="#" class="txt2">
							Sign Up
						</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="dropDownSelect1"></div>
	<?php echo $this->_jsFiles; ?>

</body>

</html>