<?php
class GroupModel extends Model
{
	protected $_tableName = DB_TABLE_GROUP ;
	public function countItems($arrParam,$opption = null)
	{
		$query[] =  "SELECT count(`id`) as `total` " ;
		$query[] =  "FROM `$this->_tableName`" ;	
		$query[] =  "WHERE `id` > 0" ;
		//FILTER : KEYWORD
		$arrParam['filter_status'] = isset($arrParam['filter_status']) ? ($arrParam['filter_status']) : '' ;
		if(($arrParam['filter_status']) == 'active'){
			$query[]		 = "AND `status` = 0 ";
		}
		if(($arrParam['filter_status']) == 'inactive'){
			$query[]		 = "AND `status` = 1 ";
		}
		//FILTER : KEYWORD
		if(!empty($arrParam['filter_search'])){
			$keyword	= '"%' . $arrParam['filter_search'] . '%"';
			$query[]	= "AND `name` LIKE $keyword";
		}
		$opption['task'] = isset($opption['task']) ? $opption['task'] : '' ;
		if(($opption['task']) == 'active'){	
			$query[] =  "AND `status` =  0" ;
		}
		if( ($opption['task']) == 'inactive'){	
			$query[] =  "AND `status` =  1" ;
		}
		$query  = implode(" " ,$query) ;
		return $this->fetchRow($query) ;
	
	}
	public function listItems($arrParam, $opption = null)
	{	
		$query[] = "SELECT * FROM `$this->_tableName` " ;
		$query[] = "WHERE `id` > 0" ;
		
		if(isset($arrParam['filter_status'])&&$arrParam['filter_status'] == 'active') {
			$query[]  = " AND  `status` = 0 ";
		} 
		if(isset($arrParam['filter_status'])&&$arrParam['filter_status'] == 'inactive') {
			$query[]  = " AND `status` = 1 ";
		} 		
		if(!empty($arrParam['filter_search'])) {
			$search = '"%'.$arrParam['filter_search'].'%"';
			$query[]  = "AND `name` LIKE $search ";
		}
		
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
		if($opption['task'] == 'ajax-change-group_acp')
		{
			$groupACP = ($arrParam['group_acp'] == 0 ) ? 1 : 0  ;
			$id     = $arrParam['id'] ;
			$query[]  = "SET `group_acp` = $groupACP WHERE `id` = '$id' " ;
			$query = implode(" " ,$query) ;
			$result = $this->query($query) ;
			Session::set('messege',SUCCESS_GROUP_ACP) ;
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
		$id			= $arrParam['id'] ;
		$name 		=  $arrParam['name'] ;
		$ordering   =  $arrParam['ordering'] ;
		$status 	=  $arrParam['status'] ;
		$group_acp  =  $arrParam['group_acp'] ;		
		if($opption['task'] == 'add')
		{
			$query = "INSERT INTO `$this->_tableName` ( `name`, `group_acp`,`status`,`ordering` ) VALUES ('$name','$group_acp','$status','$ordering')" ;
	     	$result = $this->query($query) ; 
			if($result == true)
			{
				Session::set('messege',SUCCESS_ADD) ;
			}			
			return $result ;
		}
		if($opption['task'] == 'edit')
		{
			$query = "UPDATE `$this->_tableName` SET `name` = '$name', `group_acp` = '$group_acp', `status` = '$status',`ordering` = '$ordering'  WHERE `id` = $id" ; 
			$result = $this->query($query) ;
			if($result == true)
			{
				Session::set('messege',SUCCESS_EDIT) ;
			}			
			return $result ;
		}
	}
	public function infoItems($arrParam,$opption=null)
	{	
		$id = $arrParam['id'] ;
     	$query = "SELECT `id` , `name` ,`status`,`group_acp` ,`ordering`  FROM `$this->_tableName` WHERE `id` = $id " ;
		$result = $this->fetchRow($query) ;	
		return $result ;
	}
	
}
