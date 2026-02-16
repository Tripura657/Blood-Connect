<?php
error_reporting(0);
include('includes/config.php');
include('includes/session_check.php');
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Blood Bank Donar Management System | Blood Donor List </title>
	<style>
/* General table container styling */
.ta {
    margin: 20px auto;
    max-width: 90%;
    overflow-x: auto; /* Ensures table is scrollable on smaller screens */
}

/* Table styling */
table {
    width: 100%;
    border-collapse: collapse; /* Removes double borders */
    font-family: Arial, sans-serif;
    font-size: 16px;
}

/* Table header styling */
table th {
    background-color: #4CAF50; /* Light green background */
    color: white; /* White text */
    padding: 10px;
    text-align: center;
    border: 1px solid #ddd; /* Subtle border */
	font-size: 22px;
}

/* Table row styling */
table td {
    padding: 10px;
    text-align: center;
    border: 1px solid #ddd;
	font-size: 20px;
}

/* Alternate row colors */
table tr:nth-child(even) {
    background-color: #f9f9f9; /* Light gray for alternate rows */
}

table tr:nth-child(odd) {
    background-color: #ffffff;
}

/* Hover effect */
table tr:hover {
    background-color: #f1f1f1; /* Highlight row on hover */
    cursor: pointer; /* Adds a pointer to indicate interactivity */
}

/* Responsive adjustments */
@media (max-width: 768px) {
    table th, table td {
        font-size: 14px; /* Adjust font size for smaller screens */
        padding: 8px;
    }
}
form{
	text-align: center;
}
form button{
    display: block;
    padding: 10px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
    /* margin-top: 20px; */
}

form button:hover {
    background-color: #0056b3;
}
</style>

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
				<li class="breadcrumb-item active" aria-current="page">Blood Camp List</li>
			</ol>
		</div>
	</div>
	<!-- //page details -->
<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['name_camp'])) {
    $camp_name = $_GET['name_camp'];

$sql = "SELECT * FROM campdetails WHERE campDate = '$camp_name'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<div class='ta'>
		<table border='1'>
                <tr>
                    <th>Organization Name</th>
				<th>Organization Type</th>
                <th>Organizer Name</th>
                <th>Organizer Mobile No</th>
				<th>Email</th>
                <th>Co-Organizer Name</th>
                <th>Co-Organizer Mobile No</th>
                <th>Camp Name</th>
                <th>Camp Address</th>
				<th>Blood Bank</th>
				<th>Date</th>
                <th>Estimated Participants</th>
				<th>Remarks</th>
                </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['organizationName']}</td>
				<td>{$row['organizationType']}</td>
				<td>{$row['organizerName']}</td>
				<td>{$row['organizerMobile']}</td>
				<td>{$row['organizerEmail']}</td>
				<td>{$row['coOrganizerName']}</td>
				<td>{$row['coOrganizerMobile']}</td>
				<td>{$row['campName']}</td>
				<td>{$row['campAddress']}</td>
                <td>{$row['bloodBank']}</td>
				<td>{$row['campDate']}</td>
                <td>{$row['participants']}</td>
				<td>{$row['cremarks']}</td>
                  </tr>";
        }
        echo "</table>";
		echo "</div>";
    } else {
        echo "<b style='color:red;font-size:25px;margin:10px'><center>No blood camps found with the selected date.</center></b>";
    }
}
?>

<form method="GET" action="">
    <label for="name_camp">Search by Blood Camp Proposed Date:</label>
    <input type="date" id="name_camp" name="name_camp" required>
    <button type="submit"><center>Search</center></button>
</form>
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