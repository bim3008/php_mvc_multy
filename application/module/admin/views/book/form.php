<?php   
        // GET PARAMS CONTROLLE//
        $lblId                = isset($this->arrParam['id']) ? $this->arrParam['id'] : null;
        $lblModule            = isset($this->arrParam['module']) ? $this->arrParam['module'] : 'admin';
        $lblController        = isset($this->arrParam['controller']) ? $this->arrParam['controller'] : 'book';
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
        $inputDescription    =  HTML::inputDescription($valueDescription);
        $inputName           =  Helper::cmsFormInputText( 'name',$valueName);
        $inputPrice          =  Helper::cmsFormInputText( 'price',$valuePrice);
        $inputSaleOff        =  Helper::cmsFormInputText( 'sale_off',$valueSaleOff);
        $inputOrdering       =  Helper::cmsFormInputText( 'ordering',$valueOrdering);
        $inputPicture        =  Helper::cmsFormInputFile( 'picture',$valuePicture,'padding-top: 1px;padding-left: 1px;height: 34px');
        $inputid             =  Helper::cmsFormInputHidden('id',$id );
        $pictureHidden       =  Helper::cmsFormInputHidden('picture_hidden',$valuePicture);
        // Giữ hình ảnh khi tồn tại validate(lỗi khi edit)
        $namePicture        = !empty($valuePicture) ? $valuePicture : $valuePictureHidden ;
        $linkImage          =  LINK_IMAGE_BOOK . $namePicture  ;                                 
        $image              =  Helper::linkImage($linkImage,'width:300')    ;
        //CREATE ROW
        $rowPictureHidden   = Helper::cmsRowInput('', $pictureHidden);
        $rowName            = Helper::cmsRowInput('name', $inputName);
        $rowDescription     = Helper::cmsRowInput('description', $inputDescription);
        $rowPrice           = Helper::cmsRowInput('price',   $inputPrice);
        $rowSaleOff         = Helper::cmsRowInput('sale off', $inputSaleOff);
        $rowPicture         = Helper::cmsRowInput('picture', $inputPicture);
        $rowOrdering        = Helper::cmsRowInput('ordering', $inputOrdering );
        $rowSelectStatus    = Helper::cmsSelectboxForm('status',  'Status'  , array('default'=>'Select stat                us','0'=>'Active','1'=>'Inactive'),$valueStatus) ;
        $rowSelectSpecial   = Helper::cmsSelectboxForm('special', 'Special' , array('default'=>'Select Special','0'=>'Không','1'=>'Có'),$valueSpecial) ;
        $rowslbCategoryId   = Helper::cmsSelectboxForm('category_id','Category', $this->selectBoxCategory,$valueCategoryId) ;
        // FORM ADD AND EDIT
        if($id > 0){$content = $rowName . $rowDescription . $rowPicture . $image  . $rowPrice . $rowSaleOff .  $rowSelectSpecial . $rowSelectStatus . $rowslbCategoryId . $rowOrdering . $inputid . $rowPictureHidden;
        }
        else       {$content = $rowName . $rowDescription . $rowPicture . $rowPrice . $rowSaleOff .  $rowSelectSpecial . $rowSelectStatus . $rowslbCategoryId . $rowOrdering.$rowPictureHidden ;
        }
        echo Helper::notifyMessege('messege') ;        // In ra thông báo
        $errors =  isset($this->errors) ? $this->errors : ''  ;  
        echo  $errors = '<div  >'.$errors.'</div>' ;   // In ra lỗi
?>  
       
<form  action="#" method="POST" id="addedit" name="addedit" enctype="multipart/form-data">    
        <?php 
                $title = isset($this->arrParam['id']) ? 'Book Edit' : 'Book Add' ; 
                echo  Form::formContent($title,$content,$buttonForm) ;
        ?>
</form>

