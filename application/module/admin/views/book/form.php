<?php   
        // GET PARAMS CONTROLLE//

        $lblModule       =  $this->arrParam['module'];
        $lblController   =  $this->arrParam['controller'];
        
        $lblStatus       = isset($this->arrParam['status']) ? $this->arrParam['status'] : '';    
        $lblFilterSearch = isset($this->arrParam['filter_search']) ? $this->arrParam['filter_search'] : '';
        
        // GET VALUE
        $dataForm             =  isset($this->arrParam['form'])  ? $this->arrParam['form'] : '';
        $id                   =  isset($dataForm['id'] )                ? $dataForm['id'] : '' ;   
        $valueName            =  isset($dataForm['name'] )              ? $dataForm ['name'] : '' ;   
        $valueDescription     =  isset($dataForm ['description'])       ? $dataForm ['description'] : '' ;   
        $valuePrice           =  isset($dataForm ['price'])             ? $dataForm ['price'] : '' ;   
        $valueSpecial         =  isset($dataForm ['special'])           ? $dataForm ['special'] : '' ;   
        $valueSaleOff         =  isset($dataForm ['sale_off'])          ? $dataForm ['sale_off'] : '' ;   
        $valueStatus          =  isset($dataForm ['status'] )           ? $dataForm ['status'] : '' ;   
        $valueOrdering        =  isset($dataForm ['ordering'] )         ? $dataForm ['ordering'] : '' ;   
        $valuePicture         =  isset($dataForm ['picture'])           ? $dataForm ['picture'] : '' ;      
        $valueCategoryId      =  isset($dataForm ['category_id'] )      ? $dataForm ['category_id'] : '' ; 
        $valuePictureHidden   =  isset( $dataForm['picture_hidden'])  ?  $dataForm['picture_hidden'] : '' ;    
        // Chỉ lấy hình ảnh ở dạng chuỗi
        if(is_array($valuePicture)){
                $valuePicture = '' ;
        }
        // CREATE BUTTON CRUD
        $buttonForm         = Form::formButton($lblModule, $lblController) ;
        // CREATE INPUT
        $inputDescription    =  HTMLAdmin::inputDescription($valueDescription);
        $inputName           =  HelperAdmin::cmsFormInputText( 'name',$valueName);
        $inputPrice          =  HelperAdmin::cmsFormInputText( 'price',$valuePrice);
        $inputSaleOff        =  HelperAdmin::cmsFormInputText( 'sale_off',$valueSaleOff);
        $inputOrdering       =  HelperAdmin::cmsFormInputText( 'ordering',$valueOrdering);
        $inputPicture        =  HelperAdmin::cmsFormInputFile( 'picture',$valuePicture,'padding-top: 1px;padding-left: 1px;height: 34px');
        $inputid             =  HelperAdmin::cmsFormInputHidden('id',$id );
        $pictureHidden       =  HelperAdmin::cmsFormInputHidden('picture_hidden',$valuePicture);
        // Giữ hình ảnh khi tồn tại validate(lỗi khi edit)
        $namePicture        = !empty($valuePicture) ? $valuePicture : $valuePictureHidden ;
        $linkImage          =  LINK_IMAGE_BOOK . $namePicture  ;                                 
        $image              =  HelperAdmin::linkImage($linkImage,'width:300')    ;
        //CREATE ROW
        $rowPictureHidden   = HelperAdmin::cmsRowInput('', $pictureHidden);
        $rowName            = HelperAdmin::cmsRowInput('name', $inputName);
        $rowDescription     = HelperAdmin::cmsRowInput('description', $inputDescription);
        $rowPrice           = HelperAdmin::cmsRowInput('price',   $inputPrice);
        $rowSaleOff         = HelperAdmin::cmsRowInput('sale off', $inputSaleOff);
        $rowPicture         = HelperAdmin::cmsRowInput('picture', $inputPicture);
        $rowOrdering        = HelperAdmin::cmsRowInput('ordering', $inputOrdering );
        $rowSelectStatus    = HelperAdmin::cmsSelectboxForm('status',  'Status'  , znv_define_status,$valueStatus) ;
        $rowSelectSpecial   = HelperAdmin::cmsSelectboxForm('special', 'Special' , znv_define_special,$valueSpecial) ;
        $rowslbCategoryId   = HelperAdmin::cmsSelectboxForm('category_id','Category', $this->selectBoxCategory,$valueCategoryId) ;
        // FORM ADD AND EDIT
        if($id > 0){$content = $rowName . $rowDescription . $rowPicture . $image  . $rowPrice . $rowSaleOff .  $rowSelectSpecial . $rowSelectStatus . $rowslbCategoryId . $rowOrdering . $inputid . $rowPictureHidden;
        }
        else       {$content = $rowName . $rowDescription . $rowPicture . $rowPrice . $rowSaleOff .  $rowSelectSpecial . $rowSelectStatus . $rowslbCategoryId . $rowOrdering.$rowPictureHidden ;
        }
        echo HelperAdmin::notifyMessege('messege') ;        // In ra thông báo
        $errors =  isset($this->errors) ? $this->errors : ''  ;  
        echo  $errors = '<div  >'.$errors.'</div>' ;   // In ra lỗi

        // Kiểm tra tiêu đề
        $title            = ucfirst($lblController ) . ' ' ;
        $title = !empty($id > 0)  ? ''.$title.' Edit' : ''.$title.'Add' ; 
?>  
       
<form  action="#" method="POST" id="addedit" name="addedit" enctype="multipart/form-data">    
        <?php 
                echo  Form::formContent($title,$content,$buttonForm) ;
        ?>
</form>

