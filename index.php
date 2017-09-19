<?php
	require_once("crud.php");
	$crud = new crud();
	$sql = "SELECT * FROM tbl_product";
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
	<a href="add.html">Add New Data</a><br/><br/>
 
    <table width='80%' border=0>
 
    <tr bgcolor='#CCCCCC'>
        <td>Product Name</td>
        <td>Product Description</td>
        <td>Product Detail</td>
        <td>Category</td>
        <td>Product Price</td>
        <td>Product Color</td>
        <td>Action</td>
    </tr>
    <?php 
    foreach ($result as $key => $res) {
    //while($res = mysqli_fetch_array($result)) { 
    	$pro_id = $res['pro_id'];       
        echo "<tr>";
        echo "<td>".$res['pro_name']."</td>";
        echo "<td>".$res['pro_description']."</td>";
        echo "<td>".$res['pro_detail']."</td>";    
        echo "<td>".$res['cat_id']."</td>";    
        echo "<td>".$res['pro_price']."</td>";    
        echo "<td>".$res['pro_color']."</td>";    
		echo "<td>
	 	<a href='index.php?view=product&action=editproduct&pro_id=$pro_id'><span class='glyphicon glyphicon-pencil'></span> Sửa</a>
		 <a href='index.php?view=product&action=deleteproduct&pro_id=$pro_id' onclick='deleteItem()'><span class='glyphicon glyphicon-trash'></span> Xóa</a>
     	</td>";        
    }
    ?>
    </table>
</body>
</html>