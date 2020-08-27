<?php	
	if(isset($this->listItems))
	{
		$xhtml = '' ;
		foreach ($this->listItems as $key => $value) {
			$id             =  $value['id'];
			$arrBook        =  json_decode($value['books']);    
			$arrName        =  json_decode($value['names']);
			$arrPicture     =  json_decode($value['pictures']);
			$arrQuantity    =  json_decode($value['quantities']);
			$arrPrice       =  json_decode($value['prices']);
			$username		=  $value['username'] ;
			$linkViewUser	= URL::createLink('admin','order','user',['id'=>$username]) ;
			$date           =   date("H:i d/m/Y" , strtotime($value['date'])) ;
			$tableOrder   	= '' ;	
			$i = 0; 
			foreach($arrBook as $keyB => $valueB){
				$i++;
				$linkStatusOrder =  URL::createLink('admin','order','changestatus',['id'=>$id ,'status' => $value['status']]) ;
				$tableOrder .= '	
				<tr>
					<td style="text-align:center ">' . $id . '</td>
					<td style="text-align:center "><a title="View User" href="'.$linkViewUser.'">View User</a></td>
					<td style="text-align:center ">'.$arrPrice[$keyB] .'</td>    
					<td style="text-align:center ">'.$arrQuantity[$keyB] .'</td td>    
					<td style="text-align:center ">'.$arrName[$keyB] .'</td>    
					<td><img style="width: 100px;height: 100px;text-align: center;" src=" '.LINK_IMAGE_BOOK.$arrPicture[$keyB].'"></td>
					'.HTMLAdmin::statusBuyBooks($value['status'],$linkStatusOrder).'
					<td style="text-align:center ">'.	$date .'</td>    
		
				</tr> ';
			} 
			$xhtml .= HTMLAdmin::admidnOrder(). $tableOrder; ;
		}
	}
	echo $xhtml ;
?>

</tbody>
</table>
</form>
<div>
	<input type="hidden" name="filter_page" value="1">
	<input type="hidden" name="form['token']" value="14323">
</div>
</div>
<div class="row">
	<?php
		// $link = URL::createLink($this->arrParam['module'], $this->arrParam['controller'], 'index', array('status' => $lblStatus, 'filter_search' => $lblFilterSearch));
		// echo $this->pagination->showPagination($link);
	?>
</div>
</div>
</div>