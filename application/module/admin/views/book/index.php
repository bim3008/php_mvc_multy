<?php
require_once 'toolbar/index.php';
echo	Helper::notifyMessege('messege');
?>
<?php

echo Helper::toolbar($btnFillter, $formSearch, $btnCRUD);
echo HTML::menuBook() ?>
<?php
foreach ($this->listItems as $key => $value) {

	$id 			= $value['id'];
	$name           = ($lblFilterSearch != null) ? preg_replace("/\p{L}*?" . preg_quote($lblFilterSearch) . "\p{L}*/ui", '<b style="background-color: yellow;">\\0</b>', $value['name']) : $value['name'];
	$description	= $value['description'];
	$price			= $value['price'];
	$special		= $value['special'];
	$saleOff		= $value['sale_off'];
	$ordering		= $value['ordering'];
	$status 		= $value['status'];
	$categoryName 	= $value['category_name'];
	// $created 		= $value['created'];
	$created_by		= $value['created_by'];
	$modified 		= $value['modified'];
	$modified_by 	= $value['modified_by'];
	$picture		= $value['picture'];
	$linkImage      =  LINK_IMAGE_BOOK .$picture  ;                                 
	$image          =  Helper::linkImage($linkImage,'width:110px;height:120px;')    ;
	// $linkImage      =  LINK_IMAGE_CATEGORY .$picture  ;                                 
//	$image          =  Helper::linkImage($linkImage,'width:110px;height:120px;')    ;
	

	$linkEdit     = URL::createLink($lblModule, $lblController, 'form', array('id' => $id));
	$linkDelete   = URL::createLink($lblModule, $lblController,  'delete', array('id' => $id));
	$buttonEdit   = Helper::cmsButton($linkEdit, 'btn btn-warning btn-sm', 'fa fa-edit', 'edit', '',);
	$buttonDelete = Helper::cmsButton($linkDelete, 'btn btn-danger btn-sm btn-delete', 'fa fa-trash', 'delete', '');
	$xhtml = '	
	<tr>
		<td><span class="custom-checkbox"><input type="checkbox" id="checkbox1" name="cid[]" value="' . $id . '"></span></td>
		<td style="text-align:center ">' . $id . '</td>
		<td style="text-align:center ">' . $name . '</td>
		<td style="text-align:center ">'.Helper::textShorten($description,30).'</td>    
		<td style="text-align:center ">'.$image .'</td td>    
		<td style="text-align:center ">'.$categoryName.'</td>    
		<td style="text-align:center ">'.Helper::formatVND($price).'</td>    
		<td style="text-align:center ">'.Helper::cmsSpecial($special).'</td>    
		' . Helper::cmsStatus  ($status,    URL::createLink($lblModule, $lblController,  'changeStatus',   array('id' => $id, 'status' => $status)), $id) . '
		<td style="text-align:center ">' . $ordering . '</td>
		<td style="text-align:center ">' . $buttonEdit . $buttonDelete . '</td>
	</tr> ';
	echo $xhtml;
}
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
		$link = URL::createLink($this->arrParam['module'], $this->arrParam['controller'], 'index', array('status' => $lblStatus, 'filter_search' => $lblFilterSearch));
		echo $this->pagination->showPagination($link);
	?>
</div>
</div>
</div>