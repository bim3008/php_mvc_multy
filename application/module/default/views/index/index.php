<!--  SLIDER -->
    <div class="slider-area">
        <div class="shop-main-area mb-5">
            <div class="container">
                <div class="row">
                    <?php 
                        require_once BLOCK_PATH . 'category.php' ;
                        require_once 'element/slider-big.php' ;
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- SLIDER SALE -->
    <?php 
        require_once 'element/slider-sale.php' ;
    ?>
    <!-- TOP INTERESTING -->
    <div class="product-area pt-50 xs-mb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-menu mb-40 text-center">
                        <ul>
                            <li class="active"><a href="#Audiobooks" data-toggle="tab">New Arrival	</a></li>
                            <li><a href="#books"  data-toggle="tab">OnSale</a></li>
                            <li><a href="#bussiness" data-toggle="tab">Featured Products</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- NEW BOOK -->
    <div class="new-book-area pb-100">
        <div class="container">
            <div class="tab-active owl-carousel">
                <div class="tab-total">
                    <div class="product-wrapper mb-40">
                    <div class="product-img">
                        <a href="#">
                        <img src="<?php echo $this->_dirImg.'/product/1.jpg'?>" alt="book" class="primary" />
                        </a>
                        <div class="quick-view">
                            <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                            <i class="fa fa-search-plus"></i>
                            </a>
                        </div>
                        <div class="product-flag">
                            <ul>
                                <li><span class="sale">new</span> </li>
                                <li><span class="discount-percentage">-5%</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details text-center">
                        <div class="product-rating">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h4><a href="#">Joust Duffle Bag</a></h4>
                        <div class="product-price">
                            <ul>
                                <li>$60.00</li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-link">
                        <div class="product-button">
                            <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        <div class="add-to-link">
                            <ul>
                                <li><a href="product-details.php" title="Details"><i class="fa fa-external-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                        </div>
                    <div class="product-wrapper">
                    <div class="product-img">
                        <a href="#">
                        <img src="<?php echo $this->_dirImg.'/product/18.jpg'?>" alt="book" class="primary" />
                        </a>
                        <div class="quick-view">
                            <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                            <i class="fa fa-search-plus"></i>
                            </a>
                        </div>
                        <div class="product-flag">
                            <ul>
                                <li><span class="sale">new</span> <br></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details text-center">
                        <div class="product-rating">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h4><a href="#">Driven Backpack</a></h4>
                        <div class="product-price">
                            <ul>
                                <li>$34.00</li>
                                <li class="old-price">$36.00</li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-link">
                        <div class="product-button">
                            <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        <div class="add-to-link">
                            <ul>
                                <li><a href="product-details.php" title="Details"><i class="fa fa-external-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    </div>
        
                </div>
                <div class="tab-total">
           
                    <div class="product-wrapper mb-40">
                    <div class="product-img">
                        <a href="#">
                        <img src="<?php echo $this->_dirImg.'/product/3.jpg'?>" alt="book" class="primary" />
                        </a>
                        <div class="quick-view">
                            <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                            <i class="fa fa-search-plus"></i>
                            </a>
                        </div>
                        <div class="product-flag">
                            <ul>
                                <li><span class="sale">new</span> <br></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details text-center">
                        <div class="product-rating">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h4><a href="#">Chaz Kangeroo Hoodie</a></h4>
                        <div class="product-price">
                            <ul>
                                <li>$52.00</li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-link">
                        <div class="product-button">
                            <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        <div class="add-to-link">
                            <ul>
                                <li><a href="product-details.php" title="Details"><i class="fa fa-external-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    </div>

                    <div class="product-wrapper">
                    <div class="product-img">
                        <a href="#">
                        <img src="<?php echo $this->_dirImg.'/product/10.jpg'?>" alt="book" class="primary" />
                        </a>
                        <div class="quick-view">
                            <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                            <i class="fa fa-search-plus"></i>
                            </a>
                        </div>
                        <div class="product-flag">
                            <ul>
                                <li><span class="sale">new</span> </li>
                                <li><span class="discount-percentage">-5%</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details text-center">
                        <div class="product-rating">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h4><a href="#">Fusion Backpack</a></h4>
                        <div class="product-price">
                            <ul>
                                <li>$59.00</li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-link">
                        <div class="product-button">
                            <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        <div class="add-to-link">
                            <ul>
                                <li><a href="product-details.php" title="Details"><i class="fa fa-external-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    </div>

                </div>
                <div class="tab-total">
        
                    <div class="product-wrapper mb-40">
                    <div class="product-img">
                        <a href="#">
                        <img src="<?php echo $this->_dirImg.'/product/5.jpg'?>" alt="book" class="primary" />
                        </a>
                        <div class="quick-view">
                            <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                            <i class="fa fa-search-plus"></i>
                            </a>
                        </div>
                        <div class="product-flag">
                            <ul>
                                <li><span class="sale">new</span> </li>
                                <li><span class="discount-percentage">-5%</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details text-center">
                        <div class="product-rating">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h4><a href="#">Set of Sprite Yoga Straps</a></h4>
                        <div class="product-price">
                            <ul>
                                <li>$34.00</li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-link">
                        <div class="product-button">
                            <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        <div class="add-to-link">
                            <ul>
                                <li><a href="product-details.php" title="Details"><i class="fa fa-external-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    </div>
 
                    <div class="product-wrapper">
                    <div class="product-img">
                        <a href="#">
                        <img src="<?php echo $this->_dirImg.'/product/19.jpg'?>" alt="book" class="primary" />
                        </a>
                        <div class="quick-view">
                            <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                            <i class="fa fa-search-plus"></i>
                            </a>
                        </div>
                        <div class="product-flag">
                            <ul>
                                <li><span class="sale">new</span> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details text-center">
                        <div class="product-rating">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h4><a href="#">Compete Track Tote</a></h4>
                        <div class="product-price">
                            <ul>
                                <li>$32.00</li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-link">
                        <div class="product-button">
                            <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        <div class="add-to-link">
                            <ul>
                                <li><a href="product-details.php" title="Details"><i class="fa fa-external-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    </div>
  
                </div>
                <div class="tab-total">
      
                    <div class="product-wrapper mb-40">
                    <div class="product-img">
                        <a href="#">
                        <img src="<?php echo $this->_dirImg.'/product/7.jpg'?>" alt="book" class="primary" />
                        </a>
                        <div class="quick-view">
                            <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                            <i class="fa fa-search-plus"></i>
                            </a>
                        </div>
                        <div class="product-flag">
                            <ul>
                                <li><span class="sale">new</span> <br></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details text-center">
                        <div class="product-rating">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h4><a href="#">Strive Shoulder Pack</a></h4>
                        <div class="product-price">
                            <ul>
                                <li>$30.00</li>
                                <li class="old-price">$32.00</li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-link">
                        <div class="product-button">
                            <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        <div class="add-to-link">
                            <ul>
                                <li><a href="product-details.php" title="Details"><i class="fa fa-external-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    </div>

                    <div class="product-wrapper">
                    <div class="product-img">
                        <a href="#">
                        <img src="<?php echo $this->_dirImg.'/product/4.jpg'?>" alt="book" class="primary" />
                        </a>
                        <div class="quick-view">
                            <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                            <i class="fa fa-search-plus"></i>
                            </a>
                        </div>
                        <div class="product-flag">
                            <ul>
                                <li><span class="sale">new</span> </li>
                                <li><span class="discount-percentage">-5%</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details text-center">
                        <div class="product-rating">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h4><a href="#">Chaz Kangeroo Hoodie</a></h4>
                        <div class="product-price">
                            <ul>
                                <li>$52.00</li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-link">
                        <div class="product-button">
                            <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        <div class="add-to-link">
                            <ul>
                                <li><a href="product-details.php" title="Details"><i class="fa fa-external-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    </div>

                </div>
                <div class="tab-total">

                    <div class="product-wrapper mb-40">
                    <div class="product-img">
                        <a href="#">
                        <img src="<?php echo $this->_dirImg.'/product/9.jpg'?>" alt="book" class="primary" />
                        </a>
                        <div class="quick-view">
                            <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                            <i class="fa fa-search-plus"></i>
                            </a>
                        </div>
                        <div class="product-flag">
                            <ul>
                                <li><span class="discount-percentage">-5%</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details text-center">
                        <div class="product-rating">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h4><a href="#">Wayfarer Messenger Bag</a></h4>
                        <div class="product-price">
                            <ul>
                                <li>$35.00</li>
                                <li class="old-price">$40.00</li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-link">
                        <div class="product-button">
                            <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        <div class="add-to-link">
                            <ul>
                                <li><a href="product-details.php" title="Details"><i class="fa fa-external-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    </div>
                    <div class="product-wrapper">
                    <div class="product-img">
                        <a href="#">
                        <img src="<?php echo $this->_dirImg.'/product/8.jpg'?>" alt="book" class="primary" />
                        </a>
                        <div class="quick-view">
                            <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                            <i class="fa fa-search-plus"></i>
                            </a>
                        </div>
                        <div class="product-flag">
                            <ul>
                                <li><span class="sale">new</span> </li>
                                <li><span class="discount-percentage">-5%</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details text-center">
                        <div class="product-rating">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h4><a href="#">Rival  Messenger</a></h4>
                        <div class="product-price">
                            <ul>
                                <li>$35.00</li>
                                <li class="old-price">$40.00</li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-link">
                        <div class="product-button">
                            <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        <div class="add-to-link">
                            <ul>
                                <li><a href="product-details.php" title="Details"><i class="fa fa-external-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    </div>
   
                </div>
                <div class="tab-total">

                    <div class="product-wrapper mb-40">
                    <div class="product-img">
                        <a href="#">
                        <img src="<?php echo $this->_dirImg.'/product/11.jpg'?>" alt="book" class="primary" />
                        </a>
                        <div class="quick-view">
                            <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                            <i class="fa fa-search-plus"></i>
                            </a>
                        </div>
                        <div class="product-flag">
                            <ul>
                                <li><span class="sale">new</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details text-center">
                        <div class="product-rating">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h4><a href="#">Impulse Duffle</a></h4>
                        <div class="product-price">
                            <ul>
                                <li>$74.00</li>
                                <li class="old-price">$78.00</li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-link">
                        <div class="product-button">
                            <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        <div class="add-to-link">
                            <ul>
                                <li><a href="product-details.php" title="Details"><i class="fa fa-external-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    </div>
      
                    <div class="product-wrapper">
                    <div class="product-img">
                        <a href="#">
                        <img src="<?php echo $this->_dirImg.'/product/3.jpg'?>" alt="book" class="primary" />
                        </a>
                        <div class="quick-view">
                            <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                            <i class="fa fa-search-plus"></i>
                            </a>
                        </div>
                        <div class="product-flag">
                            <ul>
                                <li><span class="sale">new</span> </li>
                                <li><span class="discount-percentage">-5%</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details text-center">
                        <div class="product-rating">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h4><a href="#">Crown Summit</a></h4>
                        <div class="product-price">
                            <ul>
                                <li>$36.00</li>
                                <li class="old-price">$38.00</li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-link">
                        <div class="product-button">
                            <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        <div class="add-to-link">
                            <ul>
                                <li><a href="product-details.php" title="Details"><i class="fa fa-external-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    </div>
             
                </div>
            </div>
        </div>
    </div>
    <!-- new-book-area-start -->
    <!-- banner-static-area-start -->
    <!-- <div class="banner-static-area bg ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="banner-shadow-hover xs-mb">
                    <a href="#"><img src="<?php echo $this->_dirImg.'/banner/8.jpg'?>" alt="banner" /></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="banner-shadow-hover">
                    <a href="#"><img src="<?php echo $this->_dirImg.'/banner/9.jpg'?>" alt="banner" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- banner-static-area-end -->
    <!-- most-product-area-start -->
    <!-- <div class="most-product-area pt-90 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 xs-mb">
                    <div class="section-title-2 mb-30">
                    <h3>Book</h3>
                    </div>
                    <div class="product-active-2 owl-carousel">
                    <div class="product-total-2">
                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                <a href="#"><img src="<?php echo $this->_dirImg.'/product/20.jpg'?>" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <div class="product-rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                                </div>
                                <h4><a href="#">Endeavor Daytrip</a></h4>
                                <div class="product-price">
                                <ul>
                                    <li>$30.00</li>
                                    <li class="old-price">$33.00</li>
                                </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                <a href="#"><img src="<?php echo $this->_dirImg.'/product/21.jpg'?>" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <div class="product-rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                                </div>
                                <h4><a href="#">Savvy Shoulder Tote</a></h4>
                                <div class="product-price">
                                <ul>
                                    <li>$30.00</li>
                                    <li class="old-price">$35.00</li>
                                </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-most-product">
                            <div class="most-product-img">
                                <a href="#"><img src="<?php echo $this->_dirImg.'/product/22.jpg'?>" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <div class="product-rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                                </div>
                                <h4><a href="#">Compete Track Tote</a></h4>
                                <div class="product-price">
                                <ul>
                                    <li>$35.00</li>
                                </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-total-2">
                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                <a href="#"><img src="<?php echo $this->_dirImg.'/product/23.jpg'?>" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <div class="product-rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                                </div>
                                <h4><a href="#">Voyage Yoga Bag</a></h4>
                                <div class="product-price">
                                <ul>
                                    <li>$30.00</li>
                                    <li class="old-price">$33.00</li>
                                </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                <a href="#"><img src="<?php echo $this->_dirImg.'/product/24.jpg'?>" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <div class="product-rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                                </div>
                                <h4><a href="#">Impulse Duffle</a></h4>
                                <div class="product-price">
                                <ul>
                                    <li>$70.00</li>
                                    <li class="old-price">$74.00</li>
                                </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-most-product">
                            <div class="most-product-img">
                                <a href="#"><img src="<?php echo $this->_dirImg.'/product/22.jpg'?>" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <div class="product-rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                                </div>
                                <h4><a href="#">Fusion Backpack</a></h4>
                                <div class="product-price">
                                <ul>
                                    <li>$59.00</li>
                                </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 xs-mb">
                    <div class="section-title-2 mb-30">
                    <h3>Audio books </h3>
                    </div>
                    <div class="product-active-2 owl-carousel">
                    <div class="product-total-2">
                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                <a href="#"><img src="<?php echo $this->_dirImg.'/product/23.jpg'?>" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <div class="product-rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                                </div>
                                <h4><a href="#">Voyage Yoga Bag</a></h4>
                                <div class="product-price">
                                <ul>
                                    <li>$30.00</li>
                                    <li class="old-price">$33.00</li>
                                </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                <a href="#"><img src="<?php echo $this->_dirImg.'/product/24.jpg'?>" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <div class="product-rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                                </div>
                                <h4><a href="#">Impulse Duffle</a></h4>
                                <div class="product-price">
                                <ul>
                                    <li>$70.00</li>
                                    <li class="old-price">$74.00</li>
                                </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-most-product">
                            <div class="most-product-img">
                                <a href="#"><img src="<?php echo $this->_dirImg.'/product/26.jpg'?>" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <div class="product-rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                                </div>
                                <h4><a href="#">Driven Backpack1</a></h4>
                                <div class="product-price">
                                <ul>
                                    <li>$40.00</li>
                                </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-total-2">
                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                <a href="#"><img src="<?php echo $this->_dirImg.'/product/20.jpg'?>" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <div class="product-rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                                </div>
                                <h4><a href="#">Endeavor Daytrip</a></h4>
                                <div class="product-price">
                                <ul>
                                    <li>$30.00</li>
                                    <li class="old-price">$33.00</li>
                                </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                <a href="#"><img src="<?php echo $this->_dirImg.'/product/21.jpg'?>" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <div class="product-rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                                </div>
                                <h4><a href="#">Savvy Shoulder Tote</a></h4>
                                <div class="product-price">
                                <ul>
                                    <li>$30.00</li>
                                    <li class="old-price">$35.00</li>
                                </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-most-product">
                            <div class="most-product-img">
                                <a href="#"><img src="<?php echo $this->_dirImg.'/product/22.jpg'?>" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <div class="product-rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                                </div>
                                <h4><a href="#">Compete Track Tote</a></h4>
                                <div class="product-price">
                                <ul>
                                    <li>$35.00</li>
                                </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="section-title-2 mb-30">
                    <h3>children’s books</h3>
                    </div>
                    <div class="product-active-2 owl-carousel">
                    <div class="product-total-2">
                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                <a href="#"><img src="<?php echo $this->_dirImg.'/product/27.jpg'?>" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <div class="product-rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                                </div>
                                <h4><a href="#">Crown Summit</a></h4>
                                <div class="product-price">
                                <ul>
                                    <li>$36.00</li>
                                    <li class="old-price">$38.00</li>
                                </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                <a href="#"><img src="<?php echo $this->_dirImg.'/product/28.jpg'?>" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <div class="product-rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                                </div>
                                <h4><a href="#">Driven Backpack</a></h4>
                                <div class="product-price">
                                <ul>
                                    <li>$34.00</li>
                                    <li class="old-price">$36.00</li>
                                </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-most-product">
                            <div class="most-product-img">
                                <a href="#"><img src="<?php echo $this->_dirImg.'/product/29.jpg'?>" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <div class="product-rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                                </div>
                                <h4><a href="#">Endeavor Daytrip</a></h4>
                                <div class="product-price">
                                <ul>
                                    <li>$30.00</li>
                                    <li class="old-price">$33.00</li>
                                </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-total-2">
                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                <a href="#"><img src="<?php echo $this->_dirImg.'/product/23.jpg'?>" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <div class="product-rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                                </div>
                                <h4><a href="#">Voyage Yoga Bag</a></h4>
                                <div class="product-price">
                                <ul>
                                    <li>$30.00</li>
                                    <li class="old-price">$33.00</li>
                                </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-most-product bd mb-18">
                            <div class="most-product-img">
                                <a href="#"><img src="<?php echo $this->_dirImg.'/product/24.jpg'?>" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <div class="product-rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                                </div>
                                <h4><a href="#">Impulse Duffle</a></h4>
                                <div class="product-price">
                                <ul>
                                    <li>$70.00</li>
                                    <li class="old-price">$74.00</li>
                                </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-most-product">
                            <div class="most-product-img">
                                <a href="#"><img src="<?php echo $this->_dirImg.'/product/22.jpg'?>" alt="book" /></a>
                            </div>
                            <div class="most-product-content">
                                <div class="product-rating">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                </ul>
                                </div>
                                <h4><a href="#">Fusion Backpack</a></h4>
                                <div class="product-price">
                                <ul>
                                    <li>$59.00</li>
                                </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="block-newsletter">
                    <h2>Sign up for send newsletter</h2>
                    <p>You can be always up to date with our company new!</p>
                    <form action="#">
                        <input type="text" placeholder="Enter your email address" />
                    </form>
                    <a href="#">Send Email</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- most-product-area-end -->
    <!-- recent-post-area-start -->
    <div class="recent-post-area pt-95 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-30 section-title-res">
                    <h2>Latest from our blog</h2>
                    </div>
                </div>
                <div class="post-active owl-carousel text-center">
                    <div class="col-lg-12">
                    <div class="single-post">
                        <div class="post-img">
                            <a href="#"><img src="<?php echo $this->_dirImg.'/post/1.jpg'?>" alt="post" /></a>
                            <div class="blog-date-time">
                                <span class="day-time">06</span>
                                <span class="moth-time">Dec</span>
                            </div>
                        </div>
                        <div class="post-content">
                            <h3><a href="#">Nam tincidunt vulputate felis</a></h3>
                            <span class="meta-author"> Demo Posthemes </span>
                            <p>Discover five of our favourite dresses from our new collection that are destined to be worn and loved immediately.</p>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-12">
                    <div class="single-post">
                        <div class="post-img">
                            <a href="blog-details.php"><img src="<?php echo $this->_dirImg.'/post/2.jpg'?>" alt="post" /></a>
                            <div class="blog-date-time">
                                <span class="day-time">06</span>
                                <span class="moth-time">Dec</span>
                            </div>
                        </div>
                        <div class="post-content">
                            <h3><a href="blog-details.php">Interdum et malesuada</a></h3>
                            <span class="meta-author"> Demo Posthemes </span>
                            <p>Discover five of our favourite dresses from our new collection that are destined to be worn and loved immediately.</p>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-12">
                    <div class="single-post">
                        <div class="post-img">
                            <a href="blog-details.php"><img src="<?php echo $this->_dirImg.'/post/3.jpg'?>" alt="post" /></a>
                            <div class="blog-date-time">
                                <span class="day-time">07</span>
                                <span class="moth-time">Dec</span>
                            </div>
                        </div>
                        <div class="post-content">
                            <h3><a href="blog-details.php">What is Bootstrap?</a></h3>
                            <span class="meta-author"> Demo Posthemes </span>
                            <p>Discover five of our favourite dresses from our new collection that are destined to be worn and loved immediately.</p>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-12">
                    <div class="single-post">
                        <div class="post-img">
                            <a href="blog-details.php"><img src="<?php echo $this->_dirImg.'/post/4.jpg'?>" alt="post" /></a>
                            <div class="blog-date-time">
                                <span class="day-time">08</span>
                                <span class="moth-time">Dec</span>
                            </div>
                        </div>
                        <div class="post-content">
                            <h3><a href="blog-details.php">Etiam eros massa</a></h3>
                            <span class="meta-author"> Demo Posthemes </span>
                            <p>Discover five of our favourite dresses from our new collection that are destined to be worn and loved immediately.</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>