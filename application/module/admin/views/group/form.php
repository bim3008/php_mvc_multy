<?php
        $dataForm = $this->arrParam['form'] ;
        $linkSave   = URL::createLink('admin', 'group', 'form',array('type'=>'save'));
        $btnSave    = HTMLHelper::cmsButton($linkSave, 'btn btn-success ', '', 'savenew', 'Save','submit');
        // SAVE NEW
        $linkSaveNew    = URL::createLink('admin', 'group', 'form',array('type'=>'save-new'));
        $btnSaveNew     = HTMLHelper::cmsButton($linkSaveNew, 'btn btn-success ', '', 'savenew', 'Save & New','submit');
        // SAVE LOSE
        $linkSaveClose  = URL::createLink('admin', 'group', 'form',array('type'=>'save-close'));
        $btnSaveClose   = HTMLHelper::cmsButton($linkSaveClose, 'btn btn-danger ', '', 'inac', 'Save & Close','submit');
        //CANCEL
        $linkCancel     = URL::createLink('admin', 'group', 'index');
        $btnCancel      = HTMLHelper::cmsButton($linkCancel, 'btn btn-info', '', 'cancel', 'Cancel');

        $stringBtn = $btnSave . $btnSaveNew . $btnSaveClose . $btnCancel;
        // EDIT

        // $linkEdit = URL::createLink('admin', 'group', 'form',array('id' => $id'type'=>'edit'));
        // $btnEdit  = HTMLHelper::cmsButton($linkEdit, 'btn btn-danger ', '', 'edit', 'Edit','submit');

        // $stringEdit = $btnEdit . $btnCancel ;
        //Input
        $groupName          =  HTMLHelper::cmsInput('text', 'name', 'form[name]',  'form-control',$dataForm['name']);
        $groupOrdering      =  HTMLHelper::cmsInput('text', 'ordering', 'form[ordering]' ,  'form-control', $dataForm['ordering']);
        $groupid            =  HTMLHelper::cmsInput('hidden', 'id', 'form[id]',  'form-control',$dataForm['id']);
        // Row
        $rowGroup           = HTMLHelper::cmsRowInput('name', $groupName);
        $rowOrdering        = HTMLHelper::cmsRowInput('ordering', $groupOrdering );
        $rowSelectStatus    = HTMLHelper::cmsSelectboxForm('form[status]','Status','form-control custom-select',array('default'=>'Select status','0'=>'Active','1'=>'Inactive'),$dataForm['status']) ;
        $rowSelectGroupAcp  = HTMLHelper::cmsSelectboxForm('form[group_acp]','Group_ACP','form-control custom-select',array('default'=>'Select group','0'=>'Yes','1'=>'No'),$dataForm['group_acp']) ;
?> 
<?php
         $messge = Session::get('messge') ;
         Session::delete('messge');
         if(!empty($messge))
         { 
             echo '<div class="alert alert-success "><span class="fas fa-check"></span> '.$messge.'</div>';
         }
        if(!empty($this->errors))
        {
            echo '<div class="alert alert-success "><span></span> '.$this->errors.'</div>';  
        } 

?>    
<form  action="#" method="POST" id="addedit" name="addedit">
     
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Group Add</h3>
                </div>
                <div class="card-body">
                    <?php echo $rowGroup .$rowSelectStatus . $rowSelectGroupAcp . $rowOrdering .$groupid ?>
                </div>
                <div>
                        <input type="hidden" name="form[token]" value="123"> 
                </div>
            </div>
        </div>
</section>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <ol class="breadcrumb float-sm-right">
                    <?php  echo '<p>' . $stringBtn . '</p> '; ?>
                </ol>
            </div>
        </div>
    </div>
</section>
</form>