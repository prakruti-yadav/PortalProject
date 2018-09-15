<?php
$conn=mysqli_connect("localhost","root","login");
?>
<?php
if(isset($_['Next'])){
extract($_POST);
$query="select * from login where Roll No.='$uname'";
$run_query="mysqli_query($conn,$query)";
if($run_query){
if(mysqli_num_rows($run_query)>0){
$_SESSION['Roll no.']=$uname;
header("password.htm");
}
else
{
echo "Incorrect Username";
//}
    ?>