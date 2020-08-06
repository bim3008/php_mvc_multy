<?php   
        // GET CONTROLLER
        $lblModule        =  $this->arrParam['module'];
        $lblController    =  $this->arrParam['controller'];
        $title            = ucfirst($lblController ) ;
        // GET VALUE
        $formData         =  isset($this->arrParam['form']) ? $this->arrParam['form'] : '';

        $id               =  isset($formData['id'] )        ? $formData['id'] : '' ;   
        $name             =  isset($formData['name'] )      ? $formData['name'] : '' ;   
        $status           =  isset($formData['status'] )    ? $formData['status'] : '' ;   
        $ordering         =  isset($formData['ordering'] )  ? $formData['ordering'] : '' ;   
        $group_acp        =  isset($formData['group_acp'] ) ? $formData['group_acp'] : '' ;          
        // CREATE BUTTON
        $buttonForm       = Form::formButton($lblModule, $lblController) ;  // SAVE - SAVE NEW - SAVE CLOSE - CANCEL
        // CREATE INPUT
        $inputName        =  HelperAdmin::cmsFormInputText('name',$name);
        $inputOrdering    =  HelperAdmin::cmsFormInputText('ordering',$ordering);
        $inputId          =  HelperAdmin::cmsFormInputHidden('id',$id);
        //CREATE ROW
        $rowGroup           = HelperAdmin::cmsRowInput('name', $inputName);
        $rowOrdering        = HelperAdmin::cmsRowInput('ordering', $inputOrdering );
        $rowSelectStatus    = HelperAdmin::cmsSelectboxForm('status',   'Status',znv_define_status,$status) ;
        $rowSelectGroupAcp  = HelperAdmin::cmsSelectboxForm('group_acp','Group_ACP',znv_define_group_acp,$group_acp) ;
        // CREATE FORM
        $content           = $rowGroup .$rowSelectStatus . $rowSelectGroupAcp . $rowOrdering .$inputId ;
        echo HelperAdmin::notifyMessege('messege') ;                       // In thông báo
        echo $errors =  isset($this->errors) ? $this->errors : ''  ;  // In lỗi
        // Kiểm tra tiêu đề
        $title = ucfirst($lblController ) . ' ' ;
        $title = !empty($id > 0)  ? ''.$title.' Edit' : ''.$title.'Add' ; 
?>  
       
<form  action="#" method="POST" id="addedit" name="addedit">    
        <?php 
                echo  Form::formContent($title,$content,$buttonForm ) ;
        ?>
</form>

