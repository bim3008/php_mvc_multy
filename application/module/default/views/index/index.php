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
<?php require_once 'element/new-book.php'?>
<?php // No Update?>
<?php require_once 'element/slider-promotion.php'; ?>