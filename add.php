<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ADD PHP</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <?php
    require_once("crud.php");
    //include_once("classes/Validation.php");
     
    $crud = new crud();
    //$validation = new Validation();
     
    if(isset($_POST['add']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['phone']) && isset($_POST['avatar'])) {    
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $phone = $_POST['phone'];
        $avatar = $_POST['avatar'];
        $status = isset($_POST['status']);
            
        //$msg = $validation->check_empty($_POST, array('name', 'age', 'email'));
       // $check_age = $validation->is_age_valid($_POST['age']);
       // $check_email = $validation->is_email_valid($_POST['email']);
        
        // checking empty fields
        //if($msg != null) {
          //  echo $msg;        
            //link to the previous page
        //    echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
       // } elseif (!$check_age) {
         //   echo 'Please provide proper age.';
      //  } elseif (!$check_email) {
        //    echo 'Please provide proper email.';
       // }    
     //   else { 
            // if all the fields are filled (not empty) 
                
            //insert data to database    
            $result = $crud->excute("INSERT INTO tbl_users(u_email,u_password,u_phone,u_avatar,u_status) VALUES('$email','$pass','$phone','$avatar','$status')");
            
            header("Location: index.php");
            //display success message
            //echo "<font color='green'>Data added successfully.";
            //echo "<br/><a href='index.php'>View Result</a>";
    }
    ?>

     <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr> 
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr> 
                <td>Phone</td>
                <td><input type="text" name="phone"></td>
            </tr>
            <tr> 
                <td>Avatar</td>
                <td><input type="text" name="avatar"></td>
            </tr>
            <tr> 
                <td>Status</td>
                <td><input type="text" name="status"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="add" value="Add"></td>
            </tr>
        </table>
    </form>
</body>
</html>