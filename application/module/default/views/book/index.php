<?php
// BOOK IN CATEGORY
if (!empty($this->getBookInCate)) {
    $xhtml = '';
    foreach ($this->getBookInCate as $key => $value) {
        $name = $value['name'];
        $link = URL::createLink('default','book','details',['id'=>$value['id']]) ;
        $price = HelperAdmin::formatVND($value['price']);
        $sale_off = $value['sale_off'];
        $picture = $value['picture'];
        $status = $value['status'];
        $special = $value['special'];
        $imageURL = LINK_IMAGE_BOOK . $picture;
        $xhtml .= HTMLDefault::bookInCategory($link,$imageURL,$sale_off,$name,$price);
    }
} else {
    $notData = HTMLDefault::showErrorData(mb_strtoupper(UPDATING_DATA));
    $xhtml = '
            <span>' . $notData . '</span>
        ';
}
 //  NEW BOOK
if(!empty($this->getNewBook)){
    $xhtmlNewBook      = '';
    foreach($this->getNewBook as  $key => $value){
        $name       = $value['name'];
        $link       = URL::createLink('default','book','details',['id'=>$value['id']]) ;
        $price      = HelperAdmin::formatVND( $value['price']);
        $sale_off   = $value['sale_off'];
        $picture    = $value['picture'];
        $status     = $value['status'];
        $special    = $value['special'];
        $imageURL   = LINK_IMAGE_BOOK . $picture ;
        $xhtmlNewBook    .= HTMLDefault::newBook($link,$imageURL,$name,$price) ;
    }
}
// FEATURED BOOK
if(!empty($this->getFeaturedBook)){
    $xhtmlFeaturedBook      = '';
    foreach($this->getFeaturedBook as  $key => $value)
    {
        $name       = $value['name'];
        $link       = URL::createLink('default','book','details',['id'=>$value['id']]) ;
        $price      = HelperAdmin::formatVND( $value['price']);
        $sale_off   = $value['sale_off'];
        $picture    = $value['picture'];
        $status     = $value['status'];
        $special    = $value['special'];
        $imageURL   = LINK_IMAGE_BOOK . $picture ;
        $xhtmlFeaturedBook   .= HTMLDefault::featuredBook($link,$imageURL,$name,$price) ;
    }
}
// CÓ ID VÀ KHÔNG ID
if(!empty($this->arrParam['category_id'])){
    echo HTMLDefault::listBook($this->getCatName,$xhtml) ;
}
else{
     echo HTMLDefault::welcomBook();
     echo HTMLDefault::indexBook('New Book',$xhtmlNewBook);
     echo HTMLDefault::indexBook('FEATURED BOOK',$xhtmlFeaturedBook);
}
?>
                  

























</div>
</div>
</div>
