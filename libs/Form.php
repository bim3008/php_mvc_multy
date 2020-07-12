<?php 
    class Form
    {
        public static function  Content($title,$content)
        {

            $xhtml = '
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">'.$title.'</h3>
                                </div>
                                <div class="card-body">
                                    '.$content.' 
                                </div>
                                <div>
                                        <input type="hidden" name="form[token]" value="123"> 
                                </div>
                            </div>
                        </div>
                </section>
            
            ' ;
            return $xhtml ;
        }
    public static function actionMenu($stringBtn)
    {
        $xhtml = '
                <section class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                                <div class="col-sm-12">
                                    <li class="breadcrumb float-sm-right">
                                            <p>   ' .$stringBtn . ' </p>
                                    </li>
                                </div>
                            </div>
                        </div>
                </section>
        ' ;
        return $xhtml ;
    }
   
}

?>