<?php
class Form
{
    public static function  Content($title, $content, $button)
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

    // <button type="submit" class="btn btn-primary" id="change-password">Change Password</button>      
}
//
// <input type="submit"  value="change password">