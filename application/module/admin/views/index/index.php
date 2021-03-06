<?php

  //LINK
  $linkGroup          =  URL::createLink('admin', 'group',    'index');
  $linkUser           =  URL::createLink('admin', 'user',     'index');
  $linkCategory       =  URL::createLink('admin', 'category', 'index');
  $linkBook           =  URL::createLink('admin', 'book',     'index');
  $linkOrder           =  URL::createLink('admin', 'order',     'index');
  //TOTAL
  $totalGroup         = $this->countItemsIndex[0] ;   //small-box bg-info
  $totalUser          = $this->countItemsIndex[1] ;   //small-box bg-warning
  $totalCategory      = $this->countItemsIndex[2] ;   //small-box bg-success
  $totalBook          = $this->countItemsIndex[3] ;   //small-box bg-success
  $totalOrder         = $this->countItemsIndex[4] ;   //small-box bg-success
?>  
<div class="row">
    <?php 
          echo  HelperAdmin::smallBoxIndexController('small-box bg-info'   , $totalGroup,    'GROUP',$linkGroup)  ;
          echo  HelperAdmin::smallBoxIndexController('small-box bg-warning', $totalUser,     'USER',$linkUser)  ; 
          echo  HelperAdmin::smallBoxIndexController('small-box bg-success', $totalCategory, 'CATEGORY',$linkCategory)  ; 
          echo  HelperAdmin::smallBoxIndexController('small-box bg-danger' , $totalBook,     'BOOK',$linkBook)  ; 
          echo  HelperAdmin::smallBoxIndexController('small-box bg-danger' , $totalOrder,    'ORDER',$linkOrder)  ; 
    ?>  
</div>
</div>