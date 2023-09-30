<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form data
    $name = sanitizeInput($_POST["name"]);
    $email = sanitizeInput($_POST["email"]);
    $amount = sanitizeInput($_POST["amount"]);

    // Validate form data
    if (empty($name) || empty($email) || empty($amount) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Handle validation errors
        $response = "Please provide valid name, email, and donation amount.";
    } else {
        // Save the donation details to a database or perform other necessary actions
        // For demonstration purposes, we'll simulate saving to a database
        if (saveDonation($name, $email, $amount)) {
            $response = "Thank you, $name, for your donation of $amount USD. We appreciate your support!";
        } else {
            $response = "Sorry, there was an error processing your donation. Please try again later.";
        }
    }

    echo $response;
}

function sanitizeInput($input) {
    // Remove leading/trailing whitespaces and apply appropriate filtering/sanitization
    $input = trim($input);
    $input = filter_var($input, FILTER_SANITIZE_STRING);
    return $input;
}

function saveDonation($name, $email, $amount) {
    // Perform necessary operations to save the donation details to a database
    // Replace this with your actual database logic

    // Simulating successful database save
    return true;
}
?>