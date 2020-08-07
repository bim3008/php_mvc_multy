<?php
class HTMLDefault
{   
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
    public static function categoryTopSelling($picture,$name,$cost,$sale)
    {
        $xhtml = '<div class="single-most-product bd mb-18">
                    <div class="most-product-img">
                    <a href="#"><img src="'.$picture.'" alt="book" /></a>
                    </div>
                    <div class="most-product-content">
                    <h4><a href="#">'.$name.'</a></h4>
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
                <h2>WELCOM TO MY BOOKS</h2>
            </div>
        ' ;
        return $xhtml ;
    }

    public static function bookInCategory($link,$img,$sale_off,$name,$price)
    {
        $xhtml = '
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="product-wrapper mb-40">
                <div class="product-img">
                    <a href="'.$link.'"> <img src="' . $img . '" alt="book" class="primary"></a>
                    <div class="product-flag">
                        <ul>
                            <li><span class="sale">new</span></li>
                            <li><span class="discount-percentage">' . $sale_off . '%</span></li>
                        </ul>
                    </div>
                </div>
                <div class="product-details text-center">
                    <h4><a href="'.$link.'">' . $name . '</a></h4>
                    <div class="product-price">
                        <ul>
                            <li>' . $price . '</li>
                        </ul>
                    </div>
                </div>

                <div class="product-link">
                    <div class="product-button">
                        <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                    <div class="add-to-link">
                        <ul>
                            <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        ' ;
        return $xhtml ;
    }
    public static function newBook($link,$img,$name,$price)
    {
        $xhtml = '
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="product-wrapper mb-40">
                <div class="product-img">
                    <a href="'.$link.'"> <img src="'.$img.'" alt="book" class="primary"></a>
                    <div class="quick-view">
                        <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                            <i class="fa fa-search-plus"></i>
                        </a>
                    </div>
                    <div class="product-flag">
                        <ul>
                            <li><span class="sale">new</span></li>
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
                            <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        ' ;
        return $xhtml ;
    }
    public static function featuredBook($link,$img,$name,$price)
    {
        $xhtml = '
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="product-wrapper mb-40">
                <div class="product-img">
                    <a href="'.$link.'"> <img src="'.$img.'" alt="book" class="primary"></a>
                    <div class="quick-view">
                        <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                            <i class="fa fa-search-plus"></i>
                        </a>
                    </div>
                    <div class="product-flag">
                        <ul>
                            <li><span class="sale">Special</span></li>
                        </ul>
                    </div>
                </div>
                <div class="product-details text-center">
                    <h4><a href="#">'.$name.'</a></h4>
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
                            <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        ' ;
        return $xhtml ;
    }

}
