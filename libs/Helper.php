<?php
class Helper
{

    public static function cmsButton($link, $class, $icon, $id, $name, $type = 'new')
    {
        if ($type == 'new') {
            $xhtml = ' <a href="' . $link . '" " class="' . $class . '" id="' . $id . '"  > <span class="' . $icon . '" ></span> ' . $name . '</a> ';
        } else if ($type == 'submit') {
            $xhtml = ' <a href="#"  onclick="javascript:submitForm(\'' . $link . '\')" class="' . $class . '"> <span class="' . $icon . '"></span> ' . $name . '</a> ';
        } else if ($type == 'submitDelete') {
            $xhtml = ' <a href="#"  onclick="javascript:submitMultyDelete(\'' . $link . '\')" class="' . $class . '"> <span class="' . $icon . '"></span> ' . $name . '</a> ';
        }
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
        $xhtml = '<input  style = "' . $style . '" type="' . $type . '" id="' . $id . '" name="' . $name . '" class="' . $class . '" value="' . $value . '" > ';
        return $xhtml;
    }
    public static function cmsSelectbox($name, $class, $arrValue, $keySelect = 'default', $style = null)
    {
        $xhtml = '<select style="' . $style . '" name="' . $name . '" class="' . $class . '" >';
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
    public static function cmsSelectboxForm($lbName, $nameLb, $class, $arrValue, $keySelect = 'default', $style = null)
    {
        $xhtml =  '<div class="form-group"> <label name="' . $lbName . '">' . $nameLb . '</label><select name="' . $lbName . '" class="' . $class . '"> ';
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
    public static function product_price($priceFloat)
    {
        $symbol = 'vnđ';
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
        Session::delete($message);
        if (!empty($messge)) {
            echo '<div class="alert alert-success "><span class="fas fa-check"></span> ' . $messge . '</div>';
        }
    }

    public static function toolbarGroup($tblFiler, $tblSearch, $tblCRUD)
    {
        $xhtml = '
        <div class="col-md-">
            <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-sm-4">' . $tblFiler . '</div>
                    <div class="col-sm-5">' . $tblSearch . '</div>
                    <div class="col-sm-3">' . $tblCRUD . '</div>
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


    
    /* 
        small-box bg-info 
    */

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



    public static function cmsInputChangePassword($nameMain,$type,$nameInput,$placeholder,$value)
    {
        $xhtml = '
        <div class="form-group">
            <label for="exampleInputEmail1">'.$nameMain.'</label>
            <input type="'.$type.'" class="form-control" name="'.$nameInput.'" placeholder="'.$placeholder.'" value="'.$value.'">
        </div>
        ' ;
        return $xhtml ;

    }
}
