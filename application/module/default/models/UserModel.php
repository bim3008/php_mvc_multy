<?php
class UserModel extends Model
{
	protected $_tableName = DB_TABLE_USER ;
    public function saveItems($arrParam,$option=null)
    {
        $username 		=  $arrParam['username'] ;
        $password 		=  md5($arrParam['password']) ;
        $fullname 		=  $arrParam['fullname'] ;
        $email 			=  $arrParam['email'] ;
        $phone 			=  $arrParam['phone'] ;
        $status 		=  0 ;  
        $register_date 	=  date("Y-m-d H:i:s",time());		
        $register_ip 	=  $_SERVER['SERVER_ADDR'] ;		
        if($option['task'] == 'user-register'){
			$query = "INSERT INTO `$this->_tableName` ( `username`, `password`,`fullname`,`phone`,`email`,`status`,`register_date`,`register_ip`) VALUES ('$username','$password','$fullname','$phone','$email','$status','$register_date','$register_ip')" ;
	     	$result = $this->query($query) ; 		
			return $result ;
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
}