<?php
        $linkPromotion01 =  $this->_dirImg.'/logosale/1.jpg' ;
        $linkPromotion02 =  $this->_dirImg.'/logosale/2.jpg' ;
        $linkPromotion03 =  $this->_dirImg.'/logosale/3.jpg' ;
        $linkPromotion04 =  $this->_dirImg.'/logosale/4.jpg' ;
        $linkPromotion05 =  $this->_dirImg.'/logosale/5.jpg' ;

        $picturePromotion01 = HTMLDefault::sliderPromotion($linkPromotion01,'06','Dec');
        $picturePromotion02 = HTMLDefault::sliderPromotion($linkPromotion02,'07','July');
        $picturePromotion03 = HTMLDefault::sliderPromotion($linkPromotion03,'08','Step');
        $picturePromotion04 = HTMLDefault::sliderPromotion($linkPromotion04,'09','May');
        $picturePromotion05 = HTMLDefault::sliderPromotion($linkPromotion05,'10','August');


        $promotion = $picturePromotion01.$picturePromotion02.$picturePromotion03.$picturePromotion04.$picturePromotion05;
?>

<div class="recent-post-area pt50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-20 section-title-res">
                    <h2>ƯU ĐÃI KHỦNG KHIẾP</h2>
                    </div>
                </div>
                <div class="post-active owl-carousel text-center">
                    <?php echo $promotion ;?>
                </div>
            </div>
        </div>
    </div>