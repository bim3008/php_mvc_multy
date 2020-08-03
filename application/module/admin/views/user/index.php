<?php
require_once 'toolbar/index.php';
	echo	Helper::notifyMessege('messege');
?>
<?php
	echo Helper::toolbarUser($btnFillter, $formSearch, $btnCRUD);
	echo HTML::menuUser() ?>
<?php

foreach ($this->listItems as $key => $value) {
	// VALUE
	$id 			= $value['id'];
	$username       = ($lblFilterSearch != null) ? preg_replace("/\p{L}*?" . preg_quote($lblFilterSearch) . "\p{L}*/ui", '<b style="background-color: pink;">\\0</b>', $value['username']) : $value['username'];
	$email			= $value['email'];
	$email       	= ($lblFilterSearch != null) ? preg_replace("/\p{L}*?" . preg_quote($lblFilterSearch) . "\p{L}*/ui", '<b style="background-color: pink;">\\0</b>', $value['email']) : $value['email'];
	$fullname		= $value['fullname'];
	$password 		= $value['password'];
	$created 		= $value['created'];
	$created_by		= $value['created_by'];
	$modified 		= $value['modified'];
	$modified_by 	= $value['modified_by'];
	$register_ip 	= $value['register_ip'];
	$register_date 	= $value['register_date'];
	$status			= $value['status'];
	$ordering		= $value['ordering'];
	$group_id		= $value['group_name'];
	// LINK AND BUTTON
	$linkEdit     				= URL::createLink($lblModule, $lblController, 'form', array('id' => $id));
	$linkDelete   				= URL::createLink($lblModule, $lblController,  'delete', array('id' => $id));
	$linkChangePass   			= URL::createLink($lblModule, $lblController,  'form', array('type'=> 'change-pass','id' => $id));
	$buttonEdit   				= Helper::cmsButtonEdit($linkEdit ,'');
	$buttonDelete 				= Helper::cmsButtonDelete($linkDelete,'');
	$buttonChangePassword		= Helper::cmsButton($linkChangePass, '', 'fas fa-key', 'change-pass', '');
	//
	$xhtml = '
			<tr>
				<td><span class="custom-checkbox"><input type="checkbox" id="checkbox1" name="cid[]" value="' . $id . '"></span></td>
				<td style ="text-align: center;">' . $id . '</td>
				<td style ="text-align: center;">' . $username . '</td>
				<td style ="text-align: center;">' . $email . '</td>
				<td style ="text-align: center;">' . $fullname . '</td>
				' . Helper::cmsStatus($status, URL::createLink($lblModule, $lblController,  'changeStatus', array('id' => $id, 'status' => $status)), $id) . '
				<td style ="text-align: center;">' . $ordering . '</td>
				<td style ="text-align: center;">' . $group_id . '</td>
				<td>'. $buttonChangePassword .$buttonEdit . $buttonDelete . '</td>
			</tr> ';
	echo $xhtml;
			// <td style ="text-align: center;">' . $created . '  </br>' . $created_by . '</td>
			// <td style ="text-align: center;">' . $modified . ' </br>' . $modified_by . '</td>
			// <td style ="text-align: center;">' . $register_ip.'</td>
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