
<?php
    // BOOK IN CATEGORY
    if (!empty($this->getBookInCate)) {
        $xhtml = '';
        foreach ($this->getBookInCate as $key => $value) {

            $idCate           = $value['category_id'] ;
            $idBook           = $value['id'] ;
            $categoryNameURL  = URL::filterURL($value['category_name']);
            $bookNameURL      = URL::filterURL($value['name']);
            $linkDetail     = URL::createLink('default','book','details',['category_id'=> $value['category_id'],'book_id'=>$value['id']] , "$categoryNameURL/$bookNameURL-$idCate-$idBook.html") ;

            $name = $value['name'];
            // $link = URL::createLink('default','book','details',['category_id'=> $value['category_id'],'book_id'=>$value['id']]) ;
            $linkOrder    = URL::createLink('default','user','order',  ['book_id'=>$value['id']]) ;
            $price = HelperAdmin::formatVND($value['price']);
            $sale_off = $value['sale_off'];
            $picture = $value['picture'];
            $status = $value['status'];
            $special = $value['special'];
            $imageURL = LINK_IMAGE_BOOK . $picture;
            $xhtml .= HTMLDefault::bookInCategory($linkDetail,$imageURL,$sale_off,$name,$price,$linkOrder);
        }
    } else {
        $notData = HTMLDefault::showErrorData(mb_strtoupper(UPDATING_DATA));
        $xhtml = '
                <span>' . $notData . '</span>
            ';
    }
    //  NEW BOOK
  
    if(!empty($this->getNewBook)){
 
        $xhtmlNewBook     = '';
        foreach($this->getNewBook as  $key => $value){
            $idCate           = $value['category_id'] ;
            $idBook           = $value['id'] ;
            $categoryNameURL  = URL::filterURL($value['category_name']);
            $bookNameURL      = URL::filterURL($value['name']);
            $linkDetail   = URL::createLink('default','book','details',['category_id'=> $value['category_id'],'book_id'=>$value['id']] , "$categoryNameURL/$bookNameURL-$idCate-$idBook.html") ;

            $linkOrder    = URL::createLink('default','user','order',  ['book_id'=>$value['id']]) ;
            $name         = $value['name'];
            $price        = HelperAdmin::formatVND( $value['price']);
            $sale_off     = $value['sale_off'];
            $picture      = $value['picture'];
            $status       = $value['status'];
            $special      = $value['special'];
            $imageURL     = LINK_IMAGE_BOOK . $picture ;
            $xhtmlNewBook .= HTMLDefault::newBook($linkDetail,$imageURL,$name,$price,$sale_off,$linkOrder) ;
        }
    }
    // FEATURED BOOK
    if(!empty($this->getFeaturedBook)){
        $xhtmlFeaturedBook      = '';
        foreach($this->getFeaturedBook as  $key => $value)
        {
            $idCate           = $value['category_id'] ;
            $idBook           = $value['id'] ;
            $categoryNameURL  = URL::filterURL($value['category_name']);
            $bookNameURL      = URL::filterURL($value['name']);
            $linkDetail   = URL::createLink('default','book','details',['category_id'=> $value['category_id'],'book_id'=>$value['id']] , "$categoryNameURL/$bookNameURL-$idCate-$idBook.html") ;

            $linkOrder  = URL::createLink('default','user','order',  ['book_id'=>$value['id']]) ;
            $name       = $value['name'];
            $price      = HelperAdmin::formatVND( $value['price']);
            $sale_off   = $value['sale_off'];
            $picture    = $value['picture'];
            $status     = $value['status'];
            $special    = $value['special'];
            $imageURL   = LINK_IMAGE_BOOK . $picture ;
            $xhtmlFeaturedBook   .= HTMLDefault::featuredBook($linkDetail,$imageURL,$name,$price,$sale_off,$linkOrder) ;
        }
    }
    // CÓ ID VÀ KHÔNG ID
    if(!empty($this->arrParam['category_id'])){
        echo HTMLDefault::listBook($this->getCatName,$xhtml) ; // BOOK IN CATEGORY
    }
    else{

        echo HTMLDefault::welcomBook();
        echo HTMLDefault::indexBook('Sách Mới',$xhtmlNewBook);
        echo HTMLDefault::indexBook('Sách Nổi Bật',$xhtmlFeaturedBook);
    }
?>         
</div>
</div>
</div>
