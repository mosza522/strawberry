<?php
require_once('backoffice/mpdf/mpdf.php');
ob_start();
session_start();
$host="localhost";
$user="strawberry_admin";
$pass="043522359";
$db="strawberry_club";
$connect = mysql_connect($host,$user,$pass);
session_start();
mysql_query("SET NAMES UTF8",$connect);
mysql_select_db($db);
function Convert($amount_number)
{
    $amount_number = number_format($amount_number, 2, ".","");
    $pt = strpos($amount_number , ".");
    $number = $fraction = "";
    if ($pt === false)
        $number = $amount_number;
    else
    {
        $number = substr($amount_number, 0, $pt);
        $fraction = substr($amount_number, $pt + 1);
    }

    $ret = "";
    $baht = ReadNumber ($number);
    if ($baht != "")
        $ret .= $baht . "บาท";

    $satang = ReadNumber($fraction);
    if ($satang != "")
        $ret .=  $satang . "สตางค์";
    else
        $ret .= "ถ้วน";
    return $ret;
}

function ReadNumber($number)
{
    $position_call = array("แสน", "หมื่น", "พัน", "ร้อย", "สิบ", "");
    $number_call = array("", "หนึ่ง", "สอง", "สาม", "สี่", "ห้า", "หก", "เจ็ด", "แปด", "เก้า");
    $number = $number + 0;
    $ret = "";
    if ($number == 0) return $ret;
    if ($number > 1000000)
    {
        $ret .= ReadNumber(intval($number / 1000000)) . "ล้าน";
        $number = intval(fmod($number, 1000000));
    }

    $divider = 100000;
    $pos = 0;
    while($number > 0)
    {
        $d = intval($number / $divider);
        $ret .= (($divider == 10) && ($d == 2)) ? "ยี่" :
            ((($divider == 10) && ($d == 1)) ? "" :
            ((($divider == 1) && ($d == 1) && ($ret != "")) ? "เอ็ด" : $number_call[$d]));
        $ret .= ($d ? $position_call[$pos] : "");
        $number = $number % $divider;
        $divider = $divider / 10;
        $pos++;
    }
    return $ret;
}
	function DateThai($strDate)
	{
		$strYear = date("Y",strtotime($strDate))+543;
		$strMonth= date("n",strtotime($strDate));
		$strDay= date("j",strtotime($strDate));
		$strHour= date("H",strtotime($strDate));
		$strMinute= date("i",strtotime($strDate));
		$strSeconds= date("s",strtotime($strDate));
		$strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
		$strMonthThai=$strMonthCut[$strMonth];
		return "$strDay/$strMonthThai/$strYear";
    //return "$strDay $strMonthThai $strYear, $strHour:$strMinute";
	}

function alphanumeric_rand($num_require=8) {
	$alphanumeric = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',0,1,2,3,4,5,6,7,8,9);
	if($num_require > sizeof($alphanumeric)){
		echo "Error alphanumeric_rand(\$num_require) : \$num_require must less than " . sizeof($alphanumeric) . ", $num_require given";
		return;
	}
	$rand_key = array_rand($alphanumeric , $num_require);
	for($i=0;$i<sizeof($rand_key);$i++) $randomstring .= $alphanumeric[$rand_key[$i]];
	return $randomstring;
}

$strDate = date("Y-m-d H:i:s");
$newstrDate=date("Y-m-d H:i:s", strtotime("+3 days"));
?>
<center>

<table width="100%" style="border-collapse: collapse;"  cellspacing="0">
<thead>

<tr>
  <td rowspan="2"><img src="img/Logob.jpg" alt="" width="200" height="150"></td>
  <td colspan="7" align="center"><h2>บริษัท ไลฟ์เวย์อินเตอร์เทรด จำกัด (สำนักงานใหญ่)<br>
Lifewayintertrade Co.,Ltd (Head Office) </h2></td>
</tr>
<tr>

  <td colspan="7"><b>5/7 ซ.พหลโยธิน 52 แยก 11(เดชศิริ) แขวงคลองถนน เขตสายไหม กรุงเทพมหานคร 10220
    <br/> 5/7 Soi Phaholyothin 52 Yak 11(Det siri) Khlongthanon, Saimai , Bankok 10220
    <br> TEL.02-973-8797 FAX.02-039-6757 e-mail:strawberryclub.gm@gmail.com
    <br> เลขผู้เสียภาษี 010 5557 1720 91</b>
  </td>
</tr>
<tr>

  <td colspan="8" align="center"><h2>ใบสั่งซื้อ</h2></td>
</tr>
<tr>
  <td colspan="1" ></td>
  <td colspan="4" width="50%"></td>
  <td colspan="1" align="center"><b>เลขที่เอกสาร</b></td>
  <td colspan="2" align="center"><?=$rand= alphanumeric_rand(12);?>
	</td>
</tr>
<tr>
  <td colspan="5"><b>ชื่อลูกค้า</b>
		<?php
	if(isset($rs['user_fullname'])){
		echo "(".$rs['user_username'].") ".$rs['user_fullname']." Strawberry Club-สาขา".$rs['user_branch'];
	}else if(isset($_SESSION['fb_id'])){
		echo " ".$_SESSION['fb_name'];
	}else{
    echo $_SESSION['name']." ที่อยู่ ".$_SESSION['address']." เบอร์โทรศัพท์ ".$_SESSION['tell']." อีเมลล์ ";
		echo $_SESSION['email'];
	}  ?></td>
  <td  align="center"><b>วันที่เอกสาร</b></td>
  <td colspan="2" align="center"><?=DateThai($strDate)?></td>
</tr>
<tr style="border-left: 1px solid black; border-right: 1px solid black; border: 1px solid black;">
  <th style="border: 1px solid black;height: 30px;background-color:#cccccc" colspan="1" align="center"> รหัสลูกค้า</td>
  <th style="border: 1px solid black;background-color:#cccccc" colspan="3" align="center"> เลขที่ใบสั่งซื้อ</td>
  <th style="border: 1px solid black;background-color:#cccccc" colspan="2" align="center"> เงื่อนไขการชำระ</td>
  <th style="border: 1px solid black;background-color:#cccccc" colspan="2" align="center"> วันครบกำหนด</td>
</tr>
<tr style="border-left: 1px solid black; border-right: 1px solid black; border: 1px solid black;">
  <td style="border: 1px solid black;" colspan="1" align="center"> <?=$rs['user_username']?></td>
  <td style="border: 1px solid black;" colspan="3" align="center"> <?=$rand?></td>
  <td style="border: 1px solid black;" colspan="2" align="center"> 3 วัน</td>
  <td style="border: 1px solid black;" colspan="2" align="center"><?=DateThai($newstrDate)?></td>
</tr>
<tr>
  <td colspan="8"><br></td>
</tr>
<tr style="border-left: 1px solid black; border-right: 1px solid black; border: 1px solid black;">
	<th style="border: 1px solid black;height: 50px;background-color:#999999" align="center">รหัสสินค้า <br>CODE</th>
	<th style="border: 1px solid black;width: 300px;background-color:#999999" colspan="2"  align="center">รายการสินค้า <br>DESCRIPTION</th>
	<th style="border: 1px solid black;background-color:#999999" align="center">หมวดหมู่ <br>CATEGORY</th>
	<th style="border: 1px solid black;background-color:#999999" align="center">จำนวน <br>QTY.</th>
	<th style="border: 1px solid black;background-color:#999999" align="center">ราคา/หน่วย <br>UNIT PRICE</th>
	<th style="border: 1px solid black;background-color:#999999" colspan="2" align="center">จำนวนเงิน <br>AMOUNT</th>
</tr>
</thead>

<tbody>
	<?php
  $total=0;
  $session_crate=array();
  $session_dozen=array();
  $session_cart=array();
  $cart=array();
  $cart_dozen=array();
  $cart_crate=array();
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
  foreach ($cart as $value) {
    $sql="SELECT * FROM product
    LEFT OUTER JOIN product_category
    ON product.product_category=product_category.product_category_id
    WHERE product_id={$value}";
    $q=mysql_query($sql);
    $rs=mysql_fetch_array($q);
    $num=0;
    for ($j=0; $j < count($_SESSION['cart']); $j++) {
      if($value==$_SESSION['cart'][$j]){
          $num++;
        }
      }
      $price=$num*10;
    ?>
  	<tr style="border-left: 1px solid black; border-right: 1px solid black; border: 1px solid black;">
      <td style="border-left: 1px solid black;height: 30px;"><?=$rs['product_id_product']?></td>
      <td style="border-left: 1px solid black;"><?=$rs['product_name']?></td>
      <td colspan="2" style="border-left: 1px solid black;"><?=$rs['product_category_name_th']?></td>
      <td style="border-left: 1px solid black;"><?=$num?> ชิ้น</td>
      <td style="border-left: 1px solid black;"><?=number_format(10,2)?> บาท</td>
      <td style="border-left: 1px solid black;" colspan="2"><?=number_format($price,2)?> บาท</td>
    </tr>
  	<?php
      $total+=$price;
  }
  foreach ($cart_dozen as $value) {
    $sql="SELECT * FROM product
    LEFT OUTER JOIN product_category
    ON product.product_category=product_category.product_category_id
    WHERE product_id={$value}";
    $q=mysql_query($sql);
    $rs=mysql_fetch_array($q);
    $num=0;
    for ($j=0; $j < count($_SESSION['cart_dozen']); $j++) {
      if($value==$_SESSION['cart_dozen'][$j]){
          $num++;
        }
      }
      $price=$num*$rs['product_price_dozen'];
    ?>
  	<tr style="border-left: 1px solid black; border-right: 1px solid black; border: 1px solid black;">
      <td style="border-left: 1px solid black;height: 30px;"><?=$rs['product_id_product']?></td>
      <td colspan="2" style="border-left: 1px solid black;"><?=$rs['product_name']?></td>
      <td style="border-left: 1px solid black;"><?=$rs['product_category_name_th']?></td>
      <td style="border-left: 1px solid black;"><?=$num?> โหล</td>
      <td style="border-left: 1px solid black;"><?=number_format($rs['product_price_dozen'],2)?> บาท</td>
      <td style="border-left: 1px solid black;" colspan="2"><?=number_format($price,2)?> บาท</td>
    </tr>
  	<?php
      $total+=$price;
  }
  foreach ($cart_crate as $value) {
    $sql="SELECT * FROM product
    LEFT OUTER JOIN product_category
    ON product.product_category=product_category.product_category_id
    WHERE product_id={$value}";
    $q=mysql_query($sql);
    $rs=mysql_fetch_array($q);
    $num=0;
    for ($j=0; $j < count($_SESSION['cart_crate']); $j++) {
      if($value==$_SESSION['cart_crate'][$j]){
          $num++;
        }
      }
      $price=$num*$rs['product_price_crate'];
    ?>
    <tr style="border-left: 1px solid black; border-right: 1px solid black; border: 1px solid black;">
      <td style="border-left: 1px solid black;height: 30px;"><?=$rs['product_id_product']?></td>
      <td colspan="2" style="border-left: 1px solid black;"><?=$rs['product_name']?></td>
      <td style="border-left: 1px solid black;"><?=$rs['product_category_name_th']?></td>
      <td style="border-left: 1px solid black;"><?=$num?> ลัง</td>
      <td style="border-left: 1px solid black;"><?=number_format($rs['product_price_crate'],2)?> บาท</td>
      <td style="border-left: 1px solid black;" colspan="2"><?=number_format($price,2)?> บาท</td>
    </tr>
    <?php
      $total+=$price;
  }
?>
	</tbody>
  <tfoot>
  <tr>
    <tr >
      <td colspan="8" style="vertical-align: text-top;border: 1px solid black;height: 30px;"><b>หมายเหตุ <br> Remark</b></td>

    </tr>
    <tr>
      <td colspan="5" style="border: 1px solid black;height: 30px;background-color: #cccccc;"><?=Convert($total,2)?></td>
      <td style="border: 1px solid black;background-color: #cccccc;"><b>รวมเงิน</b></td>
      <td style="border: 1px solid black;" colspan="2"><?=number_format($total,2)?> บาท</td>
    </tr>
  </tr>
	<tr>
		<td colspan="8"><br></td>
	</tr>
	<tr>
		<td colspan="4" style="border-left: 1px solid black;
		border-right: 1px solid black;border-top: 1px solid black;height:30px;">1. สินค้าข้างต้นเป็นกรรมสิทธิ์ของ "บริษัท ไลฟ์เวย์อินเตอร์เทรด"
			จำกัดจนกว่าจะได้รับชำระด้วยเงินสดหรือเช็คที่เรียกเก็บเงินเรียบร้อยแล้ว</td>
		<td style="border-top: 1px solid black;">ชำระโดย </td>
		<td style="border-top: 1px solid black;"><img src="img/checkbox.jpg" width="20" height="20"> เงินสด</td>
		<td colspan="2" style="border-right: 1px solid black;border-top: 1px solid black;"><img src="img/checkbox.jpg" width="20" height="20"> เช็คธนาคาร</td>
	</tr>
	<tr>
		<td colspan="4" style="border-left: 1px solid black;border-right: 1px solid black;">2. เมื่อถึงกำหนดหากผู้ซื้อผิดนัดชำระเงิน บริษัทฯ จะคิดดอกเบี้ย 2% ต่อเดือน
		/ ใบเสร็จรับเงินฉบับนี้จะสมบูรณ์ต่อเมื่อได้เรียกเก็บเงินเป็นที่เรียบร้อยแล้ว</td>
		<td> Paid by</td>
		<td> Cash </td>
		<td colspan="2" style="border-right: 1px solid black;">Chq. Bank</td>
	</tr>
	<tr>
		<td colspan="4" style="border-bottom: 1px solid black;border-left: 1px solid black;border-right: 1px solid black;">3. กรณีชำระด้วยเช็คกรุณาสั่งจ่ายในนาม "บริษัท ไลฟ์เวย์อินเตอร์เทรด" เท่านั้น</td>
		<td style="border-bottom: 1px solid black;"> สาขา...........
		<br>Branch</td>
		<td align="center" style="border-bottom: 1px solid black;"> เลขที่.........
		<br> No.</td>
		<td colspan="2" style="border-right: 1px solid black;border-bottom: 1px solid black;">วันที่.......... <br>
		Date </td>
	</tr>
	<tr>
		<td colspan="8"><br /></td>
	</tr>
	</tfoot>
</table>
<table width="100%" style="border-collapse: collapse;"  cellspacing="0">
	<tr>
		<td align="center" style="border-top: 1px solid black;border-left: 1px solid black;" colspan="2">...................................</td>
		<td align="center" style="border-top: 1px solid black;border-left: 1px solid black;" colspan="2">...................................</td>
		<td align="center" style="border-top: 1px solid black;border-left: 1px solid black;" colspan="2">...................................</td>
		<td align="center" style="border-top: 1px solid black;border-left: 1px solid black;border-right: 1px solid black;width: 180px;" colspan="2" >...................................</td>
	</tr>
	<tr>
		<td align="center" style="border-left: 1px solid black;height:40px;" colspan="2" align="center">ผู้รับของ/Receiver</td>
		<td align="center" style="border-left: 1px solid black;" colspan="2" align="center">ผู้ส่งของ/Delivered</td>
		<td align="center" style="border-left: 1px solid black;" colspan="2" align="center">ผู้รับเงิน/Collector</td>
		<td align="center" style="border-left: 1px solid black;border-right: 1px solid black;" colspan="2" align="center">ผู้มีอำนาจลงนาม/Authorized</td>
	</tr>
	<tr>
		<td align="center" style="border-bottom: 1px solid black;border-left: 1px solid black;" colspan="2">วันที่......./......./.......</td>
		<td align="center" style="border-bottom: 1px solid black;border-left: 1px solid black;" colspan="2">วันที่......./......./.......</td>
		<td align="center" style="border-bottom: 1px solid black;border-left: 1px solid black;" colspan="2">วันที่......./......./.......</td>
		<td align="center" style="border-bottom: 1px solid black;border-right: 1px solid black;border-left: 1px solid black;" colspan="2">วันที่......./......./.......</td>
	</tr>
</table>

</center>

<?Php
$html = ob_get_contents();
ob_end_clean();
$pdf = new mPDF('th', 'A4', '0', 'THSaraban');
$pdf->SetAutoFont();
$pdf->SetDisplayMode('fullpage');
$pdf->WriteHTML($html, 2);
$pdf->Output('backoffice/pdf/invoice.pdf', 'F');
?>
