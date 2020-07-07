<?php
class GroupModel extends Model
{
	protected $_tableName = DB_TABLE_GROUP ;
	public function countItems($arrParam,$opption = null)
	{
		$query[] = "SELECT count(`id`) as `total` FROM `$this->_tableName`" ;	
		if(empty($opption))
		{
			$query[] = "";
		}
		elseif($opption['task'] == 'active')
		{	
			$query[] = "WHERE `status` = 0 ";
		}
		elseif($opption['task'] == 'inactive')
		{
			$query[]= "WHERE `status` = 1 ";		
		}
		elseif($opption['task']  == 'filter_search') {
			if(!empty($arrParam['filter_search']))
			{
				$search   =	$arrParam['filter_search'] ;
				$query[]  = " WHERE `name` LIKE '%$search%' ";		
			}			
		}	
		
		$query  = implode(" " ,$query) ;
		$result =   $this->fetchRow($query) ;
		return $result['total'] ;
										
	}
	
	public function listItems($arrParam, $opption = null)
	{	
	
		$query[] = "SELECT * FROM `$this->_tableName` " ;
		$flag = false ;
		if (empty($arrParam['params'])) {
			$query[]  = "ORDER BY `id` DESC ";
		} 
		if($arrParam['params'] == 'inactive') {
			$query[]  = " WHERE  `status` = 1 ";
			$flag = true ;
		} 
		if($arrParam['params'] == 'active') {
			$flag = true ;
			$query[]  = " WHERE `status` = 0  ";
		} 			
		if(!empty($arrParam['filter_search'])) {
			$search = $arrParam['filter_search'];
			if($flag == true)
			{
				$query[]  = "AND `name` LIKE '%$search%' ";
			}
			else
			{
				$query[]  = "WHERE `name` LIKE '%$search%' ";
			}
			
		}
		$pagination = $arrParam['pagination'] ;
		$totalItemsPerPage = $pagination['totalItemsPerPage'] ;
		if($totalItemsPerPage > 0 )
		{
			$position = ($pagination['currentPage'] - 1) * $totalItemsPerPage ;
			$query[]  = " LIMIT $position, $totalItemsPerPage " ;
		}

	    $query = implode(" " ,$query) ;
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
			return array($id, $status, URL::createLink('admin','group','changeStatus', array('id'=> $id , 'status' => $status ))) ;
			
		}
		if($opption['task'] == 'ajax-change-group_acp')
		{
			$groupACP = ($arrParam['group_acp'] == 0 ) ? 1 : 0  ;
			$id     = $arrParam['id'] ;
			$query[]  = "SET `group_acp` = $groupACP WHERE `id` = '$id' " ;
			$query = implode(" " ,$query) ;
			$result = $this->update($query) ;
			return array($id, $groupACP, URL::createLink('admin','group','changeAjaxACP', array('id'=> $id , 'group_acp' => $groupACP ))) ;
			
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
				Session::set('messge','Xóa phần tử thành công') ;			
				return $this->delete($query) ;				
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
				Session::set('messge','Xóa thành công') ;		
				return $result ;
				
			}
			else
			{
				Session::set('messge','Vui lòng chọn phần tử để xóa') ;
			}
		}
	}
	public function ordering($arrParam,$opption=null)
	{
		if($opption == null)
		{
			if(!empty($arrParam['order']))
			{
		
				foreach($arrParam['order'] as $id => $ordering) 
				{ 		
					$query = " UPDATE `$this->_tableName` SET `ordering` = $ordering WHERE `id` = '".$id."'"  ;
					Session::set('messge','Có thay đổi ordering thành công') ;
					$this->update($query) ;					
				}
						
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
				Session::set('messge','Dữ liệu đã được thêm thành công') ;
			}			
			return $result ;
		}
		if($opption['task'] == 'edit')
		{
			$query = "UPDATE `$this->_tableName` SET `name` = '$name', `group_acp` = '$group_acp', `status` = '$status',`ordering` = '$ordering'  WHERE `id` = $id" ; 
			$result = $this->update($query) ;
			if($result == true)
			{
				Session::set('messge','Edit dữ liệu thành công') ;
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
