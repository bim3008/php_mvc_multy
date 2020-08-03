<?php   
        // PARAMS
        $lblModule              = isset($this->arrParam['module']) ? $this->arrParam['module'] : 'admin';
        $lblController          = isset($this->arrParam['controller']) ? $this->arrParam['controller'] : 'group';
        $lblAction              = isset($this->arrParam['action']) ? $this->arrParam['action'] : 'index';
        $lblStatus              = isset($this->arrParam['status']) ? $this->arrParam['status'] : '';     
        $lblFilterSearch        = isset($this->arrParam['filter_search']) ? $this->arrParam['filter_search'] : '';
        $lblId                  = isset($this->arrParam['id']) ? $this->arrParam['id'] : '';     
        $lblType                = isset($this->arrParam['type']) ? $this->arrParam['type'] : '';     
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
        //INPUT CRUD
        $buttonForm         = Form::formButton($lblModule, $lblController) ;
       // INPUT VALUE           
        $groupid             =  Helper::cmsFormInputHidden('id' ,$id);
        $token               =  Helper::cmsFormInputHidden('token','199');
        $inputUsername         =  Helper::cmsFormInputText('username' ,$valueUsername);
        $inputPassword         =  Helper::cmsFormInputPassword('password',$valuePassword);
        $inputFullname         =  Helper::cmsFormInputText('fullname' ,$valueFullname);
        $inputEmail            =  Helper::cmsFormInputText('email'   ,$valueEmail);
        $inputOrdering         =  Helper::cmsFormInputText('ordering' ,$valueOrdering);
        $inputGroup_id         =  Helper::cmsFormInputText('group_id' ,$valueGroup_id);
        //ROW
        $rowUsername            = Helper::cmsRowInput('Username', $inputUsername);
        $rowPassword            = Helper::cmsRowInput('Password', $inputPassword );
        $rowFullname            = Helper::cmsRowInput('Fullname', $inputFullname );
        $rowEmail               = Helper::cmsRowInput('Email',    $inputEmail );
        $rowslbStatus           = Helper::cmsSelectboxForm('status','Status',array('default'=>'Select status','0'=>'Active','1'=>'Inactive'),$valueStatus) ;
        $rowOrdering            = Helper::cmsRowInput('Ordering',    $inputOrdering );
        $rowslbGroupId          = Helper::cmsSelectboxForm('group_id','Group',$this->selectBoxGroup,$valueGroup_id) ;

        // INPUT CHANGEPASSWORD
        // SHOW FORM 
        $csmInputOldPassword       = Helper::cmsInputChangePassword('Old Password','old-password','Enter Old Password') ;
        $csmInputNewPassword       = Helper::cmsInputChangePassword('New Password','new-password','Enter New Password') ;
        $csmInputRePassword        = Helper::cmsInputChangePassword('Re  Password','re-password' ,'Enter Re Password') ;
        $csmInputIdHidden          = Helper::cmsInput('hidden','hidden','change[id]' ,'' ,$lblId) ;

        $buttonInputChangePassword = $csmInputOldPassword . $csmInputNewPassword . $csmInputRePassword . $csmInputIdHidden   ;

        if(!empty($lblId)){
                $content = $rowUsername . $rowFullname . $rowEmail . $rowslbStatus . $rowOrdering  . $rowslbGroupId . $groupid . $token  ; 
        }
        else{       
                $content = $rowUsername .$rowPassword . $rowFullname . $rowEmail . $rowslbStatus . $rowOrdering  . $rowslbGroupId . $groupid. $token  ;         
        }     
        $errors = isset($this->errors) ? $this->errors : ''  ;  
        echo  $errors = '<div  >'.$errors.'</div>' ;       
        Helper::notifyMessege('messege') ;   
        
        $linkChangePassword     = URL::createLink($lblModule, $lblController, 'form',array('id'=>$id));
        $templateChangePassword = Form::formChangePassword($linkChangePassword,$buttonInputChangePassword ) ; 
        $title = isset($this->arrParam['id'])  ? "User Edit" : "User Add"   ; 
        $templateUser           = Form::formContent($title,$content,$buttonForm) ;
        if(empty($lblId) && $lblType == null){      
                echo  $templateUser ;
        }   
        else if($lblType =='change-pass'){
                echo $templateChangePassword;
        }
        else{               
                echo   $templateUser ;                
        }        
?>

  
      

