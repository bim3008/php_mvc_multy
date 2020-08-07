<?php
class CategoryModel extends Model
{
	protected $_tableName = DB_TABLE_CATEGORY;
	public function listItems($arrParam, $opption=null)
	{	
			$query[] = "SELECT `id`, `name`, `picture` FROM `$this->_tableName` " ; 
			$query[] = "WHERE `status` = 0 " ;
			$query = implode(" " ,$query) ; 
			return $this->fetchAll($query) ;
	}
	
}
