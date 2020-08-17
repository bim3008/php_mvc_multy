
<?php 
    $nameCart     =  HTMLDefault::titleCart();
    $linkBuyBook  = URL::createLink('default','user','buy'); // LINK MUA HÀNG
    $linkCategory = URL::createLink('default','book','index',null,"sach.html"); // LINK VỀ TRANG CHỦ


    if(!empty($this->Items)){
        $html = '' ;
        $toal = 0  ;
        foreach($this->Items as $key => $value){
            $inputHiddenId         = HTMLDefault::cmsFormInputHidden('id',$value['id']) ;
            $inputHiddenPrice      = HTMLDefault::cmsFormInputHidden('price',$value['price']) ;
            $inputHiddenQuantity   = HTMLDefault::cmsFormInputHidden('quantity',$value['quantity']) ;
            $inputHiddenName       = HTMLDefault::cmsFormInputHidden('name',$value['name']) ;
            $inputHiddenPicture    = HTMLDefault::cmsFormInputHidden('picture',$value['picture']) ;

            $linkDetail =  URL::createLink('default','book','details',['id'=>$value['id']]);
            $linkDelete =  URL::createLink('default','user','notice' ,['type'=>'maintenance']); // 
            $name       =  $value['name'];
            $price      =  $value['price'] ;  
            $picture    =  LINK_IMAGE_BOOK . $value['picture'];
            $quantity   =  $value['quantity'];
            $totalPrice =  $price * $quantity ;
            $toal       +=  $totalPrice; 
            $html .= '
            <tr>
                <td class="product-thumbnail"><a href="'.$linkDetail.'"><img src="'.$picture.'" alt="man"></a></td>
                <td class="product-name"><a href="'.$linkDetail.'">'.$name.'</a></td>
                <td class="product-price"><span class="amount">'. HelperAdmin::formatVND($price).'</span></td>
                <td class="product-quantity">'.$quantity.'</td>
                <td class="product-subtotal">'. HelperAdmin::formatVND($totalPrice).'</td>
                <td class="product-remove"><a href="'.$linkDelete.'"><i class="fa fa-times"></i></a></td>
            </tr>' ;
            $html .= $inputHiddenId . $inputHiddenPrice .$inputHiddenQuantity .$inputHiddenName .$inputHiddenPicture ;
        }
?>
<div class="cart-main-area mb-70">
    <?php echo $nameCart ;?>
    <div class="container">
        <form action="<?php echo $linkBuyBook ;?>" method="POST" id="buy-books">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-content table-responsive">
                        <?php echo HTMLDefault::displayBookInCart($html) ;?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    <div class="buttons-cart mb-30">
                        <ul>
                            <li><a href="#">Cập nhập</a></li>
                            <li><a href="<?php $linkBuyBook ;?>">Tiếp tục mua sắm</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="cart_totals">
                        <table>
                            <tbody>
                                <tr class="order-total">
                                    <th>Total</th>
                                    <td>
                                        <strong>
                                            <span class="amount"><?php echo HelperAdmin::formatVND($toal) ;?></span>
                                        </strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="wc-proceed-to-checkout">
                            <a href="#">Thanh toán</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>       
<?php }else{
?>
    <h4 class="buy"> Bạn chưa có sản phẩm nào trong giỏ hàng vui lòng nhấn <a href="<?php echo $linkCategory ;?>">vào đây</a> để mua hàng</h4>
<?php
    }
?>