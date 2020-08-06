<?php   
        // PARAMS
        $lblModule        =  $this->arrParam['module'];
        $lblController    =  $this->arrParam['controller'];

        $lblId            = isset($this->arrParam['id']) ? $this->arrParam['id'] : '';     
        $lblType          = isset($this->arrParam['type']) ? $this->arrParam['type'] : '';     
        // VALIDATE 
        $dataForm         = isset($this->arrParam['form'])   ? $this->arrParam['form'] : '' ;
        $dataChange       = isset($this->arrParam['change']) ? $this->arrParam['change'] : '' ;

        $id               = isset($dataForm['id'] )                ? $this->arrParam['form']['id'] : '' ;
        $valueUsername    = isset($dataForm['username'] )          ? $dataForm['username'] : '' ;   
        $valuePassword    = isset($dataForm['password'] )          ? $dataForm['password'] : '' ;   
        $valueFullname    = isset($dataForm['fullname'] )          ? $dataForm['fullname'] : '' ;   
        $valueEmail       = isset($dataForm['email'] )             ? $dataForm['email'] : '' ;   
        $valueStatus      = isset($dataForm['status'] )            ? $dataForm['status'] : '' ;   
        $valueOrdering    = isset($dataForm['ordering'] )          ? $dataForm['ordering'] : '' ;   
        $valueGroup_id    = isset($dataForm['group_id'] )          ? $dataForm['group_id'] : '' ; 

        $valueOldPassword =  isset($dataChange['old-password'])    ? $dataChange['old-password'] : '' ;    
        $valueNewPassword =  isset($dataChange['new-password'])    ? $dataChange['new-password'] : '' ;    
        $valueRepassword  =  isset($dataChange['re-password'])     ? $dataChange['re-password'] : '' ;    
        //INPUT CRUD
        $buttonForm       = Form::formButton($lblModule, $lblController) ; // SAVE - SAVE NEW - SAVE CLOSE - CACEL
       // INPUT VALUE           
        $groupidHidden    =  HelperAdmin::cmsFormInputHidden('id' ,$id);
        $token            =  HelperAdmin::cmsFormInputHidden('token','199');
        $inputUsername    =  HelperAdmin::cmsFormInputText('username' ,$valueUsername);
        $inputPassword    =  HelperAdmin::cmsFormInputPassword('password',$valuePassword);
        $inputFullname    =  HelperAdmin::cmsFormInputText('fullname' ,$valueFullname);
        $inputEmail       =  HelperAdmin::cmsFormInputText('email'   ,$valueEmail);
        $inputOrdering    =  HelperAdmin::cmsFormInputText('ordering' ,$valueOrdering);
        $inputGroup_id    =  HelperAdmin::cmsFormInputText('group_id' ,$valueGroup_id);
        //ROW
        $rowUsername            = HelperAdmin::cmsRowInput('Username', $inputUsername);
        $rowPassword            = HelperAdmin::cmsRowInput('Password', $inputPassword );
        $rowFullname            = HelperAdmin::cmsRowInput('Fullname', $inputFullname );
        $rowEmail               = HelperAdmin::cmsRowInput('Email',    $inputEmail );
        $rowslbStatus           = HelperAdmin::cmsSelectboxForm('status','Status',znv_define_status,$valueStatus) ;
        $rowOrdering            = HelperAdmin::cmsRowInput('Ordering',    $inputOrdering );
        $rowslbGroupId          = HelperAdmin::cmsSelectboxForm('group_id','Group',$this->selectBoxGroup,$valueGroup_id) ;

        // INPUT CHANGEPASSWORD
        // SHOW FORM 
        $csmInputOldPassword       = HelperAdmin::cmsInputChangePassword('Old Password','old-password','Enter Old Password') ;
        $csmInputNewPassword       = HelperAdmin::cmsInputChangePassword('New Password','new-password','Enter New Password') ;
        $csmInputRePassword        = HelperAdmin::cmsInputChangePassword('Re  Password','re-password' ,'Enter Re Password') ;
        $csmInputIdHidden          = HelperAdmin::cmsInput('hidden','hidden','change[id]' ,'' ,$lblId) ;

        $formChangePassword = $csmInputOldPassword . $csmInputNewPassword . $csmInputRePassword . $csmInputIdHidden   ;

        if(!empty($lblId)){
                $content = $rowUsername . $rowFullname . $rowEmail . $rowslbStatus . $rowOrdering  . $rowslbGroupId . $groupidHidden . $token  ; 
        }
        else{       
                $content = $rowUsername .$rowPassword . $rowFullname . $rowEmail . $rowslbStatus . $rowOrdering  . $rowslbGroupId . $groupidHidden. $token  ;         
        }     
        echo HelperAdmin::notifyMessege('messege') ;                         // In thông báo
        echo $errors =  isset($this->errors) ? $this->errors : ''  ;    // In lỗi
         // Kiểm tra tiêu đề
        $title = ucfirst($lblController ) . ' ' ;
        $title = !empty($id > 0)  ? ''.$title.' Edit' : ''.$title.'Add' ; 
        // CHANGE PASSS
        $linkChangePassword     = URL::createLink($lblModule, $lblController, 'form',array('id'=>$id));
        $templateChangePassword = Form::formChangePassword($linkChangePassword,$formChangePassword ) ; 

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

  
      

