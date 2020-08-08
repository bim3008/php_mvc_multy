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
            $xhtml .= HTMLDefault::bookReletive($link,$imageURL,$name,$cost) ;
        }
    }
    else
    {   $xhtml = '' ;
        echo '<p style="font-size: 30px;text-align: center;color: red;">SẢN PHẨM ĐANG CẬP NHẬP</p>' ;
    }
?>