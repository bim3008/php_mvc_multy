<?php      
      // HIỂN THỊ CATEGORY
      $module = new Model() ;
      $queryCategory  = 'SELECT `id`, `name` FROM `'.DB_TABLE_CATEGORY.'` WHERE `status` = 0' ;
      $resultCategory = $module->fetchAll($queryCategory) ; 
      if(!empty($resultCategory))
      {
         $xhtml ='' ;
         foreach($resultCategory as $key => $value){
            $name = $value['name'];
            $link = URL::createLink('default','book','index',['category_id'=>$value['id']]);
            $xhtml .= HTMLDefault::categoryChil($link,$name);
         }
      }
   ?>
<div class="main-menu-area hidden-sm hidden-xs sticky-header-1" id="header-sticky">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="menu-area">
               <nav>
                  <ul>
                     <li>
                        <a href="<?php echo $linkHome ;?>">Home<i class="fa fa-angle"></i></a>
                     </li>
                     <li>
                        <a href="<?php echo $linkCategory ;?>">Category<i class="fa fa-angle-down"></i></a>
                        <div class="mega-menu">
                              <!-- CATEGORY CHILD -->
                              <?php echo $xhtml ;?>
                        </div>
                     </li>
                     <li>
                        <a href="<?php echo $linkBook ;?>">Book<i class="fa fa-angle"></i></a>
                        <!-- <div class="mega-menu">
                           <span>
                           <a href="#" class="title">Shirts</a>
                           <a href="shop.php">Tops & Tees</a>
                           <a href="shop.php">Sweaters </a>
                           <a href="shop.php">Hoodies</a>
                           <a href="shop.php">Jackets & Coats</a>
                           </span>
                           <span>
                           <a href="#" class="title">Tops & Tees</a>
                           <a href="shop.php">Long Sleeve </a>
                           <a href="shop.php">Short Sleeve</a>
                           <a href="shop.php">Polo Short Sleeve</a>
                           <a href="shop.php">Sleeveless</a>
                           </span>
                           <span>
                           <a href="#" class="title">Jackets</a>
                           <a href="shop.php">Sweaters</a>
                           <a href="shop.php">Hoodies</a>
                           <a href="shop.php">Wedges</a>
                           <a href="shop.php">Vests</a>
                           </span>
                           <span>
                           <a href="#" class="title">Jeans Pants</a>
                           <a href="shop.php">Polo Short Sleeve</a>
                           <a href="shop.php">Sleeveless</a>
                           <a href="shop.php">Graphic T-Shirts</a>
                           <a href="shop.php">Hoodies</a>
                           </span>
                        </div> -->
                     <!-- </li>
                     <li>
                        <a href="product-details.php">children’s books<i class="fa fa-angle-down"></i></a>
                        <div class="mega-menu mega-menu-2">
                           <span>
                           <a href="#" class="title">Tops</a>
                           <a href="shop.php">Shirts</a>
                           <a href="shop.php">Florals</a>
                           <a href="shop.php">Crochet</a>
                           <a href="shop.php">Stripes</a>
                           </span>
                           <span>
                           <a href="#" class="title">Bottoms</a>
                           <a href="shop.php">Shorts</a>
                           <a href="shop.php">Dresses</a>
                           <a href="shop.php">Trousers</a>
                           <a href="shop.php">Jeans</a>
                           </span>
                           <span>
                           <a href="#" class="title">Shoes</a>
                           <a href="shop.php">Heeled sandals</a>
                           <a href="shop.php">Flat sandals</a>
                           <a href="shop.php">Wedges</a>
                           <a href="shop.php">Ankle boots</a>
                           </span>
                        </div>
                     </li>
                     <li>
                        <a href="#">blog<i class="fa fa-angle-down"></i></a>
                        <div class="sub-menu sub-menu-2">
                           <ul>
                              <li><a href="blog.php">blog</a></li>
                              <li><a href="blog-details.php">blog-details</a></li>
                           </ul>
                        </div>
                     </li>
                     <li>
                        <a href="#">pages<i class="fa fa-angle-down"></i></a>
                        <div class="sub-menu sub-menu-2">
                           <ul>
                              <li><a href="shop.php">shop</a></li>
                              <li><a href="product-details.php">product-details</a></li>
                              <li><a href="blog.php">blog</a></li>
                              <li><a href="blog-details.php">blog-details</a></li>
                              <li><a href="contact.php">contact</a></li>
                              <li><a href="about.php">about</a></li>
                              <li><a href="login.php">login</a></li>
                              <li><a href="register.php">register</a></li>
                              <li><a href="cart.php">cart</a></li>
                              <li><a href="checkout.php">checkout</a></li>
                              <li><a href="wishlist.php">wishlist</a></li>
                              <li><a href="404.php">404 Page</a></li>
                           </ul>
                        </div>
                     </li> -->
                  </ul>
               </nav>
            </div>
            <!-- <div class="safe-area">
               <a href="product-details.php">sales off</a>
            </div> -->
         </div>
      </div>
   </div>
</div>