<?php
   if (!empty($this->getBookInCate)) {
      $xhtml = '';
      foreach ($this->getBookInCate as $key => $value) {

         $idCate           = $value['category_id'] ;
         $idBook           = $value['id'] ;
         $categoryNameURL  = URL::filterURL($value['category_name']);
         $bookNameURL      = URL::filterURL($value['name']);
         $linkDetail     = URL::createLink('default','book','details',['category_id'=> $value['category_id'],'book_id'=>$value['id']] , "$categoryNameURL/$bookNameURL-$idCate-$idBook.html") ;

         $name = $value['name'];
         $linkOrder    = URL::createLink('default','user','order',['category_id'=> $value['category_id'],'book_id'=>$value['id']]) ;

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
   $xhtmlGrid = '';
   $xhtmlList = '';
   if (!empty($this->listItems)) {
      foreach ($this->listItems as $key => $value) {
         $name    = mb_strtoupper($value['name']);
         $id      = $value['id'];
         $nameURL = URL::filterURL($value['name']);
         $picture = LINK_IMAGE_CATEGORY . $value['picture'];
         $link    = URL::createLink($this->arrParam['module'],'book','index',array('category_id'=>$value['id']), "$nameURL-$id.html");
         $xhtmlGrid .= HTMLDefault::categoryGird($link,$picture,$name);
         $xhtmlList .= HTMLDefault::categoryList($picture,$name);
      }
      $listCategory = HTMLDefault::listCategory($xhtmlGrid,$xhtmlList) ;

   }
?>   
           <!-- SLIDER RIGHT -->     
       <?php
                if(!empty($this->arrParam['category_id'])){
                     echo HTMLDefault::listBook($this->getCatName,$xhtml) ; // BOOK IN CATEGORY
                }
                else{
                   echo  $listCategory ;
                }
       ?>
      </div>
   </div>
</div>
