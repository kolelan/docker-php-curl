<?php
echo "Version ",phpversion(),PHP_EOL;
// Initialize a cURL session
$ch = curl_init("https://reqres.in/api/users");

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the cURL session and store the response
$response = curl_exec($ch);

// Check if cURL execution was unsuccessful
if ($response === false) {
    // Display cURL error message if an error occurred
    echo 'cURL error: ' . curl_error($ch) . '<br>';
} else {
    // Display success message and the response if cURL executed successfully
    echo 'cURL executed successfully. Response: '  . '<br>' .'<br>' . $response;
}

// Close the cURL session
curl_close($ch);
?>