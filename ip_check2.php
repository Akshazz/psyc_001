<?php

// File to store IP and last submission timestamp
$file = 'submission_log.txt';

// Get the user's IP address
$user_ip = $_SERVER['REMOTE_ADDR'];

// Check if the log file exists
if (file_exists($file)) {
    // Read the file content
    $log = file_get_contents($file);
    $log_data = json_decode($log, true);
} else {
    $log_data = [];
}

// Prepare response
$response = ['success' => true, 'message' => ''];

// Define the restriction time (42 hours in seconds)
$restriction_time = 1 * 60; // 42 hours * 60 minutes/hour * 60 seconds/minute

// Check if the IP address is in the log and if the time since the last submission is less than 42 hours
if (isset($log_data[$user_ip]) && (time() - $log_data[$user_ip] < $restriction_time)) {
    if (isset($_POST['submitted'])) {
        header("Location: qa.php?msg=You must wait 60 seconds before submitting again!");
        // Restriction applied only if form was submitted
        $response['success'] = false;
        $response['message'] = 'You must wait 60 seconds before submitting again.';
        echo json_encode($response);
        exit;
    }
}

// Update the log with the current timestamp if the form was submitted
if (isset($_POST['submitted'])) {
    $log_data[$user_ip] = time();
    file_put_contents($file, json_encode($log_data));
}

// Process form data
$text_area1 = $_POST['text_area1'] ?? '';
$text_area2 = $_POST['text_area2'] ?? '';
$text_area3 = $_POST['text_area3'] ?? '';


?>
