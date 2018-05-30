<?php
  require('phpDb.php');
  //เตรียมข้อมูลลงฐานข้อมูล
$id = 6;
$fanme = "t4244p";
$lname = "dfhmndmfh";
$salary =400451;
//คำสั่ง sql
$sql = "insert into list(id,fname,lname,salary)"
        ."values($id,'$fanme','$lname',$salary)";
$result = mysqli_query($connect,$sql);
    if ($result) {
        echo "insert succes".'<br>';
        echo "<a href='showdb.php'>Show</a>";
    } else {
       echo "no insert";
    }
?>