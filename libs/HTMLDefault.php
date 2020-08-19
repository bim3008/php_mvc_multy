<?php
class HTMLDefault
{   
    public static function cmsFormInputHidden(  $name, $value, $style = null)
    {
        $xhtml = '<input  type="hidden" id="'.$name.'" name="form[' .$name .'][]" class="form-control" value="' . $value . '"  style = "' . $style . '"> ';
        return $xhtml;
    }
    public static function categoryGird($link,$picture,$name)
    {
        $xhtml= '
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="product-wrapper mb-40">
                <div class="product-img">
                    <a  href="'.$link.'"><img style="width:197px;height:253px" src="' . $picture . '" alt="book" class="primary" /></a>
                </div>
                <div class="product-details text-center">
                    <h4><a href="'.$link.'">' . $name . '</a></h4>
                </div>
            </div>
        </div>  
        
        ' ;
        return $xhtml ;
    }
    public static function categoryList($picture,$name)
    {
        $xhtml= '
                <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="product-wrapper-2">
                    <div class="product-img">
                        <a href="#">
                        <img src="'.$picture.'" alt="book" class="primary" />
                        </a>
                    </div>
                </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="product-wrapper-content">
                    <div class="product-details">
                        <h4 style = " margin-top: 140px"><a href="#">'.$name.'</a></h4>
                    </div>
                </div>
                </div>
            </div>
        ' ;
        return $xhtml ;
    }
    public static function categoryTopSelling($picture,$name,$cost,$sale,$link)
    {
        $xhtml = '<div class="single-most-product bd mb-18">
                    <div class="most-product-img"><a href="'.$link.'"><img src="'.$picture.'" alt="book" /></a></div>
                        <div class="most-product-content">
                            <h4><a href="'.$link.'">'.$name.'</a></h4>
                        <div class="product-price">
                            <ul>
                                <li style="font-family: none ,serif;">'.$sale.'</li>
                                <li class="old-price">'.$cost.'</li>
                            </ul>
                        </div>
                    </div>
                </div>' ;
        return $xhtml ;

    }
    public static function showErrorData($error){
        $xhtml = '<span id="show-error">'.$error.'</span>';
        return $xhtml ;
    }

    public static function listBook($nameBoook,$listBook)
    {
        $xhtml = '
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                    <div class="section-title-5 mb-30">
                        <h2>'.$nameBoook.'</h2>
                    </div>
                    <div class="toolbar mb-30">
                        <div class="shop-tab">
                            <div class="tab-3">
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="th">
                            <div class="row">
                                <!-- SHOW BOOK-->
                                '.$listBook.'
                            </div>
                        </div>
                    </div>
                </div>
        ' ;
        return $xhtml ;
    }
    public static function indexBook($titlebook,$listBook)
    {
        $xhtml = '
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
    
                <div class="toolbar mb-30">
                    <div class="shop-tab">
                        <div class="tab-3">
                           <h2>'.$titlebook.'</h2>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active" id="th">
                        <div class="row">
                            <!-- SHOW BOOK-->
                            '.$listBook.'
                        </div>
                    </div>
                </div>
            </div>
        ' ;
        return $xhtml ;
    }
    public static function welcomBook()
    {
        $xhtml = '
            <div class="section-title-5 mb-30">
                <h2>THẾ GIỚI SÁCH CỦA BẠN</h2>
            </div>
        ' ;
        return $xhtml ;
    }
    public static function bookInCategory($link,$img,$sale_off,$name,$price,$linkOder)
    {   
     
        if($sale_off > 0){
            $discount = ' <li><span class="discount-percentage">' . $sale_off . '%</span></li>' ;
        }else{
            $discount = '' ;
        }
     
        $xhtml = '
       
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="product-wrapper mb-40">
                <div class="product-img">
                    <a href="'.$link.'"> <img src="' . $img . '" alt="book" class="primary"></a>
                    <div class="product-flag">
                        <ul>
                            <li><span class="sale">new</span></li>
                            '.$discount.'
                        </ul>
                    </div>
                </div>
                <div class="product-details text-center">
                    <h4><a title="" href="'.$link.'">' .HelperAdmin::textShorten($name,25) . '</a></h4>
                    <div class="product-price">
                        <ul>
                            <li>' . $price . '</li>
                        </ul>
                    </div>
                </div>

                <div class="product-link">
                    <div class="product-button">
                        <a href="'.$linkOder.'" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                    <div class="add-to-link">
                        <ul>
                            <li><a href="'.$link.'" title="Details"><i class="fa fa-external-link"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        ' ;
        return $xhtml ;
    }
    public static function newBook($linkDetail,$img,$name,$price,$sale_off,$linkOder)
    {   
        $title = $name;
        $name = HelperAdmin::textShorten($name,25);
        if($sale_off > 0){
            $discount = ' <li><span class="discount-percentage">' . $sale_off . '%</span></li>' ;
        }else{
            $discount = '' ;
        }
        $xhtml = '
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-wrapper mb-40">
                    <div class="product-img">
                        <a  href="'.$linkDetail.'"> <img src="'.$img.'" alt="book" class="primary"></a>
                        <div class="product-flag">
                            <ul>
                                <li><span class="sale">new</span></li>
                                '.$discount.'
                            </ul>
                        </div>
                    </div>
                    <div class="product-details text-center">
                        <h4><a title="'.$title.'" href="'.$linkDetail.'">'.$name.'</a></h4>
                        <div class="product-price">
                            <ul>
                                <li>'.$price.'</li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-link">
                        <div class="product-button">
                            <a href="'.$linkOder.'" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        <div class="add-to-link">
                            <ul>
                                <li><a href="'.$linkDetail.'" title="Details"><i class="fa fa-external-link"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        ' ;
        return $xhtml ;
    }
    public static function featuredBook($link,$img,$name,$price,$sale_off,$linkOder)
    {
        $title = $name;
        $name = HelperAdmin::textShorten($name,20);
        if($sale_off > 0){
            $discount = ' <li><span class="discount-percentage">' . $sale_off . '%</span></li>' ;
        }else{
            $discount = '' ;
        }
        $xhtml = '
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="product-wrapper mb-40">
                <div class="product-img">
                    <a href="'.$link.'"> <img src="'.$img.'" alt="book" class="primary"></a>
                    <div class="product-flag">
                        <ul>
                            <li><span class="sale">Special</span></li>
                            '.$discount.'
                        </ul>
                    </div>
                </div>
                <div class="product-details text-center">
                    <h4><a title="'.$title.'" href="'.$link.'">'.$name.'</a></h4>
                    <div class="product-price">
                        <ul>
                            <li>'.$price.'</li>
                        </ul>
                    </div>
                </div>
                <div class="product-link">
                    <div class="product-button">
                        <a href="'.$linkOder.'" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                    <div class="add-to-link">
                        <ul>
                            <li><a href="'.$link.'" title="Details"><i class="fa fa-external-link"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        ' ;
        return $xhtml ;
    }
    public static function titleTopSelling(){
        $xhtml  = '
        <div class="left-title mb-20">
            <h3><a href="#">SÁCH GIẢM GIÁ</a></h3>
        </div>
        ';
        return $xhtml ;
    }

    public static function classRowContent(){
        $xhtml  = '
        <div class="shop-main-area mb-10">
            <div class="container">
        <div class="row">
        ';
        return $xhtml ;
    }
    public static function bookReletive($link,$img,$name,$price,$sale_off)
    {
        if($sale_off > 0){
            $discount = ' <li><span class="discount-percentage">' . $sale_off . '%</span></li>' ;
        }else{
            $discount = '' ;
        }
        $xhtml = '
        <div class="product-wrapper">
                <div class="product-img">
                    <a href="'.$link.'"><img src="'.$img.'" alt="book" class="primary" /></a>
                    <div class="product-flag">
                        <ul>
                                '.$discount.'
                        </ul>
                    </div>
                </div>
                <div class="product-details text-center">
                    <h4><a href="'.$link.'">'.$name.'</a></h4>
                    <div class="product-price">
                        <ul>
                            <li>'.$price.'</li>
                        </ul>
                    </div>
                </div>
                <div class="product-link">
                    <div class="product-button">
                        <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                    <div class="add-to-link">
                        <ul>
                            <li><a href="product-details.html" title="Details"><i
                                        class="fa fa-external-link"></i></a></li>
                        </ul>
                    </div>
                </div>
        </div>   
        ';
        return $xhtml ;
    }
    public static function categoryChil($link,$name){
        $xhtml = ' <span>
                    <a href="'.$link.'" class="title">'.$name.'</a>
                   </span>';
        return $xhtml ;
    }

    public static function rowInputTextRegister($name,$nameId,$value = null){
        $xhtml ='
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="single-register">            
                        <label>'.$name.'<span>*</span></label>
                        <input type="text" name="form['.$nameId.']" id="'.$nameId.'" value="'.$value.'">
                    </div>
                </div>
        ';
        return $xhtml ;
    }
    public static function rowRegister($rowOne,$rowTwo){
        $xhtml ='
        <div class="row">
                '.$rowOne.' 
                '.$rowTwo.'
        </div>
        ';
        return $xhtml ;
    }
    public static function inputTextRegister($name,$nameId,$value=null){
        $xhtml ='
            <div class="single-register">
                        <label>'.$name.'<span></span></label>
                        <input type="text" name="form['.$nameId.']" id="'.$nameId.'" value="'.$value.'">
            </div>
        ';
        return $xhtml ;
    }
    public static function inputPassRegister($name,$nameId,$value=null){
        $xhtml ='
            <div class="single-register">
                        <label>'.$name.'<span></span></label>
                        <input type="password" name="form['.$nameId.']" id="'.$nameId.'" value="'.$value.'">
            </div>
        ';
        return $xhtml ;
    }
    public static function inputHiddenRegister($name,$nameId,$value=null){
        $xhtml ='
            <div class="single-register">
                        <label>'.$name.'<span></span></label>
                        <input type="hidden" name="form['.$nameId.']" id="'.$nameId.'" value="'.$value.'">
            </div>
        ';
        return $xhtml ;
    }

    public static function sliderPromotion($img,$day,$moth){
        $xhtml=' 
        <div class="col-lg-12">
                <div class="single-post">
                    <div class="post-img">
                        <a href="#"><img src="'.$img.'" alt="post" /></a>
                        <div class="blog-date-time">
                            <span class="day-time">'.$day.'</span>
                            <span class="moth-time">'.$moth.'</span>
                        </div>
                    </div>
                </div>
            </div>
        ';
        return $xhtml;
    }

    public static function titleCart(){
        $xhtml = '
                <div class="entry-header-area ">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="entry-header-title">
                                    <h2>Giỏ Hàng</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        ';
        return $xhtml ;
    }

    public static function displayBookInCart($product){

        $xhtml = '
                <table>
                    <thead>
                        <tr>
                            <th class="product-thumbnail">Hình ảnh</th>
                            <th class="product-name">Tên sản phẩm</th>
                            <th class="product-price">Giá</th>
                            <th class="product-quantity">Số Lượng</th>
                            <th class="product-subtotal">Tổng cổng</th>
                            <th class="product-remove">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>                    
                          '.$product.'
                    </tbody>
                </table>
        
        ';
        return $xhtml ;
    }

    public static function displayNotice($link,$notice){
        $xhtml = '
                <div class="section-element-area ptb-70">
                <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="entry-header text-center mb-20">      
                        </div>
                        <div class="entry-content text-center mb-20">
                            <h2 class="notice">'.$notice.'</h2>
                            <a href="'.$link.'"> TRANG CHỦ </a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        ' ;
        return $xhtml ;
    }

      
    public static function tableTitle(){
        $xhtml = '
        <tr>
            <th>STT</th>
            <th class="th">Tên sản phẩm</th>
            <th>Hình ảnh</th>  
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Tổng cổng</th>
            <th>Trạng thái</th>
        </tr>
    
    ';
        return $xhtml ;
    }


    public static function statusBuyBooks($status){

        if($status == 0){
            $xhtml = ' <td><a class="btn btn-sqr">Đang Giao</a></td>' ;
        }
        else{
            $xhtml = ' <td><a class="btn btn-sqr">Đã Giao</a></td>' ;
        }
        return $xhtml ;
    }

    public static function listCategory($xhtmlGrid,$xhtmlList){
        $xhtml = '
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
                     '.$xhtmlGrid.'
                    </div>
                </div>
                <div class="tab-pane fade" id="list">
                    <div class="single-shop mb-30">
                            <!-- SHOW CATEGORY LIST-->
                   '.$xhtmlList.'
                </div>
                </div>
                </div>
            </div>
        
        ';

        return $xhtml ;
    }
}
