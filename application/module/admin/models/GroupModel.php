<?php
class GroupModel extends Model
{
	protected $_tableName = DB_TABLE_GROUP ;


	public function countItems($arrParam,$opption = null)
	{
		$query[] = "SELECT count(`id`) as `total` FROM `$this->_tableName`" ;	

		if(isset($opption['task']) == null)
		{	
			$arrParam['status'] = isset($arrParam['status']) ? $arrParam['status'] : 'all';
			{
				if($arrParam['status']  == 'active')
				{	
					$query[] = "WHERE `status` = 0 ";
				}
				else if($arrParam['status']  == 'inactive')
				{	
					$query[] = "WHERE `status` = 1 ";
				}		
				else if($arrParam['status']  == 'all')
				{	
					$query[] = "";
				}	
			    $query  = implode(" " ,$query) ;
				return $this->fetchRow($query) ;

			}
			
		} 	
		if($opption['task'] == 'active')
		{	
		
			$query[] = "WHERE `status` = 0 ";
			$query  = implode(" " ,$query) ;
			return $this->fetchRow($query) ;
		}	
		if($opption['task'] == 'inactive')
		{	
			$query[] = "WHERE `status` = 1 ";
			$query  = implode(" " ,$query) ;
			return $this->fetchRow($query) ;
		}	
	
	}
		
										
	//}
	public function listItems($arrParam, $opption = null)
	{	
		$query[] = "SELECT * FROM `$this->_tableName` " ;
		$query[] = "WHERE `id` > 0" ;
		
		if(isset($arrParam['status'])&&$arrParam['status'] == 'active') {
			$query[]  = " AND  `status` = 0 ";
		} 
		if(isset($arrParam['status'])&&$arrParam['status'] == 'inactive') {
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

	 echo   $query = implode(" " ,$query) ;
		return $this->arrSelectResult($query) ;
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
			$result = $this->update($query) ;
			Session::set('messege','Thay đổi trạng thái Status thành công') ;
		}
		if($opption['task'] == 'ajax-change-group_acp')
		{
			$groupACP = ($arrParam['group_acp'] == 0 ) ? 1 : 0  ;
			$id     = $arrParam['id'] ;
			$query[]  = "SET `group_acp` = $groupACP WHERE `id` = '$id' " ;
			$query = implode(" " ,$query) ;
			$result = $this->update($query) ;
			Session::set('messege','Thay đổi trạng thái Group ACP thành công') ;
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
				$result =  $this->delete($query) ;		
				if($result == true)
				{
					Session::set('messege','Xóa thành công') ;	
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
				$result =  $this->delete($query) ;		
				if($result == true)
				{
					Session::set('messege','Xóa thành công') ;	
				}			
				return $result ;					
			}
			else
			{
				Session::set('messege','Vui lòng chọn phần tử để xóa') ;
			}
		}
	}
	public function insertItems($arrParam,$opption=null)
	{	
		$id			= $arrParam['id'] ;
		$name 		=  $arrParam['name'] ;
		$ordering   =  $arrParam['ordering'] ;
		$status 	=  $arrParam['status'] ;
		$group_acp  =  $arrParam['groupacp'] ;		
		if($opption['task'] == 'add')
		{
			$query = "INSERT INTO `$this->_tableName` ( `name`, `group_acp`,`status`,`ordering` ) VALUES ('$name','$group_acp','$status','$ordering')" ;
	     	$result = $this->insert($query) ; 
			if($result == true)
			{
				Session::set('messege','Dữ liệu đã được thêm thành công') ;
			}			
			return $result ;
		}
		if($opption['task'] == 'edit')
		{
			$query = "UPDATE `$this->_tableName` SET `name` = '$name', `group_acp` = '$group_acp', `status` = '$status',`ordering` = '$ordering'  WHERE `id` = $id" ; 
			$result = $this->update($query) ;
			if($result == true)
			{
				Session::set('messege','Edit dữ liệu thành công') ;
			}			
			return $result ;
		}
	}
	public function infoItems($arrParam,$opption=null)
	{	
		$id = $arrParam['id'] ;
     	$query = "SELECT `id` , `name` ,`group_acp`,`status` ,`ordering`  FROM `$this->_tableName` WHERE `id` = $id " ;
		return $this->fetchRow($query) ;	
	}
}
