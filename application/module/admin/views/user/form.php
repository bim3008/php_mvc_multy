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
        $valueOldPassword            =  isset($this->arrParam['change']['old-password'])       ? $this->arrParam['change']['old-password'] : '' ;    
        $valueNewPassword            =  isset($this->arrParam['change']['new-password'])       ? $this->arrParam['change']['new-password'] : '' ;    
        $valueRepassword             =  isset($this->arrParam['change']['re-password'])        ? $this->arrParam['change']['re-password'] : '' ;    
        $valueUsername               =  isset($this->arrParam['form']['username'] )          ? $this->arrParam['form']['username'] : '' ;   
        $valuePassword               =  isset($this->arrParam['form']['password'] )          ? $this->arrParam['form']['password'] : '' ;   
        $valueFullname               =  isset($this->arrParam['form']['fullname'] )          ? $this->arrParam['form']['fullname'] : '' ;   
        $valueEmail                  =  isset($this->arrParam['form']['email'] )             ? $this->arrParam['form']['email'] : '' ;   
        $valueStatus                 =  isset($this->arrParam['form']['status'] )            ? $this->arrParam['form']['status'] : '' ;   
        $valueOrdering               =  isset($this->arrParam['form']['ordering'] )          ? $this->arrParam['form']['ordering'] : '' ;   
        $valueGroup_id               =  isset($this->arrParam['form']['group_id'] )          ? $this->arrParam['form']['group_id'] : '' ; 

        //SHOW LINK    
        $linkSave      = URL::createLink($lblModule, $lblController, 'form',array('type'=>'save'));
        $linkSaveNew   = URL::createLink($lblModule, $lblController, 'form',array('type'=>'save-new'));
        $linkSaveClose = URL::createLink($lblModule, $lblController, 'form',array('type'=>'save-close'));
        $linkCancel     = URL::createLink($lblModule, $lblController, 'index');

        //INPUT CRUD
        $btnSave        = Helper::cmsButton($linkSave, 'btn btn-success ', '', 'save', 'Save','submit');
        $btnSaveNew     = Helper::cmsButton($linkSaveNew, 'btn btn-success ', '', 'savenew', 'Save & New','submit');
        $btnSaveClose   = Helper::cmsButton($linkSaveClose, 'btn btn-danger ', '', 'inac', 'Save & Close','submit');      
        $btnCancel      = Helper::cmsButton($linkCancel, 'btn btn-info', '', 'cancel', 'Cancel');

        $stringBtn = $btnSave . $btnSaveNew . $btnSaveClose . $btnCancel;
       // INPUT VALUE           
        $groupid             =  Helper::cmsInput('hidden', '     id'      , 'form[id]'         ,'form-control',$id);
        $token               =  Helper::cmsInput('hidden',      'token'   , 'form[token]'      ,'form-control', '199');
        $btnUsername         =  Helper::cmsInput('text',      'username'  , 'form[username]'   , 'form-control',$valueUsername);
        $btnPassword         =  Helper::cmsInput('password',  'password'  , 'form[password]'   , 'form-control',$valuePassword);
        $btnFullname         =  Helper::cmsInput('text',      'fullname'  , 'form[fullname]'   , 'form-control',$valueFullname);
        $btnEmail            =  Helper::cmsInput('text',      'email'     , 'form[email]'      , 'form-control',$valueEmail);
        $btnOrdering         =  Helper::cmsInput('text',      'ordering'  , 'form[ordering]'   , 'form-control',$valueOrdering);
        $btnGroup_id         =  Helper::cmsInput('text',      'group_id'  , 'form[group_id]'   , 'form-control',$valueGroup_id);
        //ROW
        $rowUsername            = Helper::cmsRowInput('Username', $btnUsername);
        $rowPassword            = Helper::cmsRowInput('Password', $btnPassword );
        $rowFullname            = Helper::cmsRowInput('Fullname', $btnFullname );
        $rowEmail               = Helper::cmsRowInput('Email',    $btnEmail );
        $rowslbStatus           = Helper::cmsSelectboxForm('form[status]','Status','form-control custom-select',array('default'=>'Select status','0'=>'Active','1'=>'Inactive'),$valueStatus) ;
        $rowOrdering            = Helper::cmsRowInput('Ordering',    $btnOrdering );
        $rowslbGroupId          = Helper::cmsSelectboxForm('form[group_id]','Group','form-control custom-select',$this->selectBoxGroup,$valueGroup_id) ;

        // INPUT CHANGEPASSWORD
        // SHOW FORM 

        $csmInputOldPassword       = Helper::cmsInputChangePassword('Old Password','text','change[old-password]','Enter Old Password','') ;
        $csmInputNewPassword       = Helper::cmsInputChangePassword('New Password','text','change[new-password]','Enter New Password','') ;
        $csmInputRePassword        = Helper::cmsInputChangePassword('Re  Password','text','change[re-password]' ,'Enter Re Password' ,'') ;
        $csmInputIdHidden          = Helper::cmsInputChangePassword('','hidden','change[id]' ,'Enter Re Password' ,$lblId) ;

        $buttonInputChangePassword = $csmInputOldPassword . $csmInputNewPassword . $csmInputRePassword . $csmInputIdHidden   ;

        if(!empty($lblId)){
                $content = $rowUsername . $rowFullname . $rowEmail . $rowslbStatus . $rowOrdering  . $rowslbGroupId . $groupid . $token  ; 
        }
        else{       
                $content = $rowUsername .$rowPassword . $rowFullname . $rowEmail . $rowslbStatus . $rowOrdering  . $rowslbGroupId . $groupid ;         
        }     
        $errors = isset($this->errors) ? $this->errors : ''  ;  
        echo  $errors = '<div  >'.$errors.'</div>' ;       
        Helper::notifyMessege('messege') ;   
        $linkChangePassword     = URL::createLink($lblModule, $lblController, 'form',array('id'=>$id));
        $templateChangePassword = Form::formChangePassword($linkChangePassword,$buttonInputChangePassword ) ; 
        $title = isset($this->arrParam['id'])  ? "User Edit" : "User Add"   ; 
        $templateUser           = Form::Content($title,$content,$stringBtn) ;
    
        if(empty($lblId)){      
                echo  $templateUser ;
        }        
        else{               
                echo   $templateUser .=  $templateChangePassword ;                
        }        
?>

  
      

