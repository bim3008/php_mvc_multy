<?php
   $cateId = isset($this->arrParam['category_id']) ? $this->arrParam['category_id'] : '' ;
   $module = new Model() ;
   // HIỂN THỊ CATEGORY
      $queryCategory  = 'SELECT `id`, `name` FROM `'.DB_TABLE_CATEGORY.'` WHERE `status` = 0' ;
      $resultCategory = $module->fetchAll($queryCategory) ;
      if(!empty($resultCategory)){
            $xhtmlNameCategory = '';
            foreach($resultCategory as $keyCategory => $valueCategory)
            {
               $link   = URL::createLink($this->arrParam['module'],'book','index',array('category_id'=>$valueCategory['id']));
               $name   = mb_strtoupper($valueCategory['name']);
               if($cateId  == $valueCategory['id']){
                  $xhtmlNameCategory .= '<li><a class="active" href="'.$link.'">'. $name.'<span></span></a></li>';
               }else{
                  $xhtmlNameCategory .= '<li><a href="'.$link.'">'. $name.'<span></span></a></li>';
               }
            }
      }
?>        
   <?php 
         if($this->arrParam['controller'] != 'index')
         echo HTMLDefault::classRowContent(); 
   ?>
   <!-- SLIDER LEFT -->
   <div class="breadcrumbs-area mb-30">
   </div>
   <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
      <div class="shop-left">
         <div style ="margin-top:-25px" class="left-title mb-8">
            <span>Category</span>
         </div>
         <div class="left-menu mb-5" id="delete">
            <ul>
               <?php echo $xhtmlNameCategory; ?>
            </ul>
         </div>
         <?php
               if($this->arrParam['controller'] != 'index')
               echo HTMLDefault::titleTopSelling(); ?>
         <div class="random-area mb-30">
            <div class="product-active-2 owl-carousel">
               <!-- TOP SELLING -->
               <div class="product-total-2">
                  <?php  
                  if($this->arrParam['controller'] != 'index')
                     require_once BLOCK_PATH . 'topselling.php' ; ?>
               </div>
            </div>
         </div>
         <!-- BANNER  -->
         <?php
            if(empty($this->arrParam['category_id']) && $this->arrParam['controller'] == 'book'){
               require_once BLOCK_PATH . 'banner.php' ;
            }
         ?>
      </div>
   </div>
