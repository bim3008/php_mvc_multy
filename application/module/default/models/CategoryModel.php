<?php
class CategoryModel extends Model
{
	protected $_tableName = DB_TABLE_CATEGORY;
	public function listItems($arrParam, $opption=null)
	{	
		if($opption == null){
			$query[] = "SELECT `id`, `name`, `picture` FROM `$this->_tableName` " ; 
			$query[] = "WHERE `status` = 0 " ;
			$query = implode(" " ,$query) ; 
		}
		if(!empty($opption) &&  $opption['task'] == 'top-selling'){
			$query[] = "SELECT `id`, `name`, `picture`, `price` , `sale_off` FROM `book`" ; 
			$query[] = "WHERE `sale_off` > 0 ORDER BY `sale_off` DESC LIMIT 3" ;
		    $query = implode(" " ,$query) ; 
		}
		return $this->fetchAll($query) ;
	}

	
	

	
	
}
