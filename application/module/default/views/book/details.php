<?php
    if(!empty($this->getBookDetails)){
        foreach($this->getBookDetails as $key => $value){
            $sale        = $value['sale_off'];
            $name        = $value['name'];
            $description = $value['description'];
            $cost        = $value['price'];
            $priceSale   = $cost - ($cost * $sale / 100);
            $cost        = HelperAdmin::formatVND($cost);
            $priceSale   = HelperAdmin::formatVND($priceSale);
            $status      = $value['status'];
            $special     = $value['special'];
            $picture     = $value['picture'];
            $imageURL    = LINK_IMAGE_BOOK . $picture ;
        }
    }
    if($sale > 0 ){
        $price = '<span>'.$priceSale.'</span>
        <span class="old-price">'.$cost.'</span>';
    }
    else{
        $price = '<span>'.$cost.'</span>';
    }
?>
<div class="breadcrumbs-area mb-30">
</div>
<!-- DETAILS BOOK -->
<div class="product-main-area mb-70">
   <div class="container">
      <div class="row">
         <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
            <div class="product-main-area">
               <div class="row">
                  <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                     <div class="flexslider">
                        <ul class="slides">
                           <a href="<?php echo $imageURL ;?>"><img src="<?php echo $imageURL ;?>" alt=""></a>        
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                     <div class="product-info-main">
                        <div class="page-title">
                           <h1><?php echo $name ;?></h1>
                        </div>
                        <!-- START -->
                        <div class="product-reviews-summary">
                        </div>
                        <!-- PRICE -->
                        <div class="product-info-price">
                           <div class="price-final">
                              <?php echo $price ;?>
                           </div>
                        </div>
                        <div class="product-add-form">
                           <form action="#">
                              <div class="quality-button">
                                 <input class="qty" min = 1 type="number" value="1">
                              </div>
                              <a href="#">Add to cart</a>
                           </form>
                        </div>
                        <div class="product-social-links">
                           <div class="product-addto-links-text">
                              <p><?php echo HelperAdmin::textShorten($description,200) ;?></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="product-info-area mt-80">
               <!-- Nav tabs -->
               <ul class="nav nav-tabs" role="tablist">
                  <li class="active"><a href="#Details" data-toggle="tab">Details</a></li>
               </ul>
               <div class="tab-content">
                  <div class="tab-pane active" id="Details">
                     <div class="valu">
                        <p><?php echo substr($description,0,200) ;?>
                        </p>
                        <ul>
                           <li><i class="fa fa-circle"></i><?php echo substr($description,0,20)?></li>
                           <li><i class="fa fa-circle"></i><?php echo substr($description,20,40)?></li>
                           <li><i class="fa fa-circle"></i><?php echo substr($description,40,80)?></li>
                           <li><i class="fa fa-circle"></i><?php echo substr($description,80,100)?></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <!-- SẢN PHẨM LIÊN QUAN -->
            <div class="new-book-area mt-60">
               <div class="section-title text-center mb-30">
                  <h3>Sản phẩm liên quan</h3>
               </div>
               <?php
                  // SẢN PHẨM LIÊN QUAN
                  require_once 'featured.php' ;
                  ?>
               <div class="tab-active-2 owl-carousel">
                  <?php echo $xhtml ;?>
               </div>
            </div>
         </div>
         <h3>Top Selling</h3>
         <?php    
            require_once BLOCK_PATH .'topselling.php' ;
            ?>
      </div>
   </div>
</div>