<?php
  $module = new Model() ;
  $querySelling = 'SELECT `id`, `name`, `picture`, `price` , `sale_off` FROM `'.DB_TABLE_BOOK.'` WHERE `sale_off` > 0 AND `status` = 0 ORDER BY `sale_off` DESC LIMIT 3' ; 
  $resultSelling = $module->fetchAll($querySelling) ;
  if (!empty($resultSelling)) {
  $xhtmlTopSelling = '' ;
        foreach ($resultSelling as $keySelling => $valueSelling) {           
     
           $name = ucfirst($valueSelling['name']);
           $cost = $valueSelling['price'];
           $sale = $valueSelling['sale_off'];
           $priceSale = $cost - ($cost * $sale / 100);
           $picture = LINK_IMAGE_BOOK . $valueSelling['picture'];
           $link = URL::createLink('default','book','details',['id'=>$valueSelling['id']]) ;  
           $xhtmlTopSelling .= HTMLDefault::categoryTopSelling($picture, $name, HelperAdmin::formatVND($cost), HelperAdmin::formatVND($priceSale),$link);
        }
  }
 echo $xhtmlTopSelling ;