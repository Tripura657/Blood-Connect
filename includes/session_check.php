
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['bbdmsdid'])) {
    // Get the current page URL
    $currentPage = $_SERVER['REQUEST_URI'];
    
    // Redirect to login.php with the current page as a parameter
    header("Location: login.php?redirect=" . urlencode($currentPage));
    exit();
}
?>
