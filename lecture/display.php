<?php
session_start();
$lec=$_SESSION['user'];
require '../hod/connection.php';
// Select courses to display
$sql="SELECT * FROM courses";
$result=mysqli_query($connect,$sql);
 if(mysqli_num_rows($result)>0) {
  while($row=mysqli_fetch_assoc($result)){
    $courses[]=$row;
    // print($courses);
    // exit;
  }
}
// Show Schedule specific to student
$Squery="SELECT schedule.day as day,schedule.from as start,schedule.to as end,unit.code as unit,rooms.name as venue FROM schedule JOIN unit ON unit.id=schedule.unit JOIN rooms ON rooms.id=schedule.venue WHERE lecture= (SELECT id FROM lecturer WHERE email='$lec') LIMIT 10";
$Sresult=mysqli_query($connect,$Squery);
  //die(mysqli_error($connect));
 if(mysqli_num_rows($Sresult)>0) {
  while($row=mysqli_fetch_assoc($Sresult)){
  $schedule[]=$row;
  }
 }
 // Select Lecturer Info
 $PSql= "SELECT lecturer.name as name,lecturer.phone as phone,lecturer.title as title, lecturer.email as email  , courses.name as area FROM lecturer JOIN courses ON courses.id=lecturer.specialty WHERE email= '$lec'";
$PSql=mysqli_query($connect,$PSql);
$PSql=mysqli_fetch_assoc($PSql);
   $name= $PSql['name'];
   $phone= $PSql['phone'];
   $email= $PSql['email'];
   $title= $PSql['title'];
   $area= $PSql['area'];
 ?>
