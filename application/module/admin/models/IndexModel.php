<?php
class IndexModel extends Model{
	
	public function countItems(){	
        $query = 'SELECT count(id) as total FROM `group`  ' ;
		$result = $this->select($query) ;
		$item = [] ;
		if($result)
		{
			while($kq = $result->fetch_assoc())
			{
				 $item[] = $kq ;
			}
			return $item ;
		}

	}
}