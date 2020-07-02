<?php
class HTMLHelper
{

    public static function cmsButton($link,$class,$name,$conten)
    {
       $xhtml =  ' <a href="'.$link.'" class="'.$class.'" name="'.$name.'" > '.$conten.' </a> ' ;
       return $xhtml ;
    }

    public static function cmsStatus($status,$link,$id)
    {
        $strStatus = ($status == 0) ? 'Active' : 'Inactive' ;
        $class     = ($status == 0) ? 'btn btn-warning btn-sm' : 'btn btn-sm btn-danger' ;
        $xhtml =    ' <td><a  id="status-'.$id.'"  href="javascript:changeStatus(\''.$link.'\')"> 
                        <span class="'.$class.'" > '.$strStatus.' </span> 
                    </a></td> ' ;
        return $xhtml ;
    }

    public static function cmsGroupAcp($group_acp,$link,$id)
    {
        $strGroupAcp = ($group_acp == 0) ? 'Active' : 'Inactive' ;
        $class       = ($group_acp == 0) ? 'btn btn-warning btn-sm' : 'btn btn-sm btn-danger' ;
        $xhtml =    ' <td><a  id="group-'.$id.'"  href="javascript:changeAjaxACP(\''.$link.'\')"> 
                        <span class="'.$class.'" > '.$strGroupAcp.' </span> 
                    </a></td> ' ;
        return $xhtml ;
    }
    
    public static function showAction($link,$class,$icon,$name)
    {
        $xhtml =' <a href="'.$link.'" class="'.$class.'"> <span class="'.$icon.'"></span> '.$name.'</a> ' ;
        return $xhtml ;
    }
    
}
