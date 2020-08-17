    
<?php
    // SẢN PHẨM LIÊN QUAN
    if(!empty($this->getBookReletive)){
        $xhtml = '' ;
        foreach($this->getBookReletive as $key => $value)
        {   
            
            $idCate           = $value['category_id'] ;
            $idBook           = $value['id'] ;
            $categoryNameURL  = URL::filterURL($value['category_name']);
            $bookNameURL      = URL::filterURL($value['name']);
            $linkDetail     = URL::createLink('default','book','details',['category_id'=> $value['category_id'],'book_id'=>$value['id']] , "$categoryNameURL/$bookNameURL-$idCate-$idBook.html") ;


            // $link       = URL::createLink('default','book','details',['categorry_id'=>$value['category_id'],'book_id'=>$value['id']]) ;
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
            $xhtml .= HTMLDefault::bookReletive($linkDetail,$imageURL,$name,$cost,$sale) ;
        }
    }
?>