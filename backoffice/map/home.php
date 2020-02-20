<style>
html { height: 100% }
body {
    height:100%;
    margin:0;padding:0;
    font-family:tahoma, "Microsoft Sans Serif", sans-serif, Verdana;
    font-size:12px;
}
/* css กำหนดความกว้าง ความสูงของแผนที่ */
#map_canvas {
    width:100%;
    height:500px;
    margin:auto;
}
</style>
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> </h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
			 <div class="x_panel">
                  <div class="x_title">
                    <h2>Apply Job</h2>
                    <div class="clearfix"></div>
                  </div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <div class="row">
                        <div class="col-md-12">
                          <form  action ="map/add.php"  id ="form-hotel" method="post"  data-parsley-validate>

                            <div class="modal-body form-horizontal">
                            <div id="map_canvas"></div>
                            <br>
                              <div class = "form-group">
                                <?php
                                $sql="SELECT * FROM maps";
                                $rs=mysql_fetch_array(mysql_query($sql));
                                if(mysql_num_rows(mysql_query($sql))>0){
                                  $lat=$rs['map_lat'];
                                  $lng=$rs['map_lng'];
                                  $title=$rs['map_title'];
                                }else{
                                  $lat="13.894514";
                                  $lng="100.620252";
                                  $title="Stawberry";
                                }
                                 ?>
                              <div class="form-group">
                                <div class="col-xs-12 col-md-6">
                                <label>Title</label>
                                  <input type="text" class="zoom_value form-control"  name="map_title"  value="<?=$title?>" size="5" />
                                </div>
                        <div class="col-xs-12 col-md-6">
                        <label>Zoom Map</label>
                          <input type="text" class="zoom_value form-control"  name="airport_zoom" type="text" id="zoom_value" value="0" size="5" />
                        </div>
                      </div>
                           </div>
                      <div class="form-group">
                        <div class="col-xs-12 col-md-6">
                        <label>Latitude</label>
                          <input type="text" class="lat_value form-control" name="map_lat" type="text" id="lat_value" value="<?=$lat?>" size="17" />
                        </div>
                        <div class="col-xs-12 col-md-6">
                        <label>Longitude</label>
                          <input type="text" class="lon_value form-control" name="map_lng" type="text" id="lon_value" value="<?=$lng?>" size="17" />
                        </div>
                      </div>


                              <div class="col-md-2" style="float:right; margin-top:20px" >
                                  <button type="submit" class ="btn btn-success btn-block"> Submit</button>
                              </div>
                            </div>
                           </form>
                            <!--  <script>
                                CKEDITOR.replace("detail_hotel_en");
                                CKEDITOR.replace("detail_hotel_cn");
                            </script> -->

                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
		<script src="//code.jquery.com/jquery-1.12.3.js"></script>
		<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
		<link href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" rel="stylesheet">
<script>
	$(document).ready(function(){
		$('#example').DataTable({
        "order": [[ 0, "asc" ]]
    });
	});

	function settext(text)
	{
		bootbox.dialog({
			message : '<div class="alert alert-success fade in m-b-15"><strong>Success!</strong> Insert Complete</div>',
			title: '&nbsp;',

		});
		setTimeout(function() {
			window.location.href="product.php?page=home";
		}, 1000);
	}

	function del(id)
	{
		bootbox.confirm({
			title: "Confirm?",
			message: "You want to remove the selected data or not.",
			buttons: {
				cancel: {
					label: '<i class="fa fa-times"></i> Cancel',
					className: 'btn-danger'
				},
				confirm: {
					label: '<i class="fa fa-check"></i> Confirm',
					className: 'btn-success'
				}
			},
			callback: function (result) {
				if(result == true)
				{
					window.location.href="deljob.php?id="+id+"";
				}
			}
		});

	}
</script>
<style media="screen">
  .table-modal{
    font-family: 'Itim', cursive;
    font-size: 17px;
  }
  .table-modal tr {
    height:30px;
  }
  .td-big {
    height:70px;
    background-color: #f8acc8;

  }
  .bb td {
       border-bottom: 3px solid #fb85b9 !important;
      }
  .cc td {
      border-bottom: 0px;
  }

</style>

<script type="text/javascript">
var geocoder; // กำหนดตัวแปรสำหรับ เก็บ Geocoder Object ใช้แปลงชื่อสถานที่เป็นพิกัด
var map; // กำหนดตัวแปร map ไว้ด้านนอกฟังก์ชัน เพื่อให้สามารถเรียกใช้งาน จากส่วนอื่นได้
var my_Marker; // กำหนดตัวแปรสำหรับเก็บตัว marker
var GGM; // กำหนดตัวแปร GGM ไว้เก็บ google.maps Object จะได้เรียกใช้งานได้ง่ายขึ้น
function initialize() { // ฟังก์ชันแสดงแผนที่
   GGM=new Object(google.maps); // เก็บตัวแปร google.maps Object ไว้ในตัวแปร GGM
   geocoder = new GGM.Geocoder(); // เก็บตัวแปร google.maps.Geocoder Object
   // กำหนดจุดเริ่มต้นของแผนที่
   var my_Latlng  = new GGM.LatLng(<?php echo $lat;?>,<?php echo $lng;?>);
   var my_mapTypeId=GGM.MapTypeId.ROADMAP; // กำหนดรูปแบบแผนที่ที่แสดง
   // กำหนด DOM object ที่จะเอาแผนที่ไปแสดง ที่นี้คือ div id=map_canvas
   var my_DivObj=$("#map_canvas")[0];
   // กำหนด Option ของแผนที่
   var myOptions = {
       zoom: 17, // กำหนดขนาดการ zoom
       center: my_Latlng , // กำหนดจุดกึ่งกลาง จากตัวแปร my_Latlng
       mapTypeId:my_mapTypeId // กำหนดรูปแบบแผนที่ จากตัวแปร my_mapTypeId
   };
   map = new GGM.Map(my_DivObj,myOptions); // สร้างแผนที่และเก็บตัวแปรไว้ในชื่อ map

   my_Marker = new GGM.Marker({ // สร้างตัว marker ไว้ในตัวแปร my_Marker
       position: my_Latlng,  // กำหนดไว้ที่เดียวกับจุดกึ่งกลาง
       map: map, // กำหนดว่า marker นี้ใช้กับแผนที่ชื่อ instance ว่า map
       draggable:true, // กำหนดให้สามารถลากตัว marker นี้ได้
       title:"คลิกลากเพื่อหาตำแหน่งจุดที่ต้องการ!" // แสดง title เมื่อเอาเมาส์มาอยู่เหนือ
   });

   // กำหนด event ให้กับตัว marker เมื่อสิ้นสุดการลากตัว marker ให้ทำงานอะไร
   GGM.event.addListener(my_Marker, 'dragend', function() {
       var my_Point = my_Marker.getPosition();  // หาตำแหน่งของตัว marker เมื่อกดลากแล้วปล่อย
       map.panTo(my_Point); // ให้แผนที่แสดงไปที่ตัว marker
       $("#lat_value").val(my_Point.lat());  // เอาค่า latitude ตัว marker แสดงใน textbox id=lat_value
       $("#lon_value").val(my_Point.lng());  // เอาค่า longitude ตัว marker แสดงใน textbox id=lon_value
       $("#zoom_value").val(map.getZoom());  // เอาขนาด zoom ของแผนที่แสดงใน textbox id=zoom_valu
   });

   // กำหนด event ให้กับตัวแผนที่ เมื่อมีการเปลี่ยนแปลงการ zoom
   GGM.event.addListener(map, 'zoom_changed', function() {
       $("#zoom_value").val(map.getZoom());   // เอาขนาด zoom ของแผนที่แสดงใน textbox id=zoom_value
   });

}
$(function(){
   // ส่วนของฟังก์ชันค้นหาชื่อสถานที่ในแผนที่
   var searchPlace=function(){ // ฟังก์ชัน สำหรับคันหาสถานที่ ชื่อ searchPlace
       var AddressSearch=$("#namePlace").val();// เอาค่าจาก textbox ที่กรอกมาไว้ในตัวแปร
       if(geocoder){ // ตรวจสอบว่าถ้ามี Geocoder Object
           geocoder.geocode({
                address: AddressSearch // ให้ส่งชื่อสถานที่ไปค้นหา
           },function(results, status){ // ส่งกลับการค้นหาเป็นผลลัพธ์ และสถานะ
               if(status == GGM.GeocoderStatus.OK) { // ตรวจสอบสถานะ ถ้าหากเจอ
                   var my_Point=results[0].geometry.location; // เอาผลลัพธ์ของพิกัด มาเก็บไว้ที่ตัวแปร
                   map.setCenter(my_Point); // กำหนดจุดกลางของแผนที่ไปที่ พิกัดผลลัพธ์
                   my_Marker.setMap(map); // กำหนดตัว marker ให้ใช้กับแผนที่ชื่อ map
                   my_Marker.setPosition(my_Point); // กำหนดตำแหน่งของตัว marker เท่ากับ พิกัดผลลัพธ์
                   $("#lat_value").val(my_Point.lat());  // เอาค่า latitude พิกัดผลลัพธ์ แสดงใน textbox id=lat_value
                   $("#lon_value").val(my_Point.lng());  // เอาค่า longitude พิกัดผลลัพธ์ แสดงใน textbox id=lon_value
                   $("#zoom_value").val(map.getZoom()); // เอาขนาด zoom ของแผนที่แสดงใน textbox id=zoom_valu
               }else{
                   // ค้นหาไม่พบแสดงข้อความแจ้ง
                   alert("Geocode was not successful for the following reason: " + status);
                   $("#namePlace").val("");// กำหนดค่า textbox id=namePlace ให้ว่างสำหรับค้นหาใหม่
                }
           });
       }
   }
   $("#SearchPlace").click(function(){ // เมื่อคลิกที่ปุ่ม id=SearchPlace ให้ทำงานฟังก์ฃันค้นหาสถานที่
       searchPlace();  // ฟังก์ฃันค้นหาสถานที่
   });
   $("#namePlace").keyup(function(event){ // เมื่อพิมพ์คำค้นหาในกล่องค้นหา
       if(event.keyCode==13){  //  ตรวจสอบปุ่มถ้ากด ถ้าเป็นปุ่ม Enter ให้เรียกฟังก์ชันค้นหาสถานที่
           searchPlace();      // ฟังก์ฃันค้นหาสถานที่
       }
   });

});
$(function(){
   // โหลด สคริป google map api เมื่อเว็บโหลดเรียบร้อยแล้ว
   // ค่าตัวแปร ที่ส่งไปในไฟล์ google map api
   // v=3.2&sensor=false&language=th&callback=initialize
   //  v เวอร์ชัน่ 3.2
   //  sensor กำหนดให้สามารถแสดงตำแหน่งทำเปิดแผนที่อยู่ได้ เหมาะสำหรับมือถือ ปกติใช้ false
   //  language ภาษา th ,en เป็นต้น
   //  callback ให้เรียกใช้ฟังก์ชันแสดง แผนที่ initialize
 $("<script/>", {
     "type": "text/javascript",
     src: "http://maps.google.com/maps/api/js?key=AIzaSyBNaQBbbUjMEKDzJ-j7O3Iw6erM4ApDOb4&v=3.2&sensor=false&language=en&callback=initialize"
   }).appendTo("body");
});
</script>
