<?php
require_once 'submenu/index.php';
echo HelperAdmin::notifyMessege('messege');
echo HelperAdmin::toolbar($btnFillter, $formSearch, $btnCRUD);
echo HTMLAdmin::menuGroup();
if (isset($this->listItems)) {
    foreach ($this->listItems as $key => $value) {
        $id           = $value['id'];
        $name         = HelperAdmin::highLightSearch($lblFilterSearch ,$value['name']) ;
        $ordering     = $value['ordering'];
        $group_acp    = $value['group_acp'];
        $status       = $value['status'];
        $created      = $value['created'];
        $created_by   = $value['created_by'];
        $modified     = $value['modified'];
        $modified_by  = $value['modified_by'];
        $privilege_id = $value['privilege_id'];
        $picture      = $value['picture'];

        $linkEdit     = URL::createLink($lblModule, $lblController, 'form', array('id' => $id));
        $linkDelete   = URL::createLink($lblModule, $lblController, 'delete', array('id' => $id));
        $buttonEdit   = HelperAdmin::cmsButtonEdit($linkEdit, 'Edit', );
        $buttonDelete = HelperAdmin::cmsButtonDelete($linkDelete, 'Delete');
        $buttonGroupAcp = HelperAdmin::cmsGroupAcp($group_acp, URL::createLink($lblModule, $lblController, 'changeGroupAcp', array('id' => $id, 'group_acp' => $group_acp)), $id);
        $buttonStatus = HelperAdmin::cmsStatus($status, URL::createLink($lblModule, $lblController, 'changeStatus', array('id' => $id, 'status' => $status)), $id);
        $buttonSelectAllSelectBox = HelperAdmin::selectAllSelectBox($id);
        $xhtml = '
			<tr>
				<td>' . $buttonSelectAllSelectBox . '</td>
				<td>' . $id . '</td>
				<td>' . $name . '</td>
				' . $buttonGroupAcp . '
				' . $buttonStatus . '
				<td>' . $ordering . '</td>
				<td>' . $created . '  </br>' . $created_by . '</td>
				<td>' . $modified . ' </br>' . $modified_by . '</td>
				<td>' . $buttonEdit . $buttonDelete . '</td>
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