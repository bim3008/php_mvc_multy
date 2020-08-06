<?php
class HelperAdmin
{

    public static function cmsButton($link, $class, $icon, $id, $name, $type = 'new',$style = null)
    {
        if ($type == 'new') {
            $xhtml = ' <a  style="'.$style.'" href="' . $link . '" " class="' . $class . '" id="' . $id . '"  > <span class="' . $icon . '" ></span> ' . $name . '</a> ';
        } else if ($type == 'submit') {
            $xhtml = ' <a href="#"  onclick="javascript:submitForm(\'' . $link . '\')" class="' . $class . '"> <span class="' . $icon . '"></span> ' . $name . '</a> ';
        } else if ($type == 'submitDelete') {
            $xhtml = ' <a href="#"  onclick="javascript:submitMultyDelete(\'' . $link . '\')" class="' . $class . '"> <span class="' . $icon . '"></span> ' . $name . '</a> ';
        }
        return $xhtml;
    }
    public static function cmsButtonEdit($link, $name)
    {
            $xhtml = ' <a href="' . $link . '" " class="btn btn-warning btn-sm" id="edit"  > <span class="fa fa-edit" ></span> ' . $name . '</a> ';

        return $xhtml;
    }
    public static function cmsButtonDelete($link, $name)
    {
            $xhtml = ' <a href="' . $link . '" " class="btn btn-danger btn-sm btn-delete" id="delete"  > <span class="fa fa-trash" ></span> ' . $name . '</a> ';

        return $xhtml;
    }
    public static function cmsStatus($status, $link, $id)
    {
        $strStatus = ($status == 0) ? 'Active' : 'Inactive';
        $class     = ($status == 0) ? 'btn btn-warning btn-sm' : 'btn btn-sm btn-danger';
        $xhtml =    '  <td><a  style ="text-align: center;" id="status-' . $id . '"  href="' . $link . ')"> <span class="' . $class . '" > ' . $strStatus . ' </span> </a></td> ';
        return $xhtml;
    }
    public static function cmsGroupAcp($group_acp, $link, $id)
    {
        $strGroupAcp = ($group_acp == 1) ? 'Yes' : 'No';
        $class       = ($group_acp == 1) ? 'btn btn-warning btn-sm' : 'btn btn-sm btn-danger';
        $xhtml =    ' <td><a  id="group-' . $id . '"  href="' . $link . ')"> <span class="' . $class . '" > ' . $strGroupAcp . ' </span> </a></td> ';
        return $xhtml;
    }
    public static function cmsInput($type, $id, $name, $class, $value, $style = null)
    {
        $xhtml = '<input   type="' . $type . '" id="' . $id . '" name="' . $name . '" class="' . $class . '" value="' . $value . '"  style = "' . $style . '"> ';
        return $xhtml;
    }
    public static function cmsSelectbox($name, $arrValue, $keySelect = 'default', $style = null)
    {
        $xhtml = '<select style="' . $style . '" name="' . $name . '" id = "'.$name.'" class="form-control custom-select bg-warning '.$name.'" >';
        foreach ($arrValue as $key => $value) {
            if ($key == $keySelect && is_numeric($keySelect)) {
                $xhtml .= '<option selected="selected" value = "' . $key . '">' . $value . '</option>';
            } else {
                $xhtml .= '<option value = "' . $key . '">' . $value . '</option>';
            }
        }
        $xhtml .= '</select>';
        return $xhtml;
    }
    public static function cmsRowInput($lbName, $input)
    {
        $xhtml = '<div class="form-group"><label name="' . $lbName . '">' . ucfirst($lbName) . '</label>' . $input . '</div> ';
        return $xhtml;
    }
    public static function cmsSelectboxForm($nameForm, $nameValue, $arrValue, $keySelect = 'default', $style = null)
    {
        $xhtml =  '<div class="form-group"> <label>' . $nameValue . '</label><select name="form['. $nameForm .']" class="form-control custom-select"> ';
        foreach ($arrValue as $key => $value) {
            if ($key == $keySelect && is_numeric($keySelect)) {
                $xhtml .= '<option selected="selected" value = "' . $key . '">' . $value . '</option>';
            } else {
                $xhtml .= '<option value = "' . $key . '">' . $value . '</option>';
            }
        }
        $xhtml .= '</select></div>';
        return $xhtml;
    }
    public static function formatVND($priceFloat)
    {
        $symbol = ' ' . 'VNĐ';
        $symbol_thousand = '.';
        $decimal_place = 0;
        $price = number_format($priceFloat, $decimal_place, '', $symbol_thousand);
        return $price . $symbol;
    }
    public static function createErrorDisplay($colspan, $message)
    {
        $xhtml = sprintf('<tr><td colspan="%s" style="text-align:center;"><strong>%s</strong></td></tr>', $colspan, mb_strtoupper($message));

        return $xhtml;
    }
    public static function notifyMessege($message)
    {
        $messge = Session::get($message);
        if (!empty($messge)) {
            echo '<div class="alert alert-success "><span class="fas fa-check"></span> ' . $messge . '</div>';
            Session::delete($message);
        }
    }
    public static function toolbar($tblFiler, $tblSearch, $tblCRUD,$selectBox = null)
    {
        $xhtml = '
        <div class="col-md-">
            <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-sm-4">' . $tblFiler . '</div>
                    <div class="col-sm-4">' . $tblSearch . '</div>
                    <div class="col-sm-4">' . $tblCRUD .  $selectBox .'</div>
                </div>
            </div>
        
        ';

        return $xhtml;
    }
    public static function toolbarUser($tblFiler, $tblSearch, $tblCRUD)
    {
        $xhtml = '
        <div class="col-md-">
            <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-sm-4">' . $tblFiler . '</div>
                    <div class="col-sm-4">' . $tblSearch . '</div>
                    <div class="col-sm-4">' . $tblCRUD . '</div>
                </div>
            </div>
        
        ';

        return $xhtml;
    }
    public static function cmsSelectMenuUser($lbName, $nameLb, $class, $arrValue, $keySelect = 'default', $style = null)
    {
        $xhtml =  '<label name="' . $lbName . '">' . $nameLb . '</label><select name="' . $lbName . '" class="' . $class . '" style="width:200px ;background-color: aquamarine;">  ';
        foreach ($arrValue as $key => $value) {
            if ($key == $keySelect && is_numeric($keySelect)) {
                $xhtml .= '<option selected="selected" value = "' . $key . '">' . $value . '  </option>';
            } else {
                $xhtml .= '<option style="background-color: red;" value = "' . $key . '">' . $value . '</option>';
            }
        }
        $xhtml .= '</select>';
        return $xhtml;
    }
    public static function smallBoxIndexController($class,$total,$name,$link)
    {
        $xhtml = '
                <div class="col-lg-3 col-6">
                    <div class="'.$class.'">
                        <div class="inner">
                            <h3>'.$total.'</h3>
                                <p>'.$name.'</p>
                        </div>
                        <div class="icon">
                                <i class="ion ion-bag"></i>
                        </div>
                        <a href="'.$link.'" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                 </div>
        ';
        return $xhtml;
    }
    public static function cmsInputChangePassword($nameMain,$nameInput,$placeholder)
    {
        $xhtml = '
        <div class="form-group">
            <label for="exampleInputEmail1">'.$nameMain.'</label>
            <input type="password" class="form-control" name="change['.$nameInput.']" placeholder="'.$placeholder.'" >
        </div>
        ' ;
        return $xhtml ;

    }
    public static function sidebarAdmin($link,$title)
    {
        $xhtml = '
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="'.$link.'" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                            <p>'.$title.'</p>
                    </a>
                </li>
            </ul>
        
        ' ;
        return $xhtml ;
    }
    
    public static function linkImage($link,$style=null)
    {
        $xhtml = '<img src="'.$link.'" alt="LOL" style= "'.$style.'" >' ;
        return $xhtml ;
    }
    public static function cmsSpecial($special)
    {
        $special = ($special == 0) ? 'No' : 'Yes';     
        return $special;
    }

    public static function textShorten($text, $limit = 400){    
        $text = $text. " ";
        $text = substr($text, 0, $limit);
        $text = substr($text, 0, strrpos($text, ' '));
        $text = $text.".....";
        return $text;
    }
    
    public static function cmsFormInputHidden(  $name, $value, $style = null)
    {
        $xhtml = '<input  type="hidden" id="'.$name.'" name="form[' .$name .']" class="form-control" value="' . $value . '"  style = "' . $style . '"> ';
        return $xhtml;
    }
    public static function cmsFormInputText(  $name, $value, $style = null)
    {
        $xhtml = '<input  type="text" id="'.$name.'" name="form['. $name .']" class="form-control" value="' . $value . '"  style = "' . $style . '"> ';
        return $xhtml;
    }
    public static function cmsFormInputFile($name, $value, $style = null)
    {
        $xhtml = '<input  type="file" id="'.$name.'" name="'. $name .'" class="form-control" value="' . $value . '"  style = "' . $style . '"> ';
        return $xhtml;
    }
    public static function cmsFormInputPassword($name, $value, $style = null)
    {
        $xhtml = '<input  type="password" id="'.$name.'" name="form['. $name .']" class="form-control" value="' . $value . '"  style = "' . $style . '"> ';
        return $xhtml;
    }
    public static function selectAllSelectBox($id)
    {
        $xhtm = '
        <span class="custom-checkbox"><input type="checkbox" id="checkbox1" name="cid[]" value="' . $id . '"></span>' ;
        return $xhtm ;
    }

    public static function highLightSearch($filterSearch,$valueName)
    {
        $xhtml = ($filterSearch != null) ? preg_replace("/\p{L}*?" . preg_quote($filterSearch) . "\p{L}*/ui", '<b style="background-color: red;">\\0</b>', $valueName) :  $valueName;
        return $xhtml ;
    }
}