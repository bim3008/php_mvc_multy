<?php
    if(!empty($this->getBookDetails))
    {
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
                                    <div class="rating-summary">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </div>
                                    <div class="reviews-actions">
                                        <a href="#">3 Reviews</a>
                                        <a href="#" class="view">Add Your Review</a>
                                    </div>
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
                                            <input class="qty" type="number" value="1">
                                        </div>
                                        <a href="#">Add to cart</a>
                                    </form>
                                </div>
                                <div class="product-social-links">
                                    <div class="product-addto-links">
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                        <a href="#"><i class="fa fa-pie-chart"></i></a>
                                        <a href="#"><i class="fa fa-envelope-o"></i></a>
                                    </div>
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
                        <li><a href="#Reviews" data-toggle="tab">Reviews 3</a></li>
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
                        <div class="tab-pane" id="Reviews">
                            <div class="valu valu-2">
                                <div class="section-title mb-60 mt-60">
                                    <h2>Customer Reviews</h2>
                                </div>
                                <ul>
                                    <li>
                                        <div class="review-title">
                                            <h3>themes</h3>
                                        </div>
                                        <div class="review-left">
                                            <div class="review-rating">
                                                <span>Price</span>
                                                <div class="rating-result">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                            </div>
                                            <div class="review-rating">
                                                <span>Value</span>
                                                <div class="rating-result">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                            </div>
                                            <div class="review-rating">
                                                <span>Quality</span>
                                                <div class="rating-result">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-right">
                                            <div class="review-content">
                                                <h4>themes </h4>
                                            </div>
                                            <div class="review-details">
                                                <p class="review-author">Review by<a href="#">plaza</a></p>
                                                <p class="review-date">Posted on <span>12/9/16</span></p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="review-add">
                                    <h3>You're reviewing:</h3>
                                    <h4>Joust Duffle Bag</h4>
                                </div>
                                <div class="review-field-ratings">
                                    <span>Your Rating <sup>*</sup></span>
                                    <div class="control">
                                        <div class="single-control">
                                            <span>Value</span>
                                            <div class="review-control-vote">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                        </div>
                                        <div class="single-control">
                                            <span>Quality</span>
                                            <div class="review-control-vote">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                        </div>
                                        <div class="single-control">
                                            <span>Price</span>
                                            <div class="review-control-vote">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-form">
                                    <div class="single-form">
                                        <label>Nickname <sup>*</sup></label>
                                        <form action="#">
                                            <input type="text" />
                                        </form>
                                    </div>
                                    <div class="single-form single-form-2">
                                        <label>Summary <sup>*</sup></label>
                                        <form action="#">
                                            <input type="text" />
                                        </form>
                                    </div>
                                    <div class="single-form">
                                        <label>Review <sup>*</sup></label>
                                        <form action="#">
                                            <textarea name="massage" cols="10" rows="4"></textarea>
                                        </form>
                                    </div>
                                </div>
                                <div class="review-form-button">
                                    <a href="#">Submit Review</a>
                                </div>
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
                        if(!empty($this->getBookReletive)){
                            $xhtml = '' ;
                            foreach($this->getBookReletive as $key => $value)
                            {   
                                $link       = URL::createLink('default','book','details',['id'=>$value['id']]) ;
                                $sale        = $value['sale_off'];
                                $name        = $value['name'];
                                $cost        = $value['price'];
                                $priceSale   = $cost - ($cost * $sale / 100);
                                $cost        = HelperAdmin::formatVND($cost);
                                $priceSale   = HelperAdmin::formatVND($priceSale);
                                $status      = $value['status'];
                                $special     = $value['special'];
                                $picture     = $value['picture'];
                                $imageURL    = LINK_IMAGE_BOOK . $picture ;
                                $xhtml .= ' 
                                <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="'.$link.'"><img src="'.$imageURL.'" alt="book" class="primary" /></a>
                                            <div class="product-flag">
                                                <ul>
                                                    <li><span class="sale">new</span></li>
                                                    <li><span class="discount-percentage">-5%</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-details text-center">
                                            <h4><a href="'.$link.'">'.$name.'</a></h4>
                                            <div class="product-price">
                                                <ul>
                                                    <li>'.$cost.'</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-link">
                                            <div class="product-button">
                                                <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                            <div class="add-to-link">
                                                <ul>
                                                    <li><a href="product-details.html" title="Details"><i
                                                                class="fa fa-external-link"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                </div>    
                                ' ;
                            }
                        }
                        else
                        {   $xhtml = '' ;
                            echo '<p style="font-size: 30px;text-align: center;color: red;">SẢN PHẨM ĐANG CẬP NHẬP</p>' ;
                        }
                    ?>
                    <div class="tab-active-2 owl-carousel">
                       
                       <?php echo $xhtml ;?>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="shop-left">
                    <div class="left-title mb-20">
                        <h4>Related Products</h4>
                    </div>
                    <div class="random-area mb-30">
                        <div class="product-active-2 owl-carousel">
                            <div class="product-total-2">
                                <div class="single-most-product bd mb-18">
                                    <div class="most-product-img">
                                        <a href="#"><img src="<?php echo $this->_dirImg .'/product/20.jpg'?>"
                                                alt="book" /></a>
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
                                        <a href="#"><img src="<?php echo $this->_dirImg .'/product/21.jpg'?>"
                                                alt="book" /></a>
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
                                        <a href="#"><img src="<?php echo $this->_dirImg .'/product/22.jpg'?>"
                                                alt="book" /></a>
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
                                        <a href="#"><img src="<?php echo $this->_dirImg .'/product/23.jpg'?>"
                                                alt="book" /></a>
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
                                        <a href="#"><img src="<?php echo $this->_dirImg .'/product/24.jpg'?>"
                                                alt="book" /></a>
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
                                        <a href="#"><img src="<?php echo $this->_dirImg .'/product/22.jpg'?>"
                                                alt="book" /></a>
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
                    <div class="banner-area mb-30">
                        <div class="banner-img-2">
                            <a href="#"><img src="<?php echo $this->_dirImg .'/banner/33.jpg'?>" alt="banner" /></a>
                        </div>
                    </div>
                    <div class="left-title-2 mb-30">
                        <h2>Compare Products</h2>
                        <p>You have no items to compare.</p>
                    </div>
                    <div class="left-title-2">
                        <h2>My Wish List</h2>
                        <p>You have no items in your wish list.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>