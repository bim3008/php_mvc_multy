<?php
class IndexModel extends Model{
	
	public function countItemsIndex($arrParam,$option = null){	 

		if($option['task'] == 'group'){
			$query[] = "SELECT count(`id`) as `total` FROM `".DB_TABLE_GROUP."`    WHERE `id` > 0" ;
		}
		if($option['task'] == 'user'){
			$query[] = "SELECT count(`id`) as `total` FROM `".DB_TABLE_USER."`      WHERE `id` > 0" ;
		}
		if($option['task'] == 'category'){
			$query[] = "SELECT count(`id`) as `total` FROM `".DB_TABLE_CATEGORY."`  WHERE `id` > 0" ;
		}
		if($option['task'] == 'book'){
			$query[] = "SELECT count(`id`) as `total` FROM `".DB_TABLE_BOOK."` 		WHERE `id` > 0" ;
		}
		if($option['task'] == 'cart'){
			$query[] = "SELECT count(`id`) as `total` FROM `".DB_TABLE_CART."`" ;
		}
		$query  = implode(" " ,$query) ;
		$resutl =  $this->fetchRow($query) ;
		return $resutl['total'] ;
	}

	public function inforItems($arrParam,$option = null){	 
		if($option == null)
		{
			echo $username 	=  $arrParam['username'] ;
			echo $password 	=  md5($arrParam['password']) ;
		 	$query[]    = "SELECT `u`.`id` , `u`.`fullname` , `u`.`email` , `u`.`group_id` , `g`.`group_acp`";
			$query[]    = "FROM `".DB_TABLE_USER."` AS `u` , `".DB_TABLE_GROUP."` AS `g` " ;
			$query[] 	= "WHERE `u`.`group_id` = `g`.`id` AND `username` = '$username' AND  `password` = '$password'" ;
		 	$query  = implode(" " ,$query) ; 
			$resutl =  $this->fetchRow($query) ;
			return $resutl ;
		}
	}
}