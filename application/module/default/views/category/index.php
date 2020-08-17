<?php
$xhtmlGrid = '';
$xhtmlList = '';
if (!empty($this->listItems)) {
    foreach ($this->listItems as $key => $value) {
        $name    = mb_strtoupper($value['name']);
        $id      = $value['id'];
        $nameURL = URL::filterURL($value['name']);
        $picture = LINK_IMAGE_CATEGORY . $value['picture'];
        $link    = URL::createLink($this->arrParam['module'],'book','index',array('category_id'=>$value['id']), "$nameURL-$id.html");
        $xhtmlGrid .= HTMLDefault::categoryGird($link,$picture,$name);
        $xhtmlList .= HTMLDefault::categoryList($picture,$name);
    }
}
?>
            <!-- SLIDER RIGHT -->
         <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
            <div class="section-title-5 mb-30">
               <h2>Category</h2>
            </div>
            <div class="toolbar mb-30">
               <div class="shop-tab">
                  <div class="tab-3">
                     <ul>
                        <li class="active"><a href="#th" data-toggle="tab"><i class="fa fa-th-large"></i>Grid</a></li>
                        <li><a href="#list" data-toggle="tab"><i class="fa fa-bars"></i>List</a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="tab-content">
               <div class="tab-pane active" id="th">
                  <div class="row">
                     <!-- SHOW CATEGORY GIRD-->
                  <?php echo $xhtmlGrid; ?>
                  </div>
               </div>
               <div class="tab-pane fade" id="list">
                  <div class="single-shop mb-30">
                        <!-- SHOW CATEGORY LIST-->
                  <?php echo $xhtmlList; ?>
               </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
