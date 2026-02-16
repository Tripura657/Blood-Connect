<?php
error_reporting(0);
include('includes/config.php');
include('includes/session_check.php');
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Blood Bank Donor Management System | Register Blood Bank</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Bootstrap and Styles -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<link rel="stylesheet" href="css/fontawesome-all.css">

	<!-- Google Fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans|Roboto+Condensed" rel="stylesheet">

	<style>
		form {
			max-width: 600px;
			margin: 30px auto;
			padding: 20px;
			border: 1px solid #ddd;
			border-radius: 8px;
			background-color: #f9f9f9;
		}
		form label {
			font-weight: bold;
		}
		form input, form textarea {
			width: 100%;
			margin-bottom: 15px;
			padding: 8px;
			border-radius: 4px;
			border: 1px solid #ccc;
		}
		form button {
			width: 100%;
			padding: 10px;
			color: white;
			font-weight: bold;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
		.btn-submit { background-color: #007bff; }
		.btn-reset { background-color: red; margin-top: 10px; }
	</style>
</head>

<body>

<?php include('includes/header.php'); ?>

<div class="inner-banner-w3ls"></div>

<div class="breadcrumb-agile">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="index.php">Home</a></li>
		<li class="breadcrumb-item active">Register Blood Bank</li>
	</ol>
</div>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name = $_POST['name'];
	$headname = $_POST['headname'];
	$state = $_POST['state'];
	$district = $_POST['district'];
	$city = $_POST['city'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$remarks = $_POST['remarks'];
	$bloodtypes = isset($_POST['bloodtypes']) ? implode(',', $_POST['bloodtypes']) : '';

	$sql = "INSERT INTO blood_banks (name, headname, state, district, city, contact, email, remarks, bloodtypes)
			VALUES (:name, :headname, :state, :district, :city, :contact, :email, :remarks, :bloodtypes)";
	$query = $dbh->prepare($sql);
	$query->bindParam(':name', $name);
	$query->bindParam(':headname', $headname);
	$query->bindParam(':state', $state);
	$query->bindParam(':district', $district);
	$query->bindParam(':city', $city);
	$query->bindParam(':contact', $contact);
	$query->bindParam(':email', $email);
	$query->bindParam(':remarks', $remarks);
	$query->bindParam(':bloodtypes', $bloodtypes);

	if ($query->execute()) {
		echo "<script>alert('Blood bank added successfully!');</script>";
	} else {
		echo "<script>alert('Failed to add blood bank.');</script>";
	}
}
?>

<form method="POST" action="">
	<label>Blood Bank Name:</label>
	<input type="text" name="name" required>

	<label>Blood Bank Head Name:</label>
	<input type="text" name="headname" required>

	<label>State:</label>
	<input type="text" name="state" required>

	<label>District:</label>
	<input type="text" name="district" required>

	<label>City:</label>
	<input type="text" name="city" required>

	<label>Contact Number:</label>
	<input type="text" name="contact" required>

	<label>Blood Bank Email:</label>
	<input type="email" name="email" required>

	<label>Remarks:</label>
	<input type="text" name="remarks">

	<label>Blood Types Available:</label><br>
	<input type="checkbox" name="bloodtypes[]" value="A+"> A+
	<input type="checkbox" name="bloodtypes[]" value="A-"> A-
	<input type="checkbox" name="bloodtypes[]" value="B+"> B+
	<input type="checkbox" name="bloodtypes[]" value="B-"> B-
	<input type="checkbox" name="bloodtypes[]" value="O+"> O+
	<input type="checkbox" name="bloodtypes[]" value="O-"> O-
	<input type="checkbox" name="bloodtypes[]" value="AB+"> AB+
	<input type="checkbox" name="bloodtypes[]" value="AB-"> AB-<br>

	<button type="submit" class="btn-submit">Add Blood Bank</button>
	<button type="reset" class="btn-reset">Clear</button>
</form>

<?php include('includes/footer.php'); ?>

<!-- JS Scripts -->
<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/fixed-nav.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<script src="js/move-top.js"></script>
<script src="js/easing.js"></script>
<script src="js/medic.js"></script>

</body>
</html>
