<?php
class BookModel extends Model
{
	protected $_tableName = DB_TABLE_BOOK;
	public function listItems($arrParam,$opption=null)
	{
		if(!empty($arrParam['category_id'])){	
			$id = $arrParam['category_id'] ;
			if($opption['task'] == 'book-in-cate'){
				$query  = 'SELECT `id`,`name`,`price`,`sale_off`,`picture`,`special`, `status` FROM `'.$this->_tableName.'` WHERE `category_id` = '.$id.' AND `status` = 0 ' ; 
				$result = $this->fetchAll($query) ;
				return $result ;
			}
		}
		if($opption['task'] == 'get-new-book'){
			$query  = 'SELECT `id`,`name`,`price`,`sale_off`,`picture`,`special`, `status` FROM `'.$this->_tableName.'` WHERE `id` > 0 AND `status` = 0 ORDER BY `id` DESC LIMIT 8' ; 
			$result = $this->fetchAll($query) ;
			return $result ;
		}
		if($opption['task'] == 'get-featured-book'){
			$query  = 'SELECT `id`,`name`,`price`,`sale_off`,`picture`,`special`, `status` FROM `'.$this->_tableName.'` WHERE `id` > 0 AND `special` = 1 ORDER BY `id` DESC LIMIT 8' ; 
			$result = $this->fetchAll($query) ;
			return $result ;
		}
		if($opption['task'] == 'get-details-book'){
			$id     = $arrParam['id'];
			$queryId  = "SELECT `id` FROM `$this->_tableName` ORDER BY `id` DESC LIMIT 1 " ;
			$resultID = $this->fetchRow($queryId);
			$checkID = $resultID['id'] ; 	
			if($id > $checkID || $id < 0 )
			{
				echo URL::redirect('default','error','index');
			}
			$query  = 'SELECT `id`,`name`,`price`,`sale_off`,`picture`,`special`, `status` , `description`,`ordering`  FROM `'.$this->_tableName.'` WHERE `id` = '.$id.' ' ; 
			$result = $this->fetchAll($query) ;
			return $result ;
		}
		if($opption['task'] == 'get-reletive-book'){
			$bookID 	= $arrParam['id'];
			$queryCate  = "SELECT `category_id` FROM `$this->_tableName` WHERE `id` = '$bookID' " ;
			$resultCate = $this->fetchRow($queryCate);
			$cateID = $resultCate['category_id'];
			
			$query  = 'SELECT `id`,`name`,`price`,`sale_off`,`picture`,`special`, `status`, `category_id` FROM `'.$this->_tableName.'` WHERE `category_id` = '.$cateID.' AND `id` <> '.$bookID.' ORDER BY `ordering` ASC ' ; 
			$result = $this->fetchAll($query) ;
			return $result ;
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
				return $result['name'] ;
			}
		}
	
			
	}
}