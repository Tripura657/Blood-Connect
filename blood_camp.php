<?php 
error_reporting(0);
include('includes/config.php');
include('includes/session_check.php');
include 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Blood Bank Donor Management System | Blood Camp</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/fontawesome-all.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eee;
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
            margin: auto;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        form {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .form-group {
            width: 45%;
            margin-bottom: 15px;
        }
        input, textarea {
            width: 90%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .full-width {
            width: 100%;
        }
        .btn-group {
            width: 100%;
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }
        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            color: white;
            cursor: pointer;
            font-size: 16px;
        }
        .btn-submit { background-color: #28a745; }
        .btn-cancel { background-color: #dc3545; }
        label.required::after {
            content: " *";
            color: red;
        }
    </style>
</head>

<body>
<?php include('includes/header.php'); ?>

<div class="inner-banner-w3ls"></div>

<div class="breadcrumb-agile">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Register Blood Camp</li>
    </ol>
</div>

<?php
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

    $sql = "INSERT INTO campdetails (
        organizationName, organizationType, organizerName, organizerMobile, organizerEmail,
        coOrganizerName, coOrganizerMobile, campName, campAddress, bloodBank,
        campDate, participants, cremarks
    ) VALUES (
        '$organizationName', '$organizationType', '$organizerName', '$organizerMobile', '$organizerEmail',
        '$coOrganizerName', '$coOrganizerMobile', '$campName', '$campAddress', '$bloodBank',
        '$campDate', '$participants', '$cremarks'
    )";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Blood Camp added successfully!');</script>";
    } else {
        echo "<script>alert('Error: " . $conn->error . "');</script>";
    }
}
?>

<div class="header">Blood Camp Registration</div>
<div class="container2">
    <form method="POST">
        <div class="form-group">
            <label class="required">Organization Name</label>
            <input type="text" name="organizationName" required>
        </div>
        <div class="form-group">
            <label class="required">Organization Type</label>
            <input type="text" name="organizationType" required>
        </div>
        <div class="form-group">
            <label class="required">Organizer Name</label>
            <input type="text" name="organizerName" required>
        </div>
        <div class="form-group">
            <label class="required">Organizer Mobile</label>
            <input type="tel" name="organizerMobile" pattern="[0-9]{10}" required>
        </div>
        <div class="form-group">
            <label class="required">Organizer Email</label>
            <input type="email" name="organizerEmail" required>
        </div>
        <div class="form-group">
            <label class="required">Co-Organizer Name</label>
            <input type="text" name="coOrganizerName" required>
        </div>
        <div class="form-group">
            <label class="required">Co-Organizer Mobile</label>
            <input type="tel" name="coOrganizerMobile" pattern="[0-9]{10}" required>
        </div>
        <div class="form-group">
            <label class="required">Camp Name</label>
            <input type="text" name="campName" required>
        </div>
        <div class="form-group full-width">
            <label class="required">Camp Address</label>
            <textarea name="campAddress" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label class="required">Blood Bank</label>
            <input type="text" name="bloodBank" required>
        </div>
        <div class="form-group">
            <label class="required">Camp Date</label>
            <input type="date" name="campDate" required>
        </div>
        <div class="form-group full-width">
            <label class="required">Estimated Participants</label>
            <input type="number" name="participants" min="1" required>
        </div>
        <div class="form-group full-width">
            <label>Remarks</label>
            <textarea name="cremarks" rows="3"></textarea>
        </div>
        <div class="btn-group">
            <button type="submit" class="btn btn-submit">Submit</button>
            <button type="reset" class="btn btn-cancel">Cancel</button>
        </div>
    </form>
</div>

<?php include('includes/footer.php'); ?>
</body>
</html>
