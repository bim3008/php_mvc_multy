<?php
        if(isset($this->arrParam['type'])){
            switch($this->arrParam['type']){
                case 'register-success' :
                    $notice = USER_REGISTER_SUCCESS ;
                break;
                case 'buy-success' :
                     $notice = USER_BUY_SUCCESS ;
                break;
                case 'maintenance' :
                  $notice = USER_MAINTENANCE ;
                break;
            }
        }
        $linkIndex = URL::createLink('default','index','index');

        echo HTMLDefault::displayNotice($linkIndex,$notice);
?>

