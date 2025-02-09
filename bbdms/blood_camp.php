<?php
error_reporting(0);
include('includes/config.php');
include('includes/session_check.php');
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<title>Blood Bank Donar Management System | Blood Camp</title>
    <style>
        body, html {
            font-family: Arial, sans-serif;
            background-color: hsl(0, 13%, 86%);
            margin: 0;
            padding: 0;
        }
        .header {
            text-align: center;
            background-color: #d9534f;
            color: white;
            padding: 1rem;
            border-radius: 5px;
            margin: 20px auto;
            font-size: 1.8rem;
            width: 80%;
        }
        .container2 {
            width: 90%;
            max-width: 1000px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin: auto;
            background-color: #f9f9f9;
        }
        form {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            background-color: #f9f9f9;
            
        }
        label {
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-group {
            width: 45%;
            margin-bottom: 15px;
        }
        input, select, textarea {
            width: 90%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            font-size: 14px;
        }
        input:focus, select:focus, textarea:focus {
            border-color: #d9534f;
            outline: none;
        }
        .required::after {
            content: " *";
            color: #d9534f;
        }
        .full-width {
            width: 100%;
        }
        .btn-group {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
            width: 100%;
        }
        .btn {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn-submit {
            background-color: #057d4f;
            color: #fff;
        }
        .btn-cancel {
            background-color: #cd2828;
            color: #fff;
        }
        .btn:hover {
            opacity: 0.9;
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
				<li class="breadcrumb-item active" aria-current="page">Register Blood Camp</li>
			</ol>
		</div>
	</div>
<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $organizationName = $_POST['organizationName'];
    $organizationType = $_POST['organizationType'];
    $organizerName = $_POST['organizerName'];
    $organizerMobile = $_POST['organizerMobile'];
    $organizerEmail = $_POST['organizerEmail'];
    $coOrganizerName = $_POST['coOrganizerName'];
    $coOrganizerMobile = $_POST['coOrganizerMobile'];
    $campName = $_POST['campName'];
    $campAddress = $_POST['campAddress'];
    $bloodBank = $_POST['bloodBank'];
    $campDate = $_POST['campDate'];
    $participants = $_POST['participants'];
    $cremarks = $_POST['cremarks'];

    $sql = "INSERT INTO campdetails(organization_name,organization_type,organizer_name,organizer_mobile,organizer_mail,co_organizer_name,co_organizer_mobile,camp_name,camp_address,blood_bank,camp_date,estimated_participants,cremarks) 
            VALUES ('$organizationName','$organizationType','$organizerName','$organizerMobile', '$organizerEmail','$coOrganizerName','$coOrganizerMobile','$campName','$campAddress', '$bloodBank','$campDate','$participants','$cremarks')";

    if ($conn->query($sql) === TRUE) {
        echo "Blood bank added successfully!";
    } else {
        echo "Error: " .$conn->error;
    }
}
?>
    <div class="header">Blood Camp Registration</div>
    <div class="container2">
        <form action="#" method="POST">
            <div class="form-group">
                <label for="organizationName" class="required">Organization Name</label>
                <input type="text" id="organizationName" name="organizationName" required>
            </div>
            <div class="form-group">
                <label for="organizationType" class="required">Organization Type</label>
                <input type="text" id="organizationType" name="organizationType" required>
            </div>
            <div class="form-group">
                <label for="organizerName" class="required">Organizer Name</label>
                <input type="text" id="organizerName" name="organizerName" required>
            </div>
            <div class="form-group">
                <label for="organizerMobile" class="required">Organizer Mobile No</label>
                <input type="tel" id="organizerMobile" name="organizerMobile" pattern="[0-9]{10}" placeholder="1234567890" required>
            </div>
            <div class="form-group">
                <label for="organizerEmail" class="required">Organizer Email ID</label>
                <input type="email" id="organizerEmail" name="organizerEmail" required>
            </div>
            <div class="form-group">
                <label for="coOrganizerName" class="required">Co-Organizer Name</label>
                <input type="text" id="coOrganizerName" name="coOrganizerName" required>
            </div>
            <div class="form-group">
                <label for="coOrganizerMobile" class="required">Co-Organizer Mobile No</label>
                <input type="tel" id="coOrganizerMobile" name="coOrganizerMobile" pattern="[0-9]{10}" placeholder="1234567890" required>
            </div>
            <div class="form-group">
                <label for="campName" class="required">Camp Name</label>
                <input type="text" id="campName" name="campName" required>
            </div>
            <div class="form-group full-width">
                <label for="campAddress" class="required">Camp Address</label>
                <textarea id="campAddress" name="campAddress" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="bloodBank" class="required">Blood Bank</label>
                <input type="text" id="bloodBank" name="bloodBank" required>
            </div>
            <div class="form-group">
                <label for="campDate" class="required">Camp Proposed Date</label>
                <input type="date" id="campDate" name="campDate" required>
            </div>
            <div class="form-group">
                <label for="startTime" class="required">Start Time</label>
                <input type="time" id="startTime" name="startTime" required>
            </div>
            <div class="form-group">
                <label for="endTime" class="required">End Time</label>
                <input type="time" id="endTime" name="endTime" required>
            </div>
            <div class="form-group full-width">
                <label for="participants" class="required">Estimated Participants</label>
                <input type="number" id="participants" name="participants" min="1" required>
            </div>
            <div class="form-group full-width">
                <label for="cremarks">Remarks</label>
                <textarea id="cremarks" name="cremarks" rows="3"></textarea>
            </div>
            <div class="btn-group">
                <button type="submit" class="btn btn-submit">Submit</button>
                <button type="reset" class="btn btn-cancel">Cancel</button>
            </div>
        </form>
    </div>
	<!-- //page details -->
     
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