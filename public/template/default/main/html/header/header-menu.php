<?php      

      $myaccount = '' ;
      if(isset($_SESSION['userDefault']['login'])  && $_SESSION['userDefault']['login'] == 1)
      {
         $myaccount =  ' <li  class="user">
                           <a href="'.$linkAccount.'">My Account<i class="fa fa-angle"></i></a>
                        </li> ' ;
         $singin    = '<li><a href="'.$linkLogout.'">logout</a></li>';
      }else{
         $singin    = ' 
                        <li><a href=" '.$linkLogin.'">Login</a></li>         
                        <li><a href=" '.$linkRegister.'">Register</a></li>         
                       ' ;
      }
      // HIỂN THỊ CATEGORY
      $module = new Model() ;
      $queryCategory  = 'SELECT `id`, `name` FROM `'.DB_TABLE_CATEGORY.'` WHERE `status` = 0 ' ;
      $resultCategory = $module->fetchAll($queryCategory) ; 
      if(!empty($resultCategory))
      {
         $xhtml ='' ;
         foreach($resultCategory as $key => $value){
            $name    = $value['name'];
            $id      = $value['id'];
            $nameURL = URL::filterURL($value['name']);
            $link    = URL::createLink('default','book','index',['category_id'=>$value['id']] , "$nameURL-$id.html");
            $xhtml  .= HTMLDefault::categoryChil($link,$name);
         }
      }

?>

<div class="main-menu-area hidden-sm hidden-xs sticky-header-1" id="header-sticky">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="menu-area">
               <nav>
                  <ul>
                     <li class="index">
                        <a  href="<?php echo $linkHome ;?>">Home<i></i></a>
                     </li>
                     <li class="category">
                        <a href="<?php echo $linkCategory ;?>">Category<i class="fa fa-angle-down"></i></a>
                        <div class="mega-menu">
                              <!-- CATEGORY CHILD -->
                              <?php echo $xhtml ;?>
                        </div>
                     </li>
                     <li  class="book">
                        <a href="<?php echo $linkBook ;?>">Book<i class="fa fa-angle"></i></a>
                     </li> 
                     <?php echo $myaccount ;?>
                     <li class="action">
                        <a href="">Sing in<i class="fa fa-angle-down"></i></a>
                        <div class="sub-menu sub-menu-2">
                           <ul>
                              <?php  echo $singin ;?>                            											 
                           </ul>
                        </div>
                     </li>
                  </ul>
               </nav>
            </div>
            <!-- <div class="safe-area">
               <a href="product-details.php">sales off</a>
            </div> -->
         </div>
      </div>
   </div>
</div>

