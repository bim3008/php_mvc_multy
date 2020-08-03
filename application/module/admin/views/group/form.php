<?php   
        // GET PARAMS
        $lblModule       = isset($this->arrParam['module']) ? $this->arrParam['module'] : 'admin';
        $lblController   = isset($this->arrParam['controller']) ? $this->arrParam['controller'] : 'group';
        $lblAction       = isset($this->arrParam['action']) ? $this->arrParam['action'] : 'index';
        $lblStatus       = isset($this->arrParam['status']) ? $this->arrParam['status'] : '';    
        $lblFilterSearch = isset($this->arrParam['filter_search']) ? $this->arrParam['filter_search'] : '';
        // GET VALUE
        $id                     =  isset($this->arrParam['form']['id'] )        ? $this->arrParam['form']['id'] : '' ;   
        $name                   =  isset($this->arrParam['form']['name'] )      ? $this->arrParam['form']['name'] : '' ;   
        $status                 =  isset($this->arrParam['form']['status'] )    ? $this->arrParam['form']['status'] : '' ;   
        $ordering               =  isset($this->arrParam['form']['ordering'] )  ? $this->arrParam['form']['ordering'] : '' ;   
        $group_acp              =  isset($this->arrParam['form']['group_acp'] ) ? $this->arrParam['form']['group_acp'] : '' ;          
        // CREATE BUTTON
        $buttonForm         = Form::formButton($lblModule, $lblController) ;
        // CREATE INPUT
        $groupName          =  Helper::cmsFormInputText('name',$name);
        $groupOrdering      =  Helper::cmsFormInputText('ordering',$ordering);
        $groupid            =  Helper::cmsFormInputHidden('id',$id);
        //CREATE ROW
        $rowGroup           = Helper::cmsRowInput('name', $groupName);
        $rowOrdering        = Helper::cmsRowInput('ordering', $groupOrdering );
        $rowSelectStatus    = Helper::cmsSelectboxForm('status', 'Status', array('default'=>'Select status','0'=>'Active','1'=>'Inactive'),$status) ;
        $rowSelectGroupAcp  = Helper::cmsSelectboxForm('group_acp','Group_ACP', array('default'=>'Select group','0'=>'No','1'=>'Yes'),$group_acp) ;
        $content = $rowGroup .$rowSelectStatus . $rowSelectGroupAcp . $rowOrdering .$groupid ;

        echo Helper::notifyMessege('messege') ;   
        $errors =  isset($this->errors) ? $this->errors : ''  ;  
        echo  $errors = '<div  >'.$errors.'</div>' ;       
?>  
       
<form  action="#" method="POST" id="addedit" name="addedit">    
        <?php 
                $title = isset($this->arrParam['id']) ? 'Group Edit' : 'Group Add' ; 
                echo  Form::formContent($title,$content,$buttonForm ) ;
        ?>
</form>

