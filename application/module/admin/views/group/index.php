<?php 
	require_once 'toolbar/index.php' ;
	echo	Helper::notifyMessege('messege') ;
?>
<div class="col-md-">
	<div class="card">
		<div class="card-header">
			<div class="row">
				<div class="col-sm-4"><?php echo $btnFillter; ?> </div>
				<div class="col-sm-5"><?php echo $formSearch; ?> </div>
				<div class="col-sm-3"><?php echo $btnCRUD; ?> </div>
			</div>
		</div>
		<div class="card-body">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th style="width: 5%">
							<span class="custom-checkbox"><input type="checkbox" id="selectAll"></span>
						</th>
						<th style="width: 5%">Id</th>
						<th style="width: 15%">Name</th>
						<th style="width: 15%">Group ACP</th>
						<th style="width: 15%">Status</th>
						<th style="width: 15">Ordering</th>
						<th style="width: 15%">Created</th>
						<th style="width: 10%">Modified</th>
						<th style="width: 20%">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($this->listItems as $key => $value) {
						$id 			= $value['id'];
						// $name 			= $value['name'];
						$name           = ($lblFilterSearch != null) ? preg_replace("/\p{L}*?" . preg_quote($lblFilterSearch) . "\p{L}*/ui", '<b style="background-color: pink;">\\0</b>', $value['name']) : $value['name'];
						$ordering		= $value['ordering'];
						$group_acp 		= $value['group_acp'];
						$status 		= $value['status'];
						$created 		= $value['created'];
						$created_by		= $value['created_by'];
						$modified 		= $value['modified'];
						$modified_by 	= $value['modified_by'];
						$privilege_id 	= $value['privilege_id'];
						$picture		= $value['picture'];

						$linkEdit     = URL::createLink('admin', 'group', 'form', array('id' => $id));
						$linkDelete   = URL::createLink('admin', 'group', 'delete', array('id' => $id));
						$buttonEdit   = Helper::cmsButton($linkEdit,'btn btn-warning btn-sm', 'fa fa-edit', 'edit', 'Edit',);
						$buttonDelete = Helper::cmsButton($linkDelete,'btn btn-danger btn-sm btn-delete', 'fa fa-trash', 'delete', 'Delete');
						$xhtml = '	
							<tr>
								<td><span class="custom-checkbox"><input type="checkbox" id="checkbox1" name="cid[]" value="' . $id . '"></span></td>
								<td>' . $id . '</td>
								<td>' . $name . '</td>
								' . Helper::cmsGroupAcp($group_acp, URL::createLink('admin', 'group', 'changeGroupAcp', array('id' => $id, 'group_acp' => $group_acp)), $id) . '
								' . Helper::cmsStatus($status, URL::createLink('admin', 'group', 'changeStatus', array('id' => $id, 'status' => $status)), $id) . '
								<td>' . $ordering . '</td>
								<td>' . $created . '  </br>' . $created_by . '</td>
								<td>' . $modified . ' </br>' . $modified_by . '</td>
								<td>'.$buttonEdit . $buttonDelete.'</td>
							</tr> ';
						echo $xhtml;
					}
					?>
				</tbody>
			</table>
					<div>
						<input type="hidden" name="filter_page" value="1">
						<input type="hidden" name="form['token']" value="14323">
					</div>
		</div>
		<div class="row">
			<?php
			$link = URL::createLink($this->arrParam['module'], $this->arrParam['controller'], 'index',array('status' => $lblStatus,'filter_search'=> $lblFilterSearch));
			echo $this->pagination->showPagination($link);
			?>
		</div>
	</div>
</div>