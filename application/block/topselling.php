<?php
  $module = new Model() ;
 $querySelling = 'SELECT `b`.`id`,`b`.`name`,`b`.`price`,`b`.`sale_off`,`b`.`picture`,`b`.`special`, `b`.`status`,`b`.`category_id`, `c`.`name` AS `category_name`  FROM `'.DB_TABLE_BOOK.'` AS `b`, `category` AS `c` WHERE `b`.`category_id` = `c`.`id` AND `b`.`sale_off` > 0 AND `b`.`status` = 0 ORDER BY `b`.`sale_off` DESC LIMIT 3' ; 
  //$query  = 'SELECT `b`.`id`,`b`.`name`,`b`.`price`,`b`.`sale_off`,`b`.`picture`,`b`.`special`, `b`.`status`,`b`.`category_id`, `c`.`name` AS `category_name`  FROM `'.DB_TABLE_BOOK.'` AS `b` , `category` AS `c` WHERE `b`.`category_id` = `c`.`id`  AND  `category_id` = '.$cateID.' AND `b`.`id` <> '.$bookID.' ORDER BY `b`.`ordering` ASC ' ; 
  $resultSelling = $module->fetchAll($querySelling) ;
  if (!empty($resultSelling)) {
  $xhtmlTopSelling = '' ;
        foreach ($resultSelling as $keySelling => $valueSelling) {           
       
            $idCate           = $valueSelling['category_id'] ;
            $idBook           = $valueSelling['id'] ;
            $categoryNameURL  = URL::filterURL($valueSelling['category_name']);
            $bookNameURL      = URL::filterURL($valueSelling['name']);
            $linkDetail     = URL::createLink('default','book','details',['category_id'=> $valueSelling['category_id'],'book_id'=>$valueSelling['id']] , "$categoryNameURL/$bookNameURL-$idCate-$idBook.html") ;
 

           $name = ucfirst($valueSelling['name']);
           $cost = $valueSelling['price'];
           $sale = $valueSelling['sale_off'];
           $priceSale = $cost - ($cost * $sale / 100);
           $picture = LINK_IMAGE_BOOK . $valueSelling['picture'];
           $xhtmlTopSelling .= HTMLDefault::categoryTopSelling($picture, $name, HelperAdmin::formatVND($cost), HelperAdmin::formatVND($priceSale),$linkDetail);
        }
  }
 echo $xhtmlTopSelling ;