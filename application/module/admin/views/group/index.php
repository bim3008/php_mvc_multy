<?php
foreach ($this->countItems as $value) {
    $total = $value['total'];
}
?>
<?php require_once 'filter/index.php' ?>
<?php require_once 'search/index.php' ?>
<?php require_once 'crud/index.php' ?>
<?php require_once 'submenu/index.php' ?>
<tbody>
<?php
    foreach( (array)$this->listItems as $key => $value) {
        $id             = $value['id'];
		$ckb		    = '<input type="checkbox" name="cid[]" value="'.$id.'">';
        $name           = $value['name'];
        $group_acp      = $value['group_acp'];
        $created        = $value['created'];
        $created_by     = $value['created_by'];
        $modified       = $value['modified'];
        $modified_by    = $value['modified_by'];
        $status         = $value['status'];
        $ordering       = $value['ordering'];
        $privilege_id   = $value['privilege_id'];
        $picture        = $value['picture'];
    ?>
        <tr role="row" class="odd">
            <td><?php echo $ckb ;?></td>
            <td class="sorting_1"><?php echo $id; ?></td>           
            <td><?php echo $name ?></td>
            <?php echo HTMLHelper::cmsGroupAcp($group_acp, URL::createLink('admin','group','changeAjaxACP', array('id'=> $id , 'group_acp' => $group_acp )), $id) ?>
            <?php echo HTMLHelper::cmsStatus(  $status   , URL::createLink('admin','group','changeStatus' , array('id'=> $id , 'status'    =>   $status )), $id ) ?>
            <td><?php echo $ordering; ?></td>
            <td colspan="2"><?php echo $created . '</br>' . $created_by; ?></td>
            <td colspan="2"><?php echo $modified . '</br>' . $modified_by; ?></td>
            <td colspan="2">
            <?php
                echo  HTMLHelper::showAction('#', 'btn btn-warning btn-sm', 'fa fa-edit', 'Edit');
                echo  HTMLHelper::showAction('#', 'btn btn-danger btn-sm', 'fa fa-trash', 'Delete');
            ?>
            </td>
        </tr>
    <?php
    }
?>
<?php require_once 'pagination/index.php'; ?>
