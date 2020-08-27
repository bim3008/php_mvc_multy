<?php
class OrderModel extends Model{

    protected $_tableName = DB_TABLE_CART ;
    public function listItems($arrParam, $opption = null)
	{	
		if($opption == null){
            $query = "SELECT * FROM `".$this->_tableName."` " ;
            return $this->fetchAll($query) ;
        }
        if($opption['task'] == 'view-user'){
            $id     = $arrParam['id'] ;
            $query = "SELECT `fullname` , `phone` , `email` FROM `".DB_TABLE_USER."` WHERE `id` = '$id' " ;
            return $this->fetchAll($query) ;
        }
    } 
    public function changeStatus($arrParam, $opption = null)
	{	
		if($opption == null){
            $id = $arrParam['id'] ;
            if($arrParam['status'] == 0){
                $status = 1; 
            }else if($arrParam['status'] == 1){
                $status = 2; 
            }
            $query  = "UPDATE `cart`  SET `status` = '$status' WHERE `id` = '$id' " ;
            return $this->query($query) ;
        }
	} 

}