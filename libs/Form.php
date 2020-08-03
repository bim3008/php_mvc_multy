<?php
class Form
{
    public static function  formContent($title, $content, $button)
    {
        $xhtml = '
        <form  action="#" method="POST" id="addedit" name="addedit">  
                <section class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">' . $title . '</h3>
                                    <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">' . $content . ' </div>
                                <div>
                                        <input type="hidden" name="form[token]" value="1999"> 
                                </div>
                                <div class="card-footer" >
                                    <li class="float-sm-right" style="list-style: none;">
                                        <p>' . $button . '</p>
                                    </li>
                                </div>
                            </div>      
                        </div>
                    </div>
                </section>
        </form>
            
            ';
        return $xhtml;
    }
    public static function formChangePassword($link, $buttonChangePass)
    {

        $linkCancel     = URL::createLink('admin', 'user', 'index');
        $xhtml = '
            <form action ="#" id="changePasswod" method="POST">
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-primary">
                                        <div class="card-header">
                                            <h3 class="card-title">CHANGE PASSWORD</h3>
                                                <div class="card-tools">
                                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                                </div>
                                        </div>
                                        <div class="card-body">
                                            ' . $buttonChangePass . '
                                        </div>
                                        <div class="card-footer">
                                                    <a href="#" class="btn btn-primary btn-change-password">Change Password</a> 
                                                    <a style="margin-left:80%" href="'.$linkCancel .'" class="btn btn-primary btn-change-password">Back</a>            
                                        </div>       
                                        <div> 
                                            <input type="hidden" name="change-password" value="change-password">
                                        </div>            
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </form>      
            ';
        return $xhtml;
    }    

    public static function formButton($moudel,$controller)
    {
        $linkSave        = URL::createLink($moudel,$controller, 'form',array('type'=>'save'));
        $btnSave         = Helper::cmsButton($linkSave, 'btn btn-success ', '', 'save', 'Save','submit');
        // SAVE NEW
        $linkSaveNew     = URL::createLink($moudel,$controller,  'form',array('type'=>'save-new'));
        $btnSaveNew      = Helper::cmsButton($linkSaveNew, 'btn btn-success ', '', 'savenew', 'Save & New','submit');
        // SAVE LOSE
        $linkSaveClose   = URL::createLink($moudel,$controller,  'form',array('type'=>'save-close'));
        $btnSaveClose    = Helper::cmsButton($linkSaveClose, 'btn btn-danger ', '', 'inac', 'Save & Close','submit');
        //CANCEL
        $linkCancel      = URL::createLink($moudel,$controller, 'index');
        $btnCancel       = Helper::cmsButton($linkCancel, 'btn btn-info', '', 'cancel', 'Cancel');

        $button       = $btnSave . $btnSaveNew . $btnSaveClose . $btnCancel;

        return $button;
    }
}
