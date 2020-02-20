
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(!isset($_SESSION['lang'])){
  $_SESSION['lang']="th";
}


include("multilanguage.php");
$host="localhost";
$user="strawberry_admin";
$pass="043522359";
$db="strawberry_club";
$connect = mysql_connect($host,$user,$pass);
mysql_query("SET NAMES UTF8",$connect);
mysql_select_db($db);


include("style_inc_menu.html");
?>

<div class="wrap_top">
    <div class="container">
        <div class="row">
            <div class="rol-sm-12">
                <nav class="navbar  navbar-inverse navbar-fixed-top">
                    <div class="bground">
                        <div class="sfty"><img src="img/ff.png" class="img-responsive" width="100%"></div>
                        <div class="yuiop">
                            <marquee behavior="alternate "><img src="img/ss.png" /></marquee>
                        </div>
                        <div class="navbar-header">
                            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        </div>
                        <div class="container menuxs">
                            <div class="col-sm-12">
                                <div class="row gttyty">
                                    <div class="col-sm-2 gttyty">
                                        <a class="navbar-brand gttyty" href="index.php"><img src="img/unnamed.png" class="img-responsive"></a>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="wrapshopping-cart">
                                          <?php
                                          if(isset($_SESSION['user_id'])){
                                            $sql_session="SELECT * FROM user WHERE user_id='{$_SESSION['user_id']}'";
                                            $q_session=mysql_query($sql_session);
                                            $rs_session=mysql_fetch_array($q_session);
                                            if(mysql_num_rows($q_session)==1){
                                              ?>
                                              <i class="fa fa-user-o" aria-hidden="true"></i>&nbsp; <?php echo $text[$_SESSION['lang']]['welcome'] ?> : <?=$rs_session['user_fullname']?>
                                              &nbsp;<a href="" onclick="return logout()"><?php echo $text[$_SESSION['lang']]['logout'] ?> <i class="fa fa-sign-out" aria-hidden="true"></i></a>
                                              <?php
                                        }else{
                                              unset($_SESSION['user_id']);
                                            }
                                          }
                                          else if(isset($_SESSION['fb_id'])){
                                            ?>
                                            <i class="fa fa-user-o" aria-hidden="true"></i>&nbsp; <?php echo $text[$_SESSION['lang']]['welcome'] ?> : <a target="_blank" href="https://www.facebook.com/<?=$_SESSION['fb_id']?>"><?=$_SESSION['fb_name']?></a>
                                            <?php if(isset($_SESSION['fb_email']))echo "Email =".$_SESSION['fb_email']?>
                                            &nbsp;<a href="" onclick="return logout()"><?php echo $text[$_SESSION['lang']]['logout'] ?> <i class="fa fa-sign-out" aria-hidden="true"></i></a>
                                            <?php
                                          }else{
                                           ?>
                                            <div class="registertoptop"> <a class="link_menutop" href="#"> <?=$text[$_SESSION['lang']]['login']?></a>
                                                <div class="bg_pop_menutop">
                                                <div class="formlogin">
                                                        <h1><?=$text[$_SESSION['lang']]['login']?></h1>
                                                        <div class="bordertwotone6"></div>
                                                        <br>
                                                        <div class="sociallogin">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <!--<a href="#" onclick="checkLoginState();"><img src="img/f.png" class="img-responsive"></a>-->
                                                                    <div onlogin="checkLoginState();" class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <form name="form1" onsubmit="return check_login()" class="" action="login.php" method="post">
                                                        <div class="orlog"> <?=$text[$_SESSION['lang']]['or_login']?> </div>
                                                        <label><?=$text[$_SESSION['lang']]['username']?> : </label>
                                                        <input id="username" name="username" placeholder="กรุณากรอกรหัสสมาชิกหรือชื่อบัญชี" type="text" class="form-control input-md">
                                                        <label><?=$text[$_SESSION['lang']]['password']?> : </label>
                                                        <input id="password" name="password" placeholder="กรอกรหัสผ่าน" type="password" class="form-control input-md">
                                                        <div class="btncontact">
                                                            <button type="button"  name="singlebutton" class="btn btn-primary"><?=$text[$_SESSION['lang']]['cancle']?></button>
                                                            <button name="singlebutton" class="btn btn-franchis"><?=$text[$_SESSION['lang']]['login']?></button>
                                                          </form>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <?php } ?> &nbsp;
                                            <!--<div class="registertoptop"> <a class="link_menutop" href="#"> ลงทะเบียน</a>
                                                <div class="bg_pop_menutop">
                                                    <div class="formlogin">
                                                        <h1>ลงทะเบียน</h1>
                                                        <div class="bordertwotone6"></div>
                                                        <br>
                                                        <div class="sociallogin">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="text-register">คุณมีเพื่อนแนะนำเข้าสูเว็บไซต์นี้ไหม</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-12  nopan">
                                                                <td class="smalltxt">
                                                                    <input type="radio" value="มี" name="sex" checked>&nbsp;มี
                                                                    <input type="radio" value="ไม่มี" name="sex" checked>&nbsp;ไม่มี </td>
                                                            </div>
                                                        </div>
                                                        <label>เพื่อนของคุณใช้ ID อะไร : </label>
                                                        <input id="textinput" name="textinput" placeholder="กรุณากรอกรหัสสมาชิกหรือชื่อบัญชี" type="text" class="form-control input-md">
                                                        <label>รหัสผ่าน : </label>
                                                        <input id="textinput" name="textinput" placeholder="กรอกรหัสผ่าน" type="text" class="form-control input-md">
                                                        <div class="forgetpass"> <a href="#">ลืมรหัสผ่าน?</a> </div>
                                                        <div class="btncontact">
                                                            <button name="singlebutton" class="btn btn-primary">ยกเลิก</button>
                                                            <a href="member-1.php">
                                                                <button name="singlebutton" class="btn btn-success">เข้าสู่ระบบ</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>-->&nbsp;

                                            <a href="order.php" class="shopping-cart" id="num_cart"><img src="img/shopping-cart.png"> <?=$text[$_SESSION['lang']]['order']?> (<?php
                                            if(isset($_SESSION['cart'])){
                                              $cart=count($_SESSION['cart']);
                                            if(isset($_SESSION['cart_dozen']))$dozen=count($_SESSION['cart_dozen']); else $dozen=0;
                                            if(isset($_SESSION['cart_crate']))$crate=count($_SESSION['cart_crate']); else $crate=0;
                                            echo $cart+$dozen+$crate;
                                            }else echo "0";?>)</a>

                                            &nbsp;
                                            <a href="change_lang.php?lang=th" ><img src="img/th.jpg" ></a>
                                            <a href="change_lang.php?lang=en" ><img src="img/en.jpg" ></a>
                                            <?=$text[$_SESSION['lang']]['lang']?>
                                        </div>
                                        <br>
                                        <br>
                                        <?php
                                        $sql_menu="SELECT * FROM menu WHERE menu_display_status ='1'";
                                        $q_menu=mysql_query($sql_menu);
                                        ?>
                                        <div class="collapse navbar-collapse js-navbar-collapse  ">
                                          <ul class="nav navbar-nav">
                                          <?php
                                          if(mysql_num_rows($q_menu)>0){
                                          while ($rs_menu=mysql_fetch_array($q_menu)) {
                                            if($rs_menu['menu_id']==1){?>
                                              <?php
                                              $sql="SELECT * FROM menu_child WHERE menu_id = {$rs_menu['menu_id']} AND menu_child_display_status='1'";
                                             $q=mysql_query($sql);
                                             $num=mysql_num_rows($q);
                                             $check=5;
                                              if ($num>0){?>
                                              <li class="dropdown mega-dropdown">
                                                  <a href="<?=$rs_menu['menu_link']?>"><img src="img/pet-care.png" class="img-responsive">
                                                    <?=$rs_menu[$text[$_SESSION['lang']]['menu']];  ?> <span class="caret"></span></a>
                                                  <ul class="dropdown-menu mega-dropdown-menu">
                                                      <?php
                                                      while ($rs=mysql_fetch_array($q)) {
                                                        if($check==5){
                                                          echo "<li class='col-sm-3'>
                                                              <ul>
                                                                <li class='dropdown-header'></li>
                                                                <li><a href='$rs[menu_child_link]'>".$rs[$text[$_SESSION['lang']]['menu_child']]."</a></li>";
                                                       $check--; $num--;
                                                    }else if($check!=0 and $num!=0){
                                                      echo "<li><a href='$rs[menu_child_link]'>".$rs[$text[$_SESSION['lang']]['menu_child']]."</a></li>";
                                                  $check--; $num--;
                                                }  if ($check==0 and $num==0){
                                                  echo "</ul>
                                                        </li>
                                                        </ul>
                                                    </li>";

                                            } else if ($num==0){
                                                  echo "</ul>
                                                        </li>
                                                        </ul>
                                                    </li>
                                                            ";
                                                }
                                                else if ($check==0){
                                                      echo "</ul>
                                                  </li>
                                                                ";
                                                  $check=5;
                                                    }
                                                      }
                                                    }else {
                                                      ?>
                                                      <li>
                                                          <a href="<?=$rs_menu['menu_link']?>"><img src="img/pet-care.png" class="img-responsive"><?=$rs_menu[$text[$_SESSION['lang']]['menu']]?></a>
                                                      </li>
                                                    <?php
                                                    }
                                                       ?>

                                            <?php

                                          }
                                              if($rs_menu['menu_id']==2){?>
                                                <?php
                                                $sql="SELECT * FROM menu_child WHERE menu_id = {$rs_menu['menu_id']} AND menu_child_display_status='1'";
                                               $q=mysql_query($sql);
                                               $num=mysql_num_rows($q);
                                               $check=5;
                                                if ($num>0){?>
                                                <li class="dropdown mega-dropdown">
                                                    <a href="<?=$rs_menu['menu_link']?>"><img src="img/books.png" class="img-responsive">
                                                      <?=$rs_menu[$text[$_SESSION['lang']]['menu']];  ?> <span class="caret"></span></a>
                                                    <ul class="dropdown-menu mega-dropdown-menu">
                                                        <?php
                                                        while ($rs=mysql_fetch_array($q)) {
                                                          if($check==5){
                                                            echo "<li class='col-sm-3'>
                                                                <ul>
                                                                  <li class='dropdown-header'></li>
                                                                  <li><a href='$rs[menu_child_link]'>".$rs[$text[$_SESSION['lang']]['menu_child']]."</a></li>";
                                                         $check--; $num--;
                                                      }else if($check!=0 and $num!=0){
                                                        echo "<li><a href='$rs[menu_child_link]'>".$rs[$text[$_SESSION['lang']]['menu_child']]."</a></li>";
                                                    $check--; $num--;
                                                  }  if ($check==0 and $num==0){
                                                    echo "</ul>
                                                          </li>
                                                          </ul>
                                                      </li>";

                                              } else if ($num==0){
                                                    echo "</ul>
                                                          </li>
                                                          </ul>
                                                      </li>
                                                              ";
                                                  }
                                                  else if ($check==0){
                                                        echo "</ul>
                                                    </li>
                                                                  ";
                                                    $check=5;
                                                      }
                                                        }
                                                      }else {
                                                        ?>
                                                        <li>
                                                            <a href="<?=$rs_menu['menu_link']?>"><img src="img/books.png" class="img-responsive"><?=$rs_menu[$text[$_SESSION['lang']]['menu']]?></a>
                                                        </li>
                                                      <?php
                                                      }
                                                         ?>

                                              <?php

                                            }
                                            if($rs_menu['menu_id']==4){?>
                                              <?php
                                              $sql="SELECT * FROM menu_child WHERE menu_id = {$rs_menu['menu_id']} AND menu_child_display_status='1'";
                                             $q=mysql_query($sql);
                                             $num=mysql_num_rows($q);
                                             $check=5;
                                              if ($num>0){?>
                                              <li class="dropdown mega-dropdown">
                                                  <a href="<?=$rs_menu['menu_link']?>"><img src="img/gift.png" class="img-responsive">
                                                    <?=$rs_menu[$text[$_SESSION['lang']]['menu']];  ?> <span class="caret"></span></a>
                                                  <ul class="dropdown-menu mega-dropdown-menu">
                                                      <?php
                                                      while ($rs=mysql_fetch_array($q)) {
                                                        if($check==5){
                                                          echo "<li class='col-sm-3'>
                                                              <ul>
                                                                <li class='dropdown-header'></li>
                                                                <li><a href='$rs[menu_child_link]'>".$rs[$text[$_SESSION['lang']]['menu_child']]."</a></li>";
                                                       $check--; $num--;
                                                    }else if($check!=0 and $num!=0){
                                                      echo "<li><a href='$rs[menu_child_link]'>".$rs[$text[$_SESSION['lang']]['menu_child']]."</a></li>";
                                                  $check--; $num--;
                                                }  if ($check==0 and $num==0){
                                                  echo "</ul>
                                                        </li>
                                                        </ul>
                                                    </li>";

                                            } else if ($num==0){
                                                  echo "</ul>
                                                        </li>
                                                        </ul>
                                                    </li>
                                                            ";
                                                }
                                                else if ($check==0){
                                                      echo "</ul>
                                                  </li>
                                                                ";
                                                  $check=5;
                                                    }
                                                      }
                                                    }else {
                                                      ?>
                                                      <li>
                                                          <a href="<?=$rs_menu['menu_link']?>"><img src="img/gift.png" class="img-responsive"><?=$rs_menu[$text[$_SESSION['lang']]['menu']]?></a>
                                                      </li>
                                                    <?php
                                                    }
                                                       ?>

                                            <?php

                                          }
                                              if($rs_menu['menu_id']==5){?>
                                                <?php
                                                $sql="SELECT * FROM menu_child WHERE menu_id = {$rs_menu['menu_id']} AND menu_child_display_status='1'";
                                               $q=mysql_query($sql);
                                               $num=mysql_num_rows($q);
                                               $check=5;
                                                if ($num>0){?>
                                                <li class="dropdown mega-dropdown">
                                                    <a href="<?=$rs_menu['menu_link']?>"><img src="img/bar-chart.png" class="img-responsive">
                                                      <?=$rs_menu[$text[$_SESSION['lang']]['menu']];  ?> <span class="caret"></span></a>
                                                    <ul class="dropdown-menu mega-dropdown-menu">
                                                        <?php
                                                        while ($rs=mysql_fetch_array($q)) {
                                                          if($check==5){
                                                            echo "<li class='col-sm-3'>
                                                                <ul>
                                                                  <li class='dropdown-header'></li>
                                                                  <li><a href='$rs[menu_child_link]'>".$rs[$text[$_SESSION['lang']]['menu_child']]."</a></li>";
                                                         $check--; $num--;
                                                      }else if($check!=0 and $num!=0){
                                                        echo "<li><a href='$rs[menu_child_link]'>".$rs[$text[$_SESSION['lang']]['menu_child']]."</a></li>";
                                                    $check--; $num--;
                                                  }  if ($check==0 and $num==0){
                                                    echo "</ul>
                                                          </li>
                                                          </ul>
                                                      </li>";

                                              } else if ($num==0){
                                                    echo "</ul>
                                                          </li>
                                                          </ul>
                                                      </li>
                                                              ";
                                                  }
                                                  else if ($check==0){
                                                        echo "</ul>
                                                    </li>
                                                                  ";
                                                    $check=5;
                                                      }
                                                        }
                                                      }else {
                                                        ?>
                                                        <li>
                                                            <a href="<?=$rs_menu['menu_link']?>"><img src="img/bar-chart.png" class="img-responsive"><?=$rs_menu[$text[$_SESSION['lang']]['menu']]?></a>
                                                        </li>
                                                      <?php
                                                      }
                                                         ?>

                                              <?php

                                            }
                                                if($rs_menu['menu_id']==6){?>
                                                  <?php
                                                  $sql="SELECT * FROM menu_child WHERE menu_id = {$rs_menu['menu_id']} AND menu_child_display_status='1'";
                                                 $q=mysql_query($sql);
                                                 $num=mysql_num_rows($q);
                                                 $check=5;
                                                  if ($num>0){?>
                                                  <li class="dropdown mega-dropdown">
                                                      <a href="<?=$rs_menu['menu_link']?>"><img src="img/tent.png" class="img-responsive">
                                                        <?=$rs_menu[$text[$_SESSION['lang']]['menu']];  ?> <span class="caret"></span></a>
                                                      <ul class="dropdown-menu mega-dropdown-menu">
                                                          <?php
                                                          while ($rs=mysql_fetch_array($q)) {
                                                            if($check==5){
                                                              echo "<li class='col-sm-3'>
                                                                  <ul>
                                                                    <li class='dropdown-header'></li>
                                                                    <li><a href='$rs[menu_child_link]'>".$rs[$text[$_SESSION['lang']]['menu_child']]."</a></li>";
                                                           $check--; $num--;
                                                        }else if($check!=0 and $num!=0){
                                                          echo "<li><a href='$rs[menu_child_link]'>".$rs[$text[$_SESSION['lang']]['menu_child']]."</a></li>";
                                                      $check--; $num--;
                                                    }  if ($check==0 and $num==0){
                                                      echo "</ul>
                                                            </li>
                                                            </ul>
                                                        </li>";

                                                } else if ($num==0){
                                                      echo "</ul>
                                                            </li>
                                                            </ul>
                                                        </li>
                                                                ";
                                                    }
                                                    else if ($check==0){
                                                          echo "</ul>
                                                      </li>
                                                                    ";
                                                      $check=5;
                                                        }
                                                          }
                                                        }else {
                                                          ?>
                                                          <li>
                                                              <a href="<?=$rs_menu['menu_link']?>"><img src="img/tent.png" class="img-responsive"><?=$rs_menu[$text[$_SESSION['lang']]['menu']]?></a>
                                                          </li>
                                                        <?php
                                                        }
                                                           ?>

                                                <?php

                                              }
                                                  if($rs_menu['menu_id']==7){?>
                                                    <?php
                                                    $sql="SELECT * FROM menu_child WHERE menu_id = {$rs_menu['menu_id']} AND menu_child_display_status='1'";
                                                   $q=mysql_query($sql);
                                                   $num=mysql_num_rows($q);
                                                   $check=5;
                                                    if ($num>0){?>
                                                    <li class="dropdown mega-dropdown">
                                                        <a href="<?=$rs_menu['menu_link']?>"><img src="img/security.png" class="img-responsive">
                                                          <?=$rs_menu[$text[$_SESSION['lang']]['menu']];  ?> <span class="caret"></span></a>
                                                        <ul class="dropdown-menu mega-dropdown-menu">
                                                            <?php
                                                            while ($rs=mysql_fetch_array($q)) {
                                                              if($check==5){
                                                                echo "<li class='col-sm-3'>
                                                                    <ul>
                                                                      <li class='dropdown-header'></li>
                                                                      <li><a href='$rs[menu_child_link]'>".$rs[$text[$_SESSION['lang']]['menu_child']]."</a></li>";
                                                             $check--; $num--;
                                                          }else if($check!=0 and $num!=0){
                                                            echo "<li><a href='$rs[menu_child_link]'>".$rs[$text[$_SESSION['lang']]['menu_child']]."</a></li>";
                                                        $check--; $num--;
                                                      }  if ($check==0 and $num==0){
                                                        echo "</ul>
                                                              </li>
                                                              </ul>
                                                          </li>";

                                                  } else if ($num==0){
                                                        echo "</ul>
                                                              </li>
                                                              </ul>
                                                          </li>
                                                                  ";
                                                      }
                                                      else if ($check==0){
                                                            echo "</ul>
                                                        </li>
                                                                      ";
                                                        $check=5;
                                                          }
                                                            }
                                                          }else {
                                                            ?>
                                                            <li>
                                                                <a href="<?=$rs_menu['menu_link']?>"><img src="img/security.png" class="img-responsive"><?=$rs_menu[$text[$_SESSION['lang']]['menu']]?></a>
                                                            </li>
                                                          <?php
                                                          }
                                                             ?>

                                                  <?php

                                                }
                                                    if($rs_menu['menu_id']==8){?>
                                                      <?php
                                                      $sql="SELECT * FROM menu_child WHERE menu_id = {$rs_menu['menu_id']} AND menu_child_display_status='1'";
                                                     $q=mysql_query($sql);
                                                     $num=mysql_num_rows($q);
                                                     $check=5;
                                                      if ($num>0){?>
                                                      <li class="dropdown mega-dropdown">
                                                          <a href="<?=$rs_menu['menu_link']?>"><img src="img/information.png" class="img-responsive">
                                                            <?=$rs_menu[$text[$_SESSION['lang']]['menu']];  ?> <span class="caret"></span></a>
                                                          <ul class="dropdown-menu mega-dropdown-menu">
                                                              <?php
                                                              while ($rs=mysql_fetch_array($q)) {
                                                                if($check==5){
                                                                  echo "<li class='col-sm-3'>
                                                                      <ul>
                                                                        <li class='dropdown-header'></li>
                                                                        <li><a href='$rs[menu_child_link]'>".$rs[$text[$_SESSION['lang']]['menu_child']]."</a></li>";
                                                               $check--; $num--;
                                                            }else if($check!=0 and $num!=0){
                                                              echo "<li><a href='$rs[menu_child_link]'>".$rs[$text[$_SESSION['lang']]['menu_child']]."</a></li>";
                                                          $check--; $num--;
                                                        }  if ($check==0 and $num==0){
                                                          echo "</ul>
                                                                </li>
                                                                </ul>
                                                            </li>";

                                                    } else if ($num==0){
                                                          echo "</ul>
                                                                </li>
                                                                </ul>
                                                            </li>
                                                                    ";
                                                        }
                                                        else if ($check==0){
                                                              echo "</ul>
                                                          </li>
                                                                        ";
                                                          $check=5;
                                                            }
                                                              }
                                                            }else {
                                                              ?>
                                                              <li>
                                                                  <a href="<?=$rs_menu['menu_link']?>"><img src="img/information.png" class="img-responsive"><?=$rs_menu[$text[$_SESSION['lang']]['menu']]?></a>
                                                              </li>
                                                            <?php
                                                            }
                                                               ?>

                                                    <?php

                                                  }
                                                      if($rs_menu['menu_id']==9){?>
                                                        <?php
                                                        $sql="SELECT * FROM menu_child WHERE menu_id = {$rs_menu['menu_id']} AND menu_child_display_status='1'";
                                                       $q=mysql_query($sql);
                                                       $num=mysql_num_rows($q);
                                                       $check=5;
                                                        if ($num>0){?>
                                                        <li class="dropdown mega-dropdown">
                                                            <a href="<?=$rs_menu['menu_link']?>"><img src="img/megaphone1.png" class="img-responsive">
                                                              <?=$rs_menu[$text[$_SESSION['lang']]['menu']];  ?> <span class="caret"></span></a>
                                                            <ul class="dropdown-menu mega-dropdown-menu">
                                                                <?php
                                                                while ($rs=mysql_fetch_array($q)) {
                                                                  if($check==5){
                                                                    echo "<li class='col-sm-3'>
                                                                        <ul>
                                                                          <li class='dropdown-header'></li>
                                                                          <li><a href='$rs[menu_child_link]'>".$rs[$text[$_SESSION['lang']]['menu_child']]."</a></li>";
                                                                 $check--; $num--;
                                                              }else if($check!=0 and $num!=0){
                                                                echo "<li><a href='$rs[menu_child_link]'>".$rs[$text[$_SESSION['lang']]['menu_child']]."</a></li>";
                                                            $check--; $num--;
                                                          }  if ($check==0 and $num==0){
                                                            echo "</ul>
                                                                  </li>
                                                                  </ul>
                                                              </li>";

                                                      } else if ($num==0){
                                                            echo "</ul>
                                                                  </li>
                                                                  </ul>
                                                              </li>
                                                                      ";
                                                          }
                                                          else if ($check==0){
                                                                echo "</ul>
                                                            </li>
                                                                          ";
                                                            $check=5;
                                                              }
                                                                }
                                                              }else {
                                                                ?>

                                                                    <li class="m_boxcolor">
                                                                        <div class="boxcolor">
                                                                        <a href="<?=$rs_menu['menu_link']?>"><img src="img/megaphone1.png" class="img-responsive"><?=$rs_menu[$text[$_SESSION['lang']]['menu']]?></a>
                                                                      </div>
                                                                    </li>

                                                              <?php
                                                              }
                                                                 ?>

                                                      <?php

                                                    }
                                                        if($rs_menu['menu_id']==10){?>
                                                          <?php
                                                          $sql="SELECT * FROM menu_child WHERE menu_id = {$rs_menu['menu_id']} AND menu_child_display_status='1'";
                                                         $q=mysql_query($sql);
                                                         $num=mysql_num_rows($q);
                                                         $check=5;
                                                          if ($num>0){?>
                                                          <li class="dropdown mega-dropdown">
                                                              <a href="<?=$rs_menu['menu_link']?>"><img src="img/magnifying-glass1.png" class="img-responsive">
                                                                <?=$rs_menu[$text[$_SESSION['lang']]['menu']];  ?> <span class="caret"></span></a>
                                                              <ul class="dropdown-menu mega-dropdown-menu">
                                                                  <?php
                                                                  while ($rs=mysql_fetch_array($q)) {
                                                                    if($check==5){
                                                                      echo "<li class='col-sm-3'>
                                                                          <ul>
                                                                            <li class='dropdown-header'></li>
                                                                            <li><a href='$rs[menu_child_link]>''".$rs[$text[$_SESSION['lang']]['menu_child']]."</a></li>";
                                                                   $check--; $num--;
                                                                }else if($check!=0 and $num!=0){
                                                                  echo "<li><a href='$rs[menu_child_link]'>".$rs[$text[$_SESSION['lang']]['menu_child']]."</a></li>";
                                                              $check--; $num--;
                                                            }  if ($check==0 and $num==0){
                                                              echo "</ul>
                                                                    </li>
                                                                    </ul>
                                                                </li>";

                                                        } else if ($num==0){
                                                              echo "</ul>
                                                                    </li>
                                                                    </ul>
                                                                </li>
                                                                        ";
                                                            }
                                                            else if ($check==0){
                                                                  echo "</ul>
                                                              </li>
                                                                            ";
                                                              $check=5;
                                                                }
                                                                  }
                                                                }else {
                                                                  ?>

                                                                      <li class="m_boxcolor">
                                                                          <div class="boxcolor">
                                                                          <a href="<?=$rs_menu['menu_link']?>"><img src="img/magnifying-glass1.png" class="img-responsive"><?=$rs_menu[$text[$_SESSION['lang']]['menu']]?></a>
                                                                        </div>
                                                                      </li>

                                                                <?php
                                                                }
                                                                   ?>

                                                        <?php

                                                      }
                                            if($rs_menu['menu_id']==3){?>
                                              <li class="dropdown mega-dropdown">
                                                  <a href="<?=$rs_menu['menu_link']?>"><img src="img/rule.png" class="img-responsive">
                                                    <?=$rs_menu[$text[$_SESSION['lang']]['menu']];  ?> <span class="caret"></span></a>
                                                  <ul class="dropdown-menu mega-dropdown-menu">
                                                      <li><a href="#"><?=$text[$_SESSION['lang']]['recommended product']?> </a></li>
                                                      <li class="col-sm-3">
                                                          <ul>
                                                              <li class="dropdown-header"><?=$text[$_SESSION['lang']]['example product']?></li>
                                                              <div id="menCollection" class="carousel slide" data-ride="carousel">
                                                                <?php $sql="SELECT * FROM product
                                                                ORDER BY RAND() LIMIT 5";
                                                                $q=mysql_query($sql);
                                                                $i_top=0;
                                                                $num_sample=mysql_num_rows($q);
                                                                if($num_sample>0){
                                                                while ($rs=mysql_fetch_array($q)) {
                                                                  if($i_top==0){?>
                                                                    <div class="carousel-inner">
                                                                        <div class="item active">
                                                                            <a href="#"><img src="backoffice/image/<?=$rs['product_img']?>" class="img-responsive" alt="product <?=$i_top?>"></a>
                                                                            <h4><small>"กระเป๋าใส่ดินสอน่ารักๆ หลากหลายสไตร์ ให้เลือกซื้ออย่างจุใจ"</small></h4>
                                                                            <div class="tery">
                                                                                <button class="btn btn-warning" type="button"><?php if (isset($_SESSION['user_id'])): ?>
                                                                                  <?php echo $rs['product_price_retail'].' บาท' ?>
                                                                                  <?php else: ?>10 บาท
                                                                                <?php endif; ?></button>
                                                                            </div>
                                                                        </div>
                                                                <?php $i_top++; }else{?>
                                                                  <div class="item">
                                                                      <a href="#"><img src="backoffice/image/<?=$rs['product_img']?>" class="img-responsive" alt="product <?=$i_top?>"></a>
                                                                      <h4><small>"กิ๊ฟติดผมน่ารักๆ หลากหลายสไตร์ ให้เลือกซื้ออย่างจุใจ"</small></h4>
                                                                      <div class="tery">
                                                                        <button class="btn btn-warning" type="button"><?php if (isset($_SESSION['user_id'])): ?>
                                                                          <?php echo $rs['product_price_retail'].' บาท' ?>
                                                                          <?php else: ?>10 บาท
                                                                        <?php endif; ?></button>
                                                                      </div>
                                                                  </div>
                                                                <?php   }
                                                                }
                                                              }else{?>

                                                                  <div class="carousel-inner">
                                                                      <div class="item active">
                                                                          <a href="#"><img src="img/pg1.png" class="img-responsive" alt="product 1"></a>
                                                                          <h4><small>"กระเป๋าใส่ดินสอน่ารักๆ หลากหลายสไตร์ ให้เลือกซื้ออย่างจุใจ"</small></h4>
                                                                          <div class="tery">
                                                                              <button class="btn btn-warning" type="button">10 บาท</button>
                                                                          </div>
                                                                      </div>
                                                                      <!-- End Item -->

                                                                      <div class="item">
                                                                          <a href="#"><img src="img/pg2.png" class="img-responsive" alt="product 2"></a>
                                                                          <h4><small>"กิ๊ฟติดผมน่ารักๆ หลากหลายสไตร์ ให้เลือกซื้ออย่างจุใจ"</small></h4>
                                                                          <div class="tery">
                                                                              <button class="btn btn-warning" type="button">10 บาท</button>
                                                                          </div>
                                                                      </div>
                                                                      <!-- End Item -->

                                                                      <div class="item">
                                                                          <a href="#"><img src="img/pg3.png" class="img-responsive" alt="product 3"></a>
                                                                          <h4><small>"เครื่องครัวน่ารักๆ หลากหลายสไตร์ ให้เลือกซื้ออย่างจุใจ"</small></h4>
                                                                          <div class="tery">
                                                                              <button class="btn btn-warning" type="button">10 บาท</button>
                                                                          </div>
                                                                      </div>
                                                                      <!-- End Item -->
                                                                    <?php } ?>
                                                                  </div>
                                                                  <!-- End Carousel Inner -->
                                                                  <!-- Controls -->
                                                                  <a class="left carousel-control" href="#menCollection" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                                                                  <a class="right carousel-control" href="#menCollection" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                                                              </div>
                                                              <!-- /.carousel -->
                                                              <li class="divider"></li>
                                                              <!--<li><a href="#">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>-->
                                                          </ul>
                                                      </li>

                                                      <?php $sql="SELECT * FROM product_category";
                                                      $q=mysql_query($sql);
                                                      $num=mysql_num_rows($q);
                                                      $check=5;

                                                      while ($rs=mysql_fetch_array($q)) {
                                                        if($check==5){
                                                          echo "<li class='col-sm-3'>
                                                              <ul>
                                                                <li class='dropdown-header'></li>
                                                                <li><a href='product.php?id=".$rs['product_category_id']."'>".$rs[$text[$_SESSION['lang']]['product_category_name']]."</a></li>";
                                                       $check--; $num--;
                                                    }else if($check!=0 and $num!=0){
                                                      echo "<li><a href='product.php?id=".$rs['product_category_id']."'>".$rs[$text[$_SESSION['lang']]['product_category_name']]."</a></li>";
                                                  $check--; $num--;
                                                }  if ($check==0 and $num==0){
                                                  echo "</ul>
                                                        </li>
                                                        </ul>
                                                    </li>";

                                            } else if ($num==0){
                                                  echo "</ul>
                                                        </li>
                                                        </ul>
                                                    </li>
                                                            ";
                                                }
                                                else if ($check==0){
                                                      echo "</ul>
                                                  </li>
                                                                ";
                                                  $check=5;
                                                    }
                                                      }

                                                       ?>


                                            <?php
                                          }


                                            }
                                          }else {
                                           ?>
                                           <li>
                                               <a href="index.php"><img src="img/pet-care.png" class="img-responsive">หน้าแรก</a>
                                           </li>
                                           <li>
                                               <a href="about.php"><img src="img/books.png" class="img-responsive">เกี่ยวกับ</a>
                                           </li>
                                           <li class="dropdown mega-dropdown">
                                               <a href="product.php"><img src="img/rule.png" class="img-responsive">สินค้า <span class="caret"></span></a>
                                               <ul class="dropdown-menu mega-dropdown-menu">
                                                   <li><a href="#">กลุ่มสินค้าแนะนำ </a></li>
                                                   <li class="col-sm-3">
                                                       <ul>
                                                           <li class="dropdown-header">ตัวอย่างสินค้า</li>
                                                           <div id="menCollection" class="carousel slide" data-ride="carousel">
                                                               <div class="carousel-inner">
                                                                   <div class="item active">
                                                                       <a href="#"><img src="img/pg1.png" class="img-responsive" alt="product 1"></a>
                                                                       <h4><small>"กระเป๋าใส่ดินสอน่ารักๆ หลากหลายสไตร์ ให้เลือกซื้ออย่างจุใจ"</small></h4>
                                                                       <div class="tery">
                                                                           <button class="btn btn-warning" type="button">10 บาท</button>
                                                                       </div>
                                                                   </div>
                                                                   <!-- End Item -->
                                                                   <div class="item">
                                                                       <a href="#"><img src="img/pg2.png" class="img-responsive" alt="product 2"></a>
                                                                       <h4><small>"กิ๊ฟติดผมน่ารักๆ หลากหลายสไตร์ ให้เลือกซื้ออย่างจุใจ"</small></h4>
                                                                       <div class="tery">
                                                                           <button class="btn btn-warning" type="button">10 บาท</button>
                                                                       </div>
                                                                   </div>
                                                                   <!-- End Item -->
                                                                   <div class="item">
                                                                       <a href="#"><img src="img/pg3.png" class="img-responsive" alt="product 3"></a>
                                                                       <h4><small>"เครื่องครัวน่ารักๆ หลากหลายสไตร์ ให้เลือกซื้ออย่างจุใจ"</small></h4>
                                                                       <div class="tery">
                                                                           <button class="btn btn-warning" type="button">10 บาท</button>
                                                                       </div>
                                                                   </div>
                                                                   <!-- End Item -->
                                                               </div>
                                                               <!-- End Carousel Inner -->
                                                               <!-- Controls -->
                                                               <a class="left carousel-control" href="#menCollection" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                                                               <a class="right carousel-control" href="#menCollection" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                                                           </div>
                                                           <!-- /.carousel -->
                                                           <li class="divider"></li>
                                                           <!--<li><a href="#">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>-->
                                                       </ul>
                                                   </li>
                                                   <li class="col-sm-3">
                                                       <ul>
                                                           <li class="dropdown-header"></li>
                                                           <li><a href="#">สินค้าขายดี</a></li>
                                                           <li><a href="#">สินค้าแนะนำ</a></li>
                                                           <li><a href="#">สินค้ากิ๊ฟชอป</a></li>
                                                           <li><a href="#">บิวตี้</a></li>
                                                           <li><a href="#">เครื่องเขียน</a></li>
                                                           <li><a href="#">ของเล่นเด็ก</a></li>
                                                       </ul>
                                                   </li>
                                                   <li class="col-sm-3">
                                                       <ul>
                                                           <li class="dropdown-header"></li>
                                                           <li><a href="#">เครื่องครัว</a></li>
                                                           <li><a href="#">เครื่องมือช่าง</a></li>
                                                           <li><a href="#">ของใช้ในห้องน้ำ</a></li>
                                                           <li><a href="#">ของใช้ในบ้าน</a></li>
                                                           <li><a href="#">สินค้าไอที</a></li>
                                                       </ul>
                                                   </li>
                                                   <li class="col-sm-3">
                                                       <ul>
                                                           <li class="dropdown-header"></li>
                                                           <li><a href="#">ดอกไม้ปลอม</a></li>
                                                           <li><a href="#">สินค้าพลาสติก</a></li>
                                                           <li><a href="#">งานแก้ว</a></li>
                                                           <li><a href="#">งานเซรามิก</a></li>
                                                           <li><a href="#">งาน DIY</a></li>
                                                       </ul>
                                                   </li>
                                               </ul>
                                           </li>
                                           <li>
                                               <a href="promotion.php"><img src="img/gift.png" class="img-responsive">โปรโมชั่น</a>
                                           </li>
                                           <li>
                                               <a href="franchise.php"><img src="img/bar-chart.png" class="img-responsive">สมัครธุรกิจแฟนร์ไซร์</a>
                                           </li>
                                           <li>
                                               <a href="branch.php"><img src="img/tent.png" class="img-responsive">สาขา</a>
                                           </li>
                                           <li>
                                               <a href="job2.php"><img src="img/security.png" class="img-responsive">สมัครงาน</a>
                                           </li>
                                           <li>
                                               <a href="contact.php"><img src="img/information.png" class="img-responsive">ติดต่อ</a>
                                           </li>
                                           <li class="m_boxcolor">
                                               <div class="boxcolor">
                                                   <a href="activities.php"><img src="img/megaphone1.png" class="img-responsive">กิจกรรม</a>
                                               </div>
                                           </li>
                                           <li class="m_boxcolor">
                                               <div class="boxcolor1">
                                                   <a href="message.php"><img src="img/magnifying-glass1.png" class="img-responsive ">ข่าวสาร</a>
                                               </div>
                                           </li>
                                         <?php } ?>


                                                         <!--

                                                              <li class="col-sm-3">
                                                                  <ul>
                                                                  <li class="dropdown-header"></li>
                                                                <li><a href="#">สินค้าขายดี</a></li>
                                                                <li><a href="#">สินค้าแนะนำ</a></li>
                                                                <li><a href="#">สินค้ากิ๊ฟชอป</a></li>
                                                                <li><a href="#">บิวตี้</a></li>
                                                                <li><a href="#">เครื่องเขียน</a></li>
                                                                <li><a href="#">ของเล่นเด็ก</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="col-sm-3">
                                                            <ul>
                                                                <li class="dropdown-header"></li>
                                                                <li><a href="#">เครื่องครัว</a></li>
                                                                <li><a href="#">เครื่องมือช่าง</a></li>
                                                                <li><a href="#">ของใช้ในห้องน้ำ</a></li>
                                                                <li><a href="#">ของใช้ในบ้าน</a></li>
                                                                <li><a href="#">สินค้าไอที</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="col-sm-3">
                                                            <ul>
                                                                <li class="dropdown-header"></li>
                                                                <li><a href="#">ดอกไม้ปลอม</a></li>
                                                                <li><a href="#">สินค้าพลาสติก</a></li>
                                                                <li><a href="#">งานแก้ว</a></li>
                                                                <li><a href="#">งานเซรามิก</a></li>
                                                                <li><a href="#">งาน DIY</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>-->







                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.nav-collapse -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<div id="mail" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title">Email</h5> </div>
            <div class="modal-body">
                <h5>sawang@interspecgroup.com</h5> </div>
        </div>
    </div>
</div>
<div id="tel" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title">Tel</h5> </div>
            <div class="modal-body">
                <h5>0-81834-7088 , 0-2370-2635 </h5> </div>
        </div>
    </div>
</div>

<script>
function logout() {
    if (confirm('Are you sure you want to logout ?')) {
        //Make ajax call
        $.ajax({
            url: "logout.php",
            type: "POST",
            dataType: "html",
            success: function() {
              location.reload();
            }
        });

      }else{
        return false;
      }
}
function check_login(){
if(document.form1.username.value!="" && document.form1.password.value!=""){
  return true;
}
else{

  document.form1.username.focus();
  return false;
}
}
    $(document).ready(function () {
        $('.link_menutop').click(function () {
            if ($(this).parent().find(".bg_pop_menutop").is(":hidden")) {
                $(".bg_pop_menutop").slideUp();
                $(this).parent().find(".bg_pop_menutop").slideDown();
            }
            else {
                $(this).parent().find(".bg_pop_menutop").slideUp();
            }
        });
    });
</script>
<script>
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '1516485138390247',
    cookie     : true,  // enable cookies to allow the server to access
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.8' // use graph api version 2.8
  });

  // Now that we've initialized the JavaScript SDK, we call
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.
//login auto
  /*FB.getLoginStatus(function(response) {
  statusChangeCallback(response);
});*/

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {

    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      $.ajax({
        url:'ajax.php',
        data:{fbpost:response},
        type:'POST',
        success:function(test_response){
          //alert(test_response);
          location.reload();
        }
      })
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + '!';
    });
  }
</script>
