<?php
        if(isset($this->arrParam['type'])){
            switch($this->arrParam['type']){
                case 'register-success' :
                    $notice = USER_REGISTER ;
                break;
            }
        }
?>
<div class="breadcrumbs-area mb-50">
</div>
<div class="user-login-area mb-70">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="login-title text-center mb-30">
               <h2><?php echo $notice ;?></h2>
            </div>
   </div>
</div>
</div>
</div>