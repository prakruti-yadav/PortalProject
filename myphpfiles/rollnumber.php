<?php
$conn=mysqli_connect("localhost","root","login");
?>
<!doctype html>
<html>
<head><style>
body{
background-color: green;
}
div{
height:1000;
width:1000;
margin-top:1%;
margin-left:15%;
padding:50px;
align: center;
}
h1{
align: center;
color: white;
font-size: 64px;
margin-left=15%;
}
p{
margin-top=5%;
margin-left=85%;
font-size=32px;
color: white;
}
</style></head>
<body>
<?php
if(isset($_['next'])){
extract($_POST);
$query="select * from login where Roll No.='$uname';
$run_query="mysqli_query($conn,$query);
if($run_query){
if(mysqli_num_rows($run_query)>0){
$_SESSION['Roll no.']=$uname;
header("password.htm");
}
else
{
echo "Incorrect Username"
}
<div><h1>Welcome, Student of AKGEC</h1></div>
<form action="action_page.php">
  <div class="imgcontainer">
  
  </div>

  <div><p class="container">
    <label for="uname"><b>Rollno./Portal-ID</b></label>
    <input type="text" placeholder="Enter Roll no." name="uname" required>

   

    <button type="submit">next</button></a>
   </p></div>
</form>