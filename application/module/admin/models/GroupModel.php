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
			$query[]  = "";
		} 
		if($arrParam['params'] == 'inactive') {
			$query[]  = " WHERE `status` = 1  ";
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
			Session::set('messge','Phần tử đã được thay đổi trạng thái') ;
			return array($id, $status, URL::createLink('admin','group','changeStatus', array('id'=> $id , 'status' => $status ))) ;
			
		}
		if($opption['task'] == 'ajax-change-group_acp')
		{
			$groupACP = ($arrParam['group_acp'] == 0 ) ? 1 : 0  ;
			$id     = $arrParam['id'] ;
			$query[]  = "SET `group_acp` = $groupACP WHERE `id` = '$id' " ;
			$query = implode(" " ,$query) ;
			$result = $this->update($query) ;
			Session::set('messge','Phần tử đã được thay đổi trạng thái') ;	
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
}
