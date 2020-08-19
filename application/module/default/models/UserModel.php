<?php
class UserModel extends Model
{
    protected $_tableName = DB_TABLE_USER ; 
    public function listItems($arrParam,$opption=null)
	{
        if($opption['task'] == 'books-in-cart'){
            $cart = Session::get('cart');
            if(!empty($cart)){
                $result = array();
                $ids = '' ;
                foreach($cart['quantity'] as $key => $value) $ids .= "'$key'," ;
                $ids .= "'0'" ;
                if($opption['task'] == 'books-in-cart'){           
                    $query[] = "SELECT `id`, `name`, `picture`,`price` FROM `".DB_TABLE_BOOK."` " ; 
                    $query[] = "WHERE `status` = 0 AND `id` IN ($ids)" ;
                    $query   = implode(" " ,$query) ; 
                    $result  =  $this->fetchAll($query) ;
                    
                    foreach($result as $key => $value)
                    {
                        $result[$key]['quantity'] = $cart['quantity'][$value['id']] ;
                    }
                }
                return $result ;
            }     
        }
        if($opption['task'] == 'history-cart'){

            $id = Session::get('userDefault')['info']['id'];  
            $query[] = "SELECT `id` , `books`,`prices`,`quantities`,`names`,`pictures`,`status`, `date` "  ;
            $query[] = "FROM `".TBL_CART."` " ;
            $query[] = "WHERE `username` = '$id' " ;

            $query = implode(" ",$query);
            return $this->fetchAll($query) ;

        }
        // ORDER
        if($opption['task'] == 'getNameBook'){
            
           $query = 'SELECT `name` FROM `book` WHERE `id` = '.$arrParam['book_id'].' ' ;
           $result = $this->fetchRow($query) ;
           return $result['name'] ;
        }
        if($opption['task'] == 'getNameCate'){
            
            $query = 'SELECT `name` FROM `category` WHERE `id` = '.$arrParam['category_id'].' ' ;
            $result = $this->fetchRow($query) ;
            return $result['name'] ;
         }

    }		
    public function saveItems($arrParam,$option=null)
    {      	
        if($option['task'] == 'user-register'){
            $username 		=  $arrParam['username'] ;
            $password 		=  md5($arrParam['password']) ;
            $fullname 		=  $arrParam['fullname'] ;
            $email 			=  $arrParam['email'] ;
            $phone 			=  $arrParam['phone'] ;
            $status 		=  1 ;  
            $group_id       = 3 ;	
            $register_ip 	=  $_SERVER['SERVER_ADDR'] ;	

			$query = "INSERT INTO `$this->_tableName` ( `username`, `password`,`fullname`,`phone`,`email`,`status`,`register_date`,`register_ip`,`group_id`) VALUES ('$username','$password','$fullname','$phone','$email','$status','$register_ip','$group_id')" ;
	     	$result = $this->query($query) ; 		
			return $result ;
        }
        if($option['task'] == 'save-buy-books'){        

            $id         = $this->randomString(6) ;
            $names      = json_encode($arrParam['form']['name'],JSON_UNESCAPED_UNICODE)      ;
            $book       = json_encode($arrParam['form']['id'])  ;
            $quantity   = json_encode($arrParam['form']['quantity'])  ;
            $prices     = json_encode($arrParam['form']['price'])     ;
            $pictures   = json_encode($arrParam['form']['picture'])   ;
            $status     = 0 ;
            $date       = date("d-m-y H:i:s",time()) ;
            $username = Session::get('userDefault')['info']['id'];         

            $query  = "INSERT INTO `".TBL_CART."` 
                                (`id`,`username`,`books`,`prices`,`quantities`,`names`,`pictures`,`status`,`date`) 
                        VALUES    ('$id','$username','$book','$prices','$quantity','$names','$pictures','$status','$date')       
                    " ;
            $result = $this->query($query) ;
            Session::delete('cart') ;
        }

        if($option['task'] == 'change-pass'){        
            $username   = Session::get('userDefault')['info']['id'];  
            $queryPass  = "SELECT `password` FROM `user` WHERE `id` = '$username' " ;
            $resultPass = $this->fetchRow($queryPass) ;
            $getPass    = $resultPass['password'] ; // Lấy Pass Cũ ;
            $oldPass    = md5($arrParam['old-pass']);
            $newPass    = md5($arrParam['new-pass']);
            $rePass     = md5($arrParam['re-pass']);
            if($oldPass != $getPass){
                    Session::set('pass',PASS_WRONG);
            }else{
                if($newPass != $rePass){
                    Session::set('pass',PASS_NOTMATCH);
                }
                else{
                    $query  = " UPDATE `$this->_tableName` SET `password` = '$newPass' WHERE `id` = '$username'  " ;     
                    $result =  $this->query($query) ;
                    if($result == true){
                        Session::set('pass',PASS_SUCCESS);
                    }
                    return $result ;
                }
            }
                          
        }
    }
    public function inforItems($arrParam,$option=null){	   
        if($option == null)
		{
			$username 	=  $arrParam['username'] ;
			$password 	=  md5($arrParam['password']) ;
		 	$query[]    = "SELECT `u`.`id` , `u`.`fullname` ,`u`.`phone` , `u`.`email` , `u`.`group_id` , `g`.`group_acp` ";
			$query[]    = "FROM `".DB_TABLE_USER."` AS `u` , `".DB_TABLE_GROUP."` AS `g` " ;
			$query[] 	= "WHERE `u`.`group_id` = `g`.`id` AND `username` = '$username' AND  `password` = '$password'" ;
		 	$query  = implode(" " ,$query) ; 
			$resutl =  $this->fetchRow($query) ;
			return $resutl ;
		}
    } 	
    public function delete($arrParam,$option=null){	 
        if($option['task'] == 'delete-in-cart')
		{   
            $id = $arrParam['id'] ;
            if (!empty($_SESSION["cart"])) {
                foreach ($_SESSION["cart"] as $key => $value) {
                    foreach($value as $keyB =>$valueB){
                       if($keyB == $id){
                            unset($_SESSION["cart"]['quantity'][$keyB]);
                       }
                    }
                }

            }
		}
    }
    private function randomString($length){
	
		$arrCharacter = array_merge(range('a','z'),range(0,9),range('A','Z') );
		$arrCharacter = implode('',$arrCharacter);
		$arrCharacter = str_shuffle($arrCharacter);	
		$result		= substr($arrCharacter, 0, $length);
		return $result;
    }


} 