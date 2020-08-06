
<?php
   echo HTMLDefault::menuActive('Category');
   $xhtmlGrid         = '';
   $xhtmlList         = '';
   $xhtmlNameCategory = '';
   $xhtmlTopSelling   = '';
   if (!empty($this->listItems)) {
      foreach ($this->listItems as $key => $value) {
         $name       = mb_strtoupper($value['name']);
         $picture    = LINK_IMAGE_CATEGORY . $value['picture'];
         $xhtmlGrid .= HTMLDefault::categoryGird($picture,$name);
         $xhtmlList .= HTMLDefault::categoryList($picture,$name);
         $xhtmlNameCategory .= '<li><a href="#">'.$name.'<span></span></a></li>' ;
      }
   }
   if(!empty($this->topSelling)){
      foreach($this->topSelling as $key => $value){
         $name       = ucfirst($value['name']);
         $cost       = $value['price'] ;
         $sale       = $value['sale_off'];
         $priceSale  = $cost -($cost* $sale/100);
         $picture    = LINK_IMAGE_BOOK . $value['picture'];
         $xhtmlTopSelling .= HTMLDefault::categoryTopSelling($picture,$name,HelperAdmin::formatVND($cost) ,HelperAdmin::formatVND($priceSale) ) ;
      }
   }
   ?>
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
                     <h4>Category</h4>
                  </div>
                  <div class="left-menu mb-30" id="delete">
                     <ul>
                        <?php echo $xhtmlNameCategory ;?>
                     </ul>
                  </div>
                  <div class="left-title mb-20">
                     <h4>Top Selling</h4>
                  </div>
                  <div class="random-area mb-30">
                     <div class="product-active-2 owl-carousel">
                        <!-- TOP SELLING -->
                        <div class="product-total-2">
                           <?php echo $xhtmlTopSelling ;?>
                        </div>
                     </div>
                     
                  </div>
                  <!-- BANNER  -->
                  <!-- <div class="banner-area mb-30">
                     <div class="banner-img-2">
                        <a href="#"><img src="<?php echo $this->_dirImg.'/banner/31.jpg' ; ?>" alt="banner" /></a>
                     </div>
                  </div>
                  <div class="left-title-2 mb-30">
                     <h2>Compare Products</h2>
                     <p>You have no items to compare.</p>
                  </div>
                  <div class="left-title-2">
                     <h2>My Wish List</h2>
                     <p>You have no items in your wish list.</p>
                  </div> -->
               </div>
            </div>
            <!-- SLIDER RIGHT -->
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
               <div class="section-title-5 mb-30">
                  <h2>Category</h2>
               </div>
               <div class="toolbar mb-30">
                  <div class="shop-tab">
                     <div class="tab-3">
                        <ul>
                           <li class="active"><a href="#th" data-toggle="tab"><i class="fa fa-th-large"></i>Grid</a></li>
                           <li><a href="#list" data-toggle="tab"><i class="fa fa-bars"></i>List</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="tab-content">
                  <div class="tab-pane active" id="th">
                     <div class="row">
                        <!-- SHOW CATEGORY GIRD-->
                     <?php echo $xhtmlGrid; ?>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="list">
                     <div class="single-shop mb-30">
                           <!-- SHOW CATEGORY LIST-->
                     <?php echo $xhtmlList; ?>
                  </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>