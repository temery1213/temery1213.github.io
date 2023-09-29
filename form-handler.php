<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $phone = $_POST["phone"];
    $make = $_POST["make"];
    $model = $_POST["model"];
    $year = $_POST["year"];
    $city = $_POST["city"];
    $availability = $_POST["availability"];
    $description = $_POST["description"];

    // Create a message body
    $message = "First Name: $fname\n";
    $message .= "Last Name: $lname\n";
    $message .= "Phone Number: $phone\n";
    $message .= "Make of Vehicle: $make\n";
    $message .= "Model: $model\n";
    $message .= "Year: $year\n";
    $message .= "City: $city\n";
    $message .= "Availability: $availability\n";
    $message .= "Brief Description of Issue: $description\n";

    // Send the email
    $to = "merkabahwaltz@gmail.com"; // Replace with your email address
    $subject = "Vehicle Report";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for your submission!";
    } else {
        echo "Error sending the email.";
    }

    // Save the data to a file (optional)
    $data = "$fname, $lname, $phone, $make, $model, $year, $city, $availability, $description\n";
    file_put_contents("form_data.csv", $data, FILE_APPEND); // Append data to a CSV file
}
?>
