<?php
require 'connection.php';
// Total number of schedules
$Cresult = mysqli_query($connect, "SELECT * FROM schedule" );
$Cnum_rows = mysqli_num_rows($Cresult);
// Total Students
$Aresult = mysqli_query($connect, "SELECT * FROM student" );
$Anum_rows = mysqli_num_rows($Aresult);
// Total Students
$Rresult = mysqli_query($connect, "SELECT * FROM rooms" );
$Rnum_rows = mysqli_num_rows($Rresult);
// Select courses 
$sql="SELECT * FROM courses";
$result=mysqli_query($connect,$sql);
 if(mysqli_num_rows($result)>0) {
  while($row=mysqli_fetch_assoc($result)){
    $courses[]=$row;
    // print($courses);
    // exit;
  }
}
// Select Schedule
$Squery="SELECT schedule.day as day,schedule.from as start,schedule.to as end,unit.code as unit,rooms.name as venue, lecturer.name as lecture FROM schedule JOIN unit ON unit.id=schedule.unit JOIN rooms ON rooms.id=schedule.venue JOIN lecturer on lecturer.id= schedule.lecture LIMIT 10";
$Sresult=mysqli_query($connect,$Squery);
  //die(mysqli_error($connect));
 if(mysqli_num_rows($Sresult)>0) {
  while($row=mysqli_fetch_assoc($Sresult)){
  $schedule[]=$row;
  }
 }
 // Select Units 
$Usql="SELECT * FROM unit";
$Uresult=mysqli_query($connect,$Usql);
 if(mysqli_num_rows($Uresult)>0) {
  while($row=mysqli_fetch_assoc($Uresult)){
    $units[]=$row;
    // print($courses);
    // exit;
  }
}
// Select Rooms
$Rsql="SELECT * FROM rooms";
$Rresult=mysqli_query($connect,$Rsql);
 if(mysqli_num_rows($Rresult)>0) {
  while($row=mysqli_fetch_assoc($Rresult)){
    $rooms[]=$row;
    // print($courses);
    // exit;
  }
}
// Select Lecturers
$Lsql="SELECT * FROM lecturer";
$Lresult=mysqli_query($connect,$Lsql);
 if(mysqli_num_rows($Lresult)>0) {
  while($row=mysqli_fetch_assoc($Lresult)){
    $lecs[]=$row;
    // print($courses);
    // exit;
  }
}
 ?>
