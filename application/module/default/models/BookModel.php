<?php
class BookModel extends Model
{
	protected $_tableName = DB_TABLE_BOOK;
	public function listItems($arrParam,$opption=null)
	{
		if(!empty($arrParam['category_id'])){	
			$id = $arrParam['category_id'] ;
			if($opption['task'] == 'book-in-cate'){
				$query  = 'SELECT `b`.`id`,`b`.`name`,`b`.`price`,`b`.`sale_off`,`b`.`picture`,`b`.`special`, `b`.`status`,`b`.`category_id`, `c`.`name` AS `category_name`  FROM `'.$this->_tableName.'` AS `b` , `category` AS `c` WHERE `b`.`category_id` = `c`.`id`  AND `category_id` = '.$id.' AND`b`.`status` = 0 ORDER BY `id` DESC LIMIT 8' ; 
				$result = $this->fetchAll($query) ;
				return $result ;
			}
		}
		if($opption['task'] == 'get-new-book'){
			$query  = 'SELECT `b`.`id`,`b`.`name`,`b`.`price`,`b`.`sale_off`,`b`.`picture`,`b`.`special`, `b`.`status`,`b`.`category_id`, `c`.`name` AS `category_name`  FROM `'.$this->_tableName.'` AS `b` , `category` AS `c` WHERE `b`.`category_id` = `c`.`id`  AND `b`.`status` = 0 ORDER BY `id` DESC LIMIT 8' ; 
			$result = $this->fetchAll($query) ;
			return $result ;
		}
		if($opption['task'] == 'get-featured-book'){
			$query  = 'SELECT `b`.`id`,`b`.`name`,`b`.`price`,`b`.`sale_off`,`b`.`picture`,`b`.`special`, `b`.`status`,`b`.`category_id`, `c`.`name` AS `category_name`  FROM `'.$this->_tableName.'` AS `b` , `category` AS `c` WHERE `b`.`category_id` = `c`.`id`  AND `b`.`special` = 1 ORDER BY `id` DESC LIMIT 8' ; 
			$result = $this->fetchAll($query) ;
			return $result ;
		}
		if($opption['task'] == 'get-details-book'){
			$id     = $arrParam['book_id'];
			$queryId  = "SELECT `id` FROM `$this->_tableName` ORDER BY `id` DESC" ;
			$resultID = $this->fetchRow($queryId);
			$checkID = $resultID['id'] ; 	
			if($id > $checkID || $id <= 0){
				URL::redirect('default','error','index',null,'404.html');
			}
			$query  = 'SELECT `b`.`id`,`b`.`name`,`b`.`price`,`b`.`sale_off`,`b`.`picture`,`b`.`special`, `b`.`status` , `b`.`description`,`b`.`ordering`,`b`.`category_id` , `c`.`name` AS `category_name` FROM `'.$this->_tableName.'` AS `b` , `category` AS `c` WHERE `b`.`category_id` = `c`.`id` AND`b`.`id` = '.$id.' ' ; 
			$result = $this->fetchAll($query) ;
			return $result ;
		}
		if($opption['task'] == 'get-reletive-book'){
			
			$bookID = $arrParam['book_id'];
			$cateID = $arrParam['category_id'];
			$query  = 'SELECT `b`.`id`,`b`.`name`,`b`.`price`,`b`.`sale_off`,`b`.`picture`,`b`.`special`, `b`.`status`,`b`.`category_id`, `c`.`name` AS `category_name`  FROM `'.$this->_tableName.'` AS `b` , `category` AS `c` WHERE `b`.`category_id` = `c`.`id`  AND  `category_id` = '.$cateID.' AND `b`.`id` <> '.$bookID.' ORDER BY `b`.`ordering` ASC ' ; 
			$result = $this->fetchAll($query) ;
			return $result ;
		}
		if($opption['task'] == 'get-title-book'){
			
			$bookID = $arrParam['book_id'];
			$query  = 'SELECT `name` FROM `'.$this->_tableName.'` WHERE `id` = '.$bookID.' ' ; 
			$result = $this->fetchRow($query) ;
			return $result['name'] ;
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