<?php
mysql_connect("localhost","root","")
mysql_select_db("rollno.");

if(isset($_POST['uname']))
{   if(!empty($_REQUEST['uname']))
    {
	   $roll_no.=$_REQUEST["uname"];
$query=mysql_query("select * from students where roll_no.='$roll_no.'");
$rowcount=mysql_num_rows($query);
if($rowcount==true)
{
header(password.html)
}
else
{
	echo "incorrect username"
}
}



}

?>