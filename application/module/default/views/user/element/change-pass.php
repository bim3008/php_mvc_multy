<?php

    $linkSubmit = URL::createLink('default','user','index');      
    echo  isset($this->errors) ? $this->errors : '' ;
    echo  isset($_SESSION['pass']) ? $_SESSION['pass'] : '';
    unset($_SESSION['pass']) ;

 ?>
<div class="tab-pane fade" id="account-info" role="tabpanel">
        <div class="myaccount-content">
            <div class="account-details-form">
                <form action="<?php echo $linkSubmit;?>" method="POST" id="userchange">
                    <fieldset>
                        <legend>Thay đổi mật khẩu</legend>
                        <div class="single-input-item">
                            <label for="current-pwd" class="required">Mật khẩu cũ</label>
                            <input type="password" name="form[old-pass]" placeholder="Current Password">
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="single-input-item">
                                    <label for="new-pwd" class="required">Mật khẩu mới</label>
                                    <input type="password" name="form[new-pass]" placeholder="New Password">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-input-item">
                                    <label for="confirm-pwd" class="required">Nhập lại mật khẩu</label>
                                    <input type="password"  name="form[re-pass]" placeholder="Confirm Password">
                                    <input type="hidden"    name="form[token-fe-change]" value="<?php echo time()?>">
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="single-input-item">
                        <a href="#" name="form"class="btn btn-sqr">Xác nhận</a>
                    </div>
                </form>
            </div>
      </div>
</div> 