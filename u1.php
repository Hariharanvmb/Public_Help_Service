<?php
$con = mysqli_connect("localhost","root","","egovernance");
$t1 = $_POST['cname'];
$t2 = $_POST['mobno'];
$t3 = $_POST['dropdown'];
$t4 = $_POST['prob'];
$t5 = $_POST['slct1'];
$t6 = $_POST['slct2'];
$t7 = $_POST['tv'];
$t8 = $_POST['loc'];
//inserting
$sql3 = "insert into basic (Name,Mobile_Number,Grievance,Problem_Description,State,District,Town,Locality) values ('$t1','$t2','$t3','$t4','$t5','$t6','$t7','$t8')";
$result = mysqli_query($con,$sql3);
if($result){
echo "Complaint Sent Successfully";
echo "<br/>";
echo "<a href='egov.html'>Back to home page </a>";
}
header("refresh:10;url=egov.html");
?>