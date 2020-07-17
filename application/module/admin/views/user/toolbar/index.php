
<?php
  $lblModule       = isset($this->arrParam['module']) ? $this->arrParam['module'] : 'admin';
  $lblController   = isset($this->arrParam['controller']) ? $this->arrParam['controller'] : 'group';
  $lblAction       = isset($this->arrParam['action']) ? $this->arrParam['action'] : 'index';
  $lblStatus       = isset($this->arrParam['filter_status']) ? $this->arrParam['filter_status'] : '';
  $lblFilterSearch = isset($this->arrParam['filter_search']) ? $this->arrParam['filter_search'] : '';

  //ALL
  $linkAll  = URL::createLink($lblModule , $lblController, 'index', array('filter_status' => 'all', 'filter_search' =>  $lblFilterSearch));
  $btnAll   = Helper::cmsButton($linkAll, 'btn btn-info', '', 'all', 'All' . '(' . $this->countItems[0]['total'] . ')');

  // ACTIVE
  $linkActive  = URL::createLink($lblModule , $lblController, 'index', array('filter_status' => 'active', 'filter_search' => $lblFilterSearch));
  $btnActive   = Helper::cmsButton($linkActive, 'btn  bg-warning', '', 'ac', 'Active' . '(' . $this->countItems[1]['total'] . ')');

  // INACTIVE
  $linkInactive  = URL::createLink($lblModule , $lblController, 'index', array('filter_status' => 'inactive', 'filter_search' => $lblFilterSearch));
  $btnInactive   = Helper::cmsButton($linkInactive, 'btn  btn-success', '', 'inac', 'Inactive' . '(' . $this->countItems[2]['total'] . ')');

  $btnFillter = $btnAll . $btnActive . $btnInactive;

  $formSearch = '
      <form action="" method="get">
              <p style ="display: inline-flex;">
                  <input type="hidden"  name="module"       value="'.$lblModule.'">
                  <input type="hidden"  name="controller"   value="'.$lblController.'" >
                  <input type="hidden"  name="action"       value="'.$lblAction.'">
                  <input type="hidden"  name="filter_status"       value="'.$lblStatus.'">
                  <input type="text"    name="filter_search" class="form-control" placeholder="Search" value="'.$lblFilterSearch.'">           
                  <input type="submit"   style="margin-left:5px" class="btn  bg-warning" value="Search" >       
                  <a  style="margin-left:5px" href="'.URL::createLink($lblModule,$lblController,'index').'"  class="btn btn-info float-right" > Clear</a>   
              </p>
      </form>    ';
      
  // ADD
  $linkAdd  = URL::createLink($lblModule , $lblController, 'form');
  $btnAdd   = Helper::cmsButton($linkAdd, 'btn  bg-warning', 'fas fa-plus', 'add', 'Add');

  // Multy - Delete 
  $linkMultyDelete = URL::createLink($lblModule , $lblController, 'multydelete');
  $btnMultyDelete  = Helper::cmsButton("#", 'btn btn-danger btn-multydelete', 'fas fa-trash', 'btn-multydeleteUser', 'Delete');
  // SELECTBOX

    // $selectBoxGroup          = Helper::cmsSelectMenuUser('select_group','','form-control custom-select btn-danger',$this->selectBoxGroup) ;
  
  $btnCRUD = $btnAdd . $btnMultyDelete  ;

?>