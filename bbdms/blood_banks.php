<?php
error_reporting(0);
include('includes/config.php');
include('includes/session_check.php');
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<title>Blood Bank Donar Management System | Blood Donor List </title>
	<!-- Meta tag Keywords -->
	
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //Web-Fonts -->
	<style>
        form {
    max-width: 500px;
    margin: 20px auto;
    font-family: Arial, sans-serif;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
    background-color: #f9f9f9;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

form label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #333;
}

form input[type="text"],
form input[type="email"] {
    width: calc(100% - 20px);
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
    box-sizing: border-box;
}

form input[type="text"]:focus,
form input[type="email"]:focus {
    border-color: #007bff;
    outline: none;
    box-shadow: 0 0 3px #007bff;
}

form input[type="text"][style="float: left;"],
form input[type="text"][style="float: right;"] {
    width: 48%; /* Adjust width for floating inputs */
    margin-right: 2%;
    margin-bottom: 15px;
}

form input[type="text"][style="float: right;"] {
    margin-right: 0; /* Ensure no extra margin for right-aligned input */
}

form button{
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
    margin-top: 20px;
}

form button:hover {
    background-color: #0056b3;
}
form select{
    margin: 10px;
}

    </style>

</head>

<body>
	<?php include('includes/header.php');?>

	<!-- banner 2 -->
	<div class="inner-banner-w3ls">
		<div class="container">

		</div>
		<!-- //banner 2 -->
	</div>
    <!-- page details -->
	<div class="breadcrumb-agile">
		<div aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="index.php">Home</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">Register Blood Bank</li>
			</ol>
		</div>
	</div>
	<!-- //page details -->
     
<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $head_name = $_POST['head_name'];
    $state = $_POST['state'];
    $district = $_POST['district'];
    $city = $_POST['city'];
    $contact_number = $_POST['contact_number'];
    $email = $_POST['email'];
    $remarks = $_POST['remarks'];
    $blood_types_available = implode(',', $_POST['blood_types']); // Checkbox for blood types

    $sql = "INSERT INTO blood_banks (name, head_name,state,district,city, contact_number,email,remarks, blood_types_available) 
            VALUES ('$name','$head_name','$state', '$district','$city', '$contact_number','$email','$remarks', '$blood_types_available')";

    if ($conn->query($sql) === TRUE) {
        echo "Blood bank added successfully!";
    } else {
        echo "Error: " .$conn->error;
    }
}
?>

<div height="50%" width="70%"  style="padding: 20px;padding-left: 40px;border: 2px solid black;" >
        <form method="POST" action="">
            <label for="name">Blood Bank Name:</label><br>
            <input type="text" name="name" required><br>
            <label for="head_name">Blood Bank Head Name:</label>
            <input type="text" name="head_name" required><br>
            <label for="state">State:</label>
            <input type="text" name="state" required><br>
            <label for="district">District:</label>
            <input type="text" name="district" required><br>
            <label for="city">City:</label>
            <input type="text" name="city" required><br>
            <label for="contact_number">Contact Number:</label>
            <input type="number" name="contact_number" required><br>
            <label for="email">Blood Bank Email:</label>
            <input type="email" name="email" required><br>
            <label for="remarks">Remarks:</label>
            <input type="text" name="remarks" required><br>
            <label for="blood_types">Blood Types Available:</label><br>
            <input type="checkbox" name="blood_types[]" value="A+">A+
            <input type="checkbox" name="blood_types[]" value="A-">A-
            <input type="checkbox" name="blood_types[]" value="B+">B+
            <input type="checkbox" name="blood_types[]" value="B-">B-
            <input type="checkbox" name="blood_types[]" value="O+">O+
            <input type="checkbox" name="blood_types[]" value="O-">O-
            <input type="checkbox" name="blood_types[]" value="AB+">AB+
            <input type="checkbox" name="blood_types[]" value="AB-">AB-<br>
            <button type="submit">Add Blood Bank</button>
            <button type="reset" style="background-color: red">Clear</button>
        </form>
    </div>
<?php include('includes/footer.php');?>

	<!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->

	<!-- banner slider -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	<!-- //banner slider -->

	<!-- fixed navigation -->
	<script src="js/fixed-nav.js"></script>
	<!-- //fixed navigation -->

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- move-top -->
	<script src="js/move-top.js"></script>
	<!-- easing -->
	<script src="js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="js/medic.js"></script>

	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- //Js files -->

</body>

</html>