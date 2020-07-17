<?php
require_once 'toolbar/index.php';
echo	Helper::notifyMessege('messege');
?>
<?php

echo Helper::toolbarGroup($btnFillter, $formSearch, $btnCRUD);
echo HTML::menuGroup() ?>
<?php
foreach ($this->listItems as $key => $value) {
	$id 			= $value['id'];
	$name           = ($lblFilterSearch != null) ? preg_replace("/\p{L}*?" . preg_quote($lblFilterSearch) . "\p{L}*/ui", '<b style="background-color: yellow;">\\0</b>', $value['name']) : $value['name'];
	$ordering		= $value['ordering'];
	$group_acp 		= $value['group_acp'];
	$status 		= $value['status'];
	$created 		= $value['created'];
	$created_by		= $value['created_by'];
	$modified 		= $value['modified'];
	$modified_by 	= $value['modified_by'];
	$privilege_id 	= $value['privilege_id'];
	$picture		= $value['picture'];

	$linkEdit     = URL::createLink($lblModule, $lblController, 'form', array('id' => $id));
	$linkDelete   = URL::createLink($lblModule, $lblController,  'delete', array('id' => $id));
	$buttonEdit   = Helper::cmsButton($linkEdit, 'btn btn-warning btn-sm', 'fa fa-edit', 'edit', 'Edit',);
	$buttonDelete = Helper::cmsButton($linkDelete, 'btn btn-danger btn-sm btn-delete', 'fa fa-trash', 'delete', 'Delete');
	$xhtml = '	
	<tr>
		<td><span class="custom-checkbox"><input type="checkbox" id="checkbox1" name="cid[]" value="' . $id . '"></span></td>
		<td>' . $id . '</td>
		<td>' . $name . '</td>
		' . Helper::cmsGroupAcp($group_acp, URL::createLink($lblModule, $lblController,  'changeGroupAcp', array('id' => $id, 'group_acp' => $group_acp)), $id) . '
		' . Helper::cmsStatus  ($status,    URL::createLink($lblModule, $lblController,  'changeStatus',   array('id' => $id, 'status' => $status)), $id) . '
		<td>' . $ordering . '</td>
		<td>' . $created . '  </br>' . $created_by . '</td>
		<td>' . $modified . ' </br>' . $modified_by . '</td>
		<td>' . $buttonEdit . $buttonDelete . '</td>
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