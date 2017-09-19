<?php
	require_once("crud.php");
	$crud = new crud();
	$sql = "SELECT * FROM tbl_users";
	$result = $crud->getData($sql);
	//echo '<pre>'; print_r($result); exit;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PHP OOP</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<a href="add.php">Add New Data</a><br/><br/>
 
    <table width='80%' border=0>
 
    <tr bgcolor='#CCCCCC'>
        <td>Email</td>
        <td>Password</td>
        <td>Phone</td>
        <td>Avatar</td>
        <td>Status</td>
        <td>Action</td>
    </tr>
    <?php 
    foreach ($result as $key => $res) {
    //while($res = mysqli_fetch_array($result)) { 
    	$u_id = $res['u_id'];       
        echo "<tr>";
        echo "<td>".$res['u_email']."</td>";
        echo "<td>".$res['u_password']."</td>";
        echo "<td>".$res['u_phone']."</td>";    
        echo "<td>".$res['u_avatar']."</td>";    
        echo "<td>".$res['u_status']."</td>";    
		echo "<td>
	 	<a href='index.php?action=edit&u_id=$u_id'><span class='glyphicon glyphicon-pencil'></span> Sửa</a>
		 <a href='index.php?view=user&action=delete&u_id=$u_id' onclick='deleteItem()'><span class='glyphicon glyphicon-trash'></span> Xóa</a>
     	</td>";        
    }
    ?>
    </table>
</body>
</html>