<?php   
        // PARAMS CONTROLLE//
        $lblId           = isset($this->arrParam['id']) ? $this->arrParam['id'] : null;
        $lblModule       = isset($this->arrParam['module']) ? $this->arrParam['module'] : 'admin';
        $lblController   = isset($this->arrParam['controller']) ? $this->arrParam['controller'] : 'book';
        $lblAction       = isset($this->arrParam['action']) ? $this->arrParam['action'] : 'index';
        $lblStatus       = isset($this->arrParam['status']) ? $this->arrParam['status'] : '';    
        $lblFilterSearch = isset($this->arrParam['filter_search']) ? $this->arrParam['filter_search'] : '';

        // VALUE
        $id              =  isset($this->arrParam['form']['id'] )               ? $this->arrParam['form']['id'] : '' ;   
        $name            =  isset($this->arrParam['form']['name'] )             ? $this->arrParam['form']['name'] : '' ;   
        $description     =  isset($this->arrParam['form']['description'])       ? $this->arrParam['form']['description'] : '' ;   
        $price           =  isset($this->arrParam['form']['price'])             ? $this->arrParam['form']['price'] : '' ;   
        $special         =  isset($this->arrParam['form']['special'])           ? $this->arrParam['form']['special'] : '' ;   
        $saleOff         =  isset($this->arrParam['form']['sale_off'])          ? $this->arrParam['form']['sale_off'] : '' ;   
        $status          =  isset($this->arrParam['form']['status'] )           ? $this->arrParam['form']['status'] : '' ;   
        $ordering        =  isset($this->arrParam['form']['ordering'] )         ? $this->arrParam['form']['ordering'] : '' ;   
        $picture         =  isset($this->arrParam['form']['picture'])           ? $this->arrParam['form']['picture'] : '' ;      
        $category_id     =  isset($this->arrParam['form']['category_id'] )      ? $this->arrParam['form']['category_id'] : '' ;     
    
        $linkSave        = URL::createLink($lblModule, $lblController, 'form',array('type'=>'save'));
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
        // EDIT
        //Input
        $bookName           =  Helper::cmsInput(  'text', 'name',          'form[name]',         'form-control',$name);
        $bookDescription    =  HTML::inputDescription($description);
        $bookPrice          =  Helper::cmsInput(  'text', 'price',         'form[price]',        'form-control',$price);
        $bookSaleOff        =  Helper::cmsInput(  'text', 'saleoff',       'form[sale_off]',     'form-control',$saleOff);
        $bookPicture        =  Helper::cmsInput(  'file', 'picture',       'picture',            'form-control',$picture,'padding-top: 1px;padding-left: 1px;height: 34px');
        $bookOrdering       =  Helper::cmsInput(  'text', 'ordering',      'form[ordering]',     'form-control',$ordering);
        $bookid             =  Helper::cmsInput(  'hidden', 'id',          'form[id]',           'form-control',$lblId );
        $pictureHidden      =  Helper::cmsInput(  'hidden', 'picture_hidden','form[picture_hidden]',  'form-control', $picture);
        $linkImage          =  LINK_IMAGE_BOOK . $picture  ;                                 
        $image              =  Helper::linkImage($linkImage)    ;
        // Row
        $rowPictureHidden   = Helper::cmsRowInput('', $pictureHidden);
        $rowName            = Helper::cmsRowInput('name', $bookName);
        $rowDescription     = Helper::cmsRowInput('description', $bookDescription);
        $rowPrice           = Helper::cmsRowInput('price',   $bookPrice);
        $rowSaleOff         = Helper::cmsRowInput('sale off', $bookSaleOff);
        $rowPicture         = Helper::cmsRowInput('picture', $bookPicture);
        $rowOrdering        = Helper::cmsRowInput('ordering', $bookOrdering );
        $rowSelectStatus    = Helper::cmsSelectboxForm('form[status]',     'Status' ,'form-control custom-select', array('default'=>'Select status','0'=>'Active','1'=>'Inactive'),$status) ;
        $rowSelectSpecial   = Helper::cmsSelectboxForm('form[special]',    'Special' ,'form-control custom-select', array('default'=>'Select Special','0'=>'Không','1'=>'Có'),$special) ;
        $rowslbCategoryId   = Helper::cmsSelectboxForm('form[category_id]','Category','form-control custom-select',$this->selectBoxCategory,$category_id) ;


        if(isset($lblId)){
                $content = $rowName . $rowDescription . $rowPicture . $image  . $rowPrice . $rowSaleOff .  $rowSelectSpecial . $rowSelectStatus . $rowslbCategoryId . $rowOrdering . $bookid . $rowPictureHidden;
        }
        else{
                $content = $rowName . $rowDescription . $rowPicture . $rowPrice . $rowSaleOff .  $rowSelectSpecial . $rowSelectStatus . $rowslbCategoryId . $rowOrdering . $bookid ;
        }

        echo Helper::notifyMessege('messege') ;   
        $errors =  isset($this->errors) ? $this->errors : ''  ;  
        echo  $errors = '<div  >'.$errors.'</div>' ;       
?>  
       
<form  action="#" method="POST" id="addedit" name="addedit" enctype="multipart/form-data">    
        <?php 
                $title = isset($this->arrParam['id']) ? 'Book Edit' : 'Book Add' ; 
                echo  Form::Content($title,$content,$stringBtn) ;
        ?>
</form>

