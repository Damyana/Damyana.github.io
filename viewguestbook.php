<head>
<meta charset=utf-8" />
<style>
table{
border-radius: 10px;
    border: 6px solid #e6182d;
	}
	</style>
	</head>
<table width="400" border="0" align="center" cellpadding="3" cellspacing="0"> 
<tr> 
<td><strong>Вижте книгата за гости | <a href="contacts.html">Регистрирайте книга за гости</a> </strong></td> 
</tr> 
</table> 
<br> 

<?php 

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="guestbook"; // Database name 
$tbl_name="messages"; // Table name 

// Connect to server and select database. 
mysql_connect("$host", "$username", "$password")or die("cannot connect server "); 
mysql_select_db("$db_name")or die("cannot select DB"); 

$sql="SELECT * FROM $tbl_name"; 
$result=mysql_query($sql); 

while($rows=mysql_fetch_array($result)){ 
?> 
<table width="400" border="3"  border="#bcd2ff" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC"> 
<tr> 
<td><table width="400" border="3" border="#bcd2ff"  cellpadding="3" cellspacing="1" bgcolor="#FFFFFF"> 
<tr> 
<td>ID</td> 
<td>:</td> 
<td><?PHP echo $rows['ID']; ?></td> 
</tr> 
<tr> 
<td width="117">Name</td> 
<td width="14">:</td> 
<td width="357"><?PHP echo $rows['name']; ?></td> 
</tr> 
<tr> 
<td>Email</td> 
<td>:</td> 
<td><?PHP echo $rows['email']; ?></td> 
</tr> 
<tr> 
<td valign="top">Telephone</td> 
<td valign="top">:</td> 
<td><?PHP echo $rows['telephone']; ?></td> 
</tr> 
<tr> 
<td valign="top">Comment</td> 
<td valign="top">:</td> 
<td><?PHP echo $rows['comment']; ?></td> 
</tr> 
<tr> 
<td valign="top">Date/Time </td> 
<td valign="top">:</td> 
<td><?PHP echo $rows['datetime']; ?></td> 
</tr> 
</table></td> 
</tr> 
</table> 
<BR> 
<?PHP 
} 
mysql_close(); //close database 
?>

