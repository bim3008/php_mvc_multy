<?php
        $dataForm = $this->arrParam['form'] ;
        $linkSave   = URL::createLink('admin', 'group', 'form',array('type'=>'save'));
        $btnSave    = Helper::cmsButton($linkSave, 'btn btn-success ', '', 'save', 'Save','submit');
        // SAVE NEW
        $linkSaveNew    = URL::createLink('admin', 'group', 'form',array('type'=>'save-new'));
        $btnSaveNew     = Helper::cmsButton($linkSaveNew, 'btn btn-success ', '', 'savenew', 'Save & New','submit');
        // SAVE LOSE
        $linkSaveClose  = URL::createLink('admin', 'group', 'form',array('type'=>'save-close'));
        $btnSaveClose   = Helper::cmsButton($linkSaveClose, 'btn btn-danger ', '', 'inac', 'Save & Close','submit');
        //CANCEL
        $linkCancel     = URL::createLink('admin', 'group', 'index');
        $btnCancel      = Helper::cmsButton($linkCancel, 'btn btn-info', '', 'cancel', 'Cancel');

        $stringBtn = $btnSave . $btnSaveNew . $btnSaveClose . $btnCancel;
        // EDIT
        //Input
        $groupName          =  Helper::cmsInput('text', 'name', 'form[name]',  'form-control',$dataForm['name']);
        $groupOrdering      =  Helper::cmsInput('text', 'ordering', 'form[ordering]' ,  'form-control', $dataForm['ordering']);
        $groupid            =  Helper::cmsInput('hidden', 'id', 'form[id]',  'form-control',$dataForm['id']);
        // Row
        $rowGroup           = Helper::cmsRowInput('name', $groupName);
        $rowOrdering        = Helper::cmsRowInput('ordering', $groupOrdering );
        $rowSelectStatus    = Helper::cmsSelectboxForm('form[status]','Status','form-control custom-select',array('default'=>'Select status','0'=>'Active','1'=>'Inactive'),$dataForm['status']) ;
        $rowSelectGroupAcp  = Helper::cmsSelectboxForm('form[group_acp]','Group_ACP','form-control custom-select',array('default'=>'Select group','0'=>'Yes','1'=>'No'),$dataForm['group_acp']) ;
        $content = $rowGroup .$rowSelectStatus . $rowSelectGroupAcp . $rowOrdering .$groupid ;
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
<?php 
         echo   Form::Content('Group Add',$content) ;
         echo   Form::actionMenu($stringBtn) ;
?>
</form>

