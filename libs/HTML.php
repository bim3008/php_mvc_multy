<?php
    class HTML{

        public static function Filter($filter)
        {
            $xhtml = '
            <div class="col-sm-12 col-md-4">  
                <div class="dataTables_length" id="example1_length">'.$filter.'</div>
            </div> ' ;
            return $xhtml ;
        }

        public static function cmsCRUD($cmsCRUD)
        {
            $xhtml = '
            <div style=" text-align : right" class="col-sm-12 col-md-4">
                    <div class="dataTables_length" id="example1_length">
                            '.$cmsCRUD.'
                    </div>  
            </div> ' ;
            return $xhtml ;
        }
        
        public static function CmsSearch()
        {
            $xhtml = '
                            <input type="text" class="form-control" name="filter_search" value="" style="margin-left: 10px;">
                            <input type="submit" class="btn btn-default" name="btn-search" value="Search"> ' ;
            return $xhtml ;
        }


    }



?>

<div class="card-body">
     <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
         <div class="row">
             <div class="col-sm-12 col-md-6"></div>
             <div class="col-sm-12 col-md-6"></div>
         </div>
         <div class="row">
             <div class="col-sm-12">
                 <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                     <thead>
                         <tr>
                             <th width="1%"><span class="custom-checkbox">
                                     <input type="checkbox" id="selectAll">
                                 </span></th>
                             <th rowspan="1" colspan="1">ID</th>
                             <th rowspan="1" colspan="1">Name</th>
                             <th rowspan="1" colspan="1"> Group ACP</th>
                             <th rowspan="1" colspan="1">Status</th>
                             <th rowspan="1" colspan="1" class="center">Ordering</th>
                             <th rowspan="1" colspan="2">Create</th>
                             <th rowspan="1" colspan="1">Modified</th>
                             <th rowspan="1" colspan="2">Action</th>
                         </tr>
                     </thead>
                     <tbody>
                         <tr role="row" class="odd">
                             <?php echo $xhtm; ?>
                         </tr>
                     </tbody>
                 </table>
             </div>
         </div>
         <div class="row">
             <?php
                $linkPagination = URL::createLink('admin', 'group', 'index', ['status' => $this->arrParam['status'], 'filter_search' => $this->arrParam['filter_search']]);
                echo $this->pagination->showPagination($linkPagination);
                ?>
         </div>
     </div>
 </div>