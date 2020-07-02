<?php
class GroupModel extends Model
{
	protected $_tableName = DB_TABLE_GROUP ;
	public function countItems($arrParam,$opption = null)
	{

		
		$query = "SELECT count(id) as total FROM `$this->_tableName` ";
	

		return $this->arrSelectResult($query) ;
	}
	public function listItems($arrParam, $opption = null)
	{		
		if (empty($arrParam['params'])) {
	 		$query  = " SELECT * FROM `$this->_tableName` ORDER BY 'id' DESC ";
		} else if ($arrParam['params'] == 'active') {
			$query  = " SELECT * FROM `$this->_tableName` WHERE `status` = 0 ORDER BY 'id' DESC ";
		} else if ($arrParam['params'] == 'inactive') {
			$query  = " SELECT * FROM `$this->_tableName` WHERE `status` = 1 ORDER BY 'id' DESC ";
		}
		return $this->arrSelectResult($query) ;
	}

	public function changeStatus($arrParam, $opption = null)
	{		
		if($opption['task'] == 'ajax-change-status')
		{
			$status = ($arrParam['status'] == 0 ) ? 1 : 0  ;
			$id     = $arrParam['id'] ;
			$query  = "UPDATE `$this->_tableName` SET `status` = $status WHERE `id` = '$id' " ;
			$result = $this->update($query) ;
			return array($id, $status, URL::createLink('admin','group','changeStatus', array('id'=> $id , 'status' => $status ))) ;
		}
		if($opption['task'] == 'ajax-change-group_acp')
		{
			$groupACP = ($arrParam['group_acp'] == 0 ) ? 1 : 0  ;
			$id     = $arrParam['id'] ;
			$query  = "UPDATE `$this->_tableName` SET `group_acp` = $groupACP WHERE `id` = '$id' " ;
			$result = $this->update($query) ;
			return array($id, $groupACP, URL::createLink('admin','group','changeAjaxACP', array('id'=> $id , 'group_acp' => $groupACP ))) ;
		}
	}


}
