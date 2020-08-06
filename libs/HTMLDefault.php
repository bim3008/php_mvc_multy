<?php
class HTMLDefault
{
    public static function menuActive($name)
    {
        $xhtml =
            '
            <div class="breadcrumbs-area mb-30">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                             <div class="breadcrumbs-menu">
                                 <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#" class="active">'.$name.'</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> ';

        return $xhtml ;    
    }
    public static function categoryGird($picture,$name)
    {
        $xhtml= '
        <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product-wrapper mb-40">
                        <div class="product-img">
                            <a  href="#"><img style="width:197px;height:253px" src="' . $picture . '" alt="book" class="primary" /></a>
                        </div>
                        <div class="product-details text-center">
                            <h4><a href="#">' . $name . '</a></h4>
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
}
