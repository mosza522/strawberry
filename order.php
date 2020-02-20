<!doctype html>
<html>

<head>
  <?php
  require('inc_header.php');
  $sql_header="SELECT * FROM page
  LEFT OUTER JOIN title
  ON page.page_id=title.page_id
  LEFT OUTER JOIN keywords
  ON page.page_id=keywords.page_id
  LEFT OUTER JOIN description
  ON page.page_id=description.page_id
  WHERE page.page_name='index'";
  $rs_header=mysql_fetch_array(mysql_query($sql_header));

   ?>
    <title><?=$rs_header['title']?></title>
    <meta name="keywords" content="<?=$rs_header['keywords']?>" />
    <meta name="description" content="<?=$rs_header['description']?>" />
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <?php require('inc_header.php');
    session_start();?>
        <link href="https://fonts.googleapis.com/css?family=Itim|Mitr" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/font-awesome.css"> </head>
<style>
    .bovtom {
        border-bottom: 1px solid #fd83b4;
    }

    .top-ma {
        margin-top: 10px;
    }

    .table>thead>tr>th {
        vertical-align: bottom;
        border-bottom: 1px solid #fd83b4;
    }

    .table>tbody>tr>td,
    .table>tbody>tr>th,
    .table>tfoot>tr>td,
    .table>tfoot>tr>th,
    .table>thead>tr>td,
    .table>thead>tr>th {
        padding: 8px;
        line-height: 1.42857143;
        vertical-align: top;
        border-top: 1px solid #fd83b4;
    }

    .text-success {
        color: #fd83b4;
        font-family: 'Itim', cursive;
        padding-left: 10px;
    }

    .tuiosftp {
        color: #43200c;
        font-family: 'Itim', cursive;
    }

    .thumbnail {
        background-color: none;
    }

    .media-left,
    .media>.pull-left {
        margin-right: 20px;
    }

    .media-left,
    .media>.pull-left {
        padding-right: 4px;
    }

    .table {
        color: #43200c;
        font-family: 'Itim', cursive;
        font-size: 16px;
    }
</style>

<body class="bgabout">
    <div class="container-fluid">
        <div class="row">
            <div class="rol-sm-12">
                <?php require('inc_menu.php'); ?>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="text-about wow fadeInDown"><img src="img/shopping.png" class="img-responsive">&nbsp;<?=$text[$_SESSION['lang']]['order_header']?></div>
                            </div>
                        </div>
                        <div class="row wow fadeInRight">
                            <div class="col-sm-12  ">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <?php

                                             ?>

                                            <th ><?=$text[$_SESSION['lang']]['product']?></th>
                                            <th><?=$text[$_SESSION['lang']]['piece']?></th>
                                            <?php if(isset($_SESSION['user_id'])){ ?>
                                            <th><?=$text[$_SESSION['lang']]['dozen']?></th>
                                            <th><?=$text[$_SESSION['lang']]['crate']?></th>
                                          <?php } ?>
                                            <th class="text-center"><?=$text[$_SESSION['lang']]['price/piece']?></th>
                                            <?php if(isset($_SESSION['user_id'])){ ?>
                                            <th class="text-center"><?=$text[$_SESSION['lang']]['price/dozen']?></th>
                                            <th class="text-center"><?=$text[$_SESSION['lang']]['price/crate']?></th>
                                          <?php }?>
                                            <th> </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                      $session_crate=array();
                                      $session_dozen=array();
                                      $session_cart=array();
                                      if(isset($_SESSION['cart']) or isset($_SESSION['cart_dozen']) or isset($_SESSION['cart_crate'])){
                                      if(isset($_SESSION['cart'])){
                                        $_SESSION['cart'] = array_values($_SESSION['cart']);
                                        $cart=array_unique($_SESSION['cart']);
                                        $session_cart=$_SESSION['cart'];

                                      }
                                      if(isset($_SESSION['cart_dozen'])){
                                        $_SESSION['cart_dozen'] = array_values($_SESSION['cart_dozen']);
                                        $cart_dozen=array_unique($_SESSION['cart_dozen']);
                                        $session_dozen=$_SESSION['cart_dozen'];
                                      }
                                      if(isset($_SESSION['cart_crate'])){
                                        $_SESSION['cart_crate'] = array_values($_SESSION['cart_crate']);
                                        $cart_crate=array_unique($_SESSION['cart_crate']);
                                        $session_crate=$_SESSION['cart_crate'];
                                      }
                                      $new_cart=array();
                                      foreach ($session_cart as $key) {
                                        array_push($new_cart,$key);
                                      }
                                      foreach ($session_dozen as $key) {
                                        array_push($new_cart,$key);
                                      }
                                      foreach ($session_crate as $key) {
                                        array_push($new_cart,$key);
                                      }
                                      $new_cart=array_values(array_unique($new_cart));

                                      foreach ($new_cart as $value) {
                                        $num=0;
                                        $num_dozen=0;
                                        $num_crate=0;
                                        $id=$value;
                                      for ($j=0; $j < count($_SESSION['cart']); $j++) {
                                        if(isset($_SESSION['cart'][$j])){
                                          if($id==$_SESSION['cart'][$j]){
                                            $num++;
                                          }
                                        }
                                      }
                                      if(isset($_SESSION['cart_dozen'])){
                                      for ($j=0; $j < count($_SESSION['cart_dozen']); $j++) {
                                        if(isset($_SESSION['cart_dozen'][$j])){
                                          if($id==$_SESSION['cart_dozen'][$j]){
                                            $num_dozen++;
                                          }
                                        }
                                      }
                                    }
                                    if(isset($_SESSION['cart_crate'])){
                                    for ($j=0; $j < count($_SESSION['cart_crate']); $j++) {
                                      if(isset($_SESSION['cart_crate'][$j])){
                                        if($id==$_SESSION['cart_crate'][$j]){
                                          $num_crate++;
                                        }
                                      }
                                    }
                                  }

                                        $sql="SELECT * FROM product WHERE product_id={$id}";
                                        if(!$q=mysql_query($sql))echo mysql_error();
                                        $rs=mysql_fetch_array($q);?>
                                        <tr>
                                            <td class="col-sm-6">
                                                <div class="media">
                                                    <div class="thumbnail pull-left"> <img class="media-object" src="backoffice/image/<?=$rs['product_img']?>" style="width: 72px; height: 72px;"> </div>
                                                    <div class="media-body tuiosftp">
                                                        <h4 class="media-heading"><?=$rs['product_name']?></h4>
                                                        <font size="3" class="media-heading"> <?=$text[$_SESSION['lang']]['id']?> : <?=$rs['product_id_product']?></font>
                                                       </div>
                                                </div>
                                            </td>
                                            <?php if(isset($_SESSION['user_id'])){ ?>
                                              <td class="col-sm-2" style="text-align: center">
                                                  <input type="text" onkeyup="return check_number(this.value)" class="form-control" onchange="calculate(this.value,<?=$rs['product_price_retail']?>,<?=$rs['product_id']?>)" id="num<?=$rs['product_id']?>" value="<?=$num?>">
                                                </td>
                                              <td class="col-sm-2" style="text-align: center">
                                                  <input type="text" onkeyup="return check_number(this.value)" class="form-control" onchange="calculate_dozen(this.value,<?=$rs['product_price_dozen']?>,<?=$rs['product_id']?>)" id="num_dozen<?=$rs['product_id']?>" value="<?=$num_dozen?>">
                                                </td>
                                                <td class="col-sm-2" style="text-align: center">
                                                  <?php if ($rs['product_price_crate']>0): ?>
                                                    <input type="text" onkeyup="return check_number(this.value)" class="form-control"onchange="calculate_crate(this.value,<?=$rs['product_price_crate']?>,<?=$rs['product_id']?>)" id="num_crate<?=$rs['product_id']?>" value="<?=$num_crate?>">
                                                  <?php else: ?>
                                                    <input type="text" class="form-control" value="ไม่มีแบบลัง" disabled>
                                                  <?php endif; ?>
                                                  </td>
                                                  <td class="col-sm-1 col-md-2 text-center"><strong><?=$rs['product_price_retail']?> ฿</strong></td>
                                                <?php }else{?>
                                                  <td class="col-sm-2" style="text-align: center">
                                                      <input type="text" onkeyup="return check_number(this.value)" class="form-control" onchange="calculate(this.value,10,<?=$rs['product_id']?>)" id="num<?=$rs['product_id']?>" value="<?=$num?>">
                                                    </td>
                                                <td class="col-sm-1 col-md-2 text-center"><strong>10 ฿</strong></td>
                                                <td colspan="4"></td>
                                              <?php } ?>
                                            <?php if(isset($_SESSION['user_id'])){ ?>
                                            <td class="col-md-1 text-center"><strong><?=$rs['product_price_dozen']?> ฿</strong></td>
                                            <td class="col-md-1 text-center"><strong><?=$rs['product_price_crate']?> ฿</strong></td>
                                            <?php }?>
                                            <td class="col-sm-1 col-md-1">
                                                <button type="button" class="btn btn-danger" onclick="del_product(<?=$rs['product_id']?>)"> <span class="glyphicon glyphicon-remove"></span> ยกเลิก </button>
                                            </td>
                                        </tr>
                                        <?php


                                      }
                                      }
                                       ?>
                                       <!--
                                        <tr>
                                            <td class="col-sm-5">
                                                <div class="media">
                                                    <a class="thumbnail pull-left" href="#"> <img class="media-object" src="img/457841.png" style="width: 72px; height: 72px;"> </a>
                                                    <div class="media-body tuiosftp">
                                                        <h4 class="media-heading">กิ๊ฟติดผม</h4>
                                                        <h4 class="media-heading"> รหัส : สินค้าบิวตี้</h4> <span>สถานะ : </span><span class="text-success"><strong>มีในสต็อก</strong></span> </div>
                                                </div>
                                            </td>
                                            <td class="col-sm-2" style="text-align: center">
                                                <input type="email" class="form-control" id="exampleInputEmail1" value="1"> </td>
                                            <td class="col-sm-1 col-md-1 text-center"><strong>10 ฿</strong></td>
                                            <td class="col-md-1 text-center"><strong>50 ฿</strong></td>
                                            <td class="col-md-1 text-center"><strong>50 ฿</strong></td>
                                            <td class="col-md-1 text-center"><strong>150 ฿</strong></td>
                                            <td class="col-sm-1 col-sm-1">
                                                <button type="button" class="btn btn-danger"> <span class="glyphicon glyphicon-remove"></span> ยกเลิก </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-sm-5">
                                                <div class="media">
                                                    <a class="thumbnail pull-left" href="#"> <img class="media-object" src="img/460401.png" style="width: 72px; height: 72px;"> </a>
                                                    <div class="media-body tuiosftp">
                                                        <h4 class="media-heading">กล่องใส่ดินสอ</h4>
                                                        <h4 class="media-heading"> รหัส : สินค้าเครื่องเขียน</h4> <span>สถานะ : </span><span class="text-success"><strong>มีในสต็อก</strong></span> </div>
                                                </div>
                                            </td>
                                            <td class="col-sm-2" style="text-align: center">
                                                <input type="email" class="form-control" id="exampleInputEmail1" value="1"> </td>
                                            <td class="col-sm-1 col-md-1 text-center"><strong>10 ฿</strong></td>
                                            <td class="col-md-1 text-center"><strong>50 ฿</strong></td>
                                            <td class="col-md-1 text-center"><strong>50 ฿</strong></td>
                                            <td class="col-md-1 text-center"><strong>150 ฿</strong></td>
                                            <td class="col-sm-1 col-sm-1">
                                                <button type="button" class="btn btn-danger"> <span class="glyphicon glyphicon-remove"></span> ยกเลิก </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-sm-5">
                                                <div class="media">
                                                    <a class="thumbnail pull-left" href="#"> <img class="media-object" src="img/460071.png" style="width: 72px; height: 72px;"> </a>
                                                    <div class="media-body tuiosftp">
                                                        <h4 class="media-heading">ยางรัดผม</h4>
                                                        <h4 class="media-heading"> รหัส : สินค้าบิวตี้</h4> <span>สถานะ : </span><span class="text-success"><strong>มีในสต็อก</strong></span> </div>
                                                </div>
                                            </td>
                                            <td class="col-sm-2" style="text-align: center">
                                                <input type="email" class="form-control" id="exampleInputEmail1" value="1"> </td>
                                            <td class="col-sm-1 col-md-1 text-center"><strong>10 ฿</strong></td>
                                            <td class="col-md-1 text-center"><strong>50 ฿</strong></td>
                                            <td class="col-md-1 text-center"><strong>50 ฿</strong></td>
                                            <td class="col-md-1 text-center"><strong>150 ฿</strong></td>
                                            <td class="col-sm-1 col-sm-1">
                                                <button type="button" class="btn btn-danger"> <span class="glyphicon glyphicon-remove"></span> ยกเลิก </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-sm-5">
                                                <div class="media">
                                                    <a class="thumbnail pull-left" href="#"> <img class="media-object" src="img/461601.png" style="width: 72px; height: 72px;"> </a>
                                                    <div class="media-body tuiosftp">
                                                        <h4 class="media-heading">กระดาษโฟสอิท</h4>
                                                        <h4 class="media-heading"> รหัส : สินค้าเครื่องเขียน</h4> <span>สถานะ : </span><span class="text-success"><strong>มีในสต็อก</strong></span> </div>
                                                </div>
                                            </td>
                                            <td class="col-sm-2" style="text-align: center">
                                                <input type="email" class="form-control" id="exampleInputEmail1" value="1"> </td>
                                            <td class="col-sm-1 col-md-1 text-center"><strong>10 ฿</strong></td>
                                            <td class="col-md-1 text-center"><strong>50 ฿</strong></td>
                                            <td class="col-md-1 text-center"><strong>50 ฿</strong></td>
                                            <td class="col-md-1 text-center"><strong>150 ฿</strong></td>
                                            <td class="col-sm-1 col-sm-1">
                                                <button type="button" class="btn btn-danger"> <span class="glyphicon glyphicon-remove"></span> ยกเลิก </button>
                                            </td>
                                        </tr>-->
                                    </tbody>
                                    <tfoot >
                                        <tr>
                                          <td colspan="5"  class="text-right">
                                                <h3><?=$text[$_SESSION['lang']]['order_header']?></h3>
                                              </td>
                                              <td class="text-right" width="250">
                                                  <h3><?=$text[$_SESSION['lang']]['price']?></h3>
                                                </td>
                                                <td class="text-right">
                                                    <h3><?=$text[$_SESSION['lang']]['quantity']?></h3>
                                                  </td>
                                                  <td class="text-right">
                                                      <h3><?=$text[$_SESSION['lang']]['unit']?></h3>
                                                    </td>
                                        </tr>
                                        <?php
                                        $cost=0;
                                        $session_crate=array();
                                        $session_dozen=array();
                                        $session_cart=array();
                                        if(isset($_SESSION['cart']) or isset($_SESSION['cart_dozen']) or isset($_SESSION['cart_crate'])){
                                        if(isset($_SESSION['cart'])){
                                          $_SESSION['cart'] = array_values($_SESSION['cart']);
                                          $cart=array_unique($_SESSION['cart']);
                                          $session_cart=$_SESSION['cart'];

                                        }
                                        if(isset($_SESSION['cart_dozen'])){
                                          $_SESSION['cart_dozen'] = array_values($_SESSION['cart_dozen']);
                                          $cart_dozen=array_unique($_SESSION['cart_dozen']);
                                          $session_dozen=$_SESSION['cart_dozen'];
                                        }
                                        if(isset($_SESSION['cart_crate'])){
                                          $_SESSION['cart_crate'] = array_values($_SESSION['cart_crate']);
                                          $cart_crate=array_unique($_SESSION['cart_crate']);
                                          $session_crate=$_SESSION['cart_crate'];
                                        }
                                        $new_cart=array();
                                        $new_cart=array();
                                        foreach ($session_cart as $key) {
                                          array_push($new_cart,$key);
                                        }
                                        foreach ($session_dozen as $key) {
                                          array_push($new_cart,$key);
                                        }
                                        foreach ($session_crate as $key) {
                                          array_push($new_cart,$key);
                                        }
                                        $new_cart=array_values(array_unique($new_cart));
                                        //print_r($new_cart);
                                        foreach ($new_cart as $value) {
                                          $num=0;
                                          $num_dozen=0;
                                          $num_crate=0;
                                          $id=$value;
                                        for ($j=0; $j < count($_SESSION['cart']); $j++) {
                                          if(isset($_SESSION['cart'][$j])){
                                            if($id==$_SESSION['cart'][$j]){
                                              $num++;
                                            }
                                          }
                                        }
                                        if(isset($_SESSION['cart_dozen'])){
                                        for ($j=0; $j < count($_SESSION['cart_dozen']); $j++) {
                                          if(isset($_SESSION['cart_dozen'][$j])){
                                            if($id==$_SESSION['cart_dozen'][$j]){
                                              $num_dozen++;
                                            }
                                          }
                                        }
                                      }
                                      if(isset($_SESSION['cart_crate'])){
                                      for ($j=0; $j < count($_SESSION['cart_crate']); $j++) {
                                        if(isset($_SESSION['cart_crate'][$j])){
                                          if($id==$_SESSION['cart_crate'][$j]){
                                            $num_crate++;
                                          }
                                        }
                                      }
                                    }
                                          $sql="SELECT * FROM product WHERE product_id={$id}";
                                          if(!$q=mysql_query($sql))echo mysql_error();
                                          $rs=mysql_fetch_array($q);?>
                                          <tr class="foot">
                                              <td colspan="5" class="text-right">
                                                <?=$rs['product_name']?>
                                                </td>
                                                <td class="text-right">
                                                  <?php if(isset($_SESSION['user_id'])){?>
                                                    <?=$rs['product_price_retail']?>฿
                                                    <br>
                                                    <?=$rs['product_price_dozen']?>฿
                                                    <br>
                                                    <?=$rs['product_price_crate']?>฿
                                                <?php  }else{?>
                                                    10 ฿/<?=$text[$_SESSION['lang']]['piece']?>
                                                <?php  } ?>
                                                </td>
                                                  <td class="text-right" >
                                                    <?php if(isset($_SESSION['user_id'])){?>
                                                      <div id="chin<?=$id?>"><?=$num?></div>
                                                      <div id="chin_dozen<?=$id?>"><?=$num_dozen?></div>
                                                      <div id="chin_crate<?=$id?>"><?=$num_crate?></div>


                                                    <?php  }else{?>
                                                      <div id="chin<?=$id?>"><?=$num?></div>


                                                  <?php  } ?>
                                                  </td>
                                                  <?php if(isset($_SESSION['user_id'])){?>
                                                  <td class="text-right"> <?=$text[$_SESSION['lang']]['piece']?>
                                                   <br><?=$text[$_SESSION['lang']]['dozen']?>
                                                   <br><?=$text[$_SESSION['lang']]['crate']?></td>
                                                  <?php  }else{?>
                                                  <td class="text-right"> <?=$text[$_SESSION['lang']]['piece']?></td>
                                                  <?php  } ?>
                                          </tr class="foot">
                                          <?php
                                          if(isset($_SESSION['user_id'])){
                                            $cost+=($rs['product_price_retail']*$num);
                                            $cost+=($rs['product_price_dozen']*$num_dozen);
                                            $cost+=($rs['product_price_crate']*$num_crate);
                                          }else{
                                            $cost+=(10*$num);
                                          }

                                        }
                                      }
                                         ?>
                                         <tr>
                                           <td colspan="6" class="text-right">
                                               <h3>รวม</h3>
                                             </td>
                                             <td class="text-right">
                                                <h3 id="total"> <?=number_format($cost,2);?></h3>
                                               </td>
                                               <td class="text-right">
                                                  <h3> บาท</h3>
                                                 </td>
                                         </tr><?php  if(!isset($_SESSION['user_id']) and isset($_SESSION['cart'])){?>
                                           <tr>
                                             <td class="text-right" colspan="6" align="right" require> <?=$text[$_SESSION['lang']]['type_name']?> <font color="red">*</font></td>
                                             <td colspan="2" align="right"> <input placeholder="" class="form-control" type="text" name="" id="type_name" value=""></td>
                                         </tr>
                                         <tr>
                                           <td class="text-right" colspan="6" align="right" require> <?=$text[$_SESSION['lang']]['type_address']?> <font color="red">*</font></td>
                                           <td colspan="2" align="right"> <input placeholder="" class="form-control" type="text" name="" id="type_address" value=""></td>
                                       </tr>
                                       <tr>
                                         <td class="text-right" colspan="6" align="right" require> <?=$text[$_SESSION['lang']]['type_tell']?> <font color="red">*</font></td>
                                         <td colspan="2" align="right"> <input placeholder="023456789" class="form-control" type="text" name="" id="type_tell" value=""></td>
                                     </tr>
                                           <tr>
                                             <td class="text-right" colspan="6" align="right" require> <?=$text[$_SESSION['lang']]['type_email']?> <font color="red">*</font></td>
                                             <td colspan="2" align="right"> <input placeholder="example@email.com" class="form-control" type="text" name="" id="email" value=""></td>
                                         </tr>
                                       <?php } ?>
                                        <tr>

                                            <td>
                                              <?php
                                              $sql_payment="SELECT * FROM content WHERE content_page='11'";
                                              $rs_payment=mysql_fetch_array(mysql_query($sql_payment));
                                              $q_payment=mysql_query($sql_payment);
                                              $num=mysql_num_rows($q_payment);
                                              if($num>0){
                                              echo $rs_payment[$text[$_SESSION['lang']]['content']];
                                            }
                                            else{
                                              ?>
                                              <img src="img/bangkokbank.jpg" width="75" height="75" alt="">
                                              <br><b>ธนาคารกรุงเทพ</b>
                                              <br>ชื่อ : นาย ช่องทาง การโอนเงิน
                                              <br>เลขที่บัญชี 000-0-00000-0
                                              <br>
                                              <br>
                                              <img src="img/KB.jpg" width="75" height="75" alt="">
                                              <br><b>ธนาคารกสิกร</b>
                                              <br>ชื่อ : นาย ช่องทาง การโอนเงิน
                                              <br>เลขที่บัญชี 000-0-00000-0
                                              <br>
                                              <br>
                                              <img src="img/SCB.jpg" width="75" height="75" alt="">
                                              <br><b>ธนาคารไทยพาณิชย์</b>
                                              <br>ชื่อ : นาย ช่องทาง การโอนเงิน
                                              <br>เลขที่บัญชี 000-0-00000-0
                                              <br>
                                              <br>
                                            <?php
                                          }
                                               ?>
                                            </td>
                                            <td colspan="6" align="right">
                                                <button type="Success" class="btn btn-warning" onclick="window.location.href='product.php'"> <span class="glyphicon glyphicon-shopping-cart"></span> <?=$text[$_SESSION['lang']]['continue_shopping']?> </button>
                                            </td>

                                            <td>
                                                <?php
                                                if((isset($_SESSION['cart']) or isset($_SESSION['dozen']) or isset($_SESSION['crate'])) and isset($_SESSION['user_id'])){
                                                  if(count($_SESSION['cart'])>0 or count($_SESSION['dozen'])>0 or count($_SESSION['crate'])>0){
                                                    ?>
                                                    <button type="button" class="btn btn-warning" onclick="goto_orders_user()">
                                                      <?=$text[$_SESSION['lang']]['send_order']?> <span class="glyphicon glyphicon-play"></span></button>
                                                <?php
                                              }
                                                }
                                              else if(!isset($_SESSION['user_id']) and (isset($_SESSION['cart']) or isset($_SESSION['dozen']) or isset($_SESSION['crate']) )){
                                                if(count($_SESSION['cart'])>0 or count($_SESSION['dozen'])>0 or count($_SESSION['crate'])>0){
                                                  ?>
                                                  <button type="button" class="btn btn-warning" onclick="goto_orders()">
                                                    <?=$text[$_SESSION['lang']]['send_order']?> <span class="glyphicon glyphicon-play"></span></button>
                                                <?php
                                              }
                                            }
                                                 ?>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php require('inc_footer.php'); ?>
        <script src="js/jquery-2.1.4.js ">
        </script>
        <script src="js/jquery.mobile.custom.min.js "></script>
        <script src="js/main.js "></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjfnshB95ty4-Zv80yfFO9neCUj4l374E"></script>
        <script type="text/javascript">
          function del_product(id) {
            con=confirm("ต้องการยกเลิกสินค้าดังกล่าวใช่หรือไม่");
            if(con==true){
              window.location.href='del_product.php?id='+id;
            }

          }
        </script>
</body>
<style media="screen">
.foot {
  border-style: hidden;
}
</style>
<script type="text/javascript">

</script>
<?php
if(isset($_SESSION['user_id'])){
  $sql="SELECT * FROM user WHERE user_id='{$_SESSION['user_id']}'";
  $q=mysql_query($sql);
  $rs=mysql_fetch_array($q);
  $email=$rs['user_email'];
  $_SESSION['email']=$email;
  echo "<script>
  email='".$_SESSION['email']."';
  </script>";
}

 ?>
<script type="text/javascript">
var total=0;
var total_dozen=0;
var total_crate=0;

  function calculate(num,price,id){
    if(num==""){
      num=0;
    }
      if(num<0){
        document.getElementById('num'+id).value=0;
      }else{

      chin_id="chin"+id;
      xx=parseInt(num)-parseInt(document.getElementById(chin_id).innerHTML);
      document.getElementById(chin_id).innerHTML=num;
      window.location.href='order_product.php?id_change='+id+'&round='+xx;
    }
}
function calculate_dozen(num,price,id){
  if(num==""){
    num=0;
  }
    if(num<0){
      document.getElementById('num_dozen'+id).value=0;
    }else{

    chin_id="chin_dozen"+id;
    xx=parseInt(num)-parseInt(document.getElementById(chin_id).innerHTML);
    document.getElementById(chin_id).innerHTML=num;
    window.location.href='order_product.php?id_change_dozen='+id+'&round='+xx;
  }



}
function calculate_crate(num,price,id){
  if(num==""){
    num=0;
  }
    if(num<0){
      document.getElementById('num_crate'+id).value=0;
    }else{
    chin_id="chin_crate"+id;
    xx=parseInt(num)-parseInt(document.getElementById(chin_id).innerHTML);
    document.getElementById(chin_id).innerHTML=num;
    window.location.href='order_product.php?id_change_crate='+id+'&round='+xx;
  }



}
</script>
<script>
function goto_orders_user()
{

  if (confirm("ยืนยันคำสั่งซื้อ มูลค่า"+document.getElementById('total').innerHTML+" บาท"+
  "\nไปยังอีเมล "+email) == true) {
    window.open("send_orders.php",'_blank');
    setTimeout(function(){location.reload();}, 3000);
 }
}
function goto_orders()
{
  if(document.getElementById('type_name').value==""){
    alert("กรุณากรอกชื่อ เพื่อส่งใบสั่งซื้อ");
    document.getElementById('type_name').focus();
    return false;
  }
  if(document.getElementById('type_address').value==""){
    alert("กรุณากรอกที่อยู่ เพื่อส่งใบสั่งซื้อ");
    document.getElementById('type_address').focus();
    return false;
  }
  if(document.getElementById('type_tell').value==""){
    alert("กรุณากรอกเบอร์โทรศัพท์ เพื่อส่งใบสั่งซื้อ");
    document.getElementById('type_tell').focus();
    return false;
  }
  if(document.getElementById('email').value==""){
    alert("กรุณากรอกอีเมล เพื่อส่งใบสั่งซื้อ");
    document.getElementById('email').focus();
    return false;
  }
  else{
    if(check_email()==true){

  if (confirm("ยืนยันคำสั่งซื้อ มูลค่า"+document.getElementById('total').innerHTML+" บาท"+
  "\nไปยังอีเมล "+document.getElementById('email').value) == true) {
    $.ajax({
        url: "ajax.php",
        type: "POST",
        data:{
              email:document.getElementById('email').value,
              name:document.getElementById('type_name').value,
              address:document.getElementById('type_address').value,
              tell:document.getElementById('type_tell').value,
            },
        dataType: "html",
        success: function() {
        }
    });
    window.open("send_orders.php",'_blank');
    setTimeout(function(){location.reload();}, 3000);
  }
}
}

}
function check_email(){
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if (!(document.getElementById("email").value.match(mailformat)))
{
  alert("รูปแบบอีเมล ไม่ถูกต้อง");
  document.getElementById('email').focus();
  return false;
}
// else {
//   if(document.getElementById('email').value.search("gmail")<0){
//     alert("กรุณาใช้เฉพาะ gmail");
//     return false;
//   }else{
    return true;
  // }

// }
}
function check_number(salary) {
var vchar = String.fromCharCode(event.keyCode);
if ((vchar<'0' || vchar>'9')) return false;
salary.onKeyPress=vchar;

}
</script>
</html>
