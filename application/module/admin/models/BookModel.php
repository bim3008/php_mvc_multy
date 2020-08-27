<?php
class BookModel extends Model
{
	
	protected $_tableName = DB_TABLE_BOOK ;
	public function countItems($arrParam,$opption = null)
	{
		$query[] = "SELECT count(`b`.`id`)  as `total` " ;
		$query[] = " FROM `$this->_tableName` AS `b` , `".DB_TABLE_CATEGORY."`  AS `c` " ; //
		$query[] = " WHERE  `b`.`category_id` = `c`.`id` " ; 

		$arrParam['filter_status'] = isset($arrParam['filter_status']) ? ($arrParam['filter_status']) : '' ;
		if(($arrParam['filter_status']) == 'active'){
			$query[]	= "AND `b`.`status` = 0 ";
		}
		if(($arrParam['filter_status']) == 'inactive'){
			$query[]	= "AND `b`.`status` = 1 ";
		}
		//FILTER : KEYWORD
		if(!empty($arrParam['filter_search'])){
			$keyword	= '"%' . $arrParam['filter_search'] . '%"';
			$query[]	= "AND (`b`.`name` LIKE $keyword  ) ";
		}
		$opption['task'] = isset($opption['task']) ? $opption['task'] : '' ;
		if(($opption['task']) == 'active'){	
			$query[] =  "AND `b`.`status` =  0" ;
		}
		if( ($opption['task']) == 'inactive'){	
			$query[] =  "AND `b`.`status` =  1" ;
		}
		//FILTER :FILTER
		$cateId = $arrParam['filter_category_id'] ;
		if(!empty($arrParam['filter_category_id']) && is_numeric($arrParam['filter_category_id'])) {
			$groupId =  $arrParam['filter_category_id'] ;
			$query[]  = " AND `category_id` = $cateId ";
		}		
	    $query  = implode(" " ,$query) ;
		return $this->fetchRow($query) ;
	}	
	public function listItems($arrParam, $opption = null)
	{	
		$query[] = "SELECT `b`.`id`, `b`.`name`, `b`.`description` , `b`.`price` , `b`.`special` , `b`.`picture`, `b`.`sale_off`, `b`.`created_by`,`b`.`modified`, `b`.`modified_by`,`b`.`status`, `b`.`ordering` ,`c`.`name` as `category_name` " ; //
		$query[] = " FROM `$this->_tableName` AS `b` , `".DB_TABLE_CATEGORY."`  AS `c` " ; //
		$query[] = " WHERE  `b`.`category_id` = `c`.`id`" ; 
		$cateId = $arrParam['filter_category_id'] ;

		if(isset($arrParam['filter_status']) && $arrParam['filter_status'] == 'active') {
			$query[]  = " AND  `b`.`status` = 0 ";
		} 
		if(isset($arrParam['filter_status'])&&$arrParam['filter_status'] == 'inactive') {
			$query[]  = " AND `b`.`status` = 1 ";
		} 		
		if(!empty($arrParam['filter_search'])) {
			$search = '"%'.$arrParam['filter_search'].'%"';
			$query[]  = " AND (`b`.`name` LIKE $search)  ";
		}		
		if(!empty($arrParam['filter_category_id']) && is_numeric($arrParam['filter_category_id'])) {
			$groupId =  $arrParam['filter_category_id'] ;
			$query[]  = " AND `b`.`category_id` = $cateId ";
		}			
		$query[] = " ORDER BY `id` DESC" ; 

		
		$pagination = $arrParam['pagination'] ;
		$totalItemsPerPage = $pagination['totalItemsPerPage'] ;
		if($totalItemsPerPage > 0 )
		{
			$position = ($pagination['currentPage'] - 1) * $totalItemsPerPage ;
			$query[]  = " LIMIT $position, $totalItemsPerPage " ;
		}
		
		$query = implode(" " ,$query) ;
		return $this->fetchAll($query) ;
	} 
	public function changeStatus($arrParam, $opption = null)
	{	
		$query[] = "UPDATE `$this->_tableName` " ;

		if($opption['task'] == 'ajax-change-status')
		{
			$status = ($arrParam['status'] == 0 ) ? 1 : 0  ;
			$id     = $arrParam['id'] ;
			$query[]  = "SET `status` = $status WHERE `id` = '$id' " ;
			$query = implode(" " ,$query) ;		
			$result = $this->query($query) ;
			Session::set('messege',SUCCESS_STATUS) ;
		}
	}
	public function deleteItem($arrParam,$opption=null)
	{
		$query[] = "DELETE FROM `$this->_tableName`" ;
		if($opption['task'] =='delete')
		{
			if(!empty($arrParam['id']))
			{
				$id = $arrParam['id'] ;
				$query[] = " WHERE id = '$id' " ;
				$query = implode(" " ,$query) ;	
				$result =  $this->query($query) ;		
				if($result == true)
				{
					Session::set('messege',SUCCESS_DELETE) ;	
				}								
				return $result ;	
			}
		}		
		if($opption['task'] == 'multy-delete')
		{
			if(!empty($arrParam['cid']))
			{
				$id  = $arrParam['cid'] ;
				$ids = 	$this->createWhereDeleteSQL($id) ;
				$query[] = "WHERE id IN ($ids) " ;
				$query = implode(" " ,$query) ;		
				$result =  $this->query($query) ;		
				if($result == true)
				{
					Session::set('messege',SUCCESS_DELETE) ;	
				}			
				return $result ;					
			}
			else
			{
				Session::set('messege',ERROR_DELETE) ;
			}
		}
	}
	public function insertItems($arrParam,$opption=null)
	{	
		
		$id				=  $arrParam['id'] ;
		$name 			=  mysqli_real_escape_string($this->connect,$arrParam['name'])  ;
		$description    =  mysqli_real_escape_string($this->connect,$arrParam['description']) ; 
		$price 			=  $arrParam['price'] ;
		$special 		=  $arrParam['special'] ;
		$saleOff 		=  $arrParam['sale_off'] ;
		$ordering   	=  $arrParam['ordering'] ;
		$status 		=  $arrParam['status'] ;
		$category_id    =  $arrParam['category_id'] ;		
		$picture   	 	=  $arrParam['picture'] ;	

		require_once LIBRARY_EXT_PATH . 'Upload.php' ;
		$uploadObj = new Upload();
		if($opption['task'] == 'add')
		{
			$picture = $uploadObj ->uploadFile($picture ,$this->_tableName) ; 		
			$query = "INSERT INTO `$this->_tableName` ( `name`,`description`,`picture`,`sale_off`,`price`,`special`,`status`,`ordering`,`category_id` ) VALUES ('$name','$description','$picture','$saleOff','$price','$special','$status','$ordering','$category_id')" ;
	     	$result = $this->query($query) ; 
			if($result == true)
			{
				Session::set('messege',SUCCESS_ADD) ;
			}			
			return $this->lastID() ;
		}
		if($opption['task'] == 'edit')
		{
			if($arrParam['picture']['name'] == null){
				$query = " UPDATE `$this->_tableName` SET `name` = '$name',`price`='$price',`sale_off`='$saleOff', `description` = '$description' , `special` = '$special' , `ordering` = '$ordering' ,`status` = '$status',`category_id` = '$category_id' WHERE `id` = $id " ; 			
			}
			else{
				$uploadObj ->removeFile($this->_tableName,$arrParam['picture_hidden']) ;			
				$uploadObj ->removeFile($this->_tableName, '2022x1120-'.$arrParam['picture_hidden']) ;
				$picture = $uploadObj ->uploadFile($picture ,$this->_tableName);

				$query = "UPDATE `$this->_tableName` SET `name` = '$name', `picture` = '$picture' ,`price`='$price',`sale_off`='$saleOff',`description` = '$description', `special` = '$special' , `ordering` = '$ordering' ,`status` = '$status',`category_id` = '$category_id' WHERE `id` = $id" ;		
			}
			$result = $this->query($query) ;
			if($result == true){
				Session::set('messege',SUCCESS_EDIT) ;
			}			
			return $id ;
		}
	}
	public function infoItems($arrParam,$opption=null)
	{	
		$id = $arrParam['id'] ;
     	$query = "SELECT `id` , `name`,`description` ,`picture` , `sale_off`,`special`, `price`, `ordering` ,`status` , `category_id` FROM `$this->_tableName` WHERE `id` = $id " ;
		return $this->fetchRow($query) ;	
	}
	public function itemsInSelectBox($arrParam,$opption=null)
	{
		$query 		= " SELECT   `id`, `name` FROM `".DB_TABLE_CATEGORY."` "  ;
		$result 	= $this->fetchPairs($query) ;
		$result['default']	= "  Select Category  " ;
		ksort($result) ;
		return $result ;
	}


}
