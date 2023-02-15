<?php
$phonenumber=$_POST["phonenumberlogin"];
$password=$_POST["passwordlogin"];

$conn = new mysqli('localhost','root','','roombooking');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
        //Mr Umer please create A database named roombooking and create a table sign_up_customer with column names(full_name,email,gender,check_in_date,check_out_date, room_type) in xampp phpmy Admin
        $stmt = $conn->prepare("select * from sign_up_customer where phone_number=?");
        $stmt->bind_param("s",$phonenumber);
        $stmt->execute();
        $stmt_retrive=$stmt->get_result();
        if($stmt_retrive->num_rows>0){
            $data=$stmt_retrive->fetch_assoc();
            if($data['password']==$password){
                header('location:home.html');
                exit();
            }else{
                header('location:index.html');
                exit();
            }
        }else{
          header('location:index.html');
          exit();
        }
    }




?>