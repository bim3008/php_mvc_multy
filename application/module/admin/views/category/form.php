<?php   
        // PARAMS CONTROLLER
        
   

        $lblId           = isset($this->arrParam['id']) ? $this->arrParam['id'] : null;
        $lblModule       = isset($this->arrParam['module']) ? $this->arrParam['module'] : 'admin';
        $lblController   = isset($this->arrParam['controller']) ? $this->arrParam['controller'] : 'category';
        $lblAction       = isset($this->arrParam['action']) ? $this->arrParam['action'] : 'index';
        $lblStatus       = isset($this->arrParam['status']) ? $this->arrParam['status'] : '';    
        $lblFilterSearch = isset($this->arrParam['filter_search']) ? $this->arrParam['filter_search'] : '';

        // VALUE
        $id              =  isset($this->arrParam['form']['id'] )        ? $this->arrParam['form']['id'] : '' ;   
        $name            =  isset($this->arrParam['form']['name'] )      ? $this->arrParam['form']['name'] : '' ;   
        $status          =  isset($this->arrParam['form']['status'] )    ? $this->arrParam['form']['status'] : '' ;   
        $ordering        =  isset($this->arrParam['form']['ordering'] )  ? $this->arrParam['form']['ordering'] : '' ;   
        $picture         =  isset($this->arrParam['form']['picture'])    ? $this->arrParam['form']['picture'] : '' ;          
    
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
        $categoryName       =  Helper::cmsInput(  'text', 'name',     'form[name]',     'form-control',$name);
        $categoryPicture    =  Helper::cmsInput(  'file', 'picture',  'picture',        'form-control',$picture,'padding-top: 1px;padding-left: 1px;height: 34px');
        $categoryOrdering   =  Helper::cmsInput(  'text', 'ordering', 'form[ordering]', 'form-control',$ordering);
        $categoryid         =  Helper::cmsInput(  'hidden', 'id',     'form[id]',       'form-control', $lblId );
        $pictureHidden      =  Helper::cmsInput(  'hidden', 'picture_hidden',           'form[picture_hidden]',  'form-control', $picture);
        $linkImage          =  LINK_IMAGE_CATEGORY . $picture  ;                                 
        $image              =  Helper::linkImage($linkImage)    ;
        // Row
        $rowPictureHidden   = Helper::cmsRowInput('', $pictureHidden);
        $rowCategory        = Helper::cmsRowInput('name', $categoryName);
        $rowPicture         = Helper::cmsRowInput('picture', $categoryPicture);
        $rowOrdering        = Helper::cmsRowInput('ordering', $categoryOrdering );
        $rowSelectStatus    = Helper::cmsSelectboxForm('form[status]', 'Status','form-control custom-select', array('default'=>'Select status','0'=>'Active','1'=>'Inactive'),$status) ;
        if(isset($lblId)){
                $content = $rowCategory . $rowPicture . $image . $rowSelectStatus . $rowOrdering . $categoryid . $rowPictureHidden;
        }
        else{
                $content = $rowCategory . $rowPicture . $rowSelectStatus . $rowOrdering . $categoryid ;
        }
        echo Helper::notifyMessege('messege') ;   
        $errors =  isset($this->errors) ? $this->errors : ''  ;  
        echo  $errors = '<div  >'.$errors.'</div>' ;       
?>  
       
<form  action="#" method="POST" id="addedit" name="addedit" enctype="multipart/form-data">    
        <?php 
                $title = isset($this->arrParam['id']) ? 'Category Edit' : 'Category Add' ; 
                echo  Form::Content($title,$content,$stringBtn) ;
        ?>
</form>

