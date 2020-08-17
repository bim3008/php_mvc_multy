<?php
    $cart = Session::get('cart');
    $totalItems = 0 ;
    if(!empty($cart)){
        $totalItems = array_sum($cart['quantity']) ;
    }
   
?>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
    <div class="my-cart">
        <ul>
            <li>
                <a href="<?php echo $linkCart ;?>"><i class="fa fa-shopping-cart"></i>Giỏ Hàng</a>
                <span><?php echo $totalItems ;?></span>
            </li>
        </ul>
    </div>
</div>