<?php
   //VALUE
   $dataForm         = isset($this->arrParam['form']) ? $this->arrParam['form'] : '';
   $valueUsername    = isset($dataForm['username']) ? $dataForm['username'] 	:'';
	// INPUT
	$inputUsername   = HTMLDefault::inputTextRegister('Username or Email :codephp123','username' ,$valueUsername);
	$inputPassword   = HTMLDefault::inputPassRegister('Password : 123456Q!','password');
	$inputHidden     = HTMLDefault::inputHiddenRegister('','token',time());
	// LINK
	$linkAction   = URL::createLink('default','user','login');
	$rowLogin        = $inputUsername .$inputPassword.$inputHidden ;
?>

<div class="breadcrumbs-area mb-50">
</div>
<div class="user-login-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="login-title text-center mb-30">
                    <h2>Login</h2>
                </div>
            </div>
            <div class="col-lg-offset-3 col-lg-6 col-md-offset-3 col-md-6 col-sm-12 col-xs-12">
				<form action="<?php echo $linkAction?>" name="loginform" method="POST">
					<?php echo isset($this->errors) ? $this->errors : '' ;?>
					<div class="login-form">
						<?php echo $rowLogin;?>
						<div class="single-register-submit">
								<input type="submit" name="form[submit]" value="Login">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
