<?php
require_once 'submenu/index.php';
echo	HelperAdmin::notifyMessege('messege');
?>
<?php

echo HelperAdmin::toolbar($btnFillter, $formSearch, $btnCRUD);
echo HTMLAdmin::menuCategory() ?>
<?php
if(isset($this->listItems)){
	foreach ($this->listItems as $key => $value) {
		// VALUE
		$id 			= $value['id'];
		$name           = HelperAdmin::highLightSearch($lblFilterSearch ,$value['name']) ;
		$ordering		= $value['ordering'];
		$status 		= $value['status'];
		$created 		= $value['created'];
		$created_by		= $value['created_by'];
		$modified 		= $value['modified'];
		$modified_by 	= $value['modified_by'];
		$picture		= $value['picture'];
		$linkImage      =  LINK_IMAGE_CATEGORY .$picture  ;                                 
		$image          =  HelperAdmin::linkImage($linkImage,'width:110px;height:120px;')    ;
		// LINK AND BUTTON
		$buttonSelectAllSelectBox = HelperAdmin::selectAllSelectBox($id);
		$linkEdit     = URL::createLink($lblModule, $lblController, 'form', array('id' => $id));
		$linkDelete   = URL::createLink($lblModule, $lblController,  'delete', array('id' => $id));
		$buttonEdit   = HelperAdmin::cmsButtonEdit($linkEdit,'Edit',);
		$buttonDelete = HelperAdmin::cmsButtonDelete($linkDelete,'Delete');
		$buttonStatus =  HelperAdmin::cmsStatus  ($status,    URL::createLink($lblModule, $lblController,  'changeStatus',   array('id' => $id, 'status' => $status)), $id);
		
		$xhtml = '	
		<tr>
			<td>'.$buttonSelectAllSelectBox.'</td>
			<td style="text-align:center ">' . $id . '</td>
			<td style="text-align:center ">' . $name . '</td>
			<td style="text-align:center ">' . $image . '</td>
			' .$buttonStatus . '
			<td style="text-align:center ">' . $ordering . '</td>
			<td style="text-align:center ">' . $created . '  </br>' . $created_by . '</td>
			<td style="text-align:center ">' . $modified . ' </br>' . $modified_by . '</td>
			<td style="text-align:center ">' . $buttonEdit . $buttonDelete . '</td>
		</tr> ';
		echo $xhtml;
	}
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