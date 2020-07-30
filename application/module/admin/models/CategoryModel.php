<?php
class CategoryModel extends Model
{
	protected $_tableName = DB_TABLE_CATEGORY;
	
	public function countItems($arrParam,$opption = null)
	{
		$query[] =  "SELECT count(`id`) as `total` " ;
		$query[] =  "FROM `$this->_tableName`" ;	
		$query[] =  "WHERE `id` > 0" ;

		//FILTER : KEYWORD
		$arrParam['filter_status'] = isset($arrParam['filter_status']) ? ($arrParam['filter_status']) : '' ;
		if(($arrParam['filter_status']) == 'active')
		{
			$query[]		 = "AND `status` = 0 ";
		}
		if(($arrParam['filter_status']) == 'inactive')
		{
			$query[]		 = "AND `status` = 1 ";
		}
		//FILTER : KEYWORD
		if(!empty($arrParam['filter_search'])){
			$keyword	= '"%' . $arrParam['filter_search'] . '%"';
			$query[]	= "AND `name` LIKE $keyword";
		}
		$opption['task'] = isset($opption['task']) ? $opption['task'] : '' ;
		if(($opption['task']) == 'active')
		{	
			$query[] =  "AND `status` =  0" ;
		}

		if( ($opption['task']) == 'inactive')
		{	
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
			Session::set('messege','Thay đổi trạng thái Status thành công') ;
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

				// REMOVE IMAGE
				$query    = "SELECT `id` , `picture`as `name` FROM `$this->_tableName` WHERE id = $id " ;
				$arrImage = $this->fetchPairs($query) ;

				require_once LIBRARY_EXT_PATH . 'Upload.php' ;
				$uploadObj = new Upload();		
				foreach($arrImage as $value)
				{
					$uploadObj ->removeFile('category',$value) ;			
					$uploadObj ->removeFile('category', '720x560-'.$value) ;			
				}		
			
				// DELETE FROM DATABASE
				$query = " DELETE FROM `$this->_tableName` WHERE id = '$id' " ;
				$result =  $this->query($query) ;		
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
				$id  	  = $arrParam['cid'] ;
				$ids      = $this->createWhereDeleteSQL($id) ;
				// REMOVE IMAGE
				$query    = "SELECT `id` ,`picture` as `name` FROM `$this->_tableName` WHERE id IN ($ids) " ;
				$arrImage = $this->fetchPairs($query) ;
				require_once LIBRARY_EXT_PATH . 'Upload.php' ;
				$uploadObj = new Upload();

				foreach($arrImage as $value)
				{
					$uploadObj ->removeFile('category',$value) ;			
					$uploadObj ->removeFile('category', '720x560-'.$value) ;			
				}
				// DELETE FROM DATABASE
				$query  = "DELETE FROM `$this->_tableName` WHERE id IN ($ids) " ;
				$result   =  $this->query($query) ;		
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
		$id				=  $arrParam['id'] ;
		$name 			=  $arrParam['name'] ;
		$ordering   	=  $arrParam['ordering'] ;
		$status 		=  $arrParam['status'] ;
		$picture        =  $arrParam['picture'] ;
	
		require_once LIBRARY_EXT_PATH . 'Upload.php' ;
		$uploadObj = new Upload();

		if($opption['task'] == 'add')
		{
			// Upload Image
			$picture = $uploadObj ->uploadFile($picture , DB_TABLE_CATEGORY) ; 
			$query = "INSERT INTO `$this->_tableName` ( `name`, `picture`,`status`,`ordering` ) VALUES ('$name','$picture','$status','$ordering')" ;
  			$result = $this->query($query) ; 
			if($result == true)
			{
				Session::set('messege','Dữ liệu đã được thêm thành công') ;
			}			
			return $this->lastID() ;
		}
		if($opption['task'] == 'edit')
		{
			if($arrParam['picture']['name'] == null){
				$query = "UPDATE `$this->_tableName` SET `name` = '$name', `status` = '$status',`ordering` = '$ordering'  WHERE `id` = $id" ; 
			}
			else{
				$uploadObj ->removeFile(DB_TABLE_CATEGORY,$arrParam['picture_hidden']) ;			
				$uploadObj ->removeFile(DB_TABLE_CATEGORY, '720x560-'.$arrParam['picture_hidden']) ;
				$picture = $uploadObj ->uploadFile($picture ,DB_TABLE_CATEGORY);
				$query = "UPDATE `$this->_tableName` SET `name` = '$name', `picture` = '$picture' ,`status` = '$status',`ordering` = '$ordering'  WHERE `id` = $id" ; 
			}
			$result = $this->query($query) ;
			if($result == true)
			{
				Session::set('messege','Edit dữ liệu thành công') ;
			}			
			return $id ;
		}
	}
	public function infoItems($arrParam,$opption=null)
	{	
		$id = $arrParam['id'] ;
    	$query = "SELECT `id` , `name` ,`status`,`picture` ,`ordering`  FROM `$this->_tableName` WHERE `id` = $id " ;
		$result = $this->fetchRow($query) ;	
		return $result ;
	}
	public function saveItem($arrParam, $option = null){
		 require_once LIBRARY_EXT_PATH . 'Upload.php';
		// require_once LIBRARY_EXT_PATH . 'XML.php';
		$uploadObj	= new Upload();
		
		if($option['task'] == 'add'){
			$arrParam['form']['picture']	= $uploadObj->uploadFile($arrParam['form']['picture'], 'category');
			$arrParam['form']['created']	= date('Y-m-d', time());
			$arrParam['form']['created_by']	= $this->_userInfo['username'];
			$data	= array_intersect_key($arrParam['form'], array_flip($this->_columns));
			$this->insert($data);
			Session::set('message', array('class' => 'success', 'content' => 'Dữ liệu được lưu thành công!'));
			
			// $arrCategories	= $this->listItem($arrParam, array('task' => 'xml-category'));
			// XML::createXML($arrCategories, 'categories.xml');
			
			return $this->lastID();
		}
		if($option['task'] == 'edit'){
			$arrParam['form']['modified']	= date('Y-m-d', time());
			$arrParam['form']['modified_by']= $this->_userInfo['username'];
			
			if($arrParam['form']['picture']['name']==null){
				unset($arrParam['form']['picture']);
			}else{
				$uploadObj->removeFile('category', $arrParam['form']['picture_hidden']);
				$uploadObj->removeFile('category', '60x90-' .  $arrParam['form']['picture_hidden']);
				
				$arrParam['form']['picture']	= $uploadObj->uploadFile($arrParam['form']['picture'], 'category');
			}
			
			$data	= array_intersect_key($arrParam['form'], array_flip($this->_columns));
			$this->update($data, array(array('id', $arrParam['form']['id'])));
			Session::set('message', array('class' => 'success', 'content' => 'Dữ liệu được lưu thành công!'));
			
			// $arrCategories	= $this->listItem($arrParam, array('task' => 'xml-category'));
			// XML::createXML($arrCategories, 'categories.xml');
			
			return $arrParam['form']['id'];
		}
	}
	
}
