<?php   
        // PARAMS
        $lblModule              = isset($this->arrParam['module']) ? $this->arrParam['module'] : 'admin';
        $lblController          = isset($this->arrParam['controller']) ? $this->arrParam['controller'] : 'group';
        $lblAction              = isset($this->arrParam['action']) ? $this->arrParam['action'] : 'index';
        $lblStatus              = isset($this->arrParam['status']) ? $this->arrParam['status'] : '';     
        $lblId                  = isset($this->arrParam['id']) ? $this->arrParam['id'] : '';     
        $lblFilterSearch        = isset($this->arrParam['filter_search']) ? $this->arrParam['filter_search'] : '';
        // VALIDATE
        $id                          =  isset($this->arrParam['form']['id'] )                ? $this->arrParam['form']['id'] : '' ;   
        $valueUsername               =  isset($this->arrParam['form']['username'] )          ? $this->arrParam['form']['username'] : '' ;   
        $valuePassword               =  isset($this->arrParam['form']['password'] )          ? $this->arrParam['form']['password'] : '' ;   
        $valueFullname               =  isset($this->arrParam['form']['fullname'] )          ? $this->arrParam['form']['fullname'] : '' ;   
        $valueEmail                  =  isset($this->arrParam['form']['email'] )             ? $this->arrParam['form']['email'] : '' ;   
        $valueStatus                 =  isset($this->arrParam['form']['status'] )            ? $this->arrParam['form']['status'] : '' ;   
        $valueOrdering               =  isset($this->arrParam['form']['ordering'] )          ? $this->arrParam['form']['ordering'] : '' ;   
        $valueGroup_id               =  isset($this->arrParam['form']['group_id'] )          ? $this->arrParam['form']['group_id'] : '' ; 
        
        // SAVE
        $linkSave       = URL::createLink($lblModule, $lblController, 'form',array('type'=>'save'));
        $btnSave        = Helper::cmsButton($linkSave, 'btn btn-success ', '', 'save', 'Save','submit');
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

        //IPPUT
        $groupid             =  Helper::cmsInput('hidden', 'id', 'form[id]',  'form-control',$id);
        $btnUsername         =  Helper::cmsInput('text',      'username'  , 'form[username]'   , 'form-control',$valueUsername);
        $btnPassword         =  Helper::cmsInput('password',  'password'  , 'form[password]'   , 'form-control',$valuePassword);
        $btnFullname         =  Helper::cmsInput('text',      'fullname'  , 'form[fullname]'   , 'form-control',$valueFullname);
        $btnEmail            =  Helper::cmsInput('text',      'email'     , 'form[email]'      , 'form-control',$valueEmail);
        $btnOrdering         =  Helper::cmsInput('text',      'ordering'  , 'form[ordering]'   , 'form-control',$valueOrdering);
        $btnGroup_id         =  Helper::cmsInput('text',      'group_id'  , 'form[group_id]'   , 'form-control',$valueGroup_id);
        // Row
        $rowUsername            = Helper::cmsRowInput('Username', $btnUsername);
        $rowPassword            = Helper::cmsRowInput('Password', $btnPassword );
        $rowFullname            = Helper::cmsRowInput('Fullname', $btnFullname );
        $rowEmail               = Helper::cmsRowInput('Email',    $btnEmail );
        $rowslbStatus           = Helper::cmsSelectboxForm('form[status]','Status','form-control custom-select',array('default'=>'Select status','0'=>'Active','1'=>'Inactive'),$valueStatus) ;
        $rowOrdering            = Helper::cmsRowInput('Ordering',    $btnOrdering );
        $rowslbGroupId          = Helper::cmsSelectboxForm('form[group_id]','Group','form-control custom-select',$this->selectBoxGroup,$valueGroup_id) ;

        $content = $rowUsername .$rowPassword . $rowFullname . $rowEmail . $rowslbStatus . $rowOrdering  . $rowslbGroupId . $groupid ; 
?>
<?php 
        echo Helper::notifyMessege('messege') ;   
        $errors =  isset($this->errors) ? $this->errors : ''  ;  
        echo  $errors = '<div  >'.$errors.'</div>' ;       
?>  
       
<form  action="#" method="POST" id="addedit" name="addedit">    
        <?php 
                echo   Form::Content('User Add',$content) ;
                echo   Form::actionMenu($stringBtn) ;
        ?>
</form>

