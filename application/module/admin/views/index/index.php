<?php
  //LINK
  $linkGroup      = URL::createLink('admin', 'group', 'index');
  $linkUser       =  URL::createLink('admin', 'user', 'index');
  //TOTAL
  $totalGroup     = $this->countItemsIndex[0] ;   //small-box bg-info
  $totalUser      = $this->countItemsIndex[1] ;   //small-box bg-warning
?>  
<div class="row">
    <?php 
          echo  Helper::smallBoxIndexController('small-box bg-info'   , $totalGroup,'GROUP',$linkGroup)  ;
          echo  Helper::smallBoxIndexController('small-box bg-warning', $totalUser,  'USER',$linkUser)  ; 
    ?>  
</div>
</div>