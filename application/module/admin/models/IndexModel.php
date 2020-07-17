<?php
class IndexModel extends Model{
	
	public function countItemsIndex($arrParam,$option = null){	 

		if($option['task'] == 'group')
		{
			$query[] = "SELECT count(`id`) as `total` FROM `".DB_TABLE_GROUP."` WHERE `id` > 0" ;
		}
		if($option['task'] == 'user')
		{
			$query[] = "SELECT count(`id`) as `total` FROM `".DB_TABLE_USER."` WHERE `id` > 0" ;
		}
		$query  = implode(" " ,$query) ;
		$resutl =  $this->fetchRow($query) ;
		return $resutl['total'] ;
	}
}