<!doctype html>
<html>
<?php
$perpage=16;
if(isset($_GET['page'])){
  $page=$_GET['page'];
}else{
  $page=1;
}
$start=($page-1)*$perpage;
?>

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
  WHERE page.page_name='product'";
  $rs_header=mysql_fetch_array(mysql_query($sql_header));

   ?>
            <title>
                <?=$rs_header['title']?>
            </title>
            <meta name="keywords" content="<?=$rs_header['keywords']?>" />
            <meta name="description" content="<?=$rs_header['description']?>" />
            <meta charset="UTF-8">
            <meta name="viewport" content="initial-scale=1.0">
            <?php require('inc_header.php');
    include_once('style.php'); ?>
                <link href="https://fonts.googleapis.com/css?family=Itim|Mitr" rel="stylesheet">
                <link type="text/css" rel="stylesheet" href="css/font-awesome.css">
                <style media="screen">
                    .vlop {
                        position: absolute;
                        width: 85%;
                        bottom: 15px;
                        height: 70px;
                    }

                    .pagination {
                        display: inline-block;
                        padding: 10px;
                        margin: 20px 0;
                        border-radius: 4px;
                        margin-top: 89px;
                    }

                    .pom {
                        text-align: center;
                        margin-top: 5px;
                        position: absolute;
                        bottom: 0;
                        left: -18px;
                    }
                    .text-fan-user {
        font-size: 13px;
        font-family: 'Itim', cursive;
        color: #43200c;
        margin-top: 5px;
        text-align: left;
        height: 200px;
    }
                </style>
    </head>

    <body class="bgabout">
        <div class="container-fluid">
            <div class="row">
                <div class="rol-sm-12">
                    <?php require('inc_menu.php'); ?>
                        <div class="container">
                            <div class="row ">
                                <div class="col-sm-12">
                                    <div class="text-about wow fadeInDown"><img src="img/bar-chart.png" class="img-responsive">&nbsp;
                                        <?=$text[$_SESSION['lang']]['product']?>
                                    </div>
                                    <div class="col-sm-2 iconproduct nopan wow fadeInLeft">
                                      <?php
                                $sql="SELECT * FROM product_category WHERE product_category_name_th='สินค้าแนะนำ/ใหม่'";
                                $q=mysql_query($sql);
                                while($rs=mysql_fetch_array($q)){?> <a href="product.php?id=<?=$rs['product_category_id']?>"><img src="backoffice/image/<?=$rs['product_category_img']?>" class="img-responsive"><?=$rs[$text[$_SESSION['lang']]['product_category_name']]?></a>
                                          <br>
                                          <?php
                                }
                                ?>
                                        <?php

                                  $sql="SELECT * FROM product_category WHERE product_category_name_th!='สินค้าแนะนำ/ใหม่'";
                                  $q=mysql_query($sql);
                                  while($rs=mysql_fetch_array($q)){?> <a href="product.php?id=<?=$rs['product_category_id']?>"><img src="backoffice/image/<?=$rs['product_category_img']?>" class="img-responsive"><?=$rs[$text[$_SESSION['lang']]['product_category_name']]?></a>
                                            <br>
                                            <?php
                                  }
                                  ?>
                                                <!--
                                    <a href="product.php"><img src="img/shopping-bag.png" class="img-responsive"> สินค้าแนะนะ/ใหม่</a>
                                    <br>
                                    <a href="product.php"><img src="img/holiday.png" class="img-responsive"> สินค้าขายดี</a>
                                    <br>
                                    <a href="product.php"><img src="img/19578388_1501704033228720_1505233108_n.png" class="img-responsive"> สินค้ากิ๊ฟช็อป</a>
                                    <br>
                                    <a href="product.php"><img src="img/cosmetics.png" class="img-responsive"> สินค้าบิวตี้</a>
                                    <br>
                                    <a href="product.php"><img src="img/list.png" class="img-responsive"> สินค้าเครื่องเขียน</a>
                                    <br>
                                    <a href="product.php"><img src="img/karaoke.png" class="img-responsive"> สินค้าของเด็กเล่น</a>
                                    <br>
                                    <a href="product.php"><img src="img/cooking.png" class="img-responsive"> สินค้าเครื่องครัว</a>
                                    <br>
                                    <a href="product.php"><img src="img/improvement.png" class="img-responsive"> สินค้าเครื่องมือช่าง</a>
                                    <br>
                                    <a href="product.php"><img src="img/shower.png" class="img-responsive"> สินค้าของใช้ในห้องน้ำ</a>
                                    <br>
                                    <a href="product.php"><img src="img/teeth-cleaning.png" class="img-responsive"> สินค้าของใช้ในบ้าน</a>
                                    <br>
                                    <a href="product.php"><img src="img/mobile-phone.png" class="img-responsive"> สินค้าไอที</a>
                                    <br>
                                    <a href="product.php"><img src="img/flower.png" class="img-responsive"> สินค้าดอกไม้ปลอม</a>
                                    <br>
                                    <a href="product.php"><img src="img/wallet.png" class="img-responsive"> สินค้าสินค้าพลาสติก</a>
                                    <br>
                                    <a href="product.php"><img src="img/ice-cream.png" class="img-responsive"> สินค้าขายดี</a>
                                    <br>
                                    <a href="product.php"><img src="img/birthday.png" class="img-responsive"> สินค้าขายดี</a>
                                  <!-- Banner 190 x 440 cm.
                                  <div class="banner"><img src="img/banner-1.png" class="img-responsive"></div>
                                  <div class="banner"><img src="img/banner-1.png" class="img-responsive"></div>
                                  -->
                                                <?php   $sql="SELECT *
                                      FROM banner
                                      LEFT OUTER JOIN banner_type
                                      ON banner.banner_type=banner_type.banner_type_id
                                      WHERE banner_type_name_th='side_สินค้า' AND banner_show_status='1'";
                                      $q=mysql_query($sql);
                                      if(mysql_num_rows($q)==0){?>
                                                    <div class="banner"><img src="img/banner-1.png" class="img-responsive"></div>
                                                    <div class="banner"><img src="img/banner-1.png" class="img-responsive"></div>
                                                    <?php
                                      }
                                      while ($rs=mysql_fetch_array($q)) {?>
                                                        <div class="banner"><img src="backoffice/image/<?=$rs['banner_file']?>" class="img-responsive"></div>
                                                        <?php
                                      }

                                      ?>
                                    </div>
                                    <div class="col-sm-10 wow fadeInRight">
                                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <?php
                                          $sql="SELECT *
                                          FROM banner
                                          LEFT OUTER JOIN banner_type
                                          ON banner.banner_type=banner_type.banner_type_id
                                          WHERE banner_type_name_th='สินค้า' AND banner_show_status='1'";
                                          $q=mysql_query($sql);
                                          $dot=mysql_num_rows($q);
                                          for ($i=0; $i < $dot; $i++) {
                                            if($i==0){?>
                                                    <li data-target="#carousel-example-generic" data-slide-to="<?=$i?>" class="active"></li>
                                                    <?php  }else{?>
                                                        <li data-target="#carousel-example-generic" data-slide-to="<?=$i?>"></li>
                                                        <?php
                                          }
                                          }
                                           ?>
                                                            <!-- ปุ่มของ Banner
                                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                          -->
                                            </ol>
                                            <div class="carousel-inner" role="listbox">
                                                <?php

                                          $i=1;
                                          while ($rs=mysql_fetch_array($q)){
                                            if($i==1){
                                              echo "<div class='item active'>";
                                              $i++;
                                            }
                                            else {
                                              echo "<div class='item'>";
                                            }
                                           ?> <img src="backoffice/image/<?=$rs['banner_file']?>" alt="..." width="100%" height="500px"> </div>
                                            <?php } ?>
                                                <!-- Banner
                                           <div class="item active">
                                               <img src="img/sdf1.png" alt="..." width="100%" height="500px">
                                            </div>
                                            <div class="item">
                                              <img src="img/sdf2.png" alt="..." width="100%" height="500px">
                                            </div>
                                            <div class="item">
                                              <img src="img/sdf3.png" width="100%" height="500px">
                                            </div>
                                          --></div>
                                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                                    </div>
                                    <?php
                                    if(isset($_GET['id'])){
                                      $sql_check="SELECT * FROM product WHERE product_category={$_GET['id']}";
                                      $q_check=mysql_query($sql_check);
                                      $total_record=mysql_num_rows($q_check);
                                      if($total_record>0){
                                      $total_page=ceil($total_record/$perpage);
                                      $sql_product="SELECT * FROM product WHERE product_category={$_GET['id']} LIMIT {$start},{$perpage}";
                                    }else{
                                      echo "<script>
                                        alert('ไม่มีข้อมูล');
                                        window.location.href='product.php';
                                      </script>";
                                    }

                                    }else{
                                      $sql_check="SELECT * FROM product";
                                      $q_check=mysql_query($sql_check);
                                      $total_record=mysql_num_rows($q_check);
                                      $total_page=ceil($total_record/$perpage);

                                      $sql_product="SELECT * FROM product ORDER BY product_id DESC LIMIT {$start},{$perpage}";
                                    }

                                    $q_product=mysql_query($sql_product);
                                    $check=4;

                                    $num=mysql_num_rows($q_product);

                                    if($total_record>0){
                                    while($rs_product=mysql_fetch_array($q_product)){
                                      $retail=$rs_product['product_price_retail'];
                                      $dozen=$rs_product['product_price_dozen'];
                                      $crate=$rs_product['product_price_crate'];
                                    if($check==4){?>
                                        <div class="col-xs-12 nopan centerproduct img-po1">
                                            <div class="item col-sm-3 ">
                                                <div class="crop"><img src="backoffice/image/<?=$rs_product['product_img']?>" class="img-responsive"></div>
                                                <!-- <div <?php if (isset($_SESSION['user_id'])): ?>
                                                  class="crop-taber"
                                                <?php else: ?>
                                                  class="crop-taber-new"
                                                <?php endif; ?>
                                                > -->
                                                <div class="crop-taber">
                                                    <div class="row">
                                                        <div class="col-sm-6 ">
                                                            <div class="text-font-por"> <span><?=$rs_product['product_name']?></span> </div>
                                                        </div>
                                                        <div class="col-sm-6 ">
                                                            <div class="font-por-1">
                                                                <?=$text[$_SESSION['lang']]['price']?>
                                                                    <?php if(isset($_SESSION['user_id']))echo $rs_product['product_price_retail']; else echo "10";?> ฿</div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12 ">
                                                            <div <?php if(isset($_SESSION['user_id']))echo "class='text-fan-user'"; else echo "class='text-fan'";?> style="">
                                                                <?=$text[$_SESSION['lang']]['id']?> :
                                                                    <?php echo $rs_product['product_id_product']; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php if(isset($_SESSION['user_id'])){ ?>
                                                        <div class="vlop">
                                                            <br>แฟรนไชส์
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="col-sm-4 nopan">
                                                                        <div class="tab-por">
                                                                            <?=$text[$_SESSION['lang']]['piece']?>
                                                                                <br>
                                                                                <?php echo $retail; ?> ฿ </div>
                                                                    </div>
                                                                    <div class="col-sm-4 nopan">
                                                                        <div class="tab-por">
                                                                            <?=$text[$_SESSION['lang']]['dozen']?>
                                                                                <br>
                                                                                <?php echo $dozen; ?> ฿ </div>
                                                                    </div>
                                                                    <div class="col-sm-4 nopan">
                                                                        <div class="tab-por">
                                                                            <?=$text[$_SESSION['lang']]['crate']?>
                                                                                <br>
                                                                                <?php echo $crate; ?> ฿ </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php } ?>
                                                            <div class="pom">
                                                                <button type="Success" onclick="add_id(<?=$rs_product['product_id']?>)" class="btn btn-success add-to-cart">ใส่ตะกร้า</button>
                                                            </div>
                                                </div>
                                            </div>
                                            <?php $check-=1; $num--;
                                  }else if ($check!=0 and $num!=0) {?>
                                                <div class="item col-sm-3 ">
                                                    <div class="crop"><img src="backoffice/image/<?=$rs_product['product_img']?>" class="img-responsive"></div>
                                                    <!-- <div <?php if (isset($_SESSION['user_id'])): ?>
                                                      class="crop-taber"
                                                    <?php else: ?>
                                                      class="crop-taber-new"
                                                    <?php endif; ?>
                                                    > -->
                                                    <div class="crop-taber">
                                                        <div class="row">
                                                            <div class="col-sm-6 ">
                                                                <div class="text-font-por">
                                                                    <?=$rs_product['product_name']?>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 ">
                                                                <div class="font-por-1">
                                                                    <?=$text[$_SESSION['lang']]['price']?>
                                                                        <?php if(isset($_SESSION['user_id']))echo $rs_product['product_price_retail']; else echo "10";?> ฿</div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-12 ">
                                                                <div <?php if(isset($_SESSION['user_id']))echo "class='text-fan-user'"; else echo "class='text-fan'";?>>
                                                                    <?=$text[$_SESSION['lang']]['id']?> :
                                                                        <?php echo $rs_product['product_id_product']; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php if(isset($_SESSION['user_id'])){ ?>
                                                            <div class="vlop">
                                                                <br>แฟรนไชส์
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-4 nopan">
                                                                            <div class="tab-por">
                                                                                <?=$text[$_SESSION['lang']]['piece']?>
                                                                                    <br>
                                                                                    <?php echo $retail; ?> ฿ </div>
                                                                        </div>
                                                                        <div class="col-sm-4 nopan">
                                                                            <div class="tab-por">
                                                                                <?=$text[$_SESSION['lang']]['dozen']?>
                                                                                    <br>
                                                                                    <?php echo $dozen; ?> ฿ </div>
                                                                        </div>
                                                                        <div class="col-sm-4 nopan">
                                                                            <div class="tab-por">
                                                                                <?=$text[$_SESSION['lang']]['crate']?>
                                                                                    <br>
                                                                                    <?php echo $crate; ?> ฿ </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php } ?>
                                                                <div class="pom">
                                                                    <button type="Success" onclick="add_id(<?=$rs_product['product_id']?>)" class="btn btn-success add-to-cart">ใส่ตะกร้า</button>
                                                                </div>
                                                    </div>
                                                </div>
                                                <?php $check--; $num--;}
                                else if ($check==0 and $num!=0) {?>
                                                    <div class="col-xs-12 nopan centerproduct img-po1">
                                                        <div class="item col-sm-3 ">
                                                            <div class="crop"> <img src="backoffice/image/<?=$rs_product['product_img']?>" class="img-responsive"> </div>
                                                            <div class="crop-taber">
                                                                <div class="row">
                                                                    <div class="col-sm-6 ">
                                                                        <div class="text-font-por">
                                                                            <?=$rs_product['product_name']?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 ">
                                                                        <div class="font-por-1">
                                                                            <?=$text[$_SESSION['lang']]['price']?>
                                                                                <?php if(isset($_SESSION['user_id']))echo $rs_product['product_price_retail']; else echo "10";?> ฿</div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-12 ">
                                                                        <div <?php if(isset($_SESSION['user_id']))echo "class='text-fan-user'"; else echo "class='text-fan'";?>>
                                                                            <?=$text[$_SESSION['lang']]['id']?> :
                                                                                <?php echo $rs_product['product_id_product']; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <?php if(isset($_SESSION['user_id'])){ ?>
                                                                    <div class="vlop">
                                                                        <br>แฟรนไชส์
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div class="col-sm-4 nopan">
                                                                                    <div class="tab-por">
                                                                                        <?=$text[$_SESSION['lang']]['piece']?>
                                                                                            <br>
                                                                                            <?php echo $retail; ?> ฿ </div>
                                                                                </div>
                                                                                <div class="col-sm-4 nopan">
                                                                                    <div class="tab-por">
                                                                                        <?=$text[$_SESSION['lang']]['dozen']?>
                                                                                            <br>
                                                                                            <?php echo $dozen; ?> ฿ </div>
                                                                                </div>
                                                                                <div class="col-sm-4 nopan">
                                                                                    <div class="tab-por">
                                                                                        <?=$text[$_SESSION['lang']]['crate']?>
                                                                                            <br>
                                                                                            <?php echo $crate; ?> ฿ </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <?php } ?>
                                                                        <div class="pom">
                                                                            <button type="Success" onclick="add_id(<?=$rs_product['product_id']?>)" class="btn btn-success add-to-cart">ใส่ตะกร้า</button>
                                                                        </div>
                                                            </div>
                                                        </div>
                                                        <?php $check=3;$num--;  }
                              if($num==0){
                                ?>
                                                            <div class="row col-xs-12" style="text-align:center;">
                                                                <ul class="pagination pagination-sm ">
                                                                    <?php
                                          $link="";
                                          if(isset($_GET['id'])){
                                              $link="&id=".$_GET['id'];
                                          }
                                            if($page==1){?>
                                                                        <li class="disabled"><a href="#">&laquo;</a></li>
                                                                        <?php
                                            }else{?>
                                                                            <li><a href="product.php?page=1<?=$link?>">&laquo;</a></li>
                                                                            <?php
                                          }
                                          $p=0;
                                            for ($i=1; $i <= $total_page; $i++) {
                                              $page1=$page-2;
                                              $page2=$page+2;
                                              if($total_page<4){
                                              if($page==$i){?>
                                                                                <li class="active">
                                                                                    <a href="product.php?page=<?=$i.$link?>">
                                                                                        <?=$i?>
                                                                                    </a>
                                                                                </li>
                                                                                <?php  }else{  ?>
                                                                                    <li>
                                                                                        <a href="product.php?page=<?=$i.$link?>">
                                                                                            <?=$i?>
                                                                                        </a>
                                                                                    </li>
                                                                                    <?php
                                            }
                                          }else{
                                            if($page1>0 and $page2<=$total_page){
                                            if($page==$i){?>
                                                                                        <li class="active">
                                                                                            <a href="product.php?page=<?=$i.$link?>">
                                                                                                <?=$i?>
                                                                                            </a>
                                                                                        </li>
                                                                                        <?php  }else if($i>=$page1 and $i<=$page2){  ?>
                                                                                            <li>
                                                                                                <a href="product.php?page=<?=$i.$link?>">
                                                                                                    <?=$i?>
                                                                                                </a>
                                                                                            </li>
                                                                                            <?php
                                          }
                                        }else if($page2>$total_page){
                                          $page1=$page1+($total_page-$page2);
                                          if($page==$i){?>
                                                                                                <li class="active">
                                                                                                    <a href="product.php?page=<?=$i.$link?>">
                                                                                                        <?=$i?>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <?php $p++;  }else if($p<5 and $i>=$page1){  ?>
                                                                                                    <li>
                                                                                                        <a href="product.php?page=<?=$i.$link?>">
                                                                                                            <?=$i?>
                                                                                                        </a>
                                                                                                    </li>
                                                                                                    <?php
                                        $p++;
                                        }

                                      }else if($page1<=0){
                                        $page2=5;
                                        if($page==$i){?>
                                                                                                        <li class="active">
                                                                                                            <a href="product.php?page=<?=$i.$link?>">
                                                                                                                <?=$i?>
                                                                                                            </a>
                                                                                                        </li>
                                                                                                        <?php $p++;  }else if($p<5 and $i<=$page2){  ?>
                                                                                                            <li>
                                                                                                                <a href="product.php?page=<?=$i.$link?>">
                                                                                                                    <?=$i?>
                                                                                                                </a>
                                                                                                            </li>
                                                                                                            <?php
                                        $p++;
                                        }
                                      }



                                          }
                                        }
                                            if($page==$total_page){?>
                                                                                                                <li class="disabled"><a href="#">&raquo;</a></li>
                                                                                                                <?php
                                            }else{?>
                                                                                                                    <li><a href="product.php?page=<?=$total_page.$link?>">&raquo;</a></li>
                                                                                                                    <?php
                                            }
                                            ?>
                                                                </ul>
                                                            </div>
                                                    </div>
                                                    <?php

                                  }
                                }
                              } else {
                                     ?>
                                                        <div class="col-xs-12 nopan centerproduct img-po1" style="margin-bottom:200px;">
                                                            <div class="item col-sm-3 "> <img src="img/460401.png" class="img-responsive">
                                                                <div class="row">
                                                                    <div class="col-sm-6 ">
                                                                        <div class="text-font-por">กล่องดินสอ </div>
                                                                    </div>
                                                                    <div class="col-sm-6 ">
                                                                        <div class="font-por-1">ราคา 10 ฿</div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-12 ">
                                                                        <div <?php if(isset($_SESSION['user_id']))echo "class='text-fan-user'"; else echo "class='text-fan'";?>>รหัส : สินค้าเครื่องเขียน
                                                                            <br>แฟรนไชส์ </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-4 nopan">
                                                                            <div class="tab-por"> โหล
                                                                                <br> 70 ฿ </div>
                                                                        </div>
                                                                        <div class="col-sm-4 nopan">
                                                                            <div class="tab-por"> โหล
                                                                                <br> 70 ฿ </div>
                                                                        </div>
                                                                        <div class="col-sm-4 nopan">
                                                                            <div class="tab-por"> โหล
                                                                                <br> 70 ฿ </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="pom">
                                                                    <button type="Success" class="btn btn-success add-to-cart">ใส่ตะกร้า</button>
                                                                </div>
                                                            </div>
                                                            <div class="item col-sm-3 "> <img src="img/457821.png" class="img-responsive">
                                                                <div class="row">
                                                                    <div class="col-sm-6 ">
                                                                        <div class="text-font-por">กิ๊ฟติดผม </div>
                                                                    </div>
                                                                    <div class="col-sm-6 ">
                                                                        <div class="font-por-1">ราคา 10 ฿</div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-12 ">
                                                                        <div <?php if(isset($_SESSION['user_id']))echo "class='text-fan-user'"; else echo "class='text-fan'";?>>รหัส : สินค้าบิวตี้
                                                                            <br>แฟรนไชส์ </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-4 nopan">
                                                                            <div class="tab-por"> โหล
                                                                                <br> 70 ฿ </div>
                                                                        </div>
                                                                        <div class="col-sm-4 nopan">
                                                                            <div class="tab-por"> โหล
                                                                                <br> 70 ฿ </div>
                                                                        </div>
                                                                        <div class="col-sm-4 nopan">
                                                                            <div class="tab-por"> โหล
                                                                                <br> 70 ฿ </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="pom">
                                                                    <button type="Success" class="btn btn-success add-to-cart">ใส่ตะกร้า</button>
                                                                </div>
                                                            </div>
                                                            <div class="item col-sm-3 "> <img src="img/sd.jpg" class="img-responsive">
                                                                <div class="row">
                                                                    <div class="col-sm-6 ">
                                                                        <div class="text-font-por">ไม้บรรทัด </div>
                                                                    </div>
                                                                    <div class="col-sm-6 ">
                                                                        <div class="font-por-1">ราคา 10 ฿</div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-12 ">
                                                                        <div <?php if(isset($_SESSION['user_id']))echo "class='text-fan-user'"; else echo "class='text-fan'";?>>รหัส : สินค้าเครื่องเขียน
                                                                            <br>แฟรนไชส์ </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-4 nopan">
                                                                            <div class="tab-por"> โหล
                                                                                <br> 70 ฿ </div>
                                                                        </div>
                                                                        <div class="col-sm-4 nopan">
                                                                            <div class="tab-por"> โหล
                                                                                <br> 70 ฿ </div>
                                                                        </div>
                                                                        <div class="col-sm-4 nopan">
                                                                            <div class="tab-por"> โหล
                                                                                <br> 70 ฿ </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="pom">
                                                                    <button type="Success" class="btn btn-success add-to-cart">ใส่ตะกร้า</button>
                                                                </div>
                                                            </div>
                                                            <div class="item col-sm-3 "> <img src="img/DSCF24701.png" class="img-responsive">
                                                                <div class="row">
                                                                    <div class="col-sm-6 ">
                                                                        <div class="text-font-por">หวีกระจก </div>
                                                                    </div>
                                                                    <div class="col-sm-6 ">
                                                                        <div class="font-por-1">ราคา 10 ฿</div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-12 ">
                                                                        <div <?php if(isset($_SESSION['user_id']))echo "class='text-fan-user'"; else echo "class='text-fan'";?>>รหัส : สินค้าบิวตี้
                                                                            <br>แฟรนไชส์ </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-4 nopan">
                                                                            <div class="tab-por"> โหล
                                                                                <br> 70 ฿ </div>
                                                                        </div>
                                                                        <div class="col-sm-4 nopan">
                                                                            <div class="tab-por"> โหล
                                                                                <br> 70 ฿ </div>
                                                                        </div>
                                                                        <div class="col-sm-4 nopan">
                                                                            <div class="tab-por"> โหล
                                                                                <br> 70 ฿ </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="pom">
                                                                    <button type="Success" class="btn btn-success add-to-cart">ใส่ตะกร้า</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 nopan img-po2" style="margin-bottom:200px;">
                                                            <div class="item col-sm-3 "> <img src="img/460071.png" class="img-responsive">
                                                                <div class="row">
                                                                    <div class="col-sm-6 ">
                                                                        <div class="text-font-por">ยางรัดผม </div>
                                                                    </div>
                                                                    <div class="col-sm-6 ">
                                                                        <div class="font-por-1">ราคา 10 ฿</div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-12 ">
                                                                        <div <?php if(isset($_SESSION['user_id']))echo "class='text-fan-user'"; else echo "class='text-fan'";?>>รหัส : สินค้าบิวตี้
                                                                            <br>แฟรนไชส์ </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-4 nopan">
                                                                            <div class="tab-por"> โหล
                                                                                <br> 70 ฿ </div>
                                                                        </div>
                                                                        <div class="col-sm-4 nopan">
                                                                            <div class="tab-por"> โหล
                                                                                <br> 70 ฿ </div>
                                                                        </div>
                                                                        <div class="col-sm-4 nopan">
                                                                            <div class="tab-por"> โหล
                                                                                <br> 70 ฿ </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="pom">
                                                                    <button type="Success" class="btn btn-success add-to-cart">ใส่ตะกร้า</button>
                                                                </div>
                                                            </div>
                                                            <div class="item col-sm-3 "> <img src="img/458061.png" class="img-responsive">
                                                                <div class="row">
                                                                    <div class="col-sm-6 ">
                                                                        <div class="text-font-por">ยางลบ </div>
                                                                    </div>
                                                                    <div class="col-sm-6 ">
                                                                        <div class="font-por-1">ราคา 10 ฿</div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-12 ">
                                                                        <div <?php if(isset($_SESSION['user_id']))echo "class='text-fan-user'"; else echo "class='text-fan'";?>>รหัส : สินค้าเครื่องเขียน
                                                                            <br>แฟรนไชส์ </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-4 nopan">
                                                                            <div class="tab-por"> โหล
                                                                                <br> 70 ฿ </div>
                                                                        </div>
                                                                        <div class="col-sm-4 nopan">
                                                                            <div class="tab-por"> โหล
                                                                                <br> 70 ฿ </div>
                                                                        </div>
                                                                        <div class="col-sm-4 nopan">
                                                                            <div class="tab-por"> โหล
                                                                                <br> 70 ฿ </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="pom">
                                                                    <button type="Success" class="btn btn-success add-to-cart">ใส่ตะกร้า</button>
                                                                </div>
                                                            </div>
                                                            <div class="item col-sm-3 "> <img src="img/1234.png" class="img-responsive">
                                                                <div class="row">
                                                                    <div class="col-sm-6 ">
                                                                        <div class="text-font-por">ตระกร้า </div>
                                                                    </div>
                                                                    <div class="col-sm-6 ">
                                                                        <div class="font-por-1">ราคา 10 ฿</div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-12 ">
                                                                        <div <?php if(isset($_SESSION['user_id']))echo "class='text-fan-user'"; else echo "class='text-fan'";?>>รหัส : สินค้าของใช้ในบ้าน
                                                                            <br>แฟรนไชส์ </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-4 nopan">
                                                                            <div class="tab-por"> โหล
                                                                                <br> 70 ฿ </div>
                                                                        </div>
                                                                        <div class="col-sm-4 nopan">
                                                                            <div class="tab-por"> โหล
                                                                                <br> 70 ฿ </div>
                                                                        </div>
                                                                        <div class="col-sm-4 nopan">
                                                                            <div class="tab-por"> โหล
                                                                                <br> 70 ฿ </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="pom">
                                                                    <button type="Success" class="btn btn-success add-to-cart">ใส่ตะกร้า</button>
                                                                </div>
                                                            </div>
                                                            <div class="item col-sm-3 "> <img src="img/461791.png" class="img-responsive">
                                                                <div class="row">
                                                                    <div class="col-sm-6 ">
                                                                        <div class="text-font-por">กระเป๋าดินสอ </div>
                                                                    </div>
                                                                    <div class="col-sm-6 ">
                                                                        <div class="font-por-1">ราคา 10 ฿</div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-12 ">
                                                                        <div <?php if(isset($_SESSION['user_id']))echo "class='text-fan-user'"; else echo "class='text-fan'";?>>รหัส : สินค้าเครื่องเขียน
                                                                            <br>แฟรนไชส์ </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-4 nopan">
                                                                            <div class="tab-por"> โหล
                                                                                <br> 70 ฿ </div>
                                                                        </div>
                                                                        <div class="col-sm-4 nopan">
                                                                            <div class="tab-por"> โหล
                                                                                <br> 70 ฿ </div>
                                                                        </div>
                                                                        <div class="col-sm-4 nopan">
                                                                            <div class="tab-por"> โหล
                                                                                <br> 70 ฿ </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="pom">
                                                                    <button type="Success" class="btn btn-success add-to-cart">ใส่ตะกร้า</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 nopan img-po2" style="margin-bottom:200px;">
                                                            <div class="item col-sm-3 "> <img src="img/461601.png" class="img-responsive">
                                                                <div class="row">
                                                                    <div class="col-sm-6 ">
                                                                        <div class="text-font-por">โพสอิท </div>
                                                                    </div>
                                                                    <div class="col-sm-6 ">
                                                                        <div class="font-por-1">ราคา 10 ฿</div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-12 ">
                                                                        <div <?php if(isset($_SESSION['user_id']))echo "class='text-fan-user'"; else echo "class='text-fan'";?>>รหัส : สินค้าเครื่องเขียน
                                                                            <br>แฟรนไชส์ </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-4 nopan">
                                                                            <div class="tab-por"> โหล
                                                                                <br> 70 ฿ </div>
                                                                        </div>
                                                                        <div class="col-sm-4 nopan">
                                                                            <div class="tab-por"> โหล
                                                                                <br> 70 ฿ </div>
                                                                        </div>
                                                                        <div class="col-sm-4 nopan">
                                                                            <div class="tab-por"> โหล
                                                                                <br> 70 ฿ </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="pom">
                                                                    <button type="Success" class="btn btn-success add-to-cart">ใส่ตะกร้า</button>
                                                                </div>
                                                            </div>
                                                            <div class="item col-sm-3 "> <img src="img/7we.png" class="img-responsive">
                                                                <div class="row">
                                                                    <div class="col-sm-6 ">
                                                                        <div class="text-font-por">ถ้วยหัวใจ </div>
                                                                    </div>
                                                                    <div class="col-sm-6 ">
                                                                        <div class="font-por-1">ราคา 10 ฿</div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-12 ">
                                                                        <div <?php if(isset($_SESSION['user_id']))echo "class='text-fan-user'"; else echo "class='text-fan'";?>>รหัส : สินค้าเครื่องครัว
                                                                            <br>แฟรนไชส์ </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-4 nopan">
                                                                            <div class="tab-por"> โหล
                                                                                <br> 70 ฿ </div>
                                                                        </div>
                                                                        <div class="col-sm-4 nopan">
                                                                            <div class="tab-por"> โหล
                                                                                <br> 70 ฿ </div>
                                                                        </div>
                                                                        <div class="col-sm-4 nopan">
                                                                            <div class="tab-por"> โหล
                                                                                <br> 70 ฿ </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="pom">
                                                                    <button type="Success" class="btn btn-success add-to-cart">ใส่ตะกร้า</button>
                                                                </div>
                                                            </div>
                                                            <div class="item col-sm-3 "> <img src="img/457651.png" class="img-responsive">
                                                                <div class="row">
                                                                    <div class="col-sm-6 ">
                                                                        <div class="text-font-por">รูบิค </div>
                                                                    </div>
                                                                    <div class="col-sm-6 ">
                                                                        <div class="font-por-1">ราคา 10 ฿</div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-12 ">
                                                                        <div <?php if(isset($_SESSION['user_id']))echo "class='text-fan-user'"; else echo "class='text-fan'";?>>รหัส : สินค้าของเล่นเด็ก
                                                                            <br>แฟรนไชส์ </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-4 nopan">
                                                                            <div class="tab-por"> โหล
                                                                                <br> 70 ฿ </div>
                                                                        </div>
                                                                        <div class="col-sm-4 nopan">
                                                                            <div class="tab-por"> โหล
                                                                                <br> 70 ฿ </div>
                                                                        </div>
                                                                        <div class="col-sm-4 nopan">
                                                                            <div class="tab-por"> โหล
                                                                                <br> 70 ฿ </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="pom">
                                                                    <button type="Success" class="btn btn-success add-to-cart">ใส่ตะกร้า</button>
                                                                </div>
                                                            </div>
                                                            <div class="item col-sm-3 "> <img src="img/457841.png" class="img-responsive">
                                                                <div class="row">
                                                                    <div class="col-sm-6 ">
                                                                        <div class="text-font-por">กิ๊ฟติดผม </div>
                                                                    </div>
                                                                    <div class="col-sm-6 ">
                                                                        <div class="font-por-1">ราคา 10 ฿</div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-12 ">
                                                                        <div <?php if(isset($_SESSION['user_id']))echo "class='text-fan-user'"; else echo "class='text-fan'";?>>รหัส : สินค้าบิวตี้
                                                                            <br>แฟรนไชส์ </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-4 nopan">
                                                                            <div class="tab-por"> โหล
                                                                                <br> 70 ฿ </div>
                                                                        </div>
                                                                        <div class="col-sm-4 nopan">
                                                                            <div class="tab-por"> โหล
                                                                                <br> 70 ฿ </div>
                                                                        </div>
                                                                        <div class="col-sm-4 nopan">
                                                                            <div class="tab-por"> โหล
                                                                                <br> 70 ฿ </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="pom">
                                                                    <button type="Success" class="btn btn-success add-to-cart">ใส่ตะกร้า</button>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <br>
                                                            <br>
                                                            <div class="row" style="text-align:center;">
                                                                <ul class="pagination pagination-sm ">
                                                                    <li class="disabled"><a href="#">&laquo;</a></li>
                                                                    <li class="active"><a href="#">1</a></li>
                                                                    <li><a href="#">2</a></li>
                                                                    <li><a href="#">3</a></li>
                                                                    <li><a href="#">4</a></li>
                                                                    <li><a href="#">5</a></li>
                                                                    <li><a href="#">&raquo;</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <?php } ?>
                                        </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <?php require('inc_footer.php'); ?>
            <script>
                $(document).ready(function () {
                    $(".dropdown").hover(function () {
                        $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideDown("400");
                        $(this).toggleClass('open');
                    }, function () {
                        $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideUp("400");
                        $(this).toggleClass('open');
                    });
                });
            </script>
            <script type="text/javascript">
                // Select all links with hashes
                $('a[href*="#"]')
                    // Remove links that don't actually link to anything
                    .not('[href="#"]').not('[href="#0"]').click(function (event) {
                        // On-page links
                        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                            // Figure out element to scroll to
                            var target = $(this.hash);
                            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                            // Does a scroll target exist?
                            if (target.length) {
                                // Only prevent default if animation is actually gonna happen
                                event.preventDefault();
                                $('html, body').animate({
                                    scrollTop: target.offset().top
                                }, 0.1, function () {
                                    // Callback after animation
                                    // Must change focus!
                                    var $target = $(target);
                                    $target.focus();
                                    if ($target.is(":focus")) { // Checking if the target was focused
                                        return false;
                                    }
                                    else {
                                        $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                                        $target.focus(); // Set focus again
                                    };
                                });
                            }
                        }
                    });
            </script>
            <script src="js/jquery.mobile.custom.min.js"></script>
            <script src="js/main.js"></script>
            <script>
                $('.add-to-cart').on('click', function () {
                    var cart = $('.shopping-cart');
                    var imgtodrag = $(this).closest('.item').find("img").eq(0);
                    if (imgtodrag) {
                        var imgclone = imgtodrag.clone().offset({
                            top: imgtodrag.offset().top
                            , left: imgtodrag.offset().left
                        }).css({
                            'opacity': '0.5'
                            , 'position': 'absolute'
                            , 'height': '150px'
                            , 'width': '150px'
                            , 'z-index': '99999'
                        }).appendTo($('body')).animate({
                            'top': cart.offset().top + 10
                            , 'left': cart.offset().left + 10
                            , 'width': 75
                            , 'height': 75
                        }, 1000, 'easeInOutExpo');
                        imgclone.animate({
                            'width': 0
                            , 'height': 0
                        }, function () {
                            $(this).detach()
                        });
                    }
                });
            </script>
            <script>
                var str = "";
                var num = <?php  if(isset($_SESSION['cart'])){
            $cart=count($_SESSION['cart']);
          if(isset($_SESSION['cart_dozen']))$dozen=count($_SESSION['cart_dozen']); else $dozen=0;
          if(isset($_SESSION['cart_crate']))$crate=count($_SESSION['cart_crate']); else $crate=0;
          echo $cart+$dozen+$crate;
          }else echo "0";?>;

                function add_id(id) {
                    num++;
                    str = id;
                    document.getElementById("num_cart").innerHTML = "<img src=\"img/shopping-cart.png\"> สั่งซื้อ (" + num + ")";
                    $.ajax({
                        type: 'POST'
                        , url: 'order_product.php'
                        , data: {
                            id: str
                        }
                        , success: function (response) {}
                    });
                }
            </script>
    </body>

</html>
