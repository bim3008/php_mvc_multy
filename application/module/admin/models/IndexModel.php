<?php
class IndexModel extends Model{
	
	public function countItemsIndex($arrParam,$option = null){	 
	
		if($option['task'] == 'group')
		{
			$query[] = "SELECT count(`id`) as `total` FROM '.DB_TABLE_GROUP.' " ;
		}
	}
}