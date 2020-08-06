<?php   
        // GET PARAMS CONTROLLER

        $lblModule              =  $this->arrParam['module'];
        $lblController          =  $this->arrParam['controller'];

  
        // GET VALUE
        $dataForm               =  isset($this->arrParam['form'])       ? $this->arrParam['form'] : '';
        
        $valueId                =  isset( $dataForm['id'] )             ?  $dataForm['id'] : '' ;   
        $valueName              =  isset( $dataForm['name'] )           ?  $dataForm['name'] : '' ;   
        $valueStatus            =  isset( $dataForm['status'] )         ?  $dataForm['status'] : '' ;   
        $valueOrdering          =  isset( $dataForm['ordering'] )       ?  $dataForm['ordering'] : '' ;   
        $valuePicture           =  isset( $dataForm['picture'])         ?  $dataForm['picture'] : '' ;  
        $valuePictureHidden     =  isset( $dataForm['picture_hidden'])  ?  $dataForm['picture_hidden'] : '' ;  
        if(is_array($valuePicture)){
                $valuePicture   = '' ;
        }
        // CREATE BUTTON
        $buttonForm             = Form::formButton($lblModule, $lblController) ;
        // CREATE INPUT
        $inputName              =  HelperAdmin::cmsFormInputText('name',$valueName);
        $inputOrdering          =  HelperAdmin::cmsFormInputText('ordering',$valueOrdering);
        $inputPicture           =  HelperAdmin::cmsFormInputFile('picture',$valuePicture,'padding-top: 1px;padding-left: 1px;height: 34px');
        $inputCategoryId        =  HelperAdmin::cmsFormInputHidden('id',   $valueId );
        $inputPictureHidden     =  HelperAdmin::cmsFormInputHidden('picture_hidden', $valuePicture);
         // Giữ hình ảnh khi tồn tại validate(lỗi khi edit)
        $namePicture            = !empty($valuePicture) ? $valuePicture :  $valuePictureHidden ;
        $linkImage              =  LINK_IMAGE_CATEGORY . $namePicture  ;                                 
        $image                  =  HelperAdmin::linkImage($linkImage,'width:300')    ;
        // CREATE ROW
        $rowPictureHidden       = HelperAdmin::cmsRowInput('', $inputPictureHidden);
        $rowName                = HelperAdmin::cmsRowInput('name', $inputName);
        $rowPicture             = HelperAdmin::cmsRowInput('picture', $inputPicture);
        $rowOrdering            = HelperAdmin::cmsRowInput('ordering', $inputOrdering );
        $rowStatus              = HelperAdmin::cmsSelectboxForm('status', 'Status',znv_define_status,$valueStatus) ;
        // CONTENT NỘI DUNG CỦA FORM(INPUT)
        if(!empty($valueId)){
                $content        = $rowName . $rowPicture . $image . $rowStatus . $rowOrdering . $inputCategoryId . $rowPictureHidden ;
        }
        else{
                $content        = $rowName . $rowPicture . $rowStatus . $rowOrdering . $inputCategoryId ;
        }
        echo HelperAdmin::notifyMessege('messege') ;                         // In thông báo
        echo $errors =  isset($this->errors) ? $this->errors : ''  ;    // In lỗi
        // Kiểm tra tiêu đề
        $title                  = ucfirst($lblController ) . ' ' ;
        $title                  = !empty($valueId > 0)  ? ''.$title.' Edit' : ''.$title.'Add' ; 
       
?>    
<form  action="#" method="POST" id="addedit" name="addedit" enctype="multipart/form-data">    
        <?php 
                echo  Form::formContent($title,$content,$buttonForm) ;
        ?>
</form>

