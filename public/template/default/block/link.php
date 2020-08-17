<?php
        $urlImages     = 'public/template/default/main/img/slider';
        $linkHome      = URL::createLink('default','index','index'      ,null,  'trang-chu.html');    
        $linkCategory  = URL::createLink('default','category','index'   ,null,  'danh-muc.html' );   
        $linkBook      = URL::createLink('default','book','index'       ,null,  'sach.html'     );   
        $linkLogin     = URL::createLink('default','user','login'       ,null,  'dang-nhap.html');   
        $linkRegister  = URL::createLink('default','user','register'    ,null,  'dang-ky.html'  );   
        $linkAccount   = URL::createLink('default','user','index'       ,null,  'ho-so.html'    );   
        $linkLogout    = URL::createLink('default','user','logout'      ,null,  'dang-xuat.html'); 
        $linkCart      = URL::createLink('default','user','cart'        ,null,  'gio-hang.html' );  
?>