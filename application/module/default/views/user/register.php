<?php
    // VALUE
    $dataForm         = isset($this->arrParam['form']) ? $this->arrParam['form'] : '';
    $valueFullname    = isset($dataForm['fullname']) ? $dataForm['fullname'] :'';
    $valueEmail       = isset($dataForm['email']) ? $dataForm['email'] :'';
    $valuePhone       = isset($dataForm['phone']) ? $dataForm['phone'] :'';
    $valueUsername    = isset($dataForm['username']) ? $dataForm['username'] :'';

    // INPUT
    $inputEmail       = HTMLDefault::rowInputTextRegister('Email','email',$valueEmail);
    $inputPhone       = HTMLDefault::rowInputTextRegister('Phone','phone',$valuePhone) ;
    $rowPhoneEmail    = HTMLDefault::rowRegister($inputEmail,$inputPhone);
   // ROW
    $inputFullname    = HTMLDefault::inputTextRegister('Fullname','fullname' ,$valueFullname);
    $inputAccountName = HTMLDefault::inputTextRegister('User Name','username',$valueUsername);
    $inputPassword    = HTMLDefault::inputPassRegister('Password','password');
    $inputHidden      = HTMLDefault::inputHiddenRegister('','token',time());

    $inputRegister =  $inputFullname.$rowPhoneEmail.$inputAccountName.$inputPassword.$inputHidden ;
    $linkAction   = URL::createLink('default','user','register');
?>

<div class="breadcrumbs-area mb-50">
</div>
<div class="user-login-area mb-70">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="login-title text-center mb-30">
               <h2>Sign Up</h2>
            </div>
         </div>
            <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                <div class="billing-fields">
                   <?php echo isset($this->errors) ? $this->errors : '' ;?>
                <form action="<?php echo $linkAction ;?>" name="adminform"  method="POST">
                    <?php echo $inputRegister;?>
                    <div class="single-register-submit">
						      <input type="submit" name="form[submit]" value="Register">
					   </div>
                </form>
                </div>
            </div>
      </div>
   </div>
</div>
</div>
</div>