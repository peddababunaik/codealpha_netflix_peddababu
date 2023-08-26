<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    
    // Verify CAPTCHA
    $captcha_secret = "YOUR_RECAPTCHA_SECRET_KEY";
    $captcha_response = $_POST["g-recaptcha-response"];
    $captcha_url = "https://www.google.com/recaptcha/api/siteverify";
    $captcha_data = array(
        'secret' => $captcha_secret,
        'response' => $captcha_response
    );
    $options = array(
        'http' => array(
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($captcha_data)
        )
    );
    $context = stream_context_create($options);
    $captcha_result = file_get_contents($captcha_url, false, $context);
    $captcha_json = json_decode($captcha_result);
    
    if ($captcha_json->success) {
        // CAPTCHA passed, process the form data
        // ... (send email, save to database, etc.)
        $response = array('message' => 'Form submitted successfully');
    } else {
        $response = array('message' => 'CAPTCHA verification failed');
    }
    
    header('Content-Type: application/json');
    echo json_encode($response);
}
?>
