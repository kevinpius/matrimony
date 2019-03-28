<?php
if(!empty($_POST["send"])) {
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$subject = $_POST["subject"];
	$content = $_POST["content"];

	$conn = mysqli_connect("localhost", "root", "", "matrimony") or die("Connection Error: " . mysqli_error($conn));
	mysqli_query($conn, "INSERT INTO contact (user_name, user_email,subject,content) VALUES ('" . $name. "', '" . $email. "','" . $subject. "','" . $content. "')");
	$insert_id = mysqli_insert_id($conn);
	//if(!empty($insert_id)) {
	   $message = "Thank you for your feedback, we will reach you shortly.";
	   $type = "success";
	//}
}
require_once "contact-view.php";
?>
