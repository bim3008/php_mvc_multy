<?php
        // Add
        $linkAdd  = URL::createLink('admin', 'group', 'form',array('param' => 'add')) ;
        $btnAdd   = HTMLHelper::cmsButton($linkAdd,'btn btn-success ', 'add' , 'Add' ) ;       
        // Edit
        $linkEdit = URL::createLink('admin', 'group', 'form',array('param' => 'edit')) ;
        $btnEdit  = HTMLHelper::cmsButton($linkEdit,'btn btn-danger ', 'edit' , 'Edit' ) ;

        $stringBtn = $btnAdd . $btnEdit ;
?>

<div style=" text-align : right" class="col-sm-12 col-md-4">
    <div class="dataTables_length" id="example1_length">
       <?php  echo $stringBtn ;?>
    </div>
</div>
</div>
