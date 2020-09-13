<?php
$con = mysqli_connect("localhost", "root", "", "book") or die($mysqli_error($con));
 $select_department = $_POST['select_department'];
 $select_doctor = $_POST['select_doctor'];
 $ntpc_nonntpc = $_POST['ntpc_nonntpc'];
 $employee_no = $_POST['employee_no'];
 $name = $_POST['name'];
 $dependent = $_POST['dependent'];
 $gender = $_POST['gender'];
 $phone_no = $_POST['phone_no'];
 $user_registration_query = "INSERT INTO appointment (select_department,select_doctor,ntpc_nonntpc,employee_no,name,dependent,gender,phone_no) VALUES ('$select_department','$select_doctor','$ntpc_nonntpc','$employee_no','$name','$dependent','$gender','$phone_no')";
 if (mysqli_query($con,$user_registration_query))
 {
	echo "Appointment generated"; 
 }
 else
 {
	echo "Error: ".$user_registration_query."<br> ". mysqli_error($con);
	
 }
 mysqli_close($con);
 ?>