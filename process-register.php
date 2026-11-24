<?php
$page_title = 'Membership application received';
include 'includes/header.php';

function clean_input($value) {
    return htmlspecialchars(trim((string)$value), ENT_QUOTES, 'UTF-8');
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo '<main><h2>Invalid request</h2><p>Please submit the membership form first.</p><p><a href="register.php">Return to the application form</a></p></main>';
} else {
    $first_name = clean_input($_POST['first_name'] ?? '');
    $last_name = clean_input($_POST['last_name'] ?? '');
    $national_id = clean_input($_POST['national_id'] ?? '');
    $phone = clean_input($_POST['phone'] ?? '');
    $route = clean_input($_POST['route'] ?? '');
    $date_joined = clean_input($_POST['date_joined'] ?? '');
    $rules = isset($_POST['rules']);

    $valid_routes = ['Kiserian', 'Ngong', 'Rongai'];
    $valid_phone = preg_match('/^07[0-9]{8}$/', $phone);

    echo '<main><h2>Membership application</h2>';
    if ($first_name === '' || $last_name === '' || $national_id === '' || !$valid_phone || !in_array($route, $valid_routes, true) || $date_joined === '' || !$rules) {
        echo '<p class="error">Some information is missing or invalid. Please go back and check the form.</p>';
        echo '<p><a href="register.php">Return to the application form</a></p>';
    } else {
        echo '<p class="success">Thank you. Your application information was received by this PHP page.</p>';
        echo '<h3>Application details</h3><ul>';
        echo '<li><strong>Name:</strong> ' . $first_name . ' ' . $last_name . '</li>';
        echo '<li><strong>National ID:</strong> ' . $national_id . '</li>';
        echo '<li><strong>Phone:</strong> ' . $phone . '</li>';
        echo '<li><strong>Route:</strong> ' . $route . '</li>';
        echo '<li><strong>Date of joining:</strong> ' . $date_joined . '</li>';
        echo '</ul><p><a href="index.php">Return to home</a></p>';
        echo '<p class="small-note">This classroom demonstration displays the submitted details; it does not save them to a database.</p>';
    }
    echo '</main>';
}
include 'includes/footer.php';
?>
