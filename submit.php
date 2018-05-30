<?php 
	require('header.php');
	require("connect.php"); 
?>	
	<div class="container cc">
		<div class="row">
			<div class="col-lg-4">
				<h6>
				<?php 
				 	$input=$_POST['nameInput'];
					$provine=$_POST['Province'];
					$amphur=$_POST['Amphur'];
					$district=$_POST['District'];
					
					echo "ชื่อ-นามสกุล :".$input."<br>"; 
					echo "<hr>";
					//select จังหวัด
					$query = "SELECT * FROM province WHERE PROVINCE_ID = ".$provine;
					$result = mysql_query($query, $connect);
					$row = mysql_fetch_array($result);						
					echo $row['PROVINCE_NAME'].'('.$row['PROVINCE_ID'].')';
					echo '<hr>';

					//select อำเภอ
					$query = "SELECT * FROM amphur WHERE AMPHUR_ID = ".$amphur;
					$result = mysql_query($query, $connect);
					$row = mysql_fetch_array($result);					
					echo $row['AMPHUR_NAME'].'('.$row['AMPHUR_ID'].')';
					echo '<hr>';

					//select ตำบล
					$query = "SELECT * FROM district WHERE DISTRICT_ID = ".$district;
					$result = mysql_query($query, $connect);
					$row = mysql_fetch_array($result);						
					echo $row['DISTRICT_NAME'].'('.$row['DISTRICT_ID'].')';
					echo '<hr>';			
				?>
				</h6>
			</div>
		</div>
	</div>
<?php  
 	require('footer.php');
 ?>