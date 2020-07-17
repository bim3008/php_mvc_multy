<?php   
        $lblModule       = isset($this->arrParam['module']) ? $this->arrParam['module'] : 'admin';
        $lblController   = isset($this->arrParam['controller']) ? $this->arrParam['controller'] : 'group';
        $lblAction       = isset($this->arrParam['action']) ? $this->arrParam['action'] : 'index';
        $lblStatus       = isset($this->arrParam['status']) ? $this->arrParam['status'] : '';    
        $lblFilterSearch = isset($this->arrParam['filter_search']) ? $this->arrParam['filter_search'] : '';

        
        $id                     =  isset($this->arrParam['form']['id'] )        ? $this->arrParam['form']['id'] : '' ;   
        $name                   =  isset($this->arrParam['form']['name'] )      ? $this->arrParam['form']['name'] : '' ;   
        $status                 =  isset($this->arrParam['form']['status'] )    ? $this->arrParam['form']['status'] : '' ;   
        $ordering               =  isset($this->arrParam['form']['ordering'] )  ? $this->arrParam['form']['ordering'] : '' ;   
        $group_acp              =  isset($this->arrParam['form']['group_acp'] ) ? $this->arrParam['form']['group_acp'] : '' ;          
        
        $linkSave   = URL::createLink($lblModule, $lblController, 'form',array('type'=>'save'));
        $btnSave    = Helper::cmsButton($linkSave, 'btn btn-success ', '', 'save', 'Save','submit');
        // SAVE NEW
        $linkSaveNew    = URL::createLink($lblModule, $lblController, 'form',array('type'=>'save-new'));
        $btnSaveNew     = Helper::cmsButton($linkSaveNew, 'btn btn-success ', '', 'savenew', 'Save & New','submit');
        // SAVE LOSE
        $linkSaveClose  = URL::createLink($lblModule, $lblController, 'form',array('type'=>'save-close'));
        $btnSaveClose   = Helper::cmsButton($linkSaveClose, 'btn btn-danger ', '', 'inac', 'Save & Close','submit');
        //CANCEL
        $linkCancel     = URL::createLink($lblModule, $lblController, 'index');
        $btnCancel      = Helper::cmsButton($linkCancel, 'btn btn-info', '', 'cancel', 'Cancel');

        $stringBtn = $btnSave . $btnSaveNew . $btnSaveClose . $btnCancel;
        // EDIT
        //Input
        $groupName          =  Helper::cmsInput(  'text', 'name',     'form[name]',       'form-control',$name);
        $groupOrdering      =  Helper::cmsInput(  'text', 'ordering', 'form[ordering]',  'form-control', $ordering);
        $groupid            =  Helper::cmsInput(  'hidden', 'id',       'form[id]',         'form-control',$id);
        // Row
        $rowGroup           = Helper::cmsRowInput('name', $groupName);
        $rowOrdering        = Helper::cmsRowInput('ordering', $groupOrdering );
        $rowSelectStatus    = Helper::cmsSelectboxForm('form[status]', 'Status',     'form-control custom-select', array('default'=>'Select status','0'=>'Active','1'=>'Inactive'),$status) ;
        $rowSelectGroupAcp  = Helper::cmsSelectboxForm('form[group_acp]','Group_ACP','form-control custom-select', array('default'=>'Select group','0'=>'No','1'=>'Yes')          ,$group_acp) ;
        $content = $rowGroup .$rowSelectStatus . $rowSelectGroupAcp . $rowOrdering .$groupid ;

        echo Helper::notifyMessege('messege') ;   
        $errors =  isset($this->errors) ? $this->errors : ''  ;  
        echo  $errors = '<div  >'.$errors.'</div>' ;       
?>  
       
<form  action="#" method="POST" id="addedit" name="addedit">    
        <?php 
                echo  Form::Content('Group Add',$content,$stringBtn) ;
        ?>
</form>

