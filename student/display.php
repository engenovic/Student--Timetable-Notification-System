<?php
session_start();
$student=$_SESSION['user'];
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
$Squery="SELECT schedule.day as day,schedule.from as start,schedule.to as end,unit.code as unit,rooms.name as venue, lecturer.name as lecture FROM schedule JOIN unit ON unit.id=schedule.unit JOIN rooms ON rooms.id=schedule.venue JOIN lecturer on lecturer.id= schedule.lecture WHERE unit= (SELECT id FROM unit WHERE course= (SELECT course FROM student WHERE email='$student' )) LIMIT 10";
$Sresult=mysqli_query($connect,$Squery);
  //die(mysqli_error($connect));
 if(mysqli_num_rows($Sresult)>0) {
  while($row=mysqli_fetch_assoc($Sresult)){
  $schedule[]=$row;
  }
 }
 // Select Student Info
 $PSql= "SELECT student.name as name,student.phone as phone,student.year as year,student.email as email  , courses.name as course FROM student JOIN courses ON courses.id=student.course WHERE email= '$student'";
$PSql=mysqli_query($connect,$PSql);
$PSql=mysqli_fetch_assoc($PSql);
   $name= $PSql['name'];
   $phone= $PSql['phone'];
   $email= $PSql['email'];
   $year= $PSql['year'];
   $course= $PSql['course'];
 ?>
