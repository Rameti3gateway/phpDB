
// JavaScript Document
$(document).ready(function(){
	// ส่วนของจังหวัดเมื่อมีการเปลี่ยนแปลง
	$("#Province").change(function(){
		//$("#Aphur").empty();//ล้างข้อมูล
		$("#District").empty();//ล้างข้อมูล
		$.ajax({
			  url: "getdata.php",//ที่อยู่ของไฟล์เป้าหมาย
			  global: false,
			  type: "GET",//รูปแบบข้อมูลที่จะส่ง
			  data: ({ID : $(this).val(),TYPE : "Amphur"}), //ข้อมูลที่ส่ง  { ชื่อตัวแปร : ค่าตัวแปร }
			  dataType: "JSON", //รูปแบบข้อมูลที่ส่งกลับ xml,script,json,jsonp,text
			  async:false,
			  success: function(jd) { //แสดงข้อมูลเมื่อทำงานเสร็จ โดยใช้ each ของ jQuery
							var opt="<option value=\"0\" selected=\"selected\">---เลือกอำเภอ---</option>";
							$.each(jd, function(key, val){
								opt +="<option value='"+ val["AMPHUR_ID"] +"'>"+val["AMPHUR_NAME"]+"</option>"
    						});
							$("#Amphur").html( opt );//เพิ่มค่าลงใน Select ของอำเภอ
		   	  }
		});	
	});
	// ส่วนของอำเภอเมื่อมีการเปลี่ยนแปลง
	$("#Amphur").change(function(){
		$("#District").empty();
		$.ajax({
			  url: "getdata.php",
			  global: false,
			  type: "GET",
			  data: ({ID : $(this).val(),TYPE : "District"}),
			  dataType: "JSON",
			  async:false,
			  success: function(jd) {
							var opt="<option value=\"0\" selected=\"selected\">---เลือกตำบล---</option>";
							$.each(jd, function(key, val){
								opt +="<option value='"+ val["DISTRICT_ID"] +"'>"+val["DISTRICT_NAME"]+"</option>"
    						});
							$("#District").html( opt );
		   	  }
		 });
	});
});
// ส่วนของ function เพื่อเพิ่มข้อมูลจังหวัดเข้าไปก่อน
function Add(){
	//alert("564");
	$.ajax({
	  	url: "getdata.php",
	  	global: false,
	  	type: "GET",
	  	data: ({TYPE : "Province"}),
	  	dataType: "JSON",
	  	async:false,
	  	success: function(jd) {
	  		console.log(jd);
			var opt ="<option value=\"0\" selected=\"selected\">---เลือกจังหวัด---</option>";
			$.each(jd, function(key, val){
				opt +="<option value='"+ val["PROVINCE_ID"] +"'>"+val["PROVINCE_NAME"]+"</option>"
			});
			$("#Province").html( opt );
   		},
	});
};