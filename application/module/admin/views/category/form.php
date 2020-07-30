<?php   
        // GET PARAMS CONTROLLER
        $lblId           = isset($this->arrParam['id']) ? $this->arrParam['id'] : null;
        $lblModule       = isset($this->arrParam['module']) ? $this->arrParam['module'] : 'admin';
        $lblController   = isset($this->arrParam['controller']) ? $this->arrParam['controller'] : 'category';
        // GET VALUE
        $dataForm        =  isset($this->arrParam['form'])  ? $this->arrParam['form'] : '';

        $valueId         =  isset( $dataForm['id'] )        ?  $dataForm['id'] : '' ;   
        $valueName       =  isset( $dataForm['name'] )      ?  $dataForm['name'] : '' ;   
        $valueStatus     =  isset( $dataForm['status'] )    ?  $dataForm['status'] : '' ;   
        $valueOrdering   =  isset( $dataForm['ordering'] )  ?  $dataForm['ordering'] : '' ;   
        $valuePicture    =  isset( $dataForm['picture'])    ?  $dataForm['picture'] : '' ;  
        if(is_array($valuePicture)){
                $valuePicture = '' ;
        }
        // CREATE BUTTON
        // SAVE
        $linkSave        = URL::createLink($lblModule, $lblController, 'form',array('id'=>$lblId,'type'=>'save'));
        $btnSave         = Helper::cmsButton($linkSave, 'btn btn-success ', '', 'save', 'Save','submit');
        // SAVE NEW
        $linkSaveNew     = URL::createLink($lblModule, $lblController, 'form',array('type'=>'save-new'));
        $btnSaveNew      = Helper::cmsButton($linkSaveNew, 'btn btn-success ', '', 'savenew', 'Save & New','submit');
        // SAVE LOSE
        $linkSaveClose   = URL::createLink($lblModule, $lblController, 'form',array('type'=>'save-close'));
        $btnSaveClose    = Helper::cmsButton($linkSaveClose, 'btn btn-danger ', '', 'inac', 'Save & Close','submit');
        //CANCEL
        $linkCancel      = URL::createLink($lblModule, $lblController, 'index');
        $btnCancel       = Helper::cmsButton($linkCancel, 'btn btn-info', '', 'cancel', 'Cancel');
        $stringBtn       = $btnSave . $btnSaveNew . $btnSaveClose . $btnCancel;
        // CREATE INPUT
        $inputName           =  Helper::cmsFormInputText('name',$valueName);
        $inputOrdering       =  Helper::cmsFormInputText('ordering',$valueOrdering);
        $inputPicture        =  Helper::cmsInput( 'file', 'picture',  'picture','form-control',$valuePicture,'padding-top: 1px;padding-left: 1px;height: 34px');
        $inputCategoryId     =  Helper::cmsFormInputHidden('id',   $valueId );
        $inputPictureHidden  =  Helper::cmsFormInputHidden('picture_hidden', $valuePicture);
        
        $namePicture        = !empty($valuePicture) ? $valuePicture :  $dataForm['picture_hidden'] ;
        $linkImage          =  LINK_IMAGE_CATEGORY . $namePicture  ;                                 
        $image              =  Helper::linkImage($linkImage,'width:300')    ;
        // CREATE ROW
        $rowPictureHidden   = Helper::cmsRowInput('', $inputPictureHidden);
        $rowName            = Helper::cmsRowInput('name', $inputName);
        $rowPicture         = Helper::cmsRowInput('picture', $inputPicture);
        $rowOrdering        = Helper::cmsRowInput('ordering', $inputOrdering );
        $rowStatus          = Helper::cmsSelectboxForm('status', 'Status', array('default'=>'Select status','0'=>'Active','1'=>'Inactive'),$valueStatus) ;
        if(!empty($valueId)){
                $content = $rowName . $rowPicture . $image . $rowStatus . $rowOrdering . $inputCategoryId . $rowPictureHidden ;
        }
        else{
                $content = $rowName . $rowPicture . $rowStatus . $rowOrdering . $inputCategoryId ;
        }
        echo Helper::notifyMessege('messege') ;   
        $errors =  isset($this->errors) ? $this->errors : ''  ;  
        echo  $errors = '<div>'.$errors.'</div>' ;       
?>    
<form  action="#" method="POST" id="addedit" name="addedit" enctype="multipart/form-data">    
        <?php 
                $title = isset($this->arrParam['id']) ? 'Category Edit' : 'Category Add' ; 
                echo  Form::formContent($title,$content,$stringBtn) ;
        ?>
</form>

