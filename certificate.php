<?php
if (isset($_GET['fullname'])) {
    $name = urldecode($_GET['fullname']);

    // Generate a unique filename using the current timestamp
    $timestamp = time();
    $filename = $name . "_" . $timestamp . ".png";

    // Set the timezone
    date_default_timezone_set('Asia/Kolkata'); // Adjust as per your location

    // Verify the template file exists
    $templatePath = "certificate_template.png";
    if (!file_exists($templatePath)) {
        die("Error: Certificate template not found.");
    }

    // Verify the font file exists
    $fontPath = __DIR__ . '/arial.ttf'; // Use absolute path for reliability
    if (!file_exists($fontPath)) {
        die("Error: Font file not found.");
    }

    // Set headers for download and prevent caching
    header("Content-Type: image/png");
    header("Content-Disposition: attachment; filename=$filename");
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Expires: 0");
    header("Pragma: no-cache");

    // Load the certificate template
    $image = imagecreatefrompng($templatePath);
    if (!$image) {
        die("Error: Unable to load the certificate template.");
    }

    // Set text color
    $black = imagecolorallocate($image, 0, 0, 0);

    // Define font size and positions
    $fontSize = 30;

    // Add the full name
    imagettftext($image, $fontSize, 0, 850, 700, $black, $fontPath, $name);

    // Add the current date
    $currentDate = date('d-m-Y'); // Get the current date dynamically
    imagettftext($image, 20, 0, 1000, 1167, $black, $fontPath, $currentDate);

    // Output the image for download
    imagepng($image);

    // Free up memory
    imagedestroy($image);
} else {
    echo "Invalid access!";
}
?>
