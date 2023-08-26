<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $feedback = $_POST["feedback"];

    // Here you can store the data in a database or send it via email

    // Example for storing data in a database (you need to set up a database)
    // $conn = new mysqli("servername", "username", "password", "database");
    // $sql = "INSERT INTO survey_responses (name, age, feedback) VALUES ('$name', $age, '$feedback')";
    // $conn->query($sql);
    
    // Example for sending data via email (you need to set up email functionality)
    // $to = "your@email.com";
    // $subject = "Survey Response";
    // $message = "Name: $name\nAge: $age\nFeedback: $feedback";
    // mail($to, $subject, $message);
    
    // Send a response back to the user
    // echo json_encode(["message" => "Form submitted successfully"]);
}
?>
