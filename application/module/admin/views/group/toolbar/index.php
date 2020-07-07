<?php
           
    // SEARCH 
    // $linkSearch = URL::createLink('admin', 'group', 'index') ;
    // $btnSearch  = HTMLHelper::cmsButton($linkSearch,'btn btn-default formSearch','', 'formSearch' ,'Search','buttonSearch' ) ;   
    // Add
    $linkAdd  = URL::createLink('admin', 'group', 'form',array('params' => 'add')) ;
    $btnAdd   = HTMLHelper::cmsButton($linkAdd,'btn btn-danger','fas fa-plus','add' , 'Add' ) ;       
    // Multy - Delete 
    $linkMultyDelete = URL::createLink('admin', 'group', 'multydelete') ;
    $btnMultyDelete  = HTMLHelper::cmsButton($linkMultyDelete,'btn btn-danger btn-multydelete','fas fa-trash', 'multydelete' ,'Delete','submitMultyDelete' ) ;

    // Multy - Delete 
    $linkOrdering  = URL::createLink('admin', 'group', 'ordering') ;
    $btnOrdering   = HTMLHelper::cmsButton($linkOrdering,'btn btn-danger btn-ordering','fas fa-check', 'ordering' ,'Ordering','submitMultyDelete' ) ;

    $stringCRUD = $btnAdd . $btnMultyDelete .$btnOrdering ;
    //ALL
    $linkAll  = URL::createLink('admin', 'group', 'index');
    $btnAll   = HTMLHelper::cmsButton($linkAll, 'btn btn-info', '','all', 'All' . '(' .$this->countItems[0]. ')');

     // ACTIVE
     $linkActive  = URL::createLink('admin', 'group', 'index', array('params' => 'active'));
     $btnActive   = HTMLHelper::cmsButton($linkActive, 'btn btn-success ','', 'ac', 'Active'. '(' .$this->countItems[1] . ')');

     // INACTIVE
     $linkInactive  = URL::createLink('admin', 'group', 'index', array('params' => 'inactive'));
     $btnInactive   = HTMLHelper::cmsButton($linkInactive, 'btn btn-danger ','', 'inac', 'Inactive'. '(' .$this->countItems[2] . ')');

     $stringFillter = $btnAll . $btnActive . $btnInactive ;





    








?>