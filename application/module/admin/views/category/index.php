<?php
require_once 'toolbar/index.php';
echo	Helper::notifyMessege('messege');
?>
<?php

echo Helper::toolbar($btnFillter, $formSearch, $btnCRUD);
echo HTML::menuCategory() ?>
<?php
foreach ($this->listItems as $key => $value) {
	$id 			= $value['id'];
	$name           = ($lblFilterSearch != null) ? preg_replace("/\p{L}*?" . preg_quote($lblFilterSearch) . "\p{L}*/ui", '<b style="background-color: yellow;">\\0</b>', $value['name']) : $value['name'];
	$ordering		= $value['ordering'];
	$status 		= $value['status'];
	$created 		= $value['created'];
	$created_by		= $value['created_by'];
	$modified 		= $value['modified'];
	$modified_by 	= $value['modified_by'];
	$picture		= $value['picture'];
	$linkImage      =  LINK_IMAGE_CATEGORY .$picture  ;                                 
	$image          =  Helper::linkImage($linkImage,'width:110px;height:120px;')    ;

	$linkEdit     = URL::createLink($lblModule, $lblController, 'form', array('id' => $id));
	$linkDelete   = URL::createLink($lblModule, $lblController,  'delete', array('id' => $id));
	$buttonEdit   = Helper::cmsButtonEdit($linkEdit,'Edit',);
	$buttonDelete = Helper::cmsButtonDelete($linkDelete,'Delete');
	$xhtml = '	
	<tr>
		<td><span class="custom-checkbox"><input type="checkbox" id="checkbox1" name="cid[]" value="' . $id . '"></span></td>
		<td style="text-align:center ">' . $id . '</td>
		<td style="text-align:center ">' . $name . '</td>
		<td style="text-align:center ">' . $image . '</td>
		' . Helper::cmsStatus  ($status,    URL::createLink($lblModule, $lblController,  'changeStatus',   array('id' => $id, 'status' => $status)), $id) . '
		<td style="text-align:center ">' . $ordering . '</td>
		<td style="text-align:center ">' . $created . '  </br>' . $created_by . '</td>
		<td style="text-align:center ">' . $modified . ' </br>' . $modified_by . '</td>
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