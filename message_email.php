<?php
session_start();
$host="localhost";
$user="strawberry_admin";
$pass="043522359";
$db="strawberry_club";
$connect = mysql_connect($host,$user,$pass);
mysql_query("SET NAMES UTF8",$connect);
mysql_select_db($db);
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

	$strDate = date("Y-m-d H:i:s");


?>
<style media="screen">
table {
  border-collapse: collapse;
}
tbody th {
  border: 1px solid black;
}
tbody tr {
  border-left: 1px solid black;
  border-right: 1px solid black;
}
tbody td {
  border-left: 1px solid black;
}
tfoot td{
  border: 1px solid black;
}


</style>
<center>

<table width="80%" bgcolor=""   cellspacing="0">
<thead>

<tr>
  <td rowspan="2"><img src="img/unnamed.png" alt="" width="100" height="100"></td>
  <td colspan="7" align="center"><h2>บริษัท ไลฟ์เวย์อินเตอร์เทรด จำกัด</h2></td>
</tr>
<tr>

  <td colspan="7" align="center"> ที่อยู่ : 5/7 ซ.พหลโยธิน 52 แยก 11(เดชศิรี) แขวงครองถนน เขตสายไหม กรุงเทพมหานคร 10220
โทร : 02-937 8798 แฟกซ์ : 02-0396757 อีเมล์ : strawbreeyclub.gm@gmai.com </td>
</tr>
<tr>
  <td></td>
  <td colspan="7" align="center"><h2>ใบสั่งซื้อ</h2></td>
</tr>
<tr>
  <td colspan="1" ></td>
  <td colspan="4" width="50%"></td>
  <td colspan="1" align="center"><b>เลขที่เอกสาร</b></td>
  <td colspan="2" align="center"><b>35413</b></td>
</tr>
<tr>
  <td colspan="2">รหัสผู้ซื้อ  mosza522</td>
  <td colspan="3"></td>
  <td colspan="1" align="center"><b>วันที่เอกสาร</b></td>
  <td colspan="2" align="center"><b><?php echo DateThai($strDate);?></b></td>
</tr>

</thead>
<tbody>
  <tr>
    <th align="center">รหัสสินค้า</th>
    <th align="center">รายการ</th>
    <th align="center">หมวดหมู่</th>
    <th align="center">จำนวน</th>
    <th align="center">หน่วยนับ</th>
    <th align="center">ราคา/หน่วย</th>
    <th align="center">ส่วนลด</th>
    <th align="center">จำนวนเงิน</th>
  </tr>
<?php
  $total=0;
  $cart=array_unique($_SESSION['cart']);
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
  ?>
  <tr>
    <td ><?=$rs['product_id_product']?></td>
    <td><?=$rs['product_name']?></td>
    <td><?=$rs['product_category_name_th']?></td>
    <td><?=$num?></td>
    <td>ชิ้น</td>
    <td><?=$rs['product_price_retail']?></td>
    <td></td>
    <td><?php echo number_format($num*number_format($rs['product_price_retail']),2);?></td>
  </tr>
    <?php
    $total+=$num*number_format($rs['product_price_retail']);
  }
  ?>
  </tbody>
  <tfoot>
  <tr>
    <tr >
      <td colspan="5" rowspan="5" style="vertical-align: text-top;">หมายเหตุ</td>
      <td>รวมเงิน</td>
      <td colspan="2"><?=number_format($total,2)?></td>
    </tr>
    <tr>
      <td>ส่วนลด</td>
      <td colspan="2">0</td>
    </tr>
    <tr>
      <td>เงินหลังหักส่วนลด</td>
      <td colspan="2"><?=$total?></td>
    </tr>
    <tr>
      <td>ภาษีมูลค่าเพิ่ม 7%</td>
      <td colspan="2"><?=$total=$total*0.07?></td>
    </tr>
    <tr>
      <td>รวมเงิน</td>
      <td colspan="2"><?=$total+=$total*0.07?></td>
    </tr>
  </tr>
  </tfoot>



</table>

</center>
