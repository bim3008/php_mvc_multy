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
			return $this->fetchAll($query) ;
		}
		if(!empty($arrParam['category_id'])){	
			$id = $arrParam['category_id'] ;
			if($opption['task'] == 'book-in-cate'){
				$query  = 'SELECT `b`.`id`,`b`.`name`,`b`.`price`,`b`.`sale_off`,`b`.`picture`,`b`.`special`, `b`.`status`,`b`.`category_id`, `c`.`name` AS `category_name`  FROM `book` AS `b` , `category` AS `c` WHERE `b`.`category_id` = `c`.`id`  AND `category_id` = '.$id.' AND`b`.`status` = 0 ORDER BY `id` DESC LIMIT 8' ; 
				// $query  = 'SELECT `id`,`name`,`price`,`sale_off`,`picture`,`special`, `status` ,`category_id`FROM `'.$this->_tableName.'` WHERE `category_id` = '.$id.' AND `status` = 0 ' ; 
				$result = $this->fetchAll($query) ;
				return $result ;
			}
		}
		
	}	

	public function inforItem($arrParam, $opption=null)   
	{
		if(!empty($arrParam['category_id']))
		{
			$id = $arrParam['category_id'] ;
			if($opption['task'] == 'get-cat-name')
			{
				$query  = 'SELECT `name` FROM `'.DB_TABLE_CATEGORY.'` WHERE `id` = '.$id.' ' ; 
				$result = $this->fetchRow($query) ;
				return mb_strtolower($result['name']) ;
			}
		}
	
			
	}
}
