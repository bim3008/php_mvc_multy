<?php
class HTMLHelper
{

    public static function cmsButton($link, $class, $icon, $id, $name, $type = 'new')
    {
        if ($type == 'new') {
            $xhtml = ' <a href="' . $link . '" class="' . $class . '"> <span class="' . $icon . '" name="' . $id . '"></span> ' . $name . '</a> ';
        } else if ($type == 'submitDelete') {
            $xhtml = ' <a href="#"  onclick="javascript:submitDelete(\'' . $link . '\')" class="' . $class . '"> <span class="' . $icon . '"></span> ' . $name . '</a> ';
        }
        else if ($type == 'submitMultyDelete') {         
             $xhtml = ' <a href="#"  onclick="javascript:submitMultyDelete(\'' . $link . '\')" class="' . $class . '"> <span class="' . $icon . '"></span> ' . $name . '</a> ';
        }
        else if ($type == 'buttonSearch') {         
            $xhtml = ' <a href="#"  onclick="javascript:buttonSearch(\'' . $link . '\')" class="' . $class . '"> <span class="' . $icon . '"></span> ' . $name . '</a> ';
       }else if ($type == 'submitOrdering') {         
        $xhtml = ' <a href="#"  onclick="javascript:submitOrdering(\'' . $link . '\')" class="' . $class . '"> <span class="' . $icon . '"></span> ' . $name . '</a> ';
   }
        return $xhtml;
    }

    public static function cmsStatus($status, $link, $id)
    {
        $strStatus = ($status == 0) ? 'Active' : 'Inactive';
        $class     = ($status == 0) ? 'btn btn-warning btn-sm' : 'btn btn-sm btn-danger';
        $xhtml =    ' <td><a  id="status-' . $id . '"  href="javascript:changeStatus(\'' . $link . '\')"> 
                        <span class="' . $class . '" > ' . $strStatus . ' </span> 
                    </a></td> ';
        return $xhtml;
    }
    public static function cmsGroupAcp($group_acp, $link, $id)
    {
        $strGroupAcp = ($group_acp == 0) ? 'Active' : 'Inactive';
        $class       = ($group_acp == 0) ? 'btn btn-warning btn-sm' : 'btn btn-sm btn-danger';
        $xhtml =    ' <td><a  id="group-' . $id . '"  href="javascript:changeAjaxACP(\'' . $link . '\')"> 
                        <span class="' . $class . '" > ' . $strGroupAcp . ' </span> 
                    </a></td> ';
        return $xhtml;
    }
    public static function cmsSearch()
    {
        $xhtml =
        '<div class="col-sm-12 col-md-4">
         <div id="example1_filter" class="dataTables_filter">
                 <div style="display: flex ;" class="form-group">
                     <input style="margin-left: 10px;" type="search-box" class="form-control" id="filter-search" name="filter-search">
                     <button type="submit" class="btn btn-default name="search" ">Search</button>
                     <button type="submit" class="btn btn-default name= "clear" ">Clear</button>
                 </div>
         </div> 
        </div>';
        return $xhtml;
    }
    public static function cmsPagination()
    {
        $xhtml = '    
        </div>
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                        <ul class="pagination">
                            <li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                            <li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                            <li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>';
        return $xhtml;
    }
}
