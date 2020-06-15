<head>
<meta charset=utf-8" />
<style>
body{
background-color: #e6182d;
font-size: 26px;
}
</style>
</head>
<?php 
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="guestbook"; // Database name 
$tbl_name="messages"; // Table name 

// Connect to server and select database. 
mysql_connect("$host", "$username", "$password")or die("cannot connect server "); 
mysql_select_db("$db_name")or die("cannot select DB"); 
mysql_query("SET NAMES UTF8");

$datetime=date("y-m-d h:i:s");
$name=$_POST['name']; 
$email=$_POST['email']; 
$telephone=$_POST['telephone']; 
$comment=$_POST['comment']; 

$sql="INSERT INTO $tbl_name(name, email, telephone, comment, datetime)VALUES('$name', '$email', '$telephone', '$comment', '$datetime')"; 
$result=mysql_query($sql); 

//check if query successful 
if($result){ 
echo "Успешно"; 
echo "<BR>"; 
echo "<a href='viewguestbook.php'>Вижте книгата за гости</a>"; // link to view guestbook page 
} 

else { 
echo "ERROR"; 
} 

mysql_close(); 
?>
