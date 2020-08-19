<?php
   $module = $this->arrParam['module'] ;
?>
<div class="header-mid-area ptb-10">
   <div class="container">
      <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
            <div class="logo-area text-center logo-xs-mrg">
               <a href=""><img src="<?php echo $this->_dirImg.'/logo/logostore.png'?>" alt="logo" /></a>
            </div>
         </div>
          <div class="col-lg-6 col-md-6 col-sm-5 col-xs-12">
             <div class="header-search" >
               <form action="" id="defaultSearch" method="POST" >
                  <input  type="hidden" name="module" value="<?php echo $module ;?>" />
                  <input   type="hidden" placeholder="Search entire store here..." />
                  <!-- <a  href="index.php/moduele=<?php echo $module?>"><i class="fa fa-search"></i></a> -->
               </form>
            </div>
         </div> 
         <?php require_once BLOCK_PATH .'cart.php' ;?>
      </div>
   </div>
</div>