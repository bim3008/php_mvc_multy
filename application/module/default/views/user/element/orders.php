<div class="tab-pane fade" id="orders" role="tabpanel">
    <?php 
        if(!empty($this->Items)){
            $xhtml = '' ;
            foreach($this->Items as $key => $value){
                $id             =  $value['id'];
                $arrBook        =  json_decode($value['books']);    
                $arrName        =  json_decode($value['names']);
                $arrPicture     =  json_decode($value['pictures']);
                $arrQuantity    =  json_decode($value['quantities']);
                $arrPrice       =  json_decode($value['prices']);
                $date           =   date("H:i d/m/Y" , strtotime($value['date'])) ;
                $tableContent   = '' ;
                $i = 0; 
                foreach($arrBook as $keyB => $valueB){
                    $i++;
                    $tableContent   .= 
                            '<tr>
                                <td>'.$i.'</td>
                                <td>'.$arrName[$keyB].'</td>
                                <td><img  class="img-his" src=" '.LINK_IMAGE_BOOK.$arrPicture[$keyB].'"></td>
                                <td>'.HelperAdmin::formatVND($arrPrice[$keyB]).'</td>
                                <td>'.$arrQuantity[$keyB].'</td>  
                                <td>'.HelperAdmin::formatVND($arrQuantity[$keyB]*$arrPrice[$keyB]).'</td>  
                                '.HTMLDefault::statusBuyBooks($value['status']).'
                            </tr>' ;
                }
                    $xhtml  .= '
                            <div class="myaccount-content"><legend>Mã đơn hàng : '.$id.' -  Ngày: '.$date.'</legend></div>
                                <table class="table table-bordered">
                                    <tbody>
                                        <thead class="thead-light">
                                                '.HTMLDefault::tableTitle().$tableContent.'    
                                        </thead> 
                                    </tbody>
                                            
                                </table>';
            }
        }
        else{

            $xhtml = '<h2 class="cart">BẠN CHƯA MUA SẢN PHẨM NÀO</h2>' ;
        }
        echo $xhtml ;   
    ?>
</div>
<img src="" alt="">
