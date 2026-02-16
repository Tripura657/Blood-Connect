<?php
error_reporting(0);
include('includes/config.php');
include('includes/session_check.php');
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Blood Bank Donor Management System | Blood Camp List</title>
    <style>
        .ta {
            margin: 20px auto;
            max-width: 90%;
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
            font-size: 16px;
        }
        table th {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
            font-size: 20px;
        }
        table td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
            font-size: 18px;
        }
        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        table tr:nth-child(odd) {
            background-color: #ffffff;
        }
        table tr:hover {
            background-color: #f1f1f1;
            cursor: pointer;
        }
        @media (max-width: 768px) {
            table th, table td {
                font-size: 14px;
                padding: 8px;
            }
        }
    </style>

    <!-- Required CSS Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/fontawesome-all.css">

    <!-- Google Fonts -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
</head>

<body>
<?php include('includes/header.php'); ?>

<!-- Banner -->
<div class="inner-banner-w3ls"><div class="container"></div></div>

<!-- Breadcrumb -->
<div class="breadcrumb-agile">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Blood Camp List</li>
    </ol>
</div>

<!-- Main Table Display -->
<?php
include 'db_connect.php';

$sql = "SELECT * FROM campdetails";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    echo "<div class='ta'>
        <table>
            <tr>
                <th>Organization Name</th>
                <th>Organization Type</th>
                <th>Organizer Name</th>
                <th>Organizer Mobile</th>
                <th>Organizer Email</th>
                <th>Co-Organizer Name</th>
                <th>Co-Organizer Mobile</th>
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
    echo "</table></div>";
} else {
    echo "<p style='text-align:center; font-size:20px; margin-top:30px;'>No blood camps found.</p>";
}
?>

<?php include('includes/footer.php'); ?>

<!-- JS Files -->
<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/responsiveslides.min.js"></script>
<script>
    $(function () {
        $("#slider4").responsiveSlides({
            auto: true, pager: true, nav: true, speed: 1000,
            namespace: "callbacks"
        });
    });
</script>
<script src="js/fixed-nav.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<script src="js/move-top.js"></script>
<script src="js/easing.js"></script>
<script src="js/medic.js"></script>
<script src="js/bootstrap.js"></script>

</body>
</html>
