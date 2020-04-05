<?php 
if (isset($_POST['companyname']) || isset($_POST['postalcode']) || isset($_POST['category']) || isset($_POST['suppliername']) || isset($_POST['email']) || isset($_POST['password']) || isset($_POST['phonenumber'])){
       $companyname =$_POST['companyname'];
       $postalcode =$_POST['postalcode'];
       $category =$_POST['category'];
       $suppliername =$_POST['suppliername'];
       $email =$_POST['email'];
       $password =$_POST['password']; 
       $phonenumber =$_POST['phonenumber'];
}


if(!empty($companyname) || !empty($postalcode) || !empty($category) || !empty($suppliername) || !empty($email) || !empty($password) || !empty($phonenumber)){
       
       $host = "localhost";
       $dbusername = "root";
       $dbpassword = "";
       $dbname = "wedding";
       //create conection
       
       $conn =new mysqli($host, $dbusername, $dbpassword, $dbname);
       
       if (mysqli_connect_error()){
              die('Connect Error('.mysqli_connect_errno().')'. mysqli_connect_error());
       }
       else{
              $SELECT = "SELECT email From supplier Where email = ? Limit 1";
              $INSERT = "INSERT Into supplier (companyname,postalcode,category,suppliername,email,password,phonenumber) values(?, ?, ?, ?, ?,?,?)";
              //Prepare statement
              $stmt = $conn->prepare($SELECT);
              $stmt->bind_param("s", $email);
              $stmt->execute();
              $stmt->bind_result($email);
              $stmt->store_result();
              $rnum = $stmt->num_rows;
              
              if($rnum ==0){
                     $stmt->close();
                     $stmt = $conn->prepare($INSERT);
                     $stmt->bind_param("sissssi", $companyname, $postalcode, $category, $suppliername, $email, $password,$phonenumber);
                     $stmt->execute();
                     header('Location: home1.php');
              }else{
                     echo "Someone already register using this email";
                     
              }
              $stmt->close();
              $conn->close();
       }
       
}
else{
       echo"All field are required";
       die();
}
?>