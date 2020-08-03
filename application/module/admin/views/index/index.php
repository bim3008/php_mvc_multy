<?php
  //LINK
  $linkGroup          =  URL::createLink('admin', 'group',    'index');
  $linkUser           =  URL::createLink('admin', 'user',     'index');
  $linkCategory       =  URL::createLink('admin', 'category', 'index');
  $linkBook           =  URL::createLink('admin', 'book',     'index');
  //TOTAL
  $totalGroup         = $this->countItemsIndex[0] ;   //small-box bg-info
  $totalUser          = $this->countItemsIndex[1] ;   //small-box bg-warning
  $totalCategory      = $this->countItemsIndex[2] ;   //small-box bg-success
  $totalBook          = $this->countItemsIndex[3] ;   //small-box bg-success
?>  
<div class="row">
    <?php 
          echo  Helper::smallBoxIndexController('small-box bg-info'   , $totalGroup,    'GROUP',$linkGroup)  ;
          echo  Helper::smallBoxIndexController('small-box bg-warning', $totalUser,     'USER',$linkUser)  ; 
          echo  Helper::smallBoxIndexController('small-box bg-success', $totalCategory, 'CATEGORY',$linkCategory)  ; 
          echo  Helper::smallBoxIndexController('small-box bg-danger' , $totalBook,     'BOOK',$linkBook)  ; 
    ?>  
</div>
</div>