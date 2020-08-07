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
   // HIỂN THỊ TOP SELLING
      $querySelling = 'SELECT `id`, `name`, `picture`, `price` , `sale_off` FROM `'.DB_TABLE_BOOK.'` WHERE `sale_off` > 0 ORDER BY `sale_off` DESC LIMIT 3' ; 
      $resultSelling = $module->fetchAll($querySelling) ;
      if (!empty($resultSelling)) {
      $xhtmlTopSelling = '' ;
            foreach ($resultSelling as $keySelling => $valueSelling) {
               $name = ucfirst($valueSelling['name']);
               $cost = $valueSelling['price'];
               $sale = $valueSelling['sale_off'];
               $priceSale = $cost - ($cost * $sale / 100);
               $picture = LINK_IMAGE_BOOK . $valueSelling['picture'];
               $xhtmlTopSelling .= HTMLDefault::categoryTopSelling($picture, $name, HelperAdmin::formatVND($cost), HelperAdmin::formatVND($priceSale));
            }
      }
?>         <div class="breadcrumbs-area mb-30">
           </div>
               <div class="shop-main-area mb-10">
                  <div class="container">
                     <div class="row">
            <!-- SLIDER LEFT -->
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
               <div class="shop-left">
                  <div class="section-title-5 mb-30">
                     <h2>Shopping Options</h2>
                  </div>
                  <div class="left-title mb-8">
                     <span>Category</span>
                  </div>
                  <div class="left-menu mb-30" id="delete">
                     <ul>
                        <?php echo $xhtmlNameCategory; ?>
                     </ul>
                  </div>
                  <div class="left-title mb-20">
                     <span>Top Selling</span>
                  </div>
                  <div class="random-area mb-30">
                     <div class="product-active-2 owl-carousel">
                        <!-- TOP SELLING -->
                        <div class="product-total-2">
                           <?php echo $xhtmlTopSelling; ?>
                        </div>
                     </div>

                  </div>
                  <!-- BANNER  -->
                  <?php
                     if(empty($this->arrParam['category_id']) && $this->arrParam['controller'] == 'book')
                     {
                        require_once BLOCK_PATH . 'banner.php' ;
                     }
                  ?>
               </div>
            </div>
