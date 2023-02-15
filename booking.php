<?php
	$fullName = $_POST['full-name'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
    $checkin = $_POST['check-in'];
    $checkout = $_POST['check-out'];
    $roomtype = $_POST['room-type'];
	$booknow = $_POST['book-now'];
	$phonenumber = $_POST['phone-number'];
	

	
	$conn = new mysqli('localhost','root','','roombooking');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
        //Mr Umer please create A database named roombooking and create a table customer with column names(full_name,email,gender,check_in_date,check_out_date, room_type) in xampp phpmy Admin
		$stmt = $conn->prepare("insert into customer(full_name,email,phone_number,gender,check_in_date,check_out_date, room_type) values(?, ?, ?, ?, ?,?,?)");
        
        $stmt->bind_param("sssssss",$fullName,$email,$phonenumber,$gender,$checkin,$checkout,$roomtype);
		$stmt->execute();
		$stmt->close();
        $conn->close();
        header('location:succes.html');
        exit();
	}
?>