<?php require_once 'toolbar/index.php' ?>
<?php require_once 'submenu/index.php' ?>
<tbody>
  
    <div class="card-body">
        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="dataTables_length" id="example1_length">
                        <?php echo $stringFillter; ?>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div id="example1_filter" class="dataTables_filter">
                        <div style="display: flex ;" class="form-group">
                            <input type="hidden" name="search" value="<?php if (isset($this->arrParam['filter_search'])) {
                                                                            echo $this->arrParam['filter_search'];
                                                                        }  ?>">
                            <input type="text" class="form-control" id="filter_search" name="filter_search" value="<?php if (isset($this->arrParam['filter_search'])) {
                                                                                                                        echo $this->arrParam['filter_search'];
                                                                                                                    }  ?>" style="margin-left: 10px;">
                            <button type="submit" class="btn btn-default" name="formSearch" ">Search</button>
                            </div>
                    </div> 
                </div>
            <div style=" text-align : right" class="col-sm-12 col-md-4">
                                <div class="dataTables_length" id="example1_length">
                                    <?php echo $stringCRUD; ?>
                                </div>
                        </div>
                    </div>
                    <?php
                    foreach ((array) $this->listItems as $key => $value) {
                        $id             = $value['id'];
                        $ckb            = '<input type="checkbox" name="cid[]" value="' . $id . '">';
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
                        <?php
                        // GROUP - ACP
                        $buttonACP    = HTMLHelper::cmsGroupAcp($group_acp, URL::createLink('admin', 'group', 'changeAjaxACP', array('id' => $id, 'group_acp' => $group_acp)), $id);
                        // STATUS
                        $buttonStatus = HTMLHelper::cmsStatus($status, URL::createLink('admin', 'group', 'changeStatus', array('id' => $id, 'status'    => $status)), $id);
                        // EDIT
                        $linkEdit     = URL::createLink('admin', 'group', 'form', array('id' => $id));
                        $linkDelete   = URL::createLink('admin', 'group', 'delete', array('id' => $id));
                        //DELETE
                        $buttonEdit   = HTMLHelper::cmsButton($linkEdit, 'btn btn-warning btn-sm', 'fa fa-edit', 'edit', 'Edit');
                        $buttonDelete = HTMLHelper::cmsButton($linkDelete, 'btn btn-danger btn-sm btn-delete', 'fa fa-trash', 'delete', 'Delete', 'submitDelete');
                        $xhtm = '
                        <tr role="row" class="odd">
                            <td>' . $ckb . '</td>
                            <td>' . $id . '</td>           
                            <td>' . $name . '</td>
                            ' . $buttonACP . '' . $buttonStatus . '
                            <td><input type="text" class="form"  name="order['.$id.']"value="'.$ordering.'"></td>
                            <td colspan="2">' . $created . ' </br> ' . $created_by . ' </td>
                            <td colspan="2">' . $modified . '</br> ' . $modified_by . '</td>
                            <td colspan="2">
                            ' . $buttonEdit . ' ' . $buttonDelete . '          
                            </td>
                        </tr> ';
                        echo $xhtm;
                        ?>
                    <?php
                    }
                    ?>
</tbody>
</table>
                    <div>
                        <input type="hidden" name="filter_page" value="1">
                        <input type="hidden" name="" value="">
                    </div>
</form>
</div>
<?php echo $this->pagination->showPanigation(); ?>