<?php
class UserModel extends Model
{
	protected $_tableName = DB_TABLE_USER ;
	public function countItems($arrParam,$opption = null)
	{
		$query[] = "SELECT count(`u`.`id`)  as `total` " ;
		$query[] = " FROM $this->_tableName AS  `u` , `".DB_TABLE_GROUP."`  AS `g` ";
		$query[] = " WHERE `u`.`group_id`  =  `g`.`id` " ;	
		$arrParam['filter_status'] = isset($arrParam['filter_status']) ? ($arrParam['filter_status']) : '' ;	
		if(($arrParam['filter_status']) == 'active'){
			$query[]	= "AND `u`.`status` = 0 ";
		}
		if(($arrParam['filter_status']) == 'inactive'){
			$query[]	= "AND `u`.`status` = 1 ";
		}
		//FILTER : KEYWORD
		if(!empty($arrParam['filter_search'])){
			$keyword	= '"%' . $arrParam['filter_search'] . '%"';
			$query[]	= "AND (`u`.`username` LIKE $keyword  OR `u`.`email` LIKE $keyword ) ";
		}
		$opption['task'] = isset($opption['task']) ? $opption['task'] : '' ;
		if(($opption['task']) == 'active')
		{	
			$query[] =  "AND `u`.`status` =  0" ;
		}
		if( ($opption['task']) == 'inactive')
		{	
			$query[] =  "AND `u`.`status` =  1" ;
		}
		if(!empty($arrParam['filter_group_id']) && is_numeric($arrParam['filter_group_id'])) {
			$groupId =  $arrParam['filter_group_id'] ;
			$query[]  = " AND `group_id` = $groupId ";
		}

	    $query  = implode(" " ,$query) ;
		return $this->fetchRow($query) ;
	}	
	public function listItems($arrParam, $opption = null)
	{	
	
		$query[] = "SELECT `u`.`id`, `u`.`username`, `u`.`password` , `u`.`email` , `u`.`fullname` , `u`.`created`, `u`.`created_by`,`u`.`modified`, `u`.`modified_by`, `u`.`register_date`,`u`.`register_ip` ,`u`.`status`,`u`.`ordering`,`g`.`name` as `group_name`  " ;
		$query[] = " FROM $this->_tableName AS  `u` LEFT JOIN `".DB_TABLE_GROUP."`  AS `g` ON `u`.`group_id`  =  `g`.`id` ";
		$query[] = " WHERE  `u`.`id` > 0 " ;
		
		if(isset($arrParam['filter_status'])&&$arrParam['filter_status'] == 'active') {
			$query[]  = " AND  `u`.`status` = 0 ";
		} 
		if(isset($arrParam['filter_status'])&&$arrParam['filter_status'] == 'inactive') {
			$query[]  = " AND `u`.`status` = 1 ";
		} 		
		if(!empty($arrParam['filter_search'])) {
			$search = '"%'.$arrParam['filter_search'].'%"';
			$query[]  = " AND (`u`.`username` LIKE $search  OR `u`.`email` LIKE $search )  ";
		}	
		if(!empty($arrParam['filter_group_id']) && is_numeric($arrParam['filter_group_id'])) {
			$groupId =  $arrParam['filter_group_id'] ;
			$query[]  = " AND `u`.`group_id` = $groupId ";
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
	public function insertItemsUser($arrParam,$opption=null)
	{	

		$id				=  $arrParam['id'] ;
		$username 		=  $arrParam['username'] ;
		$password 		=  md5($arrParam['password']) ;
		$fullname 		=  $arrParam['fullname'] ;
		$email 			=  $arrParam['email'] ;
		$ordering   	=  $arrParam['ordering'] ;
		$status 		=  $arrParam['status'] ;
		$group_id  		=  $arrParam['group_id'] ;		
		if($opption['task'] == 'add')
		{
			$query = "INSERT INTO `$this->_tableName` ( `username`, `password`,`fullname`,`email`,`status`,`ordering`,`group_id` ) VALUES ('$username','$password','$fullname','$email','$status','$ordering','$group_id')" ;
	     	$result = $this->query($query) ; 
			if($result == true){
				Session::set('messege',SUCCESS_ADD) ;
			}			
			return $result ;
		}
		if($opption['task'] == 'edit')
		{
			$query = "UPDATE `$this->_tableName` SET `username` = '$username',`fullname` = '$fullname',`ordering` = '$ordering' , `email` = '$email',`status` = '$status',`group_id` = '$group_id' WHERE `id` = $id" ; 
			$result = $this->query($query) ;
			if($result == true){
				Session::set('messege',SUCCESS_EDIT) ;
			}			
			return $result ;
		}
	}
	public function infoItems($arrParam,$opption=null)
	{	
		$id = $arrParam['id'] ;
     	$query = "SELECT `id` , `username`,`fullname` ,`email` ,`status` , `group_id` FROM `$this->_tableName` WHERE `id` = $id " ;
		return $this->fetchRow($query) ;	
	}
	public function itemsInSelectBox($arrParam,$opption=null)
	{
		if($opption == null){
			$query 		= " SELECT   `id`, `name` FROM `".DB_TABLE_GROUP."` "  ; 
			$result 	= $this->fetchPairs($query) ;
			$result['default']	= "Select Group" ;
			ksort($result) ;
			return $result ;
		}
	
	}
	public function changePassword($arrParam,$opption=null)
	{	
			$id 	 	= $arrParam['id'] ;
			$oldPass 	= ($arrParam['old-password']) ;
			$newPass 	= ($arrParam['new-password']) ;
			$rePass  	= ($arrParam['re-password'])  ;
			$query 		= "SELECT `password` FROM `$this->_tableName` WHERE `id` = $id" ; 
			$result = $this->fetchRow($query) ; 
			$getOldPass = $result['password'] ;  
			if($oldPass == null || $newPass == null || $rePass == null ){
				Session::set('messege',ERROR_CHANGEPASS) ;	
			}
			else{
				if(md5($oldPass) != $getOldPass ){
					Session::set('messege',ERROR_OLDPASS) ;	
				}
				else
				{
					if($newPass != $rePass){
						Session::set('messege',ERROR_OLDPASS) ;			
					}
					else{
						$newPass = md5($newPass)			;
						$queryUpdate  = "UPDATE `$this->_tableName` SET `password` = '$newPass' WHERE `id` = $id " ;
					 	$resultUpdate = $this->query($queryUpdate) ;  
						if($resultUpdate == true){
							Session::set('messege',SUCCESS_CHANGEPASS) ;							
						}
						return $resultUpdate  ;
					}
				}
				
			}	
			
	}
}
