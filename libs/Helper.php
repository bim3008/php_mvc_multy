<?php
class Helper
{

    public static function cmsButton($link, $class, $icon, $id, $name, $type = 'new')
    {
        if  ($type == 'new') {
            $xhtml = ' <a href="' . $link . '" " class="' . $class . '" id="' . $id . '"  > <span class="' . $icon . '" ></span> ' . $name . '</a> ';
        }else if ($type == 'submit') {
            $xhtml = ' <a href="#"  onclick="javascript:submitForm(\'' . $link . '\')" class="' . $class . '"> <span class="' . $icon . '"></span> ' . $name . '</a> ';
        }
        else if ($type == 'submitDelete') {
            $xhtml = ' <a href="#"  onclick="javascript:submitMultyDelete(\'' . $link . '\')" class="' . $class . '"> <span class="' . $icon . '"></span> ' . $name . '</a> ';
        }
        return $xhtml;
    }


    public static function cmsStatus($status, $link, $id)
    {
        $strStatus = ($status == 0) ? 'Active' : 'Inactive';
        $class     = ($status == 0) ? 'btn btn-warning btn-sm' : 'btn btn-sm btn-danger';
        $xhtml =    ' <td><a  id="status-' . $id . '"  href="' . $link . ')"> <span class="' . $class . '" > ' . $strStatus . ' </span> </a></td> ';
        return $xhtml;
    }
    public static function cmsGroupAcp($group_acp, $link, $id)
    {
        $strGroupAcp = ($group_acp == 0) ? 'Active' : 'Inactive';
        $class       = ($group_acp == 0) ? 'btn btn-warning btn-sm' : 'btn btn-sm btn-danger';
        $xhtml =    ' <td><a  id="group-' . $id . '"  href="'.$link .')"> <span class="' . $class . '" > ' . $strGroupAcp . ' </span> </a></td> ';
        return $xhtml;
    }
  
    public static function cmsInput($type,$id,$name,$class,$value)
    {
        $xhtml = '<input type="'.$type.'" id="'.$id.'" name="'.$name.'" class="'.$class.'" value="'.$value.'" > ';
        return $xhtml;
    }

    public static function cmsSelectbox($name, $class, $arrValue, $keySelect = 'default', $style = null){
		$xhtml = '<select style="'.$style.'" name="'.$name.'" class="'.$class.'" >';
		foreach($arrValue as $key => $value){
			if($key == $keySelect && is_numeric($keySelect)){
				$xhtml .= '<option selected="selected" value = "'.$key.'">'.$value.'</option>';
			}else{
				$xhtml .= '<option value = "'.$key.'">'.$value.'</option>';
			}
		}
		$xhtml .= '</select>';
		return $xhtml;
    }
    
    public static function cmsRowInput($lbName,$input)
    {
        $xhtml = '<div class="form-group"><label name="'.$lbName.'">'.ucfirst($lbName).'</label>'.$input.'</div> ';
        return $xhtml;
    }
    
    public static function cmsSelectboxForm($lbName, $nameLb , $class, $arrValue, $keySelect = 'default', $style = null){
		$xhtml =  '<div class="form-group"> <label name="'.$lbName.'">'.$nameLb.'</label><select name="'.$lbName.'" class="'.$class.'"> ' ;
        foreach($arrValue as $key => $value){
			if($key == $keySelect && is_numeric($keySelect)){
				$xhtml .= '<option selected="selected" value = "'.$key.'">'.$value.'</option>';
			}else{
				$xhtml .= '<option value = "'.$key.'">'.$value.'</option>';
			}
		}
        $xhtml .= '</select></div>';
		return $xhtml;
    }

    public static function product_price($priceFloat) 
    {
        $symbol = 'vnđ';
        $symbol_thousand = '.';
        $decimal_place = 0;
        $price = number_format($priceFloat, $decimal_place, '', $symbol_thousand);
        return $price.$symbol;
    }

    public static function createErrorDisplay($colspan, $message)
    {
        $xhtml = sprintf('<tr><td colspan="%s" style="text-align:center;"><strong>%s</strong></td></tr>',$colspan, mb_strtoupper($message));

        return $xhtml;
    }

    public static function notifyMessege($message)
    {
        $messge = Session::get($message);
	    Session::delete($message);
	    if (!empty($messge)) {
		echo '<div class="alert alert-success "><span class="fas fa-check"></span> ' . $messge . '</div>';
	    }   
    }
}
