<?php
	$firstname = $_POST['first_name'];
	$lastname = $_POST['last_name'];
	$email = $_POST['emailsignup'];
    $phonenumber = $_POST['phonenumbersignup'];
    $password = $_POST['passwordsignup'];

	$conn = new mysqli('localhost','root','','roombooking');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
        //Mr Umer please create A database named roombooking and create a table sign_up_customer with column names(full_name,email,gender,check_in_date,check_out_date, room_type) in xampp phpmy Admin
		$stmt = $conn->prepare("insert into sign_up_customer(first_name,last_name,email,phone_number,password) values(?, ?, ?, ?, ?)");
        
        $stmt->bind_param("sssss",$firstname,$lastname,$email,$phonenumber,$password);
		$stmt->execute();
		
		$stmt->close();
        $conn->close();
        header('location:index.html');
        exit();
        
	}
?>